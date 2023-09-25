<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\MessageGoogle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Contact\ContactRepository;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact.index');
    }


    public function store(Request $request)
    {
        // dd($request->post());
        $validation = Validator::make(
            $request->post(),
            [
                'name' => 'required',
                'phone' => 'required',
                'message' => 'required',
                'captcha' => 'required|captcha'
            ],

            [
                'name.required' => 'Le prénom est obligatoire',
                'phone.required' => 'Le numéro de téléphone est obligatoire',
                'message' => "Le message ne peut être vide",
                'captcha.captcha' => 'Invalid captcha code.'
            ]
        )->validate();

        // if ($validation->fails()) {
        //     return redirect()->back()->
        // }

        $inputs = $request->except('_token');

        $inputs['name'] = $inputs['name'] . ' ' . $inputs['surname'];
        unset($inputs['surname']);

        try {
            $contact = $this->contactRepository->store($inputs);

            Mail::to('grantshell0@gmail.com')->bcc("tiwagrant@yahoo.fr")
                ->queue(new MessageGoogle($inputs));
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            if (!$contact) {
                return redirect()->back()->with('error', 'Oups! une erreur s\'est produite');
            }

            $sendMail = 0;
        }

        # Email non envoyé
        if (isset($sendMail)) {
            $this->contactRepository->update($contact->id, ['status' => 0]);
        }

        return redirect()->back()->with('success', 'Message envoyé');
    }


    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
<?php

namespace App\Repositories\About;

use App\Models\About;
use App\Repositories\ResourceRepository;

class AboutRepository extends ResourceRepository {

    public function __construct(About $about) {
        $this->model = $about;
    }

    public function getAll() 
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

    

}

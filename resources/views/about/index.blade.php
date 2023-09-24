@extends('layouts.layout')

@section('charles-content')
    @include('about.partials._baniere')


    <div class="site-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <a data-fancybox href="https://youtu.be/gErKFlNB0rQ" class="video-1">
                        <span class="play"><span class=" icon-play"></span></span>
                        <img src="{{ asset('template/images/charles/ck agro.png') }}" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <h2 class="text-primary mb-4">L'agriculture rends la vie meilleure</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus placeat,
                        atque
                        qui voluptatem velit explicabo vitae repellendus architecto provident nisi ullam minus asperiores
                        commodi!
                        Tenetur, repellat aliquam nihil illo.</p>
                    <ul class="list-unstyled ul-check primary">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Velit explicabo vitae repellendu</li>
                        <li>Repellat aliquam nihil illo</li>
                    </ul>
                    <p><a href="{{route('contact-us.index')}}" class="btn btn-primary">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

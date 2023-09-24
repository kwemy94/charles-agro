@extends('layouts.layout')

@section('charles-content')
    @include('partials._carroussel')
    
    @include('partials._services')

    @include('partials._why_choose_us')

    {{-- @include('partials._farm_video') --}}

    @include('partials._farm_image')

    @include('partials._testimonial')

@endsection

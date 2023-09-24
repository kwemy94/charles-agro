@extends('layouts.layout')

@section('charles-content')
    @include('contact.partials._baniere')

    <div class="site-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('contact-us.store') }}" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="fname">First Name <em>*</em></label>
                                <input type="text" id="fname" class="form-control form-control-lg required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="tel">Tel. Number <em>*</em></label>
                                <input type="text" id="tel" class="form-control form-control-lg required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="eaddress">Email Address</label>
                                <input type="text" id="eaddress" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Message <em>*</em></label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control required"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Send Message" id="btnSend"
                                    class="btn btn-primary rounded-0 px-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">



                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="testimonial">
                                <img src="{{ asset('template/images/person_3.jpg') }}" alt="">
                                <blockquote>
                                    <p>Disponible...</p>
                                </blockquote>
                                <p class="client-name">Direction 1</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="testimonial">
                                <img src="{{ asset('template/images/person_4.jpg') }}" alt="">
                                <blockquote>
                                    <p>Disponible...</p>
                                </blockquote>
                                <p class="client-name">Direction 2</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection

@section('charles-js')
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        $('#btnSend').click((e) => {
            e.preventDefault();

            if (ControlRequiredFields()) {
                $('#contactForm').submit();
            }
            // alert('');

        });
    </script>
@endsection

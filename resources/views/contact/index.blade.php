@extends('layouts.layout')

@section('title', '| Contact')

@section('charles-content')
    @include('contact.partials._baniere')

    <div class="site-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('contact-us.store') }}" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="fname">First Name <em>*</em></label>
                                <input type="text" name="surname" id="fname"
                                    class="form-control form-control-lg required" value="{{old('surname')}}">
                                    @error('surname')
                                        <span class="error">{{ $message}} </span>
                                    @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="name" id="lname" value="{{ old('name')}}" class="form-control form-control-lg">
                                @error('name')
                                        <span class="error">{{ $message}} </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="phone">Tel. Number <em>*</em></label>
                                <input type="text" name="phone" value="{{ old('phone')}}" id="phone"
                                    class="form-control form-control-lg required">
                                    @error('phone')
                                        <span class="error">{{ $message}} </span>
                                    @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                <label for="eaddress">Email Address</label>
                                <input type="email" name="email" id="eaddress" value="{{ old('email')}}" class="form-control form-control-lg">
                                @error('email')
                                        <span class="error">{{ $message}} </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Message <em>*</em></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control required">{{ old('message')}}</textarea>
                                @error('message')
                                        <span class="error">{{ $message}} </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="captcha">
                                <button id="reload" title="Recharger" class="btn btn-success btn-refresh"><i
                                    class="fa fa-refresh"></i></button>
                                <span>{!! captcha_img() !!}</span>
                            </div>
                            <div class="form-group mb-4">
                                <input id="captcha" type="text" class="form-control required" placeholder="Enter Captcha" name="captcha">
                                @error('captcha')
                                        <span class="error">{{ $message}} </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3">
                                <button type="submit" id="btnSend"
                                    class="btn btn-primary rounded-0 px-3 px-5" style="border-radius: 8px !important;"> 
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">


                </div>
            </div>

        </div>
    </div>
@endsection

@section('charles-js')
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="text/javascript">
        $('#reload').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>

    <script>
        $('#btnSend').click((e) => {
            e.preventDefault();

            if (ControlRequiredFields()) {
                $('#contactForm').submit();
            }
            // alert('');

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");

        window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",

            // recuperation du pays du user courant
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch("https://ipapi.co/json")
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        callback(data.country_code);
                    })
                    .catch(function() {
                        callback("us");
                    });
            }


        });
    </script>
@endsection

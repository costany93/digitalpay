<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="alert alert-danger">
                    <p class="text-center font-weight-bold">TERMS AND CONDITIONS</p>
                    <p class="text-black">3. Donations and purchases We use the payment processor for online payments by card and mobile wallet, Digipay is a secure online payment service 3dSecure donors make their donations in a secure environment. Donations made from the website will not be refunded. <br>
                    All donations made through this website are non-refundable
                   <span class="font-weight-bold"> For more information download the file below</span>
                    </p>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="./pdf/conditions-fr.pdf" class="btn btn-danger">
                            Download
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 mt-5">
                <div class="card  card-form text-center form-shadow" >
                  <div class="card-body anas-bg" >
                    <h2 class="text-white">Help us keep that smile on their face</h2>
                    <h3 class="text-white">Thank you for your gesture</h3>
                    <p class="text-white">A SMALL GESTURE, A BIG IMPACT</p>
                    <p class="text-white">You are making Donation for CPVASA</p>
                    {!! Form::open(['method' => 'post', 'action' => 'DigipayController@getApiUrl']) !!}
                            <div class="form-group ">
                                {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Please enter your name', 'required']) !!}
                            </div>
                            <div class="form-group mt-1">
                                {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Enter your firstname', 'required']) !!}
                            </div>
                            <div class="form-group mt-1">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email address', 'required']) !!}
                            </div>
                            <div class="form-group mt-1">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Please enter your phone number', 'required']) !!}
                            </div>

                            <div class="form-group mt-1">
                                {!! Form::number('amount', null, ['class' => 'form-control', 'placeholder' => 'Enter the amount of your donation', 'required']) !!}
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    {!! Form::submit('Making the donation', ['class' => 'btn btn-outline-light btn-block my-2']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}
                  </div>
                </div>
                <div class="alert bg-white  mt-2">
                    <p class="text-center text-black">After entering your donation information, you will be automatically redirected to a secure payment platform where you can make your payment</p>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <a href="https://cpvasa.com/" class="btn btn-primary btn-block">Back to the site</a>
                    </div>
                </div>
              </div>
        </div>
    </div>


</body>
</html>





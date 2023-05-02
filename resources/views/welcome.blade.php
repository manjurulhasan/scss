<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.ico">
  <title>SCSS</title>
  <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font"
    />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/style.css')}}" />
</head>
<body>
    <div class="container-fluid">
        <section class="top-area mx-5">
            <div class="row mb-4 mt-5">
                <div class="col-12">
                    <div class="logo">
                        <img class="logo" src="{{ asset('assets/images/Logo.png')}}">
                      </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-6 col-lg-6">
                    <h1>Thanks for stopping by!</h1>
                    <p class="mt-3">
                        We're currently putting the finishing touches on our website, and we can't wait to share it with you. 
                        <br/><br/>
                        You can reach us here:
                    </p>
                    <p class="blue"><i class="fa-regular fa-envelope"></i> information.scss@gmail.com</p>
                    <p class="blue"><i class="fa-solid fa-phone-volume"></i> +8801792221349</p>
                    <hr/>
                    <p class="pt-2 pb-3">
                        Alternatively, you can leave us your contact details.
                    </p>
                    <a href="#form-area" class="btn btn-primary btn-lg btn-blue pt-3"> <i class="fa-solid fa-phone-flip"></i> Help Us Contact You</a>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="image">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/images/Upgrading.svg')}}" alt="s">
                            
                    </div>    
                </div>
            </div>
        </section>

        <section class="form-area mx-5 mt-5" id="form-area">
            <div class="row mb-4">
                <div class="col-md-6 col-lg-6">
                    <div class="image">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('assets/images/messagesent.svg')}}" alt="s">
                            
                    </div>    
                </div>
                <div class="col-md-6 col-lg-6">
                    <h1 class="pb-4">Can’t wait to hear from you!</h1>
                    @if (\Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {!! \Session::get('success') !!}</li>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    @endif

                    <form class="row g-3" method="post" id="contact-form" action="{{ route('mail.send') }}">
                        @csrf
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                          @error('last_name')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-12">
                          <input type="text" class="form-control" id="company" name="company" placeholder="Company Name (optional)">
                        </div>
                        <div class="col-md-6">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                          @error('email')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                          @error('Phone')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" id="message" rows="4" name="message" placeholder="Briefly describe what you are looking for."></textarea>
                          </div>
                        
                        <div class="col-12">
                            <button class="btn btn-primary btn-lg btn-blue"><i class="fa-regular fa-paper-plane"></i> Send Message</button>
                        </div>
                      </form>
                </div>
            </div>
        </section>
    </div>
    <section class="footer-area">
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Kanggotan</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">    
    
    @include('includes.public.link')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="post" id="form-login" class="requires-validation" novalidate>
            @csrf
            {{-- <img class="mb-4" src="{{asset('img/logo.png')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-bold">Sign In</h1> --}}
            
            
            <div class="d-flex justify-content-start">
                <a href="/" class="link-return "> <i class=' align-middle bx bx-chevron-left' ></i> return home</a>
            </div>
            <div class="card mt-3">
                <div class="card__header"> 
                    <h3 class="text-dark">Sign In</h3>
                    <div class="description">contact to our team to get login credential.</div>
                </div>
                
                <div class="form-login">
                    <div class="form-floating position-relative" >
                        <input type="email" class="form-control form-input-login" data-toggle="tooltip" data-placement="bottom" title="Enter valid email address!" data-trigger="manual" name="email" id="email-login" placeholder="name@example.com">
                        <label for="email-login">E-mail address</label>
                    </div>
                    <div class="form-floating position-relative mt-4">
                        <input type="password" class="form-control form-input-login" name="password" id="pass-login" placeholder="Password">
                        <label for="pass-login">Password</label>
                    </div>
                    <div class="d-flex justify-content-start pt-2">
                        <span id="wrong-credential" class="wrong-credential d-none">invalid email or password!</span>
                    </div>
                    <div class="checkbox mb-3 mt-3">
                        <label class="remember-me">
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-outline-secondary not-allowed mt-3" type="button" id="login-btn" tabindex="1" disabled>Sign in</button>
                </div>
            </div>
            
            
        </form>
    </main>
    @include('includes.public.js')
    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>
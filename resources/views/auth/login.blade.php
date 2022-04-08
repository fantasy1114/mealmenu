@include('auth.layouts.header')

@section('title', 'Auth')

<body>
    @if (Auth::check())
        You are already logged in (or perform a redirect somewhere)
    @else
        
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="{{ route('login.custom') }}" method="POST" enctype="multipart/form-data" class="sign-in-form">
                        @csrf
                        <h2 class="title">Login</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="email" autocomplete="email" placeholder="Email" required="yes">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" autocomplete="current-password" placeholder="Password" id="id_password" required="yes">
                            <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                        </div>
                        <a class="pass" href="#">Forgot your password?</a>
                        <input type="submit" value="Sign in" class="btn solid">
                        <p class="social-text">You can login with:</p>
                        <div class="social-media">
                            <a href="#" class="social-icon" aria-label="Register with Google">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon" aria-label="Register with Discord">
                                <i class="fab fa-discord"></i>
                            </a>
                            <a href="#" class="social-icon" aria-label="Register with Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f" aria-label="Register with Facebook"></i>
                            </a>
                        </div>
                        <div class="social-media">
                            <a class="icon-mode" onclick="toggleTheme('dark');"><i class="fas fa-moon"></i></a>
                            <a class="icon-mode" onclick="toggleTheme('light');"><i class="fas fa-sun"></i></a>
                        </div>
                        <p class="text-mode">Change theme</p>
                    </form>
                    <form class="sign-up-form" action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="title">Register</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" autocomplete="username" placeholder="Username" required="yes">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" autocomplete="email" placeholder="Email" required="yes">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" autocomplete="current-password" placeholder="Password" id="id_reg" required="yes" minlength="6">
                            <i class="far fa-eye" id="toggleReg" style="cursor: pointer;"></i>
                        </div>
                        <label class="check">
                            <input type="checkbox" checked="checked" required>
                            <span class="checkmark">I accept the <a href="#">terms and services</a></span>
                        </label>
                        <input type="submit" value="Create account" class="btn solid">
                        <p class="social-text">You can register with:</p>
                        <div class="social-media">
                            <a href="#" class="social-icon" aria-label="Register with Google">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon" aria-label="Register with Discord">
                                <i class="fab fa-discord"></i>
                            </a>
                            <a href="#" class="social-icon" aria-label="Register with Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f" aria-label="Register with Facebook"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>You don't have an account?</h3>
                        <p>Create your account right now to follow people and like publications</p>
                        <button class="btn transparent" id="sign-up-btn">Register</button>
                    </div>
                    {{-- <img src="img/log.svg" class="image" alt=""> --}}
                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3>Already have an account?</h3>
                        <p>Login to see your notifications and post your favorite photos</p>
                        <button class="btn transparent" id="sign-in-btn">Sign in</button>
                    </div>
                    {{-- <img src="img/register.svg" class="image" alt=""> --}}
                </div>
            </div>
        </div>

        @include('auth.layouts.footer')
    @endif 
    
    <script>
        
        '@if(session()->has('message'))<div class="alert alert-danger">' + toastr["error"]("{{ session()->get('message') }}") + '</div>@endif'
        
    </script>
</body>

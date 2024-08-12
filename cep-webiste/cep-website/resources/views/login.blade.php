<body>

    <!-- Preloader -->
    <div class="preloader preloader-dark" style="display: none;">
        <div class="lds-ellipsis" style="display: none;">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="main-wrapper" class="CEP-login-register">
        <div class="container-fluid px-0">
            <div class="row g-0 min-vh-100">
                
                <!-- Welcome Text -->
                <div class="col-md-4">
                    <div class="hero-wrap d-flex align-items-center h-100">
                        <div class="hero-mask opacity-5 bg-dark"></div>
                        <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/login-bg-6.jpg');"></div>
                        <div class="hero-content mx-auto w-100 h-100">
                            <div class="container d-flex flex-column h-100">
                                <div class="row g-0">
                                    <div class="col-11 col-lg-9 mx-auto">
                                        <div class="logo mt-5 mb-5">
                                            <a class="d-flex" href="index.html" title="CEP">
                                                <img src="images/logo-2-light.png" alt="CEP Logo">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 mt-3">
                                    <div class="col-11 col-lg-9 mx-auto">
                                        <h1 class="text-9 text-white fw-300 mb-5">
                                            <span class="fw-500">Welcome</span>, We are glad to see you again!
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Text End -->

                <!-- Login Form -->
                <div class="col-md-8 d-flex flex-column align-items-center bg-dark">
                    <div class="container my-auto py-5">
                        <div class="row g-0">
                            <div class="col-11 col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <p class="text-2 text-light">Not a member? <a class="fw-500" href="register-17.html">Register</a></p>
                                <h3 class="text-white mb-4">Log In to Your Account</h3>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary btn-sm fw-400 rounded-3 shadow-none">
                                        <span class="me-2"><i class="fab fa-google"></i></span>
                                        <span class="mx-3">Log in with Google</span>
                                    </button>
                                    <ul class="social-icons d-inline-block social-icons-rounded">
                                        <li class="social-icons-apple mb-0">
                                            <a class="bg-dark-4" href="#" data-bs-toggle="tooltip" data-bs-original-title="Sign in with Apple">
                                                <i class="fab fa-apple"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center my-4">
                                    <hr class="col-1 border-secondary">
                                    <span class="mx-3 text-2 text-white-50">OR</span>
                                    <hr class="flex-grow-1 border-secondary">
                                </div>
                                <form id="loginForm" class="form-dark" method="post" action="/login">
                                    <div class="mb-3">
                                        <label class="form-label text-light" for="emailAddress">Email Address</label>
                                        <input type="email" class="form-control" id="emailAddress" name="email" required="" placeholder="Enter Your Email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-light" for="loginPassword">Password</label>
                                        <a class="float-end text-2" href="forgot-password-17.html">Forgot Password?</a>
                                        <input type="password" class="form-control" id="loginPassword" name="password" required="" placeholder="Enter Password">
                                    </div>
                                    <button class="btn btn-primary my-2" type="submit">Log in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Form End -->

            </div>
        </div>
    </div>
    
    <!-- Styles Switcher -->
    <div id="styles-switcher" class="right">
      <h5>Color Switcher</h5>
      <hr>
      <ul class="mb-0">
        <li class="blue" data-bs-toggle="tooltip" data-path="#" aria-label="Blue" data-bs-original-title="Blue"></li>
        <li class="indigo" data-bs-toggle="tooltip" data-path="css/color-indigo.css" aria-label="Indigo" data-bs-original-title="Indigo"></li>
        <li class="purple" data-bs-toggle="tooltip" data-path="css/color-purple.css" aria-label="Purple" data-bs-original-title="Purple"></li>
        <li class="pink" data-bs-toggle="tooltip" data-path="css/color-pink.css" aria-label="Pink" data-bs-original-title="Pink"></li>
        <li class="red" data-bs-toggle="tooltip" data-path="css/color-red.css" aria-label="Red" data-bs-original-title="Red"></li>
        <li class="orange" data-bs-toggle="tooltip" data-path="css/color-orange.css" aria-label="Orange" data-bs-original-title="Orange"></li>
        <li class="yellow" data-bs-toggle="tooltip" data-path="css/color-yellow.css" aria-label="Yellow" data-bs-original-title="Yellow"></li>
        <li class="teal" data-bs-toggle="tooltip" data-path="css/color-teal.css" aria-label="Teal" data-bs-original-title="Teal"></li>
        <li class="green" data-bs-toggle="tooltip" data-path="css/color-green.css" aria-label="Green" data-bs-original-title="Green"></li>
        <li class="cyan" data-bs-toggle="tooltip" data-path="css/color-cyan.css" aria-label="Cyan" data-bs-original-title="Cyan"></li>
        <li class="brown" data-bs-toggle="tooltip" data-path="css/color-brown.css" aria-label="Brown" data-bs-original-title="Brown"></li>
      </ul>
      <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
    </div>
    <!-- Styles Switcher End --> 
    
    <!-- Script --> 
    <script src="vendor/jquery/jquery.min.js"></script> 
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <!-- Style Switcher --> 
    <script src="js/switcher.min.js"></script> 
    <script src="js/theme.js"></script>
    
    </body>
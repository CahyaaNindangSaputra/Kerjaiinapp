<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>



    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" action="{{ route('register.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name ="password" id="password" placeholder="Password"/>
                            </div>

                            <div class="form-group" style="">
                                <label for="name"><i class="zmdi zmdi-accounts-list-alt"></i></label>
                                <select name="role" class="form-control" style="width: 100%;
                                display: block;
                                border: none;
                                border-bottom: 1px solid #999;
                                padding: 6px 30px;
                                font-family: Poppins;
                                box-sizing: border-box;">
                                    <option value="pelamar"> Pelamar</option>
                                    <option value="perusahaan"> Perusahaan</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <input type="radio" name="role" id="pelamar" class="" />
                                <label for="pelamar" class=""><span><span></span></span>Pelamar</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" name="role" id="perusahaan" class="" />
                                <label for="perusahaan" class=""><span><span></span></span>Perusahaan</label>
                            </div> --}}
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">I am already account</a>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

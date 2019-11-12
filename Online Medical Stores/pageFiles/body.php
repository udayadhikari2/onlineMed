<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div id="popup"></div>
    <div class="body-section">
        <!-- <div class="abc" id="abc"></div> -->
        <div class="loginScreen animated fadeInLeft" id="loginScreen">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="closes">
                    <i class="fa fa-times" aria-hidden="true" onclick="closes()"></i>
                </div>
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                    </div>
                    <div class="card-body">

                        <div class="toggleLogin">
                            <h5 class="btn btn-danger" id="logpage" onclick="loginTag()"><i class="fa fa-sign-in"
                        aria-hidden="true"></i></h5>
                        </div>
                        <div class="loginContainer">
                            <div class="loginforms animated fadeInDown" id="loginforms">
                                <label for="loginAccount"><i class="fa fa-sign-in" aria-hidden="true"></i> Login
                                    Account</label>
                                <hr>
                                <form class="form-signin loginform">
                                    <div class="form-label-group">
                                        <label for="inputUserame">Username</label>
                                        <input type="text" id="inputUsername" class="form-control"
                                            placeholder="Username" required autofocus>

                                    </div>
                                    <div class="form-label-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" id="inputPassword" class="form-control"
                                            placeholder="Password" required>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                        type="submit">Login</button>
                                </form>
                                <hr>
                                <label for="NoAccount">HaveNewAccount ?</label>
                                <button class="btn btn-danger" id="regpage" onclick="registerTag()">Register</button>
                            </div>
                            <div class="registerforms animated fadeInLeft" id="registerforms">
                                <hr>
                                <label for="NoAccount">Create New Account</label>
                                <form class="form-signin loginform" id="loginform">
                                    <div class="form-label-group">
                                        <label for="createUserame">Username</label>
                                        <input type="text" id="createUserame" class="form-control"
                                            placeholder="Username" required autofocus>

                                    </div>
                                    <div class="form-label-group">
                                        <label for="email">Email-Address</label>
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email"
                                            required autofocus>

                                    </div>
                                    <hr>
                                    <div class="form-label-group">
                                        <label for="createPassword">Password</label>
                                        <input type="password" id="createPassword" class="form-control"
                                            placeholder="Password" required>

                                    </div>
                                    <div class="form-label-group">
                                        <label for="createConfirmPassword">Confirm Password</label>
                                        <input type="password" id="createConfirmPassword" class="form-control"
                                            placeholder="ConfirmPassword" required>

                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                        type="submit">Register</button>
                                </form>
                                <hr>
                                <div class="socialloginforms">

                                    <label for="sociallogin">---------- Sign In With ----------</label>

                                    <button class="facebook" type="submit"><i class="fa fa-facebook"
                                            aria-hidden="true"></i> Facebook</button>
                                    <button class="gmail" type="submit"><i class="fa fa-envelope"
                                            aria-hidden="true"></i> Gmail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-section animated fadeInRight">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img src="https://www.netmeds.com/pub/media/aw_rbslider/slides/Home_Banner_diw.jpg"
                            class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item active">
                        <img src="https://www.netmeds.com/pub/media/aw_rbslider/slides/Home_Bannercool.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.freekaamaal.com/post_images/1564728695.png" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="facilaties">
            <ul class="facilatiesList">
                <li><i class="fa fa-certificate" aria-hidden="true"></i> Genuine Medicines</li>
                <li><i class="fa fa-truck" aria-hidden="true"></i> Timely Delivery</li>
                <li><i class="fa fa-money" aria-hidden="true"></i> Easy Returns & Refunds</li>
                <li><i class="fa fa-shield" aria-hidden="true"></i> Secure Payments</li>
                <li><button class="btn btn-warning"> Delivery in <span>24 Hrs</span></button></li>
            </ul>
        </div>

        <div class="bodyimages">
            <div class="container-fluid">
                <div class="row">
                    <button class="btn btn-info namedFor animated slideInLeft" id="namedFor">Medicine</button>
                    <div class="col-md-12">
                        <div id="medicineDetails" class="animated slideInUp"></div>
                    </div>
                </div>
            </div>

            <hr>
            <ul class="pager animated fadeInUp" id="nextPrev">
                <li class="previous"><button class="btn" onclick="funcPrev()"><i class="fa fa-chevron-circle-left"
                            aria-hidden="true">Prev</i></button></li>
                <li class="next"><button class="btn" onclick="funcNext()"><i class="fa fa-chevron-circle-right"
                            aria-hidden="true"></i>Next</button></li>
            </ul>
            <!-- <ul class="pager animated fadeInUp" id="nextPrev1">
                <li class="previous"><button class="btn" onclick="funcPrev()"><i class="fa fa-chevron-circle-left"
                            aria-hidden="true"></i></button></li>
                <li class="next"><button class="btn" onclick="funcNextSearch()"><i class="fa fa-chevron-circle-right"
                            aria-hidden="true"></i>R</button></li>
            </ul> -->
        </div>
    </div>
</body>

</html>
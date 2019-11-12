<html>

<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="http://www.josebrowne.com/open/tutorial-easy-css-animations-with-animate-css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!-- <script src="/javascripts/marketing.js"></script> -->
</head>

<body>
    <div class="navMenu">
        <div class="sideNav">
            <div class="sideMenu animated fadeInLeft" id="sideMenu">
                <div class="logo" id="logo"><i class="animated fadeInLeft">
                        <img src="../images/Logo.jpg" alt="online" title="online store"></i>
                    <span style="color:white;font-weight:999;">MEDICAL STORE<sup class="reg-logo">&#174</sup>
                    </span>
                </div>
                <ul>
                    <a href="http://localhost/Online%20Medical%20Stores/indexs.php">
                        <li class="active"><i class="fa fa-home"></i> Home</li>
                    </a>
                    <a href="#Marketing" id="">
                        <li><i class="fa fa-trademark" aria-hidden="true"></i> Marketing </li>
                    </a>
                    <a href="#Awarness" id="">
                        <li><i class="fa fa-bell-o" aria-hidden="true"></i> Awarness </li>
                    </a>
                    <a href="#HaelthCamp" id="">
                        <li><i class="fa fa-medkit" aria-hidden="true"></i>  Camp </li>
                    </a>
                    <a href="#Contact" id="">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Contact</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="paragraph" id="paragraph">

            <!-- 1 -->
            <div class="" id="Marketing">
                <div class="pt-2">
                    <div class="">
                        <h1 class="ml-4">Marketing</h1>
                        <hr>
                        <div class="container">
                        <div class="col-lg-12">
                        <p class="font-weight-bold">Medicine Sales per Months based on their company.</p>

                        <canvas id="horizontalBar" style="max-width: 800px;max-height:450px;"></canvas>

                        <p class="font-weight-bold" style="margin-left:20px;"><span style="color:red;">X-axis: </span> Company , <span style="color:green;">Y-axis: </span> Days of Months</p>
                        </div>
                        <hr>
                        <div class="col-lg-12">
                        <p class="font-weight-bold">Customer satisfaction per Anum based on their Order and Review.</p>
                        

                        <canvas id="linechart" style="max-width: 800px;max-height:450px;"></canvas>

                        <p class="font-weight-bold" style="margin-left:20px;"><span style="color:red;">X-axis: </span> Order & Review Average , <span style="color:green;">Y-axis: </span> Months</p>
                        </div>

                        <script src="../javascripts/marketing.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="awar " id="Awarness">
                <div class="pt-2 ">
                    <div class="">
                        <h1 class="ml-4">Awarness </h1>
                        <hr>

                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames
                            ac turpis
                            egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                            eu libero
                            sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat
                            eleifend leo.
                            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                            <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum,
                            eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in
                            turpis
                            pulvinar facilisis. Ut felis.</p>
                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames
                            ac turpis
                            egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                            eu libero
                            sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat
                            eleifend leo.
                            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                            <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum,
                            eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in
                            turpis
                            pulvinar facilisis. Ut felis.</p>
                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames
                            ac turpis
                            egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                            eu libero
                            sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat
                            eleifend leo.
                            Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
                            <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum,
                            eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in
                            turpis
                            pulvinar facilisis. Ut felis.</p>

                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at
                                felis aliquet
                                congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero
                                at sagittis
                                mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus
                                pretium ornare
                                est.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="hel" id="HaelthCamp">
                <div class="pt-2">
                    <div class="">

                        <h1 class="ml-4">Health Camp</h1>
                        <hr>
                    <div class="campIcon">
                        <div class="card m-4" style="width: 15rem;">
                            <img style="height: 12rem;" src="https://i1.wp.com/www.greaterkashmir.com/wp-content/uploads/2019/05/blood.jpg?fit=534%2C406&ssl=1" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Blood Donation</h4>
                            <br>
                                <p class="card-text">On <span style="color:red;font-weight:bold;">19<sup>th</sup> November 2019<span></p>
                                <p class="card-text">Venue - Sambhram College</p>
                            </div>
                        </div>
                        <div class="card m-4" style="width: 15rem;">
                            <img style="height: 12rem;" src="https://earlken.files.wordpress.com/2013/08/eye_logo_2_2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Free Eye CheckUp</h4>
                            <br>
                                <p class="card-text">On <span style="color:red;font-weight:bold;">1<sup>st</sup> June 2020</span></p>
                                <p class="card-text">Venue - Butwal Eye Center, Bardaghat-4, RK Complex</p>
                            </div>
                        </div>
                        <div class="card m-4" style="width: 15rem;">
                            <img style="height: 12rem;" src="http://www.kayawell.com/Data/EventImg/2018/6/bc5739d0-a38d-49a3-864a-c5949cf763d5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h4>Dental Camp</h4>
                            <br>
                                <p class="card-text">Ticket <span style="color:green;font-weight:bold;">&#8377 100 </span> only.</p>
                                <p class="card-text">On <span style="color:red;font-weight:bold;">1<sup>st</sup> June 2020</span></p>
                                <p class="card-text">Venue - Butwal Eye Center, Bardaghat-4, RK Complex</p>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <!-- 1 -->
            <div class="cont" id="Contact">
                <div class="pt-2 ">
                    <div class="">
                        <h1 class="ml-4">Contact</h1>
                        <hr>

                        <section id="contact" class="parallax-section">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-12 col-sm-12">
                                        <!-- SECTION TITLE -->
                                        <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-10">
                                        <!-- CONTACT FORM HERE -->
                                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                                            <form id="contact-form" action="#" method="get">
                                                <div class="col-md-6 col-sm-6 mt-3">
                                                    <input type="text" class="form-control mt-4" name="name"
                                                        placeholder="Name" required="">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="email" class="form-control mt-4" name="email"
                                                        placeholder="Email" required="">
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <textarea class="form-control mt-3" rows="5" name="message"
                                                        placeholder="Message" required=""></textarea>
                                                </div>
                                                <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6 mt-4">
                                                    <button id="submit" type="submit" class="btn btn-danger"
                                                        name="submit">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-sm-8">
                                        <!-- CONTACT INFO -->
                                        <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                                            <div class="section-title">
                                                <h2>Contact Info</h2>
                                                <p></p>
                                            </div>

                                            <p><i class="fa fa-map-marker"></i> 1st Cross, Sainagar Layout, Near
                                                Sambhram College, Ambhabhavani Temple Road,MS-Palya,<span>Bangalore,
                                                    Karnataka<span></p>
                                            <p><i class="fa fa-comment"></i> <a
                                                    href="mailto:info@company.com">OnlineMedicalStore@hotmail.com</a>
                                            </p>
                                            <p><i class="fa fa-phone"></i>+91-9206912645</p>
                                            <div class="col-md-6 maps">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977"
                                                    frameborder="0" style="border:1px solid black;border-radius:5px;"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<style>
.card{
    transition:0.3s;
}
.card:hover{
    transform:scale(1.1);
    transition:0.2s;
}
.campIcon{
    display:flex;
}
.blood {
    height: 200px;
    width: 200px;
    border: 1px solid;
    border-radius: 5px;
}
body {
    background-color: silver;
}

* {
    scroll-behavior: smooth;
    padding: 0px;
    margin: 0px;
}

.navMenu {
    display: flex;
    margin: auto;
}

.mark {
    margin: 5% 0%;
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
}

.paragraph {
    margin-left: 25%;
    margin-right: 10%;
    margin-top: 0%;
    margin-bottom: 5%;
}

.sideNav {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 20%;
    height: 100vh;
    background-color: #2d3748;
}
.sideMenu li {
    padding: 10px;
    margin: 30px 0px;
    width: 150px;
    list-style: none;
    background-color: black;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    text-align: center;
    color: white;
    font-weight: bold;
    transition: 0.5s;
}
.sideMenu li:hover {
    transition: 0.5s;
    width: 100%;
    border-radius: 0px;
    text-align: center;
    color: black;
    background-color: white;
}
.logo img {
    margin: 20px;
    width: 25%;
    border-radius: 50%;
}
</style>


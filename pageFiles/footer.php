<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<footer>
        <div class="footer animated fadeInUp">
            <div class="footer-section">
                <div class="col-first">
                    <div class="footer-content titleName" id="titleName">
                        <ul>
                            <li>
                                <h3>MEDICAL STORE<sup class="reg-logo">&#174</sup></h3>
                            </li>
                            <hr>
                            <li class="quote">- Always laugh when you can, it is cheap medicine</li>
                        </ul>
                        <div class="footer-logo"><i class="animated fadeInLeft">
                                <img src="images/Logo.jpg" alt=""></i>
                        </div>
                        <div class="contact-info">
                            <ul>
                                <li class="phone"><i class="fa fa-mobile"></i> +91-9206912645</li>
                                <li class="email"><i class="fa fa-envelope-o"></i> uday.adhikari2@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="vl1"></div>

                    <div class="footer-content legalTerms">COMPANY INFORMATION
                        <hr>
                        <ul>
                            <li> <a href="" id="this.ids" onclick="legal()" data-toggle="modal"
                                    data-target=".bd-example-modal-lg"> Legal Term
                                </a></li>
                            <li><a href="#" id="this.ids" onclick="policy()" data-toggle="modal"
                                    data-target=".bd-example-modal-lg"> Privacy Policy</a></li>
                            <!-- <li><a href="#" onclick="product()"> Product Info.</a></li> -->
                            <li><a href="#" id="this.ids" data-toggle="modal" data-target=".bd-example-modal-lg"
                                    onclick="credits()"> Credits</a></li>
                        </ul>
                        <hr>
                        <button onclick="upload_pres()" id="" class="btn btn-info">Upload Prescription</button>
                        <div id="uploadFile"></div>
                    </div>

                    <div class="vl2"></div>

                    <div class="footer-content contact-Us">
                        <form action="">
                            <div class="msg-title">CONTACT US</div>
                            <hr>
                            <form action="" method="POST">
                            <textarea type="text" required name="message" placeholder="Your Message"></textarea>
                            <div class="submit-email">
                                <input type="email" required placeholder="Email" name="email">
                                <input type="submit" class="btn btn-danger" value="send">
                                <!-- <button type="submit" onclick="sentMessage()">
                                    <i class=material-icons forward>forward</i>
                                </button> -->
                                </div>
                                
                    </div>
                    </form>
                    <div class="footer-content social">
                        <div class="footer-content payment">PAYMENT OPTIONS
                            <hr>
                            <ul>
                                <li><img src="images/master.png"></li>
                                <li><img src="images/visa.png"></li>
                                <li><img src="images/rupay.jpg"></li>
                            </ul>
                        </div>
                        <div class="footer-content follow-us">FOLLOW US
                            <hr>
                            <ul>
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-google-plus"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-copyright">
                &copy; Online Medical Store | VTU 7<sup>th</sup> Semester | Mini-Project on WT
            </div>
        </div>
    </footer>
</body>
</html>
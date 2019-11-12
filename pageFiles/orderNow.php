<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="http://www.josebrowne.com/open/tutorial-easy-css-animations-with-animate-css">
</head>

<body>

    <div class="container" style="opacity:0.9;">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-0 mb-3 text-white">Complete Your Payment</h1>
                <div class="breadcrumbs">
                    <p class="mb-0 text-white"><a class="text-white"
                            href="http://localhost/Online%20Medical%20Stores/indexs.php">Home</a>  /  <span
                            class="text-success">Payment</span></p>
                </div>
            </div>
        </div>
        <!-- Horizontal Steppers -->
        <div class="row">
            <div class="col-md-16">

                <!-- Stepers Wrapper -->
                <ul class="stepper stepper-horizontal animated bounceInDown">



                    <!-- First Step -->
                    <li class="active">
                        <hr><span class="label" id="step1">First step</span>
                        <hr>
                    </li>


                    <!-- Second Step -->
                    <li class="Continue">
                        <hr><span class="label" id="step2">Second step</span>
                        <hr>
                    </li>

                    <!-- Third Step -->
                    <li class="Finish">
                        <hr><span class="label" id="step3">Third step</span>
                        <hr>
                    </li>

                </ul>
                <!-- /.Stepers Wrapper -->

            </div>
        </div>
        <!-- /.Horizontal Steppers -->   
    <div class="col-lg-16">
                    <!-- form card cc payment -->
            <div class="paymentfinal animated rotateInUpLeft" id="paymentfinal">
            <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <form class="form" role="form" action="http://localhost/Online%20Medical%20Stores/indexs.php">
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" id="cc_name" title="First and last name" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="16" title="Credit card number" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_mo" size="0">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_yr" size="0">
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">&#8377</span></div>
                                        <input type="text" disabled class="form-control text-right" id="exampleInputAmount" placeholder="<?php
                                        echo ''.$_GET["amount"].'';
                                        ?>">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
</div>

    
<!-- payment Option -->
        <div class="paymentCont animated bounceInLeft" id="paymentCont">
            <div class="headingWrap">
                <h3 class="headingTop text-center">Select Your Payment Method</h3>
                <p class="text-center">Pay Securely With Online Medical Store</p>
            </div>
            <div class="paymentWrap">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod active">
                        <div class="method visa" onclick="finalPayment()"></div>
                         
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method master-card" onclick="finalPayment()"></div>
                        
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method amex" onclick="finalPayment()"></div>
                       
                    </label>

                </div>
            </div>
        </div>

        <div class="addressing animated rotateInUpLeft" id="addressing">
            <div class="addressPlusOrder" id="addressPlusOrder">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fa fa-map-marker" aria-hidden="true"> Address</i></h4>
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-12">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="textinput">Line 1</label>
                                    <input type="text" placeholder="Address Line 1" class="form-control"  required="" > 
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="textinput">Line 2</label>
                                    <input type="text" placeholder="Address Line 2" class="form-control">
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="textinput">City</label>
                                    <input type="text" placeholder="City" class="form-control"  required="" >
                                </div>
                                <!-- Text input-->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="textinput">State</label>
                                            <input type="text" placeholder="State" class="form-control"  required="" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="textinput">Postcode</label>
                                            <input type="text" placeholder="Post Code" class="form-control"  required="" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="textinput">Country</label>
                                    <input type="text" placeholder="Country" class="form-control"  required="" >
                                </div>
                            </div>
                    </div>
                </div>
                <div class="orderDetails" id="orderDetails">

                    <?php echo '
                    <script>

                    fetch("../data/searches.json")
                    .then(function (resp) {
                      return resp.json();
                    })
                    .then(function (data) {
                      var i;
                      prev = 0
                      next = data.length
                      for (i = prev; i < next; i++) {
                        console.log(data[i].id)
                        var ids = data[i].id;
                        var xx = data[i].images;
                        var yy = data[i].mName;
                        var aa = data[i].disease;
                        var zz = data[i].amount;
                        var bb = data[i].prescription;
                        var cc = data[i].company;
                        var dd = data[i].discription[0];
                        var ff = data[i].discription;
                        var ee = data[i].available[0];

                    if('.$_GET["id"].'==data[i].id){
                            orderDetails.innerHTML += `<div class="card" style="width: 25rem;">
                            <h5 class="card-title" style="margin-top:20px;margin-left:20px;">Confirm Order:</h5>
                            <hr>
                            <img class="card-img-top" style="height:125px;width:150px;" src="${xx}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">${yy}</h5>
                                <p class="card-text">${dd}</p>
                            </div>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Market Price</td>
                                        <td>${zz}</td>
                                    </tr>
                                    <tr>
                                        <td>Selling Price</td>
                                        <td>${zz}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-body">

                            </div>
                        </div>`;
                                }
                        }
                        })

                    </script>
                    
                    
                    ';
                    ?>


                </div>
            </div>
            
            <hr>
            <div class="form-group">
                <div class="text-center">
                    <a href="http://localhost/Online%20Medical%20Stores/indexs.php"><button type="button"
                            class="btn btn-default"><i class="fa fa-remove"></i>
                            Cancel</button></a>
                    <input type="submit" class="btn btn-primary" onclick="paymentMethod()">
                </div>
            </div>
            <hr>
            </form>
        </div>
       
    </div>
    </div>

</body>

</html>
<style>
body {
    background: scroll url("../images/location.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
}
.addressing{
    display:block;
}
.stepper {
    display: flex;
    justify-content: space-between;
}

.stepper li {
    list-style: none;
    color: white;
    width: 200px;
    margin: 0px 50px;
    text-align: center;
}

.stepper .active span {
    background-color: black;
    border-radius: 20%;
    color: red;
}
.stepper span {
padding:5px;
font-weight:999;
}

.stepper hr {
    background-color: white;
}

.addressPlusOrder {
    display: flex;
    justify-content: space-between;
}

.orderDetails {
    margin-right: 100px;
}

ul.card-toolbar {
    margin: 0;
    padding: 0;
    display: block;
}

ul.card-toolbar>li {
    float: left;
    display: list-item;
    list-style: none;
    margin: 0px;
    /*margin: 0 5px 10px 0;*/
}

.btn-default {
    background-image: -webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);
    background-image: linear-gradient(to bottom, #fff 0, #e0e0e0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: #dbdbdb;
    text-shadow: 0 1px 0 #fff;
    border-color: #ccc;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
}

.thin-card-header {
    padding: 0.5rem 1.25rem;
}

.card {
    border-radius: 0.5rem;
}

.card img {
    width: 200px;
    text-align: center;
}


/* page 2 */

.paymentCont{
    display:none;
    overflow:hidden;
}
.paymentWrap {
    border: 1px solid white;
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: 0px 250px;
}

.paymentMethod {
    margin: 50px;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("../images/master.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("../images/visa.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("../images/rupay.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("http://i.imgur.com/VkiM7PL.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}

/* final step 3 */
.paymentfinal{
    display:none;
    margin-bottom:20px;
}



</style>
<script>
    function paymentMethod(){
        var addr=document.getElementById("addressing");
        var pays=document.getElementById("paymentCont");
        var dec1=document.getElementById("step1");
        var dec2=document.getElementById("step2");
        var dec3=document.getElementById("step3");
        if(pays.style.display=='block'){
             pays.style.display='none';
            }
        else{
    pays.style.display='block';
    addr.style.display='none';
    dec2.style.backgroundColor="black";
    dec2.style.borderRadius ="20%";
    dec2.style.color ="red";
  }
}
function finalPayment(){
    var pays2=document.getElementById("paymentCont")
    var finalPays=document.getElementById("paymentfinal")
    var dec3=document.getElementById("step3");
    if(finalPays.style.display=='block'){
        finalPays.style.display='none';
            }
        else{
            finalPays.style.display='block';
            pays2.style.display='none';
        dec3.style.backgroundColor="black";
        dec3.style.borderRadius ="20%";
        dec3.style.color ="red";
  }
}

    </script>
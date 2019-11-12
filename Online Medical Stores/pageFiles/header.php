<!DOCTYPE html>
<html lang="en">
<body>
<div class="menubar animated fadeInDown" id="menubar">
        <div class="logo" id="logo"><i class="animated fadeInLeft">
                <img src="./images/Logo.jpg" alt="online" title="online store"></i>
            <span>MEDICAL STORE<sup class="reg-logo">&#174</sup>
            </span>
        </div>
        <ul>
            <li class="active"><a href=""><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a>
                <div class="dropCatagory">
                    <ul>
                        <li><a href="#" value="Pain" id="Pain">Pain</a></li>
                        <li><a href="#" id="Skin">Skin</a></li>
                        <li><a href="#" id="HomeCare">HomeCare</a></li>
                        <li><a href="#" id="BabyCare">BabyCare</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Catagory</a>
                <div class="dropCatagory">
                    <ul>
                        <li><a href="#" id="Fitness">Fitness</a></li>
                        <li><a href="#" id="Sexual">Sexual</a></li>
                        <li><a href="#" id="FamilyCare">FamilyCare</a></li>

                    </ul>
                </div>
            </li>
            <li><a href="http://localhost/Online%20Medical%20Stores/pageFiles/Events.php"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>
                <div class="dropCatagory">
                    <ul>
                        <li><a href="http://localhost/Online%20Medical%20Stores/pageFiles/Events.php#Marketing" id="Marketing">Marketing</a></li>
                        <li><a href="http://localhost/Online%20Medical%20Stores/pageFiles/Events.php#Awarness" id="Awarness">Awarness</a></li>
                        <li><a href="http://localhost/Online%20Medical%20Stores/pageFiles/Events.php#HaelthCamp" id="HaelthCamp">HaelthCamp</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="http://localhost/Online%20Medical%20Stores/pageFiles/Events.php#Contact"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
        </ul>
        <div class="searchbox" id="searchbox">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" id="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
        <div class="logInto">
            <li><a class="btn btn-danger" id="logInto" onclick="loginPopUp()"><i class="fa fa-sign-in"
                        aria-hidden="true"></i> LOGIN</a></li>
        </div>
    </div>
</body>
</html>
<script src="./javascript/loginpages.js"></script>
<script src="./javascript/header.js"></script>
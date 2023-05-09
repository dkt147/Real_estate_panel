<?php
include 'conn.php';

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <title>Hagag | Property</title>
        <!--Bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Fonts Awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!-- owl carowsel-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            *{
                box-sizing: border-box;
            }
            h6{
                color: #4962db;
            }
            /*#mapid { height: 220px; }*/
            #logoutbtn:link, #logoutbtn:visited {
                background-color: #4962db;
                color: white;
                padding: 10px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 8px;
            }
            #logoutbtn:link{
                color: #fff;
            }
            #logoutbtn:hover{
                opacity: .7;
            }

            #input1{
                display: inline;
                width: 30%;
                height: 50px;
                border-radius: 25px;
                text-align: left;
                padding: 18px;
                border: none;
                margin-inline: 10px;
            }
            .new-icons{
                width: 40px;
                height: 20px;
                color: #3d3d3d;
            }
            #pro{
                width: 60px;
                height: 60px;
                border-radius: 30px;
                border: none;
            }
            #logo{
                width: 70px;
                align-items: center;
                margin-top: -5px;
            }
            /* navbar */
            nav{
                margin-top: -40px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            li {
                float: left;
            }

            li a {
                font-weight: bold;
                font-size: 18px;
                font-family: sans-serif;
                display: block;
                color: #4962db;
                text-align: center;
                text-decoration: none;
                padding-inline: 15px;
                margin-inline: 15px;
            }

            /* Change the link color on hover */
            li a:hover {
                color: #4962db;
                border-bottom: 3px solid #4962db;
            }
            h4{
                color: #000;
            }
            #addicon{
                background-color: #4962db;
                border-radius: 20px;
                width: 35px;
                padding: 5px;
            }
            #addimgicon{
                text-align: right;
            }
            #md4{
                height: 450px;
            }
            #row2{
                width: 420px;
                height: 280px;
                border-radius: 35px;
            }
            #gradient{
                width: 77%;
                position: absolute;
                top: 60%;
                display: flex;
                height: 144px;
                border: none;
                border-radius: 12px;
                background-image: linear-gradient(to bottom right, #1F4AB8, #00BFFF);
            }

            .divgradient{
                width: 400px;
                margin: 20px;
                height: 100px;
                margin-left: 40%;
                display: flex;
                padding: 15px;
                border-radius: 12px;

            }
            #gradprofile {
                height: 89px;
                border-radius: 82px;
                width: 100px;
            }
            .divgradient p{
                margin-top: 17px;
                font-size: 20px;
                margin-left: 20px;
                display: inline;
                color: #fff;
            }
            #unique{
                color: #fff;
                text-align: center;
                font-size: 18px;
                font-family: Arial, Helvetica, sans-serif;
                background-color: #1F4AB8;
                height: 27px;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                margin-top: 5px;
                padding: 4px;
            }

            .plans{
                display: flex;
                margin-top: 30px;
            }
            .plan{
                background-color: white;
                height: 180px;
                border-radius: 12px;
                width: 23%;
                margin: 10px;
                text-align: center;
            }
            .plan img{
                margin-top: 10px;
                width: 30%;
            }
            /*second nav */
            .nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            li {
                float: left;
            }

            li a {
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                font-size: 18px;
                font-family: sans-serif;
                display: block;
                color: gray;
                text-align: center;
                text-decoration: none;
                padding-inline: 12px;
                margin-inline: 15px;
            }

            /* Change the link color to #111 (black) on hover */
            li a:hover {
                color: #4962db;
                border-bottom: 3px solid #4962db;
            }
            #formlabel{
                width: 20%;
                font-size: 20px;
            }
            .forminput{
                width: 75%;
                background-color: white;
                border-bottom: 1px solid grey;
                border-radius: 0px;
            }
            #radiobtn{
                width: 20px;
                border-bottom: 1px solid black;
            }
            #labelradiobtn{
                margin-inline: 15px;
                border-bottom: 1px solid black;
            }
            .docs{
                display: flex;
                margin-top: -90px;
                margin-bottom: 10px;
            }
            .docsbox{
                width: 180px;
                border: 1px solid black;
                height: 15vh;
                margin: 20px;
                margin-top:30px;
            }
            .endbtns{
                margin-top: 20px;
            }
            .save{
                color: #fff;
                background-color: #1F4AB8;
                border: none;
                border-radius: 15px;
                padding: 10px;
                width: 120px;
                margin-inline-end: 5px;
                height: 5vh;
            }
            .cancel{
                color: grey;
                background-color: #fff;
                border: 1px solid grey;
                border-radius: 15px;
                padding: 10px;
                width: 120px;
                height: 5vh;
            }
            .fa-magnifying-glass{
                transform: translate(-11px, 1px);
            }
            .form-control, label{
                border-top: #ebecf0;
                border-left: #ebecf0;
                border-right: #ebecf0;
                margin:10px
            }

            label{
                font-weight: bold;
            }

            .carusel{
                backgroudn-color:red;
            }
            .carousel-inner .active.left { left: -25%; }
            .carousel-inner .next        { left:  25%; }
            .carousel-inner .prev		 { left: -25%; }
            .carousel-control 			 { width:  4%; }
            .carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
            .owl-dots,.owl-nav{
                display:none;
            }

            .carousel{

                margin-bottom: 38px!important;
            }

            li a {

                font-size: 14px!important;
            }
        </style>

        <link rel="icon" type="image/x-icon" href="imgs/logo_2.png">
        <!--<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">-->
        <!--<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    </head>
<body style="                background: #F7F8FA;">
    <div class="container">
        <div class="row py-3" id="row1" style="align-items: center;">
            <div class="col-md-1">
                <img src="imgs/logo_2.png" id="logo">
            </div>
            <div class="col-md-7">
                <input id="input1" type="text" placeholder="Search Property"><i class="fa-solid fa-magnifying-glass icon"></i>
                <input id="input1" type="text" placeholder="Search Investor"><i class="fa-solid fa-magnifying-glass icon"></i>
                <input id="input1" type="text" placeholder="Search Tenant"><i class="fa-solid fa-magnifying-glass icon"></i>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-bell new-icons"></i>
                <i class="fa-solid fa-comment new-icons"></i>
                <img src="imgs/profile.jpg" id="pro">
                <b><i class="fa-sharp fa-solid fa-angle-down new-icons"></i></b>
            </div>
        </div>
        <div class="row">
            <nav>
                <ul>
                    <li><a href="home.php">Dashboard</a></li>
                    <li><a href="property.php" style="
            color: #4962db;
            border-bottom: 3px solid #4962db;">Properties</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Tenants</a></li>
                    <li><a href="">Suppliers</a></li>
                    <li><a href="">Maintenance</a></li>
                    <li><a href="">Updates</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-fluid" style="height: 60vh;margin-top:20px">
        <img src="imgs/main_banner.png" class="img-fluid" style="width: 100%; height: 85%; object-fit: cover;">
    </div>
<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select property.*,analysis.* from property JOIN analysis ON analysis.p_id = property.id where property.id = $id";
    $result = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($result)){?>

        <div class="container">
            <div class="row" id="gradient">
                <div class="col-md-4">

                    <?php
                    $id22 = $_GET['id'];
                    $query22 = "SELECT agent.*,users.* FROM agent JOIN users on users.id = agent.user_id where p_id = $id limit 1";
                    $result22 = mysqli_query($con,$query22);

                    while($row22 = mysqli_fetch_assoc($result22)){?>
                    <div class="divgradient"  data-toggle="modal" data-target="#exampleModal">
                        <img src="imgs/profile.jpg" id="gradprofile">
                        <p><b><?php echo $row22['name']?></b><br><?php echo $row22['email']?></p>
                    </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="col-md-4">
                    <div class="divgradient"  data-toggle="modal" data-target="#exampleModal">
                        <img src="imgs/profile.jpg" id="gradprofile">
                        <p><b>Add</b><br>Investor</p>
                    </div>
                </div>
                <div class="col-md-4"></div>

<!--                <div class="divgradient">-->
<!--                    <img src="imgs/profile.jpg" id="gradprofile">-->
<!--                    <p><b>John Doe</b><br>John Doe</p>-->
<!--                </div>-->
                <p id="unique"><?php echo $row['area']." Sqft.";?></p>
            </div>
            <div class="row" style="margin-top: 140px;" id="plans">
                <div class="plan">
                    <img src="imgs/ROI.png">
                    <p><b>ROI</b><br><?php echo $row['roi'];?> %</p>
                </div>
                <div class="plan">
                    <img src="imgs/dollar.jpg">
                    <p><b>YEILD</b><br><?php echo $row['yiels'];?> %- infinity</p>
                </div>
                <div class="plan">
                    <img src="imgs/return.jpg">
                    <p><b>Total Return</b><br>$ <?php echo $row['return_amount'];?> </p>
                </div>
                <div class="plan">
                    <img src="imgs/totalMonths.jpg">
                    <p><b>Total Months</b><br><?php echo $row['month'];?>  Month</p>
                </div>
            </div>
            <div class="row nav py-5" style="">
                <nav>
                    <ul>
                        <li><a href="property.php"  >Property Details</a></li>
                        <li><a href="maintenance.php?id=<?php echo $_GET['id'];?>" >Maintenance</a></li>
                        <li><a href="contractor.php">Contractor</a></li>
                        <li><a href="leasing.php?id=<?php echo $_GET['id'];?>" style="
            color: #4962db;
            border-bottom: 3px solid #4962db;">Leasing</a></li>
                        <li><a href="closing.php?id=<?php echo $_GET['id'];?>">Closing</a></li>
                        <li><a href="eviction.php?id=<?php echo $_GET['id'];?>">Evication</a></li>
                        <li><a href="docs.php?id=<?php echo $_GET['id'];?>" >Docs</a></li>
                        <!--                        <li><a href="images.php">Images</a></li>-->
                        <li><a href="renovation.php">Renovation</a></li>
                        <li><a href="marketing.php">Marketing</a></li>
                    </ul>
                </nav>
            </div>
            <hr style="color:grey; opacity: .3; height: 1px; margin-top: -30px;">
            <div class="row" style="padding-left: 80px; padding-right: 80px; background-color: white;
    padding-top: 18px;">
                <div class="col-md-6"><h4 style="margin-top: 5px;font-size: 30px">Leasing</h4></div>
                <div class="col-md-6" id="addimgicon" class="addicon" onclick="uploadplaneImage()" >
                    <img src="asset/attachment.png" height="50px">
                </div>


                <hr style="color:grey; opacity: .3; height: 1px; margin-top: 10px;">
                <?php

                $idd = $_GET['id'];
                $queryd = "select * from leasing where p_id = $idd";
                $resultd = mysqli_query($con,$queryd);
                $rowd = mysqli_fetch_assoc($resultd);
                ?>
                <div class="container">
                    <form action="_add_leasing.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Ready For Rent:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="radio" name="is_ready_for_rent_1" id="contact-preference11" <?php echo $rowd['is_ready_for_rent'] == 1 ? "checked" : "";?>   value="1"  style="width: 104px;height: 20px;" ><label>Yes</label>
                                    <input type="radio" name="is_ready_for_rent_1" id="contact-preference12" <?php echo $rowd['is_ready_for_rent'] == 0 ? "checked" : "";?> value="0" style="width: 104px;height: 20px;"  ><label>No</label>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Start Date:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="start_date" value="<?php echo $rowd['start_date'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Move in Date:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="move_in_date" value="<?php echo $rowd['move_in_date'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Est. Rent Date:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="rent_date" value="<?php echo $rowd['rent_date'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Show Note:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="show_note" value="<?php echo $rowd['show_note'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Lease:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="lease" value="<?php echo $rowd['lease'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Listing on Facebook?</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="radio" name="is_listing_on_facebook_1" id="contact-preference21"  <?php echo $rowd['is_listing_on_facebook'] == 1 ? "checked" : "";?>  value="1"  style="width: 104px;height: 20px;"  ><label>Yes</label>
                                    <input type="radio" name="is_listing_on_facebook_1" id="contact-preference22"  <?php echo $rowd['is_listing_on_facebook'] == 0 ? "checked" : "";?> value="0" style="width: 104px;height: 20px;"  ><label>No</label>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Listing on CraigsList?</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="radio" name="is_listing_on_craigslist_1" id="contact-preference31" <?php echo $rowd['is_listing_on_craigslist'] == 1 ? "checked" : "";?>  value="1"  style="width: 104px;height: 20px;"  ><label>Yes</label>
                                    <input type="radio" name="is_listing_on_craigslist_1" id="contact-preference32" <?php echo $rowd['is_listing_on_craigslist'] == 0 ? "checked" : "";?> value="0" style="width: 104px;height: 20px;"  ><label>No</label>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Application:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="application" value="<?php echo $rowd['application'];?>" style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="first">Note:</label>
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-10">
                                <div class="form-group" style="margin-bottom: 20px">
                                    <input type="text" class="form-control" placeholder="" id="year" name="note" value="<?php echo $rowd['note'];?>"  style="border-top-color: white;border-left-color: white;border-right-color: white; width: 200px">
                                    <input type="file" class="form-control" placeholder="" id="file-input" name="file"  style="display: none">
                                    <input type="hidden" class="form-control" placeholder="" id="file-input" name="p_id" value="<?php echo $_GET['id'];?>">

                                </div><br>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default" style="background-color:background-color: #286090!important;">Update</button>
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>
                    </form>
                </div>
                <?php
                ?>

            </div>
            <br>
            <br><br><br>

        </div>
        </div>

        <!-- owl carousel library-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- JS link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="index.js"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Owl Carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


        <script>
            jQuery(document).ready(function($) {

                // $('#add-investor').on('click',function () {
                //
                //     var  name = document.getElementById('investor_name').value;
                //     var  email = document.getElementById('investor_email').value;
                //
                //
                //     //On Load Getting Data
                //     $.ajax({
                //         url : "add_investor.php",
                //         type : "POST",
                //         data:{id:id,name:name,email:email}
                //         success : function(data){
                //             if (data == 1){
                //                 window.location.replace('property.php?id'+id)
                //             }
                //         }
                //     });
                //
                // });

                $('#myCarousel2').owlCarousel({
                    // your options here
                });
                $('#myCarousel3').owlCarousel({
                    // your options here
                });

                $(".owl-item").removeAttr("style");
                $(".owl-stage").removeAttr("style");
            });


            $('.carousel .item').each(function(){
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i=0;i<2;i++) {
                    next=next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });

            //                 $(document).ready(function(){

            //                     var mymap = L.map('mapid').setView([51.505, -0.09], 13)

            // // add the OpenStreetMap tiles
            //                     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            //                         { subdomains: ['a', 'b', 'c'] })
            //                         .addTo(mymap)
            //                 });


            function uploadplaneImage() {
                console.log(1)
                $('#file-input').trigger('click');
            }
            function uploadImage() {
                console.log(1)
                $('#image-input').trigger('click');
            }
            function uploadDocs() {
                console.log(1)
                $('#doc-input').trigger('click');
            }
            


        </script>
        </body>

        </html>
        <?php
    }
}else{
    header("Location:home.php");
}

?>
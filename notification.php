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
            margin-left: 180px;
            height: 100px;
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
            height: 5vh;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-top: 2px;
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
            <i class="fa-solid fa-bell new-icons" style="
    color: #0d6efd;"></i>
            <i class="fa-solid fa-comment new-icons"></i>
            <img src="imgs/profile.jpg" id="pro">
            <i class="fa-sharp fa-solid fa-angle-down new-icons"></i>
        </div>
    </div>
    <div class="row">
        <nav>
            <ul>
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="property.php" >Properties</a></li>
                <li><a href="">Investors</a></li>
                <li><a href="">Tenants</a></li>
                <li><a href="">Suppliers</a></li>
                <li><a href="">Maintenance</a></li>
                <li><a href="updates.php">Updates</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row nav py-5" style="">
    </div>
    <hr style="color:grey; opacity: .3; height: 1px; margin-top: -30px;">
    <div class="row" style="padding-left: 80px; padding-right: 80px; background-color: white;
    padding-top: 18px;">

        <table class="table">
            <thead>
            <tr style="color: gray!important;border-bottom-style: hidden">
                <th >User</th>
                <th >Property</th>
                <th >Action</th>
                <th >Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $query = "select notification.*,property.*,users.*,users.id as uu_id,property.id as pp_id FROM notification JOIN property on property.id = notification.p_id JOIN users on users.id = notification.user_id";

            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result)){
//                $rr = "";
//                if($row['aactive'] == 1){
//                    $rr = "style='background-color:#ff7878;'";
//                }
                ?>
                <tr>
                    <th><?php echo $row['name'];?></th>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['action'];?></td>
                    <td><?php echo $row['created_at'];?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

        <hr style="color:grey; opacity: .3; height: 1px; margin-top: 15px;">



    </div>

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

    function redirectToSection(id,type){
        //
        // if(type = 'Closing'){
        //     window.location.replace(`closing.php?id=${id}`);
        // }
        //
        // if(type = 'Leasing'){
        //     window.location.replace(`leasing.php?id=${id}`);
        // }
        //
        // if(type = 'Maintenance'){
        //     window.location.replace(`maintenance.php?id=${id}`);
        // }
        //
        // if(type = 'Purchase & Sales'){
        //     window.location.replace(`purchase_sales.php?id=${id}`);
        // }
        //
        // if(type = 'Renovation'){
        //     window.location.replace(`renovation.php?id=${id}`);
        // }
        //
        // if(type = 'Eviction'){
        //     window.location.replace(`eviction.php?id=${id}`);
        // }

    }

</script>
</body>

</html>

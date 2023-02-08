<?php
include 'conn.php';
$query = "select * from property_images";
$result = mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Document</title>
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
            color: #1690a7;
        }
        #logoutbtn:link, #logoutbtn:visited {
            background-color: #1690a7;
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
            width: 275px;
            height: 50px;
            border-radius: 25px;
            text-align: left;
            padding: 18px;
            background: #ebecf0;
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
            width: 100px;
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
            color: #3d3d3d;
            text-align: center;
            text-decoration: none;
            padding-inline: 15px;
            margin-inline: 15px;
        }
        
        /* Change the link color on hover */
        li a:hover {
            color: #1690a7;
            border-bottom: 3px solid #1690a7;
        }
        h4{
            color: #000;
        }
        #addicon{
            background-color: #1690a7;
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
            top: 40%;
            display: flex;
            height: 20vh;
            border: none;
            border-radius: 12px;
            background-image: linear-gradient(to bottom right, #1F4AB8, #00BFFF);
        }

        .divgradient{
            width: 400px;
            margin: 20px;
            margin-left: 180px;
            height: 15vh;
            display: flex;
            padding: 15px;
            border-radius: 12px;

        }
        #gradprofile{
            height: 10vh;
            border-radius: 45px;
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
                background-color: aliceblue;
                height: 18vh;
                border-radius: 12px;
                width: 310px;
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
            color: #1690a7;
            border-bottom: 3px solid #1690a7;
        }
        #formlabel{
            width: 20%;
            font-size: 20px;
        }
        .forminput{
            width: 75%;
            background-color: aliceblue;
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
        #cont{
            text-decoration: none;
            list-style-type: none;
            color: grey;
        }
</style>    
    
</head>
<body>
    <div class="container">
        <div class="row py-3" id="row1" style="align-items: center;">
            <div class="col-md-1">
                <img src="imgs/logo.png" id="logo">
            </div>
            <div class="col-md-8">
                <input id="input1" type="text" placeholder="Search Property"><i class="fa-solid fa-magnifying-glass icon"></i>          
                <input id="input1" type="text" placeholder="Search Investor"><i class="fa-solid fa-magnifying-glass icon"></i>
                <input id="input1" type="text" placeholder="Search Tenant"><i class="fa-solid fa-magnifying-glass icon"></i> 
            </div> 
            <div class="col-md-2">
                <i class="fa-solid fa-bell new-icons"></i>
                <i class="fa-solid fa-comment new-icons"></i>
                <img src="imgs/profile.jpg" id="pro">
                <b><i class="fa-sharp fa-solid fa-angle-down new-icons"></i></b>
            </div>
    </div>
        <div class="row">
            <nav>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Properties</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Tenants</a></li>
                    <li><a href="">Suppliers</a></li>
                    <li><a href="">Maintenance</a></li>
                    <li><a href="">Updates</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-fluid" style="height: 40vh; position: relative; ">
        <img src="imgs/banner.PNG" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="container">
        <div class="row" id="gradient">
            <div class="divgradient">
                    <img src="imgs/profile.jpg" id="gradprofile">
                    <p><b>John Doe</b></p>
            </div>
            <div class="divgradient">
                    <img src="imgs/profile.jpg" id="gradprofile">
                    <p><b>John Doe</b></p>
            </div>
            <p id="unique">309 s 4" St.</p>
        </div>
        <div class="row" style="margin-top: 140px;" id="plans">
            <div class="plan">
                <img src="imgs/ROI.png">
                <p><b>ROI</b><br>0%</p>
            </div>
            <div class="plan">
                <img src="imgs/dollar.jpg">
                <p><b>YEILD</b><br>0%- infinity</p>
            </div>
            <div class="plan">
                <img src="imgs/return.jpg">
                <p><b>Total Return</b><br>5389635</p>
            </div>
            <div class="plan">
                <img src="imgs/totalMonths.jpg">
                <p><b>Total Months</b><br>1 Month</p>
            </div>
        </div>
        <div class="row nav py-5">
            <nav>
                <ul>
                    <li><a href="property.php">Property Details</a></li>
                    <li><a href="">Maintenance</a></li>
                    <li><a href="contractor.php">Contractor</a></li>
                    <li><a href="">Leasing</a></li>
                    <li><a href="">Evication</a></li>
                    <li><a href="images.php">Images</a></li>
                    <li><a href="docs.php">Docs</a></li>
                    <li><a href="renovation.php">Renovation</a></li>
                    <li><a href="marketing.php">Marketing</a></li>
                </ul>
            </nav>
        </div>
        <div class="row" style=" margin-top: 30px; padding-left: 80px; padding-right: 80px; background-color: aliceblue;">
            <div class="col-md-6"><h4 style="margin-top: 15px;">Images</h4></div>
            <div class="col-md-6" id="addimgicon"><img src="imgs/icons8-plus-math-24.png" id="addicon" style="margin-top: 15px;"></div>
            <hr style="color:grey; opacity: .3; height: 1px;">
            <table>
                <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td style="display: flex; margin: 10px;"><img style="width:100px; height:100px;" src="<?php echo $rows['image']; ?>"> </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- owl carousel library-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
    
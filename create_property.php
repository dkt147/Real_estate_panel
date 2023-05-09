<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == 0){
        echo "<script>alert('Property Plan Image is not Selected!')</script>";
    }
    if($error == 1){
        echo "<script>alert('Property Images are not Selected!')</script>";
    }
    if($error == 2){
        echo "<script>alert('Property Documents are not Selected!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">

    <title>Hagag | Create Property</title>
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Fonts Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        *{
            box-sizing: border-box;
        }
        h6{
            color: #4962db;
        }
        #mapid { height: 220px; }
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
            width: 275px;
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
        .input_new{
            margin-left: 95px;
        }
    </style>

    <link rel="icon" type="image/x-icon" href="imgs/logo_2.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body style="                background: #F7F8FA;">
<div class="container">
    <div class="row py-3" id="row1" style="align-items: center;">
        <div class="col-md-1">
            <img src="imgs/logo_2.png" id="logo">
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
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="property.php" style="
            color: #4962db;
            border-bottom: 3px solid #4962db;">Properties</a></li>
                <li><a href="">Investors</a></li>
                <li><a href="">Tenants</a></li>
                <li><a href="">Suppliers</a></li>
                <li><a href="">Maintenance</a></li>
                <li><a href="updates.php">Updates</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container-fluid" style="height: 60vh;margin-top:20px">
    <img src="imgs/main_banner.png" class="img-fluid" style="width: 100%; height: 85%; object-fit: cover;">
</div>
<form action="_create_property.php" method="post" enctype="multipart/form-data">

<div class="container">
    <div class="row" id="gradient">
        <div class="divgradient">
            <img src="imgs/profile.jpg" id="gradprofile">
            <p><b>John Doe</b><br>John Doe</p>
        </div>
        <div class="divgradient">
            <img src="imgs/profile.jpg" id="gradprofile">
            <p><b>John Doe</b><br>John Doe</p>
        </div>
        <p id="unique"></p>
    </div>
    <div class="row" style="margin-top: 140px;" id="plans">
        <div class="plan">
            <img src="imgs/ROI.png">
            <p><b>ROI</b><br><input required type="text" name="roi" class="form-control input_new" style="width: 100px;height: 20px" placeholder="ROI %"></p>
        </div>
        <div class="plan">
            <img src="imgs/dollar.jpg">
            <p><b>YEILD</b><br><input required type="text" name="yiel" class="form-control input_new" style="width: 100px;height: 20px" placeholder="Yiel %"></p>
        </div>
        <div class="plan">
            <img src="imgs/return.jpg">
            <p><b>Total Return</b><br><input required type="text" name="total_return" class="form-control input_new" style="width: 100px;height: 20px" placeholder="Return"></p>
        </div>
        <div class="plan">
            <img src="imgs/totalMonths.jpg">
            <p><b>Total Months</b><br><input required type="text" name="month" class="form-control input_new" style="width: 100px;height: 20px" placeholder="Month"></p>
        </div>
    </div>
    <div class="row nav py-5" style="">
        <nav>
            <ul>
                <li><a href="property.php" style="
            color: #4962db;
            border-bottom: 3px solid #4962db;">Property Details</a></li>
                <li><a href="">Maintenance</a></li>
                <li><a href="contractor.php">Contractor</a></li>
                <li><a href="">Leasing</a></li>
                <li><a href="">Evication</a></li>
                <li><a href="docs.php">Docs</a></li>
                <li><a href="images.php">Images</a></li>
                <li><a href="renovation.php">Renovation</a></li>
                <li><a href="marketing.php">Marketing</a></li>
            </ul>
        </nav>
    </div>
    <hr style="color:grey; opacity: .3; height: 1px; margin-top: -30px;">
    <div class="row" style="padding-left: 80px; padding-right: 80px; background-color: white;
    padding-top: 18px;">
        <div class="col-md-6"><h4 style="margin-top: 5px;">Property Details</h4></div>


        <hr style="color:grey; opacity: .3; height: 1px; margin-top: 10px;">
        <!--                <form style="margin: 15px; padding: 5px;" action="" method="post" class="form-group">-->
        <!--                        <label id="formlabel" >S</label>-->
        <!--                        <input required class="forminput form-control" type="text" name="year"><br>-->
        <!--                        <label id="formlabel">Property Type</label>-->
        <!--                        <input required class="forminput" type="text" name="propertytype"><br>-->
        <!--                        <label id="formlabel">Address</label>-->
        <!--                        <input required class="forminput" type="text" name="address"><br>-->
        <!--                        <label id="formlabel">Type Id.</label>-->
        <!--                        <select class="forminput" name="type">-->
        <!--                            <option value="" >Select Type Id</option>-->
        <!--                        </select><br>-->
        <!--                        <label id="formlabel">User Id.</label>-->
        <!--                        <input required class="forminput" type="text" name="userid"><br>-->
        <!--                        <label id="formlabel">Started at.</label>-->
        <!--                        <input required class="forminput" type="text" name="startedat"><br>-->
        <!--                        <label id="formlabel">Ended at.</label>-->
        <!--                        <input required class="forminput" type="text" name="endedat"><br>-->
        <!--                        <label id="formlabel">Rooms</label>-->
        <!--                        <input required class="forminput" type="text" name="rooms"><br>-->
        <!--                        <label id="formlabel">sqre ft.</label>-->
        <!--                        <input required class="forminput" type="text" name="sqreft"><br>-->
        <!--                        <label id="formlabel">No. of Bedrooms:</label>-->
        <!--                        <input required class="forminput" type="text" name="bedrooms"><br>-->
        <!--                        <label id="formlabel">No. of Bathrooms</label>-->
        <!--                        <input required class="forminput" type="text" name="bathrooms"><br>-->
        <!--                        <label id="formlabel">Target Rent</label>-->
        <!--                        <input required class="forminput" type="text" name="rent">-->
        <!--                        <label id="formlabel">Location</label>-->
        <!--                        <input required class="forminput" type="text" name="location"><br>-->
        <!--                        <label id="formlabel">Created at</label>-->
        <!--                        <input required class="forminput" type="text" name="createdat"><br>-->
        <!--                        <label id="formlabel">Deleted at.</label>-->
        <!--                        <input required class="forminput" type="text" name="deletedat"><br>-->
        <!--                        <label id="formlabel">Updated at</label>-->
        <!--                        <input required class="forminput" type="text" name="updatedat"><br>-->
        <!--                </form>-->
        <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="first">Status:</label>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-10">
                        <div class="form-group" style="margin-bottom: 20px">
                            <input  type="radio" name="status" id="contact-preference" value="active"  style="width: 104px;height: 20px;"><label>Active</label>
                            <input  type="radio" name="status" id="contact-preference" value="non-active"  style="width: 104px;height: 20px;"><label>Non-Active</label>
                            <input  type="radio" name="status" id="contact-preference" value="sold-out"  style="width: 104px;height: 20px;"><label>Sold-Out</label>
                        </div>
                    </div>
                </div>
                <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">Year:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="year" name="year">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">Property Type:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <select class="form-control" name="type">
                        <?php
                        include 'conn.php';
                            $query = "SELECT * FROM property_type";
                            $result = mysqli_query($con,$query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <option class="form-control" value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">Branch:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="branch" name="branch">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">Sqft.:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="sqft" name="sqft">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">No of Bedrooms:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="bedrooms" name="bedrooms">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">No of Bathroom:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="bathroom" name="bathroom">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row" style="margin-bottom: 50px">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="first">Price:</label>
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-10">
                <div class="form-group">
                    <input required type="text" class="form-control" placeholder="" id="price" name="price">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
    </div>

</div>
</div>

<div class="container">
    <div class="row" id="imageslider" style="height: 150px; margin-top: 10px; padding-left: 80px; padding-right: 80px; background-color: white;">
        <div class="col-md-6"><h4 style="margin-top: 15px;">Images</h4></div>
                    <div class="col-md-6" id="addimgicon" onclick="uploadImage()"><img src="imgs/icons8-plus-math-24.png" id="addicon" style="margin-top: 15px;"></div>
        <hr style="color:grey; opacity: .3; height: 1px; margin-top: -36px;">

        <input id="image-input" type="file" name="images[]" multiple  style="display: none"/>
    </div>

</div>

    <div class="container">
        <div class="row" id="imageslider" style="height: 150px; margin-top: 10px; padding-left: 80px; padding-right: 80px; background-color: white;">
            <div class="col-md-6"><h4 style="margin-top: 15px;">Choose Plan Image</h4></div>
            <div class="col-md-6" id="addimgicon" class="addicon" onclick="uploadplaneImage()" ><img src="imgs/icons8-plus-math-24.png" id="addicon" class="addicon" style="margin-top: 15px;"></div>
            <hr style="color:grey; opacity: .3; height: 1px; margin-top: -36px;">
                <input id="file-input" type="file" name="plan_image" style="display: none"/>
            </div>

        </div>

    </div>

<div class="container">
    <div class="row" id="imageslider" style="height: 300px; margin-top: 10px; padding-left: 80px; padding-right: 80px; background-color: white;">
        <div class="col-md-6"><h4 style="margin-top: 15px;">Docs</h4></div>
                    <div class="col-md-6" id="addimgicon" onclick="uploadDocs()" ><img src="imgs/icons8-plus-math-24.png" id="addicon" style="margin-top: 15px;"></div>
        <hr style="color:grey; opacity: .3; height: 1px; margin-top: -36px;">

        <input id="doc-input" type="file" name="docs[]" multiple  style="display: none"/>
    </div>

</div>

<!--<div class="container">-->
<!--    <div class="row" id="imageslider" style="height: 300px; margin-top: 10px; padding-left: 80px; padding-right: 80px; background-color: white;">-->
<!--        <div class="col-md-6"><h4 style="margin-top: 15px;">Facilities</h4></div>-->
<!--                    <div class="col-md-6" id="addimgicon"><img src="imgs/icons8-plus-math-24.png" id="addicon" style="margin-top: 15px;"></div>-->
<!--        <hr style="color:grey; opacity: .3; height: 1px; margin-top: -36px;">-->
<!--        <div class="col-xs-6 col-md-2 col-md-offset-1" style="margin-left: 30px">-->
<!--            <img class="img-responsive" src="imgs/1.jpg" height="130px" />-->
<!--        </div>-->
<!--        <div class="col-xs-6 col-md-2" style="margin-left: 30px">-->
<!--            <img class="img-responsive" src="imgs/1.jpg" height="130px"/>-->
<!--        </div>-->
<!---->
<!--        <div class="col-xs-6 col-md-2" style="margin-left: 30px">-->
<!--            <img class="img-responsive" src="imgs/1.jpg" height="130px"/>-->
<!--        </div>-->
<!--        <div class="col-xs-6 col-md-2" style="margin-left: 30px">-->
<!--            <img class="img-responsive" src="imgs/1.jpg" height="130px"/>-->
<!--        </div>-->
<!--        <div class="col-xs-6 col-md-2" style="margin-left: 30px">-->
<!--            <img class="img-responsive" src="imgs/1.jpg" height="130px"/>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->

<div class="container">
    <div class="row" style="height: 330px; margin-top: 30px; padding-left: 80px; padding-right: 80px; background-color: white;">
        <div class="col-md-6"><h4 style="margin-top: 15px;">Property Details</h4></div>
        <hr style="color:grey; opacity: .3; height: 1px; ">
            <input required type="textarea" style= "width:100%;  height:160px;" name="description" placeholder="Please Enter Complete Address">
    </div>
</div>

    <div class="container">
        <div class="row" style="height: 330px; margin-top: 30px; padding-left: 80px; padding-right: 80px; background-color: white;">
            <div class="col-md-6"><h4 style="margin-top: 15px;">Address</h4></div>
            <hr style="color:grey; opacity: .3; height: 1px; ">
            <input required type="textarea" style= "width:100%;  height:160px;" name="address" placeholder="Please Enter Location Address">
        </div>
    </div>

<div class="container">
    <div class="row" style="height: 330px; margin-top: 30px; padding-left: 80px; padding-right: 80px; background-color: white;">
        <div class="col-md-6"><h4 style="margin-top: 15px;">Location</h4></div>
        <hr style="color:grey; opacity: .3; height: 1px; ">

        <input required type="textarea" style= "width:100%;  height:160px;" name="url" placeholder="Please Paste Google Location URL">
<!--        <div id="mapid"></div>-->
    </div>
</div>

<div class="endbtns" style="display: flex; height: 10vh; margin-top:30px;margin-left:20%;">
    <input type="submit" class="save" value="Save" style="text-decoration: none;padding-left: 45px;padding-bottom: 30px;">
    <a class="cancel" href="home.php" style="text-decoration: none;padding-left: 30px;padding-bottom: 30px;">Cancel</a>
</div>
</div>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="index.js"></script>

<script>
    $(document).ready(function(){

        var mymap = L.map('mapid').setView([51.505, -0.09], 13)

// add the OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            { subdomains: ['a', 'b', 'c'] })
            .addTo(mymap)



    });
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
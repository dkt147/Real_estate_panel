<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
?>
<?php 
    include('conn.php');
    $query = "select * from property";
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
    <!--Fonts Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
        
        input{
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
        .card{
            margin: 0px;
            padding: 0px;
            width: 30%;
            height: 45vh;
            border-radius: 20px;
            position: relative;
        }
        .card-img img{
            width: 100%;
            border-radius: 20px;
        }
        .card-btn{
            position: absolute;
            top: 5%;
            border-radius: 20px;
            border: none;
            background-color: #fff;
            color: #1690a7;
            padding: 10px;
            font-weight: bold;
            margin-left: 20px;
            padding-inline: 15px;
        }
        .imgheading{
            position: absolute;
            top: 50%;
            color: #fff;
            margin-left: 20px;
        }
        .loremtxt{
            position: absolute;
            color: #fff;
            top: 45%;
            margin-left: 20px;
            font-size: 18px;
            margin-top: 5px;
        }
        .cardvector{
            margin-top: 15px;
        }
        #vector{
            width: 40px;
            margin-inline: 25px;
        }
       .des{
        display: flex;
       }
       .des p{
        color: grey;
        font-weight: bold;
        margin-inline: 30px;
       }
       
    
        

</style>    
    
</head>
<body>
<h6>Welcome, <?php echo $_SESSION['name']; ?> </h6>
<a id="logoutbtn" href="logout.php">Logout</a>
    <div class="container">
    
        <div class="row py-3" id="row1" style="align-items: center;">
                <div class="col-md-1">
                    <img src="imgs/logo.png" id="logo">
                </div>
                <div class="col-md-8">
                    <input type="text" placeholder="Search Property"><i class="fa-solid fa-magnifying-glass icon"></i>          
                    <input type="text" placeholder="Search Investor"><i class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Search Tenant"><i class="fa-solid fa-magnifying-glass icon"></i> 
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
                    <li><a href="property.php">Properties</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Tenants</a></li>
                    <li><a href="">Suppliers</a></li>
                    <li><a href="">Maintenance</a></li>
                    <li><a href="">Updates</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-fluid" style="height: 40vh;">
        <img src="imgs/banner.PNG" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="container py-5">
        <div class="row" >
            <div class="col-md-6"><h4>10 Deals</h4></div>
            <div class="col-md-6" id="addimgicon"><a href="property.php"><img src="imgs/icons8-plus-math-24.png" id="addicon" ></a></div>
        </div>
        <hr style="color:grey; opacity: .3; height: 1px;">
        <div class="row">
            <div class="card">
                <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                    <div class="card-img">
                        <button class="card-btn">Random-Text</button>
                        <img src="imgs/1.jpg">
                        <p class="loremtxt"><?php echo $rows['description']; ?></p>
                    </div>
                    <div class="cardvector">
                        <img id="vector" src="imgs/dollar.png">
                        <img id="vector" src="imgs/yeild.png">
                        <img id="vector" src="imgs/arrow.png">
                        <img id="vector" style="width: 50px; margin-inline: 30px;" src="imgs/calender.png">
                    </div>
                    <div class="des">
                        <p>ROI<br>0%</p>
                        <p style="margin-left: 32px;">Yeild<br>&nbsp;&nbsp;8%</p>
                        <p style="margin-left: 25px;">hfjhufi<br>643284</p>
                        <p style="margin-inline: 20px;">Months<br>&nbsp;&nbsp;&nbsp;&nbsp;2</p>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</body>
<!-- JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>

<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
?>
<?php 
    include('conn.php');

    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        $query = "select property.*,analysis.* from property JOIN analysis ON analysis.p_id = property.id where address like '$name%' order by property.id desc";
    }else{
        $query = "select property.*,analysis.* from property JOIN analysis ON analysis.p_id = property.id order by property.id desc";
    }
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Fonts Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
        *{
            box-sizing: border-box;
        }
        h6{
            color: #4962db;
        }
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
            color: gray;
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
        .card{
            margin: 0px;
            padding: 0px;
            width: 30%;
            margin: 10px;
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
            color: #4962db;
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
            width: 36px;
            margin-inline: 25px;
        }
       .des{
        display: flex;
       }
       .des p{
        color: grey;
        font-weight: bold;
        margin-inline: 26px;
       }
        .container .btn {
            position: absolute;
            top: 9%;
            left: 21%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #fff;
            /* color: #1690a7; */
            font-size: 12px;
            padding: 6px 35px;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            font-weight: bold;
        }
    
        .fa-magnifying-glass{
            transform: translate(-11px, 1px);
        }


        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
</style>

    <link rel="icon" type="image/x-icon" href="imgs/logo_2.png">
    <title>Hagag | Home</title>
</head>
<body>
<!--<h6>Welcome, --><?php //echo $_SESSION['name']; ?><!-- </h6>-->
<!--<a id="logoutbtn" href="logout.php">Logout</a>-->
    <div class="container">
    
        <div class="row py-3" id="row1" style="align-items: center;">
                <div class="col-md-1">
                    <img src="imgs/logo_2.png" id="logo">
                </div>
                <div class="col-md-8">
                    <input type="text" placeholder="Search Property" onkeydown="search(this)"><i class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Search Investor"><i class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Search Tenant"><i class="fa-solid fa-magnifying-glass icon"></i> 
                </div> 
                <div class="col-md-2">
                    <i class="fa-solid fa-bell new-icons" onclick="redirectToSection()"></i>
                    <i class="fa-solid fa-comment new-icons" onclick="redirectToChat()"></i>
                    <img src="imgs/profile.jpg" id="pro">
                    <b><i class="fa-sharp fa-solid fa-angle-down new-icons dropbtn" onclick="myFunction()"></i></b>

                    <div id="myDropdown" class="dropdown-content">
                        <a href="leads.php">Leads</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
        </div>
        <div class="row">
            <nav>
                <ul>
                    <li><a href="home.php" >Dashboard</a></li>
                    <li><a href="home.php" >Properties</a></li>
                    <li><a href="">Investors</a></li>
                    <li><a href="">Tenants</a></li>
                    <li><a href="suppliers.php" style="
            color: #4962db;
            border-bottom: 3px solid #4962db;">Suppliers</a></li>
                    <li><a href="">Maintenance</a></li>
                    <li><a href="updates.php">Updates</a></li>
                </ul>
            </nav>
        </div>
    </div>



    </div>
</body>
<!-- JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


    <script>
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");

        $("#profile-img").click(function() {
            $("#status-options").toggleClass("active");
        });

        $(".expand-button").click(function() {
            $("#profile").toggleClass("expanded");
            $("#contacts").toggleClass("expanded");
        });

        $("#status-options ul li").click(function() {
            $("#profile-img").removeClass();
            $("#status-online").removeClass("active");
            $("#status-away").removeClass("active");
            $("#status-busy").removeClass("active");
            $("#status-offline").removeClass("active");
            $(this).addClass("active");

            if($("#status-online").hasClass("active")) {
                $("#profile-img").addClass("online");
            } else if ($("#status-away").hasClass("active")) {
                $("#profile-img").addClass("away");
            } else if ($("#status-busy").hasClass("active")) {
                $("#profile-img").addClass("busy");
            } else if ($("#status-offline").hasClass("active")) {
                $("#profile-img").addClass("offline");
            } else {
                $("#profile-img").removeClass();
            };

            $("#status-options").removeClass("active");
        });

        function newMessage() {
            message = $(".message-input input").val();
            if($.trim(message) == '') {
                return false;
            }
            $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
            $('.message-input input').val(null);
            $('.contact.active .preview').html('<span>You: </span>' + message);
            $(".messages").animate({ scrollTop: $(document).height() }, "fast");
        };

        $('.submit').click(function() {
            newMessage();
        });

        $(window).on('keydown', function(e) {
            if (e.which == 13) {
                newMessage();
                return false;
            }
        });
    </script>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
<script>
    function search(ele) {
        if(event.key === 'Enter') {
            window.location.replace('home.php?name='+ele.value);
        }
    }

    function redirectToSection(){
        window.location.replace(`notification.php`);
    }

    function redirectToChat(){
        window.location.replace(`chat.php`);
    }

</script>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>

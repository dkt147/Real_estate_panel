
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
                <li><a href="home.php" style="
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

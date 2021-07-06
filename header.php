<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Cellular Planet</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
					<li><a href = "about.php"><span class = "glyphicon glyphicon-plane"></span> AboutUs</a></li>
                    <li><a href = "contact.php"><span class = "glyphicon glyphicon-earphone"></span>Contact</a></li>
					<li><a href = "settings.php"><span class = "glyphicon glyphicon-wrench"></span>Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    
                    <?php
                } else {
                    ?>
					<li><a href = "about.php"><span class = "glyphicon glyphicon-plane"></span>AboutUs</a></li>
					<li><a href = "contact.php"><span class = "glyphicon glyphicon-earphone"></span>Contact</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
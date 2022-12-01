<?php
    echo '<div class="navbar navbar-expand navbar-inverse">
    <div class="container-fluid">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">DMF Shop</a>
                </div>

                <div class="navbar-collapse collapse" id="navbarNavDarkDropdown">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li>
                            <form action="" class="navbar-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#" class="dropdown" data-bs-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Sign Up</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
?>
<!--HEADER-->
<header>



    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position"> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                       <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>-->
                        <div class="lgx-logo lgx-logo-fixed "> <!--lgx-logo-default lgx-logo-fixed lgx-logo-white lgx-logo-black-->
                            <a href="index.php" class="lgx-scroll">
                                <img src="assets\img\logo.jpg" alt="Rasbhog Logo"/>
                            </a>
                        </div>
                    </div>
                    
                    <div id="navbar" class="navbar-collapse collapse lgx-collapse">
                    <div align="right" ><strong>&emsp;Date :- <?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
echo date('d-m-Y');
?></strong>&emsp;&emsp;&emsp;
<span><strong>Time :- <?php echo date('H:i');?></strong></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                        <ul class="nav navbar-nav lgx-nav">
                            <li><a class="lgx-scroll active" href="index.php">Home</a></li>  
                            <!--<li><a class="lgx-scroll active" href="outlet.php">Outlets</a></li>-->
                            <li><a class="lgx-scroll active" href="#lgx-about">About</a></li>
                            <li><a class="lgx-scroll" href="#lgx-menu">Menu</a></li>
                            <li><a class="lgx-scroll" href="outlet.php">Outlets</a></li>
                           
                           <li><a class="lgx-scroll" href="contact.php"><span>Contact Us</span></a></li>
                        </ul>
                        <!--<div class="lgx-nav-right">
                            <div class="lgx-search">
                                <a href="#"><i class="fa fa-search"></i></a>
                                <div class="search">
                                    <form action="#" method="GET" role="search">
                                        <input type="text" class="form-control input" name="q" placeholder="Search for snippets and hit enter">
                                    </form>
                                    <div class="close"><i class="fa fa-close"></i></div>
                                </div>
                            </div>
                            <div class="lgx-cart-area">
                                <a class="lgx-cart" href="#">
                                    <img src="assets/img/cart-icon.png" alt="cart">
                                    <span class="notification">2</span>
                                </a>
                            </div>
                        </div>-->
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->

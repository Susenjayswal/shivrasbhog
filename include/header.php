<!--HEADER-->
<header>



    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position">
            
            <div class="lgx-container">
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo lgx-logo-fixed ">                            
                            <a href="index.php" class="lgx-scroll">
                                <img src="assets\img\logo.jpg" alt="Rasbhog Logo" />
                            </a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse lgx-collapse">
                        <div align="right"><strong>&emsp;Date :-
                                <?php
                                date_default_timezone_set("Asia/Calcutta"); //India time (GMT+5:30)
                                echo date('d-m-Y');
                                ?>
                            </strong>&emsp;&emsp;&emsp;
                            <strong><span id="Time"></span>
                            <script type="text/javascript">function setInterval();</script>
                            </span></strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </div>
                        <ul class="nav navbar-nav lgx-nav">
                            <li><a class="lgx-scroll active" href="index.php">Home</a></li>
                            <li><a class="lgx-scroll active" href="#lgx-about">About</a></li>
                            <li><a class="lgx-scroll" href="#lgx-menu">Menu</a></li>
                            <li><a class="lgx-scroll" href="outlet.php">Outlets</a></li>
                            <li><a class="lgx-scroll" href="contact.php"><span>Contact Us</span></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->
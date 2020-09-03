<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="" type="image/png">
    <?php $layout->renderCss(); ?>
</head>

<body>

<!--Header-->
    <div class="navigation-wrap start-header start-style">
        <div class="container container-wrapper">
            <div class="row">
                <div class="col-12 p-0 nav-starter">
                    <nav class="navbar navbar-expand-md navbar-light">
                    
                        <a class="navbar-brand" href="#" target="_blank"><img src="<?php echo $tag->getImageUri('assets/front/images/site-logo.png'); ?>" alt=""></a>	
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
                                    <a class="nav-link" href="#">Grey Matter</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 active">
                                    <a class="nav-link" href="#">Connect</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 login-btn">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 signup-btn">
                                    <a class="nav-link" href="#">Sign Up</a>
                                </li>
                            </ul>
                        </div>       
                    </nav>		
                </div>
            </div>
        </div>
    </div>
<!--Header-->


<!--Footer-->
    <footer>
        <div class="container container-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <ul>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Grey Matter</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8  col-sm-12 col-xs-12 text-md-right copyright-wrapper pt-4">
                            <ul>
                                <li>
                                    Powered by Meridian Learning Solutions
                                </li>
                                <li>
                                    Copyright © 2020 Meridian Learning Solutions
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--Footer-->

    <?php $layout->renderJs(); ?>
</body>
</html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Site Plane Online </title>
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	 <style>
            .header 
            {

                height : auto;
                background-color : #0f5ead;

            }

            

            .separated-header
            {

                height : 2px;
                background-color : #333333;
                margin-bottom :10px;
            }


            .footer
            {
                margin-top: 50px;
                padding-top : 20px;
                padding-bottom:20px;
                height : auto;
                background-color : #333;
            }
			
			.navbar-custom {
				background-color:#333333;
				color:#ffffff;
				border-radius:0;
				font-size:9pt;
			}
			  
			.navbar-custom .navbar-nav > li > a {
				color:#fff;
				padding-left:20px;
				padding-right:20px;
			}
			.navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
				color: #ffffff;
				background-color:#222222;
			}
				  
			.navbar-custom .navbar-nav > li > a:hover, .nav > li > a:focus {
				text-decoration: none;
				background-color: 	#222222;
			}
				  
			.navbar-custom .navbar-brand {
				color:#333333;
			}
			.navbar-custom .navbar-toggle {
				background-color:#333333;
			}
			.navbar-custom .icon-bar {
				background-color:#ffffff;
			}
			
			.dropdown-toggle:active, .open .dropdown-toggle {
				background:	#222222 !important; color:#fff !important;
			}
			

			
			.navbar .nav li.dropdown > .dropdown-toggle .caret {
				border-bottom-color: #FFFFFF;
				border-top-color: #FFFFFF;
			}
			
			.navbar-default .navbar-toggle .icon-bar {
				background-color:#ffffff;
			}
			




            .navbar-fixed2
            {

                z-index:1000;
                right:0px;
                left:0px;
            }

            .list-group-custom 
            {
                font-size:10pt;
            }

            .link-footer
            {
                color : white;

            }

            ul.link-footer
            {
                list-style-type: none;
            }

            .link-sidebar 
            {
                color:black;
            }

            .link-berita
            {
                color:black;
                font-size:18pt;
            }

            .link-berita:hover
            {
                color:blue;
                font-size:18pt;
            }

            a.link-sidebar:hover
            {
                color:blue;
            }

            .link-sidebar
            {
                font-size:10pt;
            }

            .logo 
            {
                float : left;
                margin-top: 10px;
                margin-bottom: 10px;
				-webkit-filter: drop-shadow(2px 2px 2px #222); 
				filter: drop-shadow(2px 2px 2px #222);
            }



            .equal, .equal > div[class*='col-'] {  
                display: -webkit-flex;
                display: flex;
                flex:1 1 auto;
            }


             .logo-tulisan 
            {
                margin-left:15px;
                font-size:17pt;
                font-family:calibri;
                line-height:18pt;
                font-weight:bold;
                color:white;
                float : left;
                margin-top: 25px;
                margin-bottom: 10px;
				text-shadow:1px 1px #000000;
            }

            .tulisan
            {
                float:left;
                margin-top : 25px;
            }		

            a{ 
                text-decoration: none; 
            }

            a:hover { 
                text-decoration: none; 
            }

            .back-to-top {
                position: fixed;
                bottom: 2em;
                right: 0px;
                text-decoration: none;
                color: #000000;
                background-color: rgba(235, 235, 235, 0.80);
                font-size: 12px;
                padding: 1em;
                display: none;
            }

            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;

                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }

        </style>
    </head>
    <body>
        <!-- Navbar Top -->
        <!-- Header -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <img style="width:100px;margin-top:10px;" src="<?php echo base_url();?>assets/img/logo.png" alt="...">
                </div>
                <div class="logo-tulisan">
                    SISTEM INFORMASI SITEPLAN ONLINE<br> Dinas Tata Ruang Dan Cipta Karya <br> KOTA BANDUNG
                </div>

            </div>
        </div>
		<div class="navbar navbar-custom navbar-fixed2">
            <div class="container">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
               <div class="navbar-collapse collapse navbar-responsive-collapse" style="padding-left:0px;">
                    <ul class="nav navbar-nav">
                        <li class=''><a href="<?php echo base_url();?>">BERANDA</a></li>
                        <li class=''><a href="<?php echo base_url();?>portal/portal/panduan">PANDUAN</a></li>
                        <li class=''><a href="<?php echo base_url();?>portal/portal/pendaftaranPengusul">PENDAFTARAN</a></li>
                    </ul>
                  
                </div>
            </div>
        </div>
        <!-- End of Navbar Top-->
	
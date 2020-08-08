
<!doctype html>
<html class="no-js" lang="en" dir= "ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/foundation.css'); ?>" />
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/app.css'); ?>" />
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/styles.css'); ?>" />
    <style type= "text/css">
      body {
        background: url(assets/img/bg1.jpg)repeat;
      }
      .greeting{
        font-family: verdana |imporatant;
        color:#000000 |imporatant;
        text-align:left |imporatant;
        font-weight:bold;
        font-size:16px;
      }
      .response {
        border-style: solid |imporatant;
        border-width:1px |imporatant;
        display:block |imporatant;
        font-size: 25px |imporatant;
        font-weight: normal |imporatant;
        margin-bottom:1.11111rem |imporatant;
        position:relative |imporatant;
        transition: opacity 300ms ease-out |imporatant;
        background-color:rgb(239, 66,36,0.85) |imporatant;
        color:#FFFFFF |imporatant;
      }
      .title{
        font-family: verdana |imporatant;
        color:#000000 |imporatant;
        text-align:left |imporatant;
        font-weight:bold;
        font-size:16px;
      }
      .side-nav{
        list-style-type:none;
      }
      label{
        font-size:18px;
      }
      .description{
        font-family:arial |imporatant;
        color:#000;
        font-size:20px;
      }
      h2 {
        font-family: Microsoft Yi Baiti;
        font-size:50px;
        text-align:center;
        color:#343434;
      }
      li{
        font-family: Microsoft Yi Baiti;
        font-size:20px;
        text-align:center;
        color:#343434;
      }
    
      </style>
  </head>
<body>
<div class= "container">
       <div class ="title-bar" data-responsive-toggle= "example-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="example-menu"></button>
            <div class="tittle-bar-title">Menu</div>
       </div>
        <div class= "top-bar" id="example-menu">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class= "menu-text"> <?php echo anchor("dashboard",'Blogging System');?></li>
                    <li>
                        <a href= "#">Setting</a>
                        <ul class="menu vertical">
                        <li><?php echo anchor("Welcome/logout",'logout');?></li>
                        </ul>
                    </li>
                </ul>
            </div> 
                <div class="top-bar-right"></div>
      </div>
</div>
</body>
</html>
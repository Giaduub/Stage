<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Ubuntu?preview.text_type=custom">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>La couveuse des innovateurs</title>
  </head>
  <body>


  <div class="topnav" id="myTopnav">
    
  <a href="#home" class="active">Home</a>
  <?php
          wp_nav_menu( array(
          'container' =>'nav',
          'class' =>'bangers',
          'theme_location' => '',
          'menu_id' => '',
          'echo' => true,
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'depth' => 0,
          'items_wrap' => '%3$s',
          'walker' => '')
          );
          ?>
          <li id="menu-item-230"class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2030">
  <a href="javascript:void(0);" class="icon" onclick="myFunction()"></li>
    <i class="fa fa-bars"></i>
  </a>
</div>

  


<style>
.topnav li{
  list-style: none;
}
.topnav a{
  color:black!important;

}
 /* Effect 1: Brackets */
 .topnav li::before,
  .topnav li::after {
	display: inline-block;
	opacity: 0;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.2s;
	-moz-transition: -moz-transform 0.3s, opacity 0.2s;
	transition: transform 0.3s, opacity 0.2s;
}

.topnav li::before {
	margin-right: 10px;
	content: '[';
  color: #E0272B;
	-webkit-transform: translateX(20px);
	-moz-transform: translateX(20px);
	transform: translateX(20px);
}

.topnav li::after {
	margin-left: 10px;
	content: ']';
  color: #E0272B;
	-webkit-transform: translateX(-20px);
	-moz-transform: translateX(-20px);
	transform: translateX(-20px);
}

.topnav li:hover::before,
.topnav li:hover::after,
.topnav li:focus::before,
.topnav li:focus::after {
	opacity: 1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	transform: translateX(0px);
}



/* Add a black background color to the top navigation */
.topnav {
  background-color: white;
  position: sticky;
  top:0.000001%;
  overflow: hidden;
  z-index: 9999;
}

/* Style the links inside the navigation bar */
.topnav .active {
  float: left;
  display: block;
  color: white!important;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}
.topnav li {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}


/* Change the color of links on hover */
.topnav li:hover {
  background-color: #ddd;

}



.topnav li>a:hover{
  color:#E0272B!important;
}

/* Add an active class to highlight the current page */
.topnav a.active li.active {
  background-color: #E0272B;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
  color: #E0272B;
}
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav li:not(:first-child) {display: none;}
  .topnav li.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: sticky;}
  .topnav.responsive li.icon {
    position: sticky;
  top:0.000001%;
    right: 0;
    top: 0;
  }
  .topnav.responsive li {
    float: none;
    display: block;
    text-align: left;
  }
}


</style>
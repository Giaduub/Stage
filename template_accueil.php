<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<?php $sponso = get_field('sponsor'); 
$today = date("Y");?>


<!-- Image top Header  -->
<div class="container-fluid imgtop"> 
  <a href="#" class="contactez bottom-line white t1"> Contactez-nous</a>
  <div class="row">
    <div class="col-12">
         
    </div>
  </div>
</div>


<!-- Double box  -->
<div class="container-fluid">
  <div class="row align-self-stretch">
    <div class="col-sm-12 col-md-6 col-lg-6 box1">

    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 box2">

    </div>
  </div>
</div>


<!-- Agenda -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 agenda">

    </div>
  </div>
</div>

<!-- Sponsors -->
<div class="container-fluid sponsor">
  <hr class="top-line-black mt-4">
<div class="row">
<div class="col-12">
<h2 class='text-center mt-2'> Nos sponsors : ils nous accompagnent en <?= $today ?> </h2>
</div>
</div>
  <div class="row justify-content-center text-center mt-4">
      <?php for ($i=0; $i < count($sponso); $i++){
     echo ' <div class="col-6 col-md-4 col-lg-3 mt-4 p-0">
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="..." style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>
<?php get_footer(); ?>
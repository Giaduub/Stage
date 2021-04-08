<?php /* Template Name: page partenaires*/ ?>

<?php get_header(); ?>

<?php $sponso = get_field('sponsor'); 
$today = date("Y"); 
$raiponce = get_field('lesquestions');?>

<!-- Banner -->
<div class="col-sm-12 col-md-12 col-lg-12  ">
  <div class="banner-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>  
  <div class="row justify-content-center align-items-center fond-page">
  <div class="banner-middle ">
  
    <h2 class='text-center mb-2 ubuntubold white bord-title'> <?=wp_title() ?> </h2></div>
    
  </div>
  <div class="raid-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
</div>
<!-- End Banner -->



<!-- Sponsors -->
<div class="container-fluid sponsor mb-4">
  <hr class="top-line-black mt-4">
<div class="row">
<div class="col-12">
<h2 class='text-center mt-2'> Nos sponsors : ils nous soutiennent en <?= $today ?> </h2>
</div>
</div>
  <div class="row justify-content-center text-center mt-4">
      <?php for ($i=0; $i < count($sponso); $i++){
     echo ' <div class="col-6 col-md-4 col-lg-3 mt-4 p-0">
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>
<!-- End  -->

<!-- Partenaires -->
<div class="container-fluid sponsor mb-4">
  <hr class="top-line-black mt-4">
<div class="row">
<div class="col-12">
<h2 class='text-center mt-2'> Nos partenaires : ils nous accompagnent en <?= $today ?> </h2>
</div>
</div>
  <div class="row justify-content-center text-center mt-4">
      <?php for ($i=0; $i < count($sponso); $i++){
     echo ' <div class="col-6 col-md-4 col-lg-3 mt-4 p-0">
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>
<!-- End -->



<!-- Questions  -->
<div class="container pb-4">
 <div class="row">
 <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-12 col-md-6 col-lg-6"><button type="button" class="collapsible cross ubuntubold mt-4">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p>'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
   </div></div>
<!-- End -->



<div class="container">
<div class="row justify-content-center">
<div class="col-11 mt-4 mb-4">
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione vel doloremque beatae soluta iste eius doloribus tempora a tenetur, eligendi ipsum assumenda sed velit repudiandae illo. Aperiam tenetur sequi maxime.</p></div></div>
<div class="row justify-content-center">
<div class="col-8 col-md-6 col-lg-4 mb-4">
<button class="candidat"><a href="mailto:test@test.fr">Envoyer une candidature</button></div></div></div>



<?php get_footer(); ?>
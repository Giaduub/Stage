<?php /* Template Name: page partenaires*/ ?>

<?php get_header(); ?>

<?php $sponso = get_field('sponsor'); 
$today = date("Y"); 
$raiponce = get_field('lesquestions');?>


<div class="container-fluid ">
    <div class="row align-items-center fond-page ">
        <div class="  col-12 ">
            <h1 class="text-center white "> <?= wp_title() ?> </h1>
        </div>
    </div>
</div>

<div class="container-fluid sponsor">
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
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>





 <div class="container pb-4">
 <div class="row">
 <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-6"><button type="button" class="collapsible mt-4">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p>'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
   </div></div>




<?php get_footer(); ?>
<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<?php $sponso = get_field('sponsor'); 
$today = date("Y");
$imgtop = get_field('image-top'); ?>


<!-- Image top Header  -->
<div class="container-fluid imgtop">
  <a href="#" class="contactez bottom-line white t1"> Contactez-nous</a>

</div>
<style>
  <?php $imgTop=get_field('image-top');
  echo '.imgtop{
background-image:url('.$imgtop.');
  background-repeat: no-repeat;
  background-size: cover;
  background-position:center;
  }

  '
?>
</style>



<!-- Double box  -->
<div class="container-fluid">
  <div class="row align-self-stretch">


<!-- First box -->
    <div class="col-sm-12 col-md-12 col-lg-6 box1 ">
      <div class="red-top"><img src="wp-content/themes/base/img/haut-img.png" alt=""></div>
      <div class="red-middle ">
      <hr class="top-line-white ">
      <h2 class='text-center mb-2 ubuntubold white'> Qui sommes-nous ? </h2>
      <div class="row mb-2 justify-content-center">
        <div class="col-11 col-md-8 col-lg-7 "><p class="mt-2 text-center white ">La Couveuse des Innovateurs est une association née dans le prolongement du Hacking
Health de Besançon, afin de soutenir le développement des projets qui y ont pris corps. Il
s’agit d’apporter une aide concrète aux professionnels de santé, patients ou aidants qui
souhaitent développer un projet innovant, sans avoir forcément l’envie de créer une startup.
Or s’il existe de nombreux dispositifs pour accompagner les futurs créateurs d’entreprise, les
porteurs de projets issus du marathon d’innovation sont souvent démunis. La Couveuse des
Innovateurs est là pour leur permettre de mûrir leur projet, le protéger, se former et
s’informer, trouver les bons partenaires, la bonne voie pour faire prospérer leur idée et lui
donner les meilleures chances de se concrétiser.</p></div></div>
      </div>
      <div class="red-bottom"><img src="wp-content/themes/base/img/bas-img.png" alt=""></div>
    </div>

    <!-- end first box -->

    <!-- Second box - Slider  -->
    <div class="col-sm-12 col-md-12 col-lg-6 box2">


    </div>
  </div>
  <!-- End  -->
</div>


<!-- Agenda -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 agenda">

    </div>
  </div>
</div>
<!-- end agenda  -->

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
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid mb-4" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>

  </div>

</div>
</div>
<!-- end sponsors -->
<style>
  .box0 {
    background-color: green;
  }
</style>

<?php get_footer(); ?>
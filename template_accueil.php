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



    <div class="col-sm-12 col-md-6 col-lg-6 box1 ">
      <div class="red-top"><img src="wp-content/themes/base/img/haut-img.png" alt=""></div>
      <div class="red-middle ">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid nemo repudiandae fugit autem nostrum
          doloremque voluptatibus facere eligendi numquam laboriosam id dolores sit minus quisquam ut quaerat,
          necessitatibus tempore nihil.
          Consequatur ea corporis quidem dignissimos optio eaque, blanditiis quam dolores velit unde mollitia, officia
          aut quibusdam recusandae explicabo odio impedit, rerum dicta accusamus? Voluptates nesciunt, rerum commodi
          iusto explicabo voluptatibus?
          Quod repellat magnam sunt! Voluptates necessitatibus nulla ullam delectus nemo quaerat est voluptate labore
          atque illum facilis molestias voluptas tenetur magnam facere debitis, earum commodi error possimus ipsam
          exercitationem vero!
          Sequi quisquam cum veniam accusamus laborum necessitatibus vero illum, ab officia praesentium nulla maiores
          ipsam ipsa laudantium est doloribus itaque dolor et? Quam quaerat minus sapiente voluptatem nesciunt sunt
          asperiores!</p>
      </div>
      <div class="red-bottom"><img src="wp-content/themes/base/img/bas-img.png" alt=""></div>
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
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid mb-4" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>

  </div>

</div>
</div>

<style>
  .box0 {
    background-color: green;
  }
</style>

<?php get_footer(); ?>
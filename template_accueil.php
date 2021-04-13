<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<?php $sponso = get_field('sponsor'); 
$today = date("Y");
$imgtop = get_field('image-top'); 
$about = get_field('about-us');
$number = get_field('number');?>


<!-- Image top Header  -->
<div class="container-fluid imgtop">
  <a href="<?= site_url()."/contact";?>" class="contactez bottom-line white t1"> Contactez-nous</a>

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
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 box1 ">
      <div class="red-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>
      <div class="red-middle ">
        <hr class="top-line-white ">
        <h2 class='text-center mb-2 ubuntubold white'> Qui sommes-nous ? </h2>
        <div class="row mb-2 justify-content-center">
          <div class="col-11 col-md-8 col-lg-7 white">
            <p class="mt-2 text-center  "><?= $about ?></p>
          </div>
        </div>
      </div>
      <div class="red-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
    </div>

    <!-- end first box -->

    <!-- Second box - Slider  -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 box2 p-0 m-0">
      <!-- Slideshow container -->
      <div class="slideshow-container ">


        <!-- Full-width images with number and caption text -->

        <?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => $number ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $the_content = apply_filters('the_content', get_the_content()); ?>
        <?php $img1 = get_field('img-1'); ?>

        <div class="mySlides fadein">
          <?php echo '<img src="'.$img1.'" class="img-fluid" alt="">' ?>
          <div class="text">
            <h1><a href="<?= site_url()?>/nos-projets"><?= the_title();?></a></h1>
          </div>
        </div>


        <?php endwhile; wp_reset_query(); ?>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>


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
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid mb-4" alt="'.$sponso[$i]['description-logo'].'" width="150" height="58">
     </div>';
   }?>

  </div>

</div>
</div>
<!-- end sponsors -->

<?php get_footer(); ?>
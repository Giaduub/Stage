<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<?php $sponso = get_field('sponsor'); 
$today = date("Y");
$imgtop = get_field('image-top'); 
$about = get_field('about-us');?>


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
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 box1 ">
      <div class="red-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>
      <div class="red-middle ">
      <hr class="top-line-white ">
      <h2 class='text-center mb-2 ubuntubold white'> Qui sommes-nous ? </h2>
      <div class="row mb-2 justify-content-center">
        <div class="col-11 col-md-8 col-lg-7 white"><p class="mt-2 text-center  "><?= $about ?></p></div></div>
      </div>
      <div class="red-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
    </div>

    <!-- end first box -->

     <!-- Second box - Slider  -->
     <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 box2 p-0 m-0">
    <!-- Slideshow container -->
<div class="slideshow-container ">


<!-- Full-width images with number and caption text -->
   
<?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => '10' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $the_content = apply_filters('the_content', get_the_content()); ?>
<?php 
 $img1 = get_field('img-1');
 ?>
 
 <div class="mySlides fadein"> 
  <?php echo '<img src="'.$img1.'" class="img-fluid" alt="">' ?>
  <div class="text"><a href="<?= site_url()?>/nos-projets"><?= the_title();?></a>
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




<style>

/* Slideshow container */
.slideshow-container {
  height:100%;
  width:100%;
  position: relative;
  overflow:hidden;
}

.slideshow-container img{
  width:auto;
position:absolute;
top :50%; left :50%; 
transform:translate(-50%, -50%);
height:100%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: #E0272B;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Fading animation */
.fadein {
  -webkit-animation-name: fadein;
  -webkit-animation-duration: 1.5s;
  animation-name: fadein;
  animation-duration: 1.5s;
}

@-webkit-keyframes fadein {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fadein {
  from {opacity: .4}
  to {opacity: 1}
}
</style>




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
<?php /* Template Name: page about */ ?>

<?php get_header(); ?>


<div class="container-fluid">
  <div class="row align-self-stretch">


<!-- First box -->
    <div class="col-sm-12 col-md-12 col-lg-6 box1 ">
      <div class="red-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>
      <div class="red-middle ">
      <hr class="top-line-white ">
      <h2 class='text-center mb-2 ubuntubold white'> Qui sommes-nous ? </h2>
      <div class="row mb-2 justify-content-center">
        <div class="col-11 col-md-8 col-lg-7 "><p class="mt-2 text-center white "><?= $about ?></p></div></div>
      </div>
      <div class="red-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
    </div>

    <!-- end first box -->

    <!-- Second box - Slider  -->
    <div class="col-sm-12 col-md-12 col-lg-6 ">
    <!-- Slideshow container -->
<div class="slideshow-container">


<!-- Full-width images with number and caption text -->
   
<?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => '10' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $the_content = apply_filters('the_content', get_the_content()); ?>
<?php 
 $img1 = get_field('img-1');
 ?>
 
 <div class="mySlides fade"> 
  <?php echo '<img src="'.$img1.'" class="img-fluid" alt="">' ?>
  <div class="text"><?= the_title();?></div>
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
transform:translate(-50%; -50%);
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
  background-color: rgba(0,0,0,0.8);
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

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}</script>

<?php get_footer(); ?>
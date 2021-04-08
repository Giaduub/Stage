<?php /* Template Name: page confidentalité */ ?>

<?php get_header(); ?>

<!-- Banner -->
<div class="col-sm-12 col-md-12 col-lg-12  ">
  <div class="banner-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>  
  <div class="row justify-content-center align-items-center fond-page">
  <div class="banner-middle ">
  
    <h2 class='text-center mb-2 ubuntubold white bord-title'> <?=wp_title() ?> </h2></div>
    
  </div>
  <div class="raid-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
</div>

<!-- End banner -->

<!--  Content -->
<div class="container mt-4 mb-4">
<div class="row">
<div class="col-12">
<?= the_content();?>
</div></div></div>
<!-- End content -->

<?php get_footer(); ?> 
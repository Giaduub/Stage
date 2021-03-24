<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>



<!-- Image top -->
<section class="imgTop">
</section>
<style><?php $imgTop = get_field('image-top');
      echo '.imgTop{
        background-image:url('.$imgTop.');
      }'
       ?></style>
<!-- Fin image top -->


<!-- double box -->
<section class="doubleBox">
<div class="container">
<div class="row">
<div class="col-6 box">
</div>
<div class="col-6 box">
</div>
</div>
</div>
</section>
<!-- fin double box -->

<?php get_footer(); ?>
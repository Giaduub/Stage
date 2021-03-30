<?php /* Template Name: page contact */ ?>

<?php get_header(); ?>

<?php $imgtop = get_field('bg-image');?>


<style><?php $imgTop = get_field('bg-image');
      echo 'body{
          left:-20%;
        background-image:url('.$imgtop.');
        background-size: center;
        background-repeat: no-repeat;
      }
      '
       ?></style>

<div class="container-fluid ">
    <div class="row align-items-center fond-page ">
        <div class="  col-12 ">
            <h1 class="text-center white "> <?= wp_title() ?> </h1>
        </div>
    </div>
</div>


<section class="contact ">
   <div class="container  ">
        <div class="row justify-content-center">
            <div class="text-center col-12 ">
            
                <?php the_content(); ?>
            </div>
        </div>
   </div>
</section>

<?php get_footer(); ?>
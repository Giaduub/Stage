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
  <div class="container contact-fond mt-4 mb-4">
                <?php the_content(); ?>
            </div>
</section>

<style>
    .contact-fond{
        padding-top:50px;
        padding-bottom:50px;
        background:white;
        border-radius:1%;
    }

  /* Contact Form 7 Styles
---------------------------------*/


 .wpcf7-form {
 
 margin-left: 25px;
  
 margin-right: 25px;
  
 margin-top: 25px;
}

.wpcf7-textarea {
 
 min-width: 100%;
  
 }

label{
    width:100%;
}

 .wpcf7-submit {
 
 background: #E0272B;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  
 }
   
</style>

<?php get_footer(); ?>
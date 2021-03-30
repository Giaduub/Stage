<?php /* Template Name: page faq*/ ?>

<?php get_header(); ?>

<?php $raiponce = get_field('lesquestions');?>



<section class="faq">

<div class="container-fluid ">
    <div class="row align-items-center fond-page ">
        <div class="  col-12 ">
            <h1 class="text-center white "> <?= wp_title() ?> </h1>
        </div>
    </div>
</div>


<div class="container pb-4">
 <div class="row">
 <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-11"><button type="button" class="text-center collapsible cross mt-4">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p>'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
   </div></div>

</section>

<?php get_footer(); ?>
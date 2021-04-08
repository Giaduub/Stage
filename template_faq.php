<?php /* Template Name: page faq*/ ?>

<?php get_header(); ?>

<?php $raiponce = get_field('lesquestions');?>



<section class="faq">

<div class="col-sm-12 col-md-12 col-lg-12  ">
  <div class="banner-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>  
  <div class="row justify-content-center align-items-center fond-page">
  <div class="banner-middle ">
  
    <h2 class='text-center mb-2 ubuntubold white bord-title'> <?=wp_title() ?> </h2></div>
    
  </div>
  <div class="raid-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
</div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-10 text-center ubuntubold">
                <h2> Foire aux questions</h2>
            </div>
        </div>
        <div class="row mt-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
    </div>


    <div class="container pb-4 mt-4">
        <div class="row">
            <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-11"><button type="button" class="text-center collapsible cross ubuntubold">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p class="ubuntubold mt-4">'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
        </div>
    </div>

</section>

<?php get_footer(); ?>
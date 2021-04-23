<?php /* Template Name: page faq*/ ?>

<?php get_header(); ?>
<?php $stringx = get_the_title(); ?>
<?php $raiponce = get_field('lesquestions');
      $desc = get_field('desc-faq');?>



<section class="faq">
<!-- Bannière -->
    <div class="col-sm-12 col-md-12 col-lg-12  ">
        <div class="banner-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt="Corner blanc"></div>
        <div class="row justify-content-center align-items-center fond-page">
            <div class="banner-middle ">
                <hr class="top-line-banner">
                <h2 class='text-center t3 mb-2 ubuntubold white'> <?php echo preg_replace('/-[^-]*$/', '', $stringx); ?>
                </h2>
            </div>
        </div>
        <div class="raid-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt="Corner blanc"></div>
    </div>
<!-- End -->
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-10 text-center ubuntubold">
            </div>
        </div>
        <div class="row mt-4">
            <p><?= $desc ?></p>
        </div>
    </div>


    <div class="container pb-4 mt-4">
        <div class="row">
    <!-- Boucle Collapse -->
            <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-12"><button type="button" class="text-center collapsible cross ubuntubold">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p class="ubuntubold mt-4">'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
        </div>
    </div>
<!-- End -->
</section>

<?php get_footer(); ?>
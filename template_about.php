<?php /* Template Name: page about */ ?>

<?php get_header(); ?>

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
    <div class="col-sm-12 col-md-12 col-lg-6 box2">


    </div>
  </div>
  <!-- End  -->
</div>




<?php get_footer(); ?>
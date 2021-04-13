<?php
/*
Template Name: Page des projets
*/
?>

<?php $stringx = get_the_title();?>

<?php get_header();?>

<!-- Banner -->
<div class="col-sm-12 col-md-12 col-lg-12  ">
        <div class="banner-top"><img src="<?= get_template_directory_uri()?>/img/haut-img.png" alt=""></div>
        <div class="row justify-content-center align-items-center fond-page">
            <div class="banner-middle ">
                <hr class="top-line-banner">
                <h2 class='text-center t3 mb-2 ubuntubold white'> <?php echo preg_replace('/-[^-]*$/', '', $stringx); ?>
                </h2>
            </div>
        </div>
        <div class="raid-bottom"><img src="<?= get_template_directory_uri()?>/img/bas-img.png" alt=""></div>
    </div>
<!-- End -->

<?php $loop = new WP_Query( array( 'post_type' => 'projet', 'posts_per_page' => '15' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php $author = get_field('author');
 $img1 = get_field('img-1');
 $img2 = get_field('img-2');
 $text = get_field('text-1');
 $search = get_field('search');
 $tri = get_field('tri');
 
 ?>



<?php $the_content = apply_filters('the_content', get_the_content()); ?>

<div class="container mt-4">
  <h3>Publié le <?= the_date() ?></h3>
</div>


<div class="container">
  <div class="row justify-content-between">
    <div class="col-12 col-md-5 p-0">
      <img src="<?= $img1 ?>" class="img-fluid" alt="">
    </div>
    <div class="col-12 col-md-6">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-6">
          <h1 class="red"><?= get_the_title()?></h1>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <h2 class="t2"><?= $author ?></h2>
        </div>
        <div class="col-12 mt-4">
          <p class=""><?= $text ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row align-items-center">
    <div class="col-12 p-0 order-2 order-md-1">
      <?php 
 
               switch ($tri) {
                 case "0":
                   echo ' <img src="'.get_template_directory_uri().'/img/tri-0.jpg" alt="" class="img-fluid">';
                   break;
                 case "1":
                   echo ' <img src="'.get_template_directory_uri().'/img/tri-1.jpg" alt="" class="img-fluid">';
                   break;
                 case "2":
                   echo ' <img src="'.get_template_directory_uri().'/img/tri-2.jpg" alt="" class="img-fluid">';
                   break;
                   case "3":
                     echo ' <img src="'.get_template_directory_uri().'/img/tri-3.jpg" alt="" class="img-fluid">';
                     break;
                     case "4":
                       echo ' <img src="'.get_template_directory_uri().'/img/tri-4.jpg" alt="" class="img-fluid">';
                       break;
                       case "5":
                         echo ' <img src="'.get_template_directory_uri().'/img/tri-5.jpg" alt="" class="img-fluid">';
                         break;
                         case "6":
                           echo ' <img src="'.get_template_directory_uri().'/img/tri-6.jpg" alt="" class="img-fluid">';
                           break;
                           case "7":
                             echo ' <img src="'.get_template_directory_uri().'/img/tri-7.jpg" alt="" class="img-fluid">';
                             break;
                             case "8":
                               echo ' <img src="'.get_template_directory_uri().'/img/tri-8.jpg" alt="" class="img-fluid">';
                               break;
                               case "9":
                                 echo ' <img src="'.get_template_directory_uri().'/img/tri-9.jpg" alt="" class="img-fluid">';
                                 break;
                 default:
                   echo "Erreur, il n'existe pas";
               } ?>
    </div>
    <div class="col-12 col-md-2 red order-1 order-md-2 text-center"></div>
  </div>
</div>

<div class="container mt-4 mb-4 search">
  <div class="row">
    <div class="col-12 col-md-3">
      <p class="ubuntubold">A la recherche de</p>
    </div>
    <div class="col-12 col-md-9">
      <p><?= $search ?></p>
    </div>
  </div>
</div>


<?php endwhile; wp_reset_query(); ?>

<?php get_footer();?>
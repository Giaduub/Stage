<?php
/*
Template Name: Page des evenements
*/
?>

<?php $stringx = get_the_title(); ?>

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


<div class="container">
    <div class="row">

<?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => '15' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php $title = get_field('event-title'); 
$date = get_field('date-title'); 
$lieu = get_field('lieu');
$img = get_field('img-event');
$desc = get_field('description-event');
?>


<div class="col-12 col-md-6 col-xl-4 pt-4 pb-2">
            <div class="card">
                <img src="<?= $img ?>" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4 class="red"><b><?= $title ; ?></b></h4>
                    <p class="ubuntubold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg> <?= $date ?></p>
<p class="ubuntubold"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
</svg> <?= $lieu ?></p>
                    <p><?= $desc ?></p>
                </div>
            </div>
        </div>


<?php endwhile; wp_reset_query(); ?>   
</div>
</div>

<?php get_footer();?>
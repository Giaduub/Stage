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
                    <h4><b><?= $title ; ?></b></h4>
                    <p><?= $date ?></p>
                    <p><?= $lieu ?></p>
                    <p><?= $desc ?></p>
                </div>
            </div>
        </div>


<?php endwhile; wp_reset_query(); ?>   
</div>
</div>

<style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 5px;
        /* 5px rounded corners */
    }

    /* Add rounded corners to the top left and the top right corner of the image */
    img {
        border-radius: 5px 5px 0 0;
    }
</style>
<?php get_footer();?>
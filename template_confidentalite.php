<?php /* Template Name: page confidentalité */ ?>

<?php get_header(); ?>

<!-- Banner -->
<div class="container-fluid ">
    <div class="row align-items-center fond-page ">
        <div class="  col-12 ">
            <h1 class="text-center white "> <?= wp_title() ?> </h1>
        </div>
    </div>
</div>

<!-- End banner -->

<!--  Content -->
<div class="container mt-4 mb-4">
<div class="row">
<div class="col-12">
<?= the_content();?>
</div></div></div>
<!-- End content -->

<?php get_footer(); ?> 
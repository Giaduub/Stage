<?php get_header(); ?>
<?php $title = get_field('event-title'); 
$date = get_field('date-title'); 
$lieu = get_field('lieu');
$img = get_field('img-event');
$desc = get_field('description-event');
?>


<div class="container">
    <div class="row">




        <div class="col-12 pt-4 pb-2">
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
    </div>
</div>

<?php get_footer(); ?>
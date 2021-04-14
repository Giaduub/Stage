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

<?php get_footer(); ?>
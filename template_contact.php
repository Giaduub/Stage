<?php /* Template Name: page contact */ ?>

<?php get_header(); ?>

<?php $imgtop = get_field('bg-image');?>


<!-- Background style with ACF -->
<style>
    <?php $imgTop=get_field('bg-image');
    echo 'body{
    background-image:url('.$imgtop.');
    background-size: center;
    background-repeat: no-repeat;
    }

    '
?>
</style>
<!-- End -->

<!-- Banner -->
<div class="container-fluid ">
    <div class="row align-items-center fond-page ">
        <div class="  col-12 ">
            <h1 class="text-center white "> <?= wp_title() ?> </h1>
        </div>
    </div>
</div>
<!-- End -->

<!-- Contact -->
<section class="contact ">
    <div class="container contact-fond mt-4 mb-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="text-center">Nous contacter :</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 text-center">
                    <p class="ubuntubold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Numero </p>
                    </div>
                    <div class="col-5 text-center">
                    <p class="ubuntubold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg> Mail </p>
                    </div>
                    </div>
                    <div class="row justify-content-around">
                    <div class="col-lg-7 col-8 ">
                    <p class="ubuntubold pixnegativ"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
</svg> Adresse : 75 B rue des cras</p>
                    <p class="ubuntubold">25000 Besançon</p> </div></div>
                    <div class="row mt-4 justify-content-center">
                    <div class="col-6 mt-4 mb-4">
                    <?= the_custom_logo(); ?>
                    </div></div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
</section>
<!-- End  -->

<style>

    .pixnegativ{
       
    }
    .contact-fond {
        padding-top: 50px;
        padding-bottom: 50px;
        background: white;
        border-radius: 1%;
    }

    .adresse {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    /* Contact Form 7 Styles
---------------------------------*/


    .wpcf7-form {

        margin-left: 25px;

        margin-right: 25px;

        margin-top: 25px;
    }

    .wpcf7-textarea {

        max-width: 100%;

    }

    label {
        max-width: 90%;
    }

    .wpcf7-submit {

        background: #E0272B;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 16px;

    }
</style>

<?php get_footer(); ?>
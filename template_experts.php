<?php /* Template Name: page experts*/ ?>

<?php get_header(); ?>

<?php $imgtop = get_field('bg-image');
$tab = get_field('expert');
$stringx = get_the_title();?>

<!--  Background Style with ACF -->
<style>
  <?php $imgTop=get_field('bg-image');
  echo 'body{
left:-20%;
  background-image:url('.$imgtop.');
  background-size: center;
  background-repeat: no-repeat;
  }

  '
?>
</style>

<!-- End -->

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
<!-- end -->




<!-- End -->



<!-- Tab -->
<section class="expert">


  <div class="container mt-4">
    <table class="table table-dark">
      <thead class="text-center">
        <tr>
          <th scope="col-2 ">Nom</th>
          <th scope="col-6 ">Compétences</th>
          <th scope="col-4 ">Mail</th>
        </tr>
      </thead>
      <tbody class='text-center'>
        <!-- Loop Tab // td -->
        <?php for ($i=0; $i < count($tab); $i++){
     echo ' <tr><td>'.$tab[$i]['nom'].'</td>
     <td>'.$tab[$i]['competences'].'</td>
     <td><a href="mailto:'.$tab[$i]['mail'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
     <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
   </svg></a></td>
     </tr>';
   }?>
        <!-- End -->

      </tbody>
    </table>
  </div>

</section>
<!-- End -->




<?php get_footer(); ?>
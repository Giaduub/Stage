<?php
/*
Template Name: Page des projets
*/
?>


<?php get_header(); ?>

<?php $author = get_field('author');
 $img1 = get_field('img-1');
 $img2 = get_field('img-2');
 $text = get_field('text-1');
 $search = get_field('search');
 ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>







<div class="container-fluid">
  <div class="row">
    <div class="col-5 col-md-4">
      <h3 class=''><?php the_date(); ?></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6 ">
    <div class="row justify-content-center ">
      <div class="col-12 col-md-6 image-square">
      </div>
      
      <style>
  <?php $img1=get_field('img-1');
  echo '.image-square{
    height:500px;
background-image:url('.$img1.');
  background-repeat: no-repeat;
  background-size: contain;
  background-position:center;
  }
  '
?>
</style>
    </div></div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="row align-items-center">
        <div class="col-7 col-md-6 col-lg-6">
          <h1 class="text-center post-title"><?php the_title(); ?></h1>
        </div>
        <div class="col-5 col-md-6 col-lg-6">
          <h2 class=''><?= $author ?></h2>
        </div>
        <div class="col-11 col-md-8 col-lg-8 text-center">
          <p>Baby&#39;hello est un dispositif de diagnostic in vitro portable, peu invasif, rapide et fiable,
            permettant de diagnostiquer la jaunisse simplement chez le nourrisson né à terme ou
            prématurément. Ce dispositif médical s&#39;adresse aux infirmières, et professionnels de santé, et
            leur permet de mesurer le taux de bilirubine, le pigment jaune responsable de la pathologie.
            Il a pour avantage d&#39;être moins douloureux et plus fiable que les techniques actuelles,
            notamment chez le prématuré.</br>
            Avancement
            Un prototype fonctionnel est en cours d&#39;élaboration, la technologie interne est en cours de
            validation (deux technologies d&#39;analyse sont à étudier).
            Les fonctionnalités du dispositif sont définies, et restent à confirmer avec des études auprès
            d’utilisateurs potentiels (en cours)
            Un business model canvas a été renseigné, un business plan est débuté, et une étude de
            marché ainsi qu&#39;un prévisionnel financier à 3/5 ans ont été réalisé. Ils restent à affiner.
            Le projet se situe entre les niveaux 3 et 4 de l’échelle TRL</p>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container-fluid mt-4">
  <div class="row align-items-center">
    <div class="col-7 echelle-trl">
    </div>
    <div class="col-3 text-center ">
      <h2> Niveau TRL</h2>
    </div>
  </div>
</div>

<div class="container-fluid search mt-4 mb-4">
<div class="row justify-content-center">
<div class="col-12 col-md-2 col-lg-2">
<h3 class="white"> A la recherche de :</h3></div>
<div class="col-8 col-md-10 white "><p>à la recherche de fonds pour financer la partie r&d du projet, ou de stagiaires souhaitant
participer au développement d’un dispositif médical de diagnostic in vitro innovant,
particulièrement sur la conception du système optique d’analyse sanguin et l’électronique du
dispositif.</p></div></div></div>

<style>
  <?php $tri=get_field('tri');

  switch ($tri) {
    case "0": echo ".echelle-trl{
background-position: top;
    background-image: url('".get_template_directory_uri()."/img/tri-0.jpg');
  }

  ";
break;
  case "1": echo "C'est 1";
  break;
  case "green": echo "Your favorite color is green!";
  break;
  default: echo "Your favorite color is";
  }

  ?>
</style>

<style>
.img-square{
  height:500px;
  max-width: 98%;
}
.search{
  padding-top: 20px;
  padding-bottom: 20px;
  background:#303030;
}

  .echelle-trl {
    height: 150px;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }



  .post-title {
    color: #E0272B;
  }

  h3 {
    font-size: 20px;
  }


  h2 {
    font-size: 15px;
  }
</style>


<?php endwhile; ?>
<?php endif; ?>


    
<?php get_footer(); ?>
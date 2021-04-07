<?php get_header(); ?>
<?php $author = get_field('author');
 $img1 = get_field('img-1');
 $img2 = get_field('img-2');
 $text = get_field('text-1');
 $search = get_field('search');
 ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="container-fluid top-projet">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-12 col-lg-5">
                <h1 class="text-center post-title"><?php the_title(); ?></h1> </div>
                <div class=" text-center col-12 col-md-12 col-lg-4">
                <h2><?= $author ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-5 ">
                <h3 class='text-center'><?php the_date(); ?></h3></div>
            
            <div class="col-12 col-md-12 col-lg-4">
            </div></div>
            <div class="row ">
            <div class="col-12 col-md-12 echelle-trl ">
            
            <style>
            .echelle-trl{
  height:250px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position:center;
  }
</style>
            </div>
            </div>

        </div>
        

    
    <div class="col-12 col-md-6 image-square">
   
    </div>
    <style>
  <?php $img1=get_field('img-1');
  echo '.image-square{
background-image:url('.$img1.');
  height:500px;
  max-width:100%
  background-repeat: no-repeat;
  background-size: cover;
  background-position:center;
  }

  '
?>
</style>
</div>
</div>

<style>
<?php 
    $tri = get_field('tri');
     
    switch ($tri) {
        case "0":
          echo ".echelle-trl{
              background-position:top;
            background-image:url('".get_template_directory_uri()."/img/tri-0.jpg');
              }";
          break;
        case "1":
          echo "C'est 1";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is";
        }
?>
</style>

<style>

@media(min-width:768px){
    .echelle-trl{
        max-width:98%;
        margin-top:107px;
    }
}
@media(min-width:992px){
.echelle-trl{
    margin-top:125px;
    
}

@media(min-width:1200px){
.echelle-trl{
    margin-top:162px;
    
}
}

.post-title{
    color:#E0272B;
}
h3{
    font-size:20px;
}


h2{
    font-size:15px;
}

</style>


<?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>c
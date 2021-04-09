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
        <h3>Publié le <?= the_date()?></h3>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-12 col-md-5 p-0">
                <img src="<?= $img1?>" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="red"><?=get_the_title()?></h1>
                    </div>
                    <div class="col-12 col-md-6">
                       <h2 class="t2"><?= $author ?></h2> 
                    </div>
                    <div class="col-12 mt-4">
                        <p class=""><?= $text ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-md-10 p-0 order-2 order-md-1">
                <?= $tri ?>   
                <?php
$tri = get_field('tri');

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
}
?>
            </div>
            <div class='col-12 col-md-2 red order-1 order-md-2 text-center'></div>
        </div>
    </div>

    <div class="container-fluid mt-4 mb-4 search">
        <div class="row">
            <div class="col-3">
                <p class='ubuntubold'>A la recherche de</p>
            </div>
            <div class="col-9"><p><?= $search ?></p></div>
        </div>
    </div>







<?php endwhile; ?>
<?php endif; ?>


<style>
.search{
            padding-top: 20px;
            padding-bottom: 20px;
            background:#303030;
            color:white;
        }
        
.search:nth-child(odd){
  background:red;
}</style>


<?php get_footer(); ?>
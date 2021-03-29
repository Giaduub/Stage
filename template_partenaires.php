<?php /* Template Name: page partenaires*/ ?>

<?php get_header(); ?>

<?php $sponso = get_field('sponsor'); 
$today = date("Y"); 
$raiponce = get_field('lesquestions');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 fond-page">
            <h1 class="text-center white"> Nos partenaires</h1>
        </div>
    </div>
</div>

<div class="container-fluid sponsor">
  <hr class="top-line-black mt-4">
<div class="row">
<div class="col-12">
<h2 class='text-center mt-2'> Nos partenaires : ils nous accompagnent en <?= $today ?> </h2>
</div>
</div>
  <div class="row justify-content-center text-center mt-4">
      <?php for ($i=0; $i < count($sponso); $i++){
     echo ' <div class="col-6 col-md-4 col-lg-3 mt-4 p-0">
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>

<div class="container-fluid sponsor">
  <hr class="top-line-black mt-4">
<div class="row">
<div class="col-12">
<h2 class='text-center mt-2'> Nos sponsors : ils nous accompagnent en <?= $today ?> </h2>
</div>
</div>
  <div class="row justify-content-center text-center mt-4">
      <?php for ($i=0; $i < count($sponso); $i++){
     echo ' <div class="col-6 col-md-4 col-lg-3 mt-4 p-0">
     <img src="'.$sponso[$i]['sponso-img'].'" class="img-fluid" alt="'.$sponso[$i]['description-logo'].'" style="width= 150px height=58px">
     </div>';
   }?>
      
    </div>

  </div>
</div>





 <div class="container pb-4">
 <div class="row">
 <?php for ($i=0; $i < count($raiponce); $i++){
     echo '
     <div class="col-6"><button type="button" class="collapsible mt-4">'.$raiponce[$i]['question'].'</button>
     <div class="content">
     <p>'.$raiponce[$i]['reponse'].'</p></div></div>';
   }?>
   </div></div>
 
<style>
/* Style the button that is used to open and close the collapsible content */
.collapsible {
    font-family: 'ubuntu';
  background-color: #E0272B ;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}</script>

<?php get_footer(); ?>
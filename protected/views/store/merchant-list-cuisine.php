<?php
$this->renderPartial('/front/default-header',array(
   'h1'=>t("İşletmelere Gözatın"),
   'sub_text'=>t("Favori işletmeniz hangisi ?")
));
?>

<div class="sections section-grey2 section-browse" id="section-browse">

 <div class="container">
   <?php 
   if (is_array($list['list']) && count($list['list'])>=1){
   	  $this->renderPartial('/front/browse-list',array(
		   'list'=>$list,
		   'cuisine_page'=>2,
		   'category'=>$category
	  ));
   } else echo '<p class="text-danger">'.t("No restaurant found").'</p>';
   ?>
 </div> <!--container--> 

</div><!-- sections-->
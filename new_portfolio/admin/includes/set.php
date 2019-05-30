<?php
include "db.php";
$var1 = "SELECT * FROM  port ORDER BY nmbr DESC";
$resultat = $bdd->query($var1);

$data = $resultat->fetchAll(PDO::FETCH_ASSOC);

			foreach($data as $row) 
			
      {

			 $cc = <<<prod
			 <div class="col-md-4">
			 <div class="work-box">
			 
			   <div class="work-img">
				 <a href=" {$row['link']};" target="_blank"><img src="img/{$row['img']} ");
					 class="img-fluid"></a>
			   </div>
			   <div class="work-content">
			 
				 <h2 class="w-title w-100 text-center">{$row['nom']}</h2>
			   </div>
			   </a>
			 </div>
			 </div>
										
                            
prod;

		echo $cc;
	
	  }	
	
?>

<?php
require "db.php";    


   

    if(isset($_POST['submit'])){
   
        
        $nmr=$_POST['nmr'];

 
    $sqll = 'DELETE FROM port WHERE nmbr = ?'; 
    $q = $bdd->prepare($sqll);    
    $q->bindValue(1,$nmr);
    $q->execute(); 
    }
    if($bdd){echo "valide";}else{echo "pas valide";}

?>


<!DOCTYPE html>
<html>
<head>
    <title>delete</title>
</head>
<body>
    <form method="post" action="">
    <h3>delete ? </h3>
    <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input type="text" class="form-control" name="nmr" placeholder="numero projet">
  </div>


<div class="col-md-12 text-center">
<button type="submit"  name="submit" class="btn btn-primary" >delete projets</button>
</div>
<!-- <a href="./pageadmin.php">retour au menu</a> -->

</form>


</body>
</html>
<?php
require "db.php";
$fileError=$gitError=$nmrError=$nameError="";

if(isset($_POST['enter'])){
	$file=$_POST['img'];
	$git=$_POST['git'];
	$nmr=$_POST['nmr'];
	$name=$_POST['name'];
	if($bdd){echo "valide";}else{echo "pas valide";}

	if(empty($file)) 
	{
		$fileError = 'Ce champ ne peut pas être vide';
		
	}
	if(empty($git)) 
	{
		$gitError = 'Ce champ ne peut pas être vide';
		
	} 
	if(empty($nmr)) 
	{
		$nmrError = 'Ce champ ne peut pas être vide';
		
	} 
	if(empty($name)) 
	{
		$nameError = 'Ce champ ne peut pas être vide';
		
	}else{

	$sql = "INSERT INTO `port` VALUES (?,?,?,?) ";
	$stmt = $bdd->prepare($sql);
	$stmt->bindValue(1, $file);
	$stmt->bindValue(2, $git);
	$stmt->bindValue(3, $name);
	$stmt->bindValue(4, $nmr);
	$stmt->execute();
	


	

	}
}

 ?>	
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
      <link rel="stylesheet" href="css/style.css">
     <div class="col-md-6 offset-md-3 mt-5">
        <h1>for uploade a new project</h1>
        <form accept-charset="UTF-8" action="" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName">number of project</label>
            <input type="number" name="nmr" class="form-control" id="exampleInputName" placeholder="Enter number of project" required="required">
            <span><?php echo $nameError;?></span>

        </div>
          <div class="form-group">
            <label for="exampleInputName">get a Link</label>
            <input type="text" name="git" class="form-control" id="exampleInputName" placeholder="Enter your link" required="required">
            <span><?php echo $gitError;?></span>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload image:</label>
            <input type="file" name="img">
            <span><?php echo $fileError;?></span>
          </div>
          <hr>
          <input type="submit" name="enter" class="btn btn-primary" value="Submit">
        </form>
       


    </div>
<?php
require "db.php";
$fileError=$gitError=$nmrError=$nameError="";

if(isset($_POST['sub'])){
	$imag=$_POST['imag'];
	$link=$_POST['link'];
	$numb=$_POST['numb'];
	$namee=$_POST['namee'];
    if($bdd){echo "valide";}else{echo "pas valide";}
    
    if(empty($imag)) 
	{
		$fileError = 'Ce champ ne peut pas être vide';
		
	}
	if(empty($link)) 
	{
		$gitError = 'Ce champ ne peut pas être vide';
		
	} 
	if(empty($numb)) 
	{
		$nmrError = 'Ce champ ne peut pas être vide';
		
	} 
	if(empty($namee)) 
	{
		$nameError = 'Ce champ ne peut pas être vide';
		
	}else{

    $sqll = "UPDATE port SET nom = :num, img = :pic, link = :lik WHERE nmbr ='$numb';";
    $active = $bdd->prepare($sqll);
    $arr = array(
    ':num' => $namee,
    ':pic' => $imag,
    ':lik' => $link,
  
   

);
if (   $active->execute($arr)) echo " good";

}
}
?>

     <div >
        <h1>for UPDATE a project with number of project</h1>
        <form accept-charset="UTF-8" action="" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">name</label>
            <input type="text" name="namee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName">number of project</label>
            <input type="number" name="numb" class="form-control" id="exampleInputName" placeholder="Enter number of project" required="required">
            <span><?php echo $nameError;?></span>

        </div>
          <div class="form-group">
            <label for="exampleInputName">get a Link</label>
            <input type="text" name="link" class="form-control" id="exampleInputName" placeholder="Enter your link" required="required">
            <span><?php echo $gitError;?></span>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload image:</label>
            <input type="file" name="imag">
            <span><?php echo $fileError;?></span>
          </div>
          <hr>
          <input type="submit" name="sub" class="btn btn-primary" value="UPDAte">
        </form>
    
</div>

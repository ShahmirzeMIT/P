<?php include("../db.php");
$message="";
if(isset($_POST['lang']) && isset($_POST['know']) && isset($_POST['percent'])){	
	$lang=strtolower($_POST['lang']);
	$know=$_POST['know'];
	$percent=$_POST['percent'];
		if($lang!=="" && $know!=="" && $percent!=="" ){
		$sql='INSERT INTO `skill1`(`id`, `lang`, `know`, `percent`) VALUES (NULL,"'.$lang.'","'.$know.'","'.$percent.'")';
		$result=mysqli_query($conn,$sql);
	} else $message="Butun Xanalari Doldur";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<form class="wd30" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="Example en,az" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Know</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="know">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Percent</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="percent">
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../skill1.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>
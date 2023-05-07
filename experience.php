<?php
include('db.php');
include("header.php");

?>
	<main>
	<div><a href="./Add/experienceAdd.php"  class="fs-5 text-success text-decoration-none">Add HeaderMenu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">workName</th>
			<th scope="col">year</th>
			<th scope="col">text</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `experience`';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$lang=$row['lang'];
						$workName=$row['workName'];
						$year=$row['year'];
						$text=$row['text'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$workName.'</td>
							<td>'.$year.'</td>
							<td>'.$text.'</td>
							<td><a href="./update/educationUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>
						';
					}
				}
			?>
		</tbody>
		</table>
	</main>
<?php
include("footer.php");
?>
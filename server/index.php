<?php
 include 'header.php';

?>

		
<form action="search.php" method="POST">
<center>	 
	
	Please type <input type="text" name="search" placeholder="search handymen">
	<button type="submit" name ="submit-search">search</button>
<h1>All categories<h1><select>
             <option value="0"  name="select" selected>Painter</option>
             <option value="1"  name="select">Plumber</option>
             <option value="2"  name="select">Carpenter</option>
             <option value="3"  name="select">Welder</option>
             
             </select><br><hr>

</center>
</form>
<h1>Results</h1>	
<h2>All handymen<h2>
<div class="handymen_container">
	<?php
	$sql = "SELECT * FROM location";
	$Result = mysqli_query($conn , $sql);
	$queryResult = mysqli_num_rows($Result);

	if($queryResult >0){

		while ($row = mysqli_fetch_assoc($Result)){
             echo"<div class = 'handybox'> 
              <h3>".$row ['Location']."</h3>
              <p>".$row ['Profession']."</p>
              <p>".$row ['Date']."</p>


             </div>";
		}
	}
	?>
</div>




</html>
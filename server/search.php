<?php
include 'header.php';
require_once 'db.php';

?>
<h1> search page</h1>
<div class="handymen_container">
  <?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM location WHERE Profession LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)) {

				echo "<div class = 'handybox'> 
              
              <p>" . $row['Profession'] . "</p>
              <p>" . $row['Name'] . "</p>
              <h3>" . $row['Location'] . "</h3>
              <p>" . $row['Profession'] . "</p>
              <p>" . $row['Date'] . "</p>
              


             </div>";
			}
		} else {
			echo "There are no results found";
		}
	}
	?>

</div>
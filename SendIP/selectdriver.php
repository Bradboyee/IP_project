<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Driver</title>
    <link rel="stylesheet" href="./css/style2.css">
    
</head>

<body>
    <ul class="nav">
		<a href="./selectdriver.php"><li>Select Driver</li></a>
		<a href="./payment.php"><li>Payment</li></a>
		<a href="./login.php"><li>Log out</li></a>
	</ul>
    <div class="wrapper">
		  <div class="rec-prism">
			<div class="face face-front">
			  <div class="content">
				<h2>เลือกคนขับ</h2>
		<center>
		<h1><table>
			<thead>
				<tr>
					<th>Driver ID</th>
					<th>Name Surname</th>
					<th>Last Detect ATK</th>
				</tr>
			</thead>
			<tbody>

						<?php
				session_start();
				$cusid = $_SESSION['Customer_ID'];
				include "selectdriversql.php";
				while($row = $result->fetch_assoc()) {
					$field1name = $row["Driver_ID"];
					$field2name = $row["Driver_Name"];
					$field3name = $row["ATK_DetectDate"];
					echo 
					'<tr > 
							<td>'.$field1name.'</td>
							<td>'.$field2name.'</td> 
							<td>'.$field3name.'</td> 
					</tr><br>'
					;
				}
				?>
			</tbody>
		</table><br></h1></center>



		<form action="map.php" method="post">
			<select name="selecteddriver">
			<?php
        include "selectdriversql.php";
        while($row = $result->fetch_assoc()) {
            $id = $row["Driver_ID"];
            $name = $row["Driver_Name"];
    echo '<option value="'.$id.'">'.$name.'</option>';
            ;
        }
        ?>

			</select>
			<br><br>
			 <div class="field-wrapper">
				<button type="submit">Submit</button>
			</div>
		</form>


</body>

</html>
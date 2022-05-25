	<?php
		session_start();
		include('connect.php');
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Manager - Customer</title>
		<link rel="stylesheet" href="./css/style.css">
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!--datatable-->
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
			integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<!--css of datable-->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
		
	</head>
	<body>
		<div class="wrapper">
			<div class="sidebar">
				<h2>Manager Page</h2>
				<ul>
                    <li><a href="./Manager-Driver.php"><i class='bx bxs-car'></i>Driver</a></li>
                    <li class="active"><a href="./Manager-Customer.php"><i class='bx bx-user'></i></i>Customer</a></li>
					<li><a href="./Manager-Trip.php"><i class='bx bxs-detail'></i>Trip Details</a></li>
					<li><a href="./Manager-Review.php"><i class='bx bx-message-rounded-add' ></i>Review</a></li>
					<li><a href="./Manager-Report.php"><i class='bx bxs-report'></i>Problem</a></li>
				</ul>
				<div class="account">
					<span>Account</span>
				</div>
			</div>
			<div class="main">
                <div class="head">
                    <h3>Customer</h3>

                </div>
                <div class="body">
					<table id="example" class="table table-striped table-bordered table-hover table-responsive-sm" style="width:100%">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Address</th>
								<th>Phone number</th>
								<th>Birthday</th>
								<th>Gender</th>
								<th>Email</th>
								<th>Password</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM customer";
								$result = mysqli_query($conn, $sql);

								while ($item = mysqli_fetch_assoc($result)) { ?>

							<tr>
								<td width="3%"><?php echo $item["Customer_ID"]; ?></td>
								<td><?php echo $item["Customer_Name"]; ?></td>
								<td><?php echo $item["Customer_Address"]; ?></td>
								<td><?php echo $item["Customer_Tel"]; ?></td>
								<td><?php echo $item["Customer_Birth"]; ?></td>
								<td><?php echo $item["Customer_Gender"]; ?></td>
								<td><?php echo $item["Customer_Email"]; ?></td>
								<td>**********</td>
								<td class="text-center">
									<div class="btn-group btn-group-sm">
									<center>
										<a class="btn btn-danger" href="del_customer.php?id=<?php echo $item["Customer_ID"]; ?>" onclick=\"return confirm('Do you want to delete this record? !!!')\">
											<i class="fas fa-trash"> </i>
										</a>
									</center>
									</div>
								</td>
							</tr>

							<?php
								}
							?>
						</tbody>
					</table>
                </div>
            </div>
		</div>
	</body>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
    </script>
</html>
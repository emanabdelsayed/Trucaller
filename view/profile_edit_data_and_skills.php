<?php
session_start();
$name = $_SESSION['sess_Name'];
$phone = $_SESSION['sess_Phone'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>profile edit data and skills - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="../assets/images/carousel/banner_12.jpg" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?= $name ?></h4>
									<!-- <button class="btn btn-outline-primary">Message</button> -->
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<!-- Download Google image********************************************************************************************** -->
								<!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="../assets/images/carousel/google.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-google me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Google</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<?php
						$conn = mysqli_connect('localhost', 'root', '', 'truecaller');
						
						// include 'conn.php';
						if(isset($_POST['update'])){
							$name = $_POST['name'];
							$phone = $_POST['phone'];
							
							$query = "update users set userName='$name',userPhone='$phone' where userPhone='$phone'";
							$query_run = mysqli_query($conn, $query);
							if($query_run){
								echo '<script>alert("Your data has been updated")</script>';
								$_SESSION['sess_Name'] = $name;
								$_SESSION['sess_Phone'] = $phone;
								header('Location: index.php');
							}else{
								echo '<script>alert("Your data has not been updated")</script>';
							}
						}
						?>
						<form method="POST">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input name="name" type="text" class="form-control" value=<?= $name ?>>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Phone Number</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input name="phone" type="text" class="form-control" value=<?= $phone ?>>
									</div>
								</div>
								<!-- <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Country</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Egypt">
								</div>
							</div> -->


								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<button name="update" type="submit" class="btn btn-primary px-4" value="Save Changes">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		body {
			background: #f7f7ff;
			margin-top: 20px;
		}

		.card {
			position: relative;
			display: flex;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: 0 solid transparent;
			border-radius: .25rem;
			margin-bottom: 1.5rem;
			box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
		}

		.me-2 {
			margin-right: .5rem !important;
		}
		.button{
			width: 100px;
			height: 50px;
		}
	</style>

	<script type="text/javascript">

	</script>
</body>

</html>
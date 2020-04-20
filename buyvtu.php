<?php



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard - KlubKonect</title>
		<meta name="title" content="KlubKonect">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="noindex, nofollow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
		<meta name="author" content="Homezonic | Jamade IT Solutions">
		<link href="/assets/css/style.css" rel="stylesheet">
		</head>
		<body class="app">
			<div>
				<?= include "header.php" ?>
				<main class="main-content bgc-grey-100">
									<div id="mainContent">
										<div class="row gap-20 masonry pos-r">
											<div class="masonry-sizer col-md-6"></div>
												<?php include 'stat.php' ?>
						<div class="row">
							<div class="masonry-item col-lg-6 col-md-6">
								<div class="bd bgc-white">
									<div class="layers">
										<div class="layer w-100 pX-20 pT-20">
										<h6 class="lh-1 c-grey-900">Vend Airtime</h6>
										</div>
										<div class="layer w-100 p-20">
											<form>
																<div class="form-group">
 																	<label for="network">Network</label>
																	<select id="network" class="form-control">
																		<option selected="selected">Choose...</option>
																		<option>...</option>
																	</select>
																	</div>
																	<div class="form-group">
	 																	<label for="phoneNumber">Phone Number</label>
	 																	<input type="text" class="form-control" minlength="10" maxlength="11" placeholder="Enter Phone Number">
	 																</div>
																	<div class="form-group">
	 																	<label for="amount">Amount</label>
	 																	<input type="text" class="form-control" minlength="2" maxlength="5" placeholder="Amount">
	 																</div>
																	<button type="submit" class="btn btn-success btn-block">Buy Now</button>
												</form>

										</div>
									</div>
								</div>
							</div>
							<div class="masonry-item col-lg-6 col-md-6">
								<div class="bd bgc-white">
									<div class="layers">
										<div class="layer w-100 pX-20 pT-20">
											<h6 class="lh-1">Todo List</h6>
										</div>
											<div class="layer w-100 p-20">
													<p>Welcome to Dashboard</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</main>
					<?= include 'footer.php' ?>
</body>
</html>

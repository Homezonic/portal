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
											<h6 class="lh-1 c-grey-900">My Klub Stats</h6>
										</div>
										<div class="layer w-100 p-20">
													<div class="mT-30">
														<div class="peers mT-20 fxw-nw@lg+ jc-sb ta-c gap-10">
															<div class="peer">
																<div class="easy-pie-chart" data-size="100" data-percent="50" data-bar-color="#f44336">
																	<span></span>
																</div>
																<h6 class="fsz-sm">DATA</h6>
															</div>
															<div class="peer">
																<div class="easy-pie-chart" data-size="100" data-percent="80" data-bar-color="#2196f3">
																	<span></span>
																</div>
																<h6 class="fsz-sm">AIRTIME</h6>
															</div>
															<div class="peer">
																<div class="easy-pie-chart" data-size="100" data-percent="65" data-bar-color="#f44336">
																	<span></span>
																</div>
																<h6 class="fsz-sm">ELETRICITY</h6>
															</div>
															<div class="peer">
																<div class="easy-pie-chart" data-size="100" data-percent="90" data-bar-color="#ff9800">
																	<span></span>
																</div>
																<h6 class="fsz-sm">CABLETV</h6>
															</div>
														</div>
													</div>
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

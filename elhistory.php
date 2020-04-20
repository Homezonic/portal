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
							<div class="masonry-item col-lg-12 col-md-12">
								<div class="bd bgc-white">
									<div class="layers">
										<div class="layer w-100 pX-20 pT-20">
												<h6 class="lh-1 c-grey-900">Purchased Data History</h6>
										</div>
										<div class="layer w-100 p-20">
											<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</tfoot>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
													</tr>
												</tbody>
											</table>
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

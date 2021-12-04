<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Product - SB Admin</title>
        <link href="http://localhost/admin/css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Assigment</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="log.php">Logs</a>
						<a class="dropdown-item" href="changepass.php">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://localhost/admin/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Static Navigation</a>
                                    <a class="nav-link" href="http://localhost/admin/light-sidenav/index.php">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="http://localhost/admin/login.php">Login</a>
                                            <a class="nav-link" href="http://localhost/admin/register.php">Register</a>
                                            <a class="nav-link" href="http://localhost/admin/password/password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="http://localhost/admin/401.html">401 Page</a>
                                            <a class="nav-link" href="http://localhost/admin/404.html">404 Page</a>
                                            <a class="nav-link" href="http://localhost/admin/500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables Emloyee
                            </a>
							<a class="nav-link" href="product.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables Product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION["email"];?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables Product</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Product
								<input style="margin-left: 15%;" type="button" value="New Product / None" name="insertnew" onclick="insertvalue()">
                            </div>
                            <div class="card-body">
							
							
                                <div class="table-responsive">
									<table class="table table-bordered tbdb" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Sale</th>
                                                <th>Amount</th>
                                                <th>Type</th>
												<th>Brand</th>
												<th>Image name</th>
												<th>Info</th>
												<th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												while($row = mysqli_fetch_array($retval)):
											?>
												<tr>
													<td name="id"><?php echo $row["id_product"]; ?></td>
													<td name="name"><?php echo $row["name_product"]; ?></td>
													<td name="price"><?php echo $row["price_product"]; ?></td>
													<td name="sale"><?php echo $row["sale_product"]; ?></td>
													<td name="amount"><?php echo $row["sl_product"]; ?></td>
													<td name="type"><?php echo $row["type"]; ?></td>
													<td name="brand"><?php echo $row["brand"]; ?></td>
													<td name="image_link"><?php echo $row["image_product"]; ?></td>
													<td style="width:20%;" name="info"><?php echo $row["info_product"]; ?></td>
													
													<td name="image">
													
													<img src="img/<?php echo $row["image_product"];?>" class="img-thumbnail">
													
													</td>
												</tr>
							
												
											<?php endwhile; include('insertimg.php');?>
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<form method="POST" id="forminsert" enctype="multipart/form-data">
						<h3>Insert New</h3>
						<table>
							<tr>
								<td>Name:</td>
								<td><input type="text" name="name" value="" required></td>
							</tr>
							<tr>
								<td>Price:</td>
								<td><input type="number" name="price" min="0" step="0.1" value="" value="" required></td>
							</tr>
							<tr>
								<td>Sale:</td>
								<td><input type="number" name="sale" min="0" step="0.1" value=""  required></td>
							</tr>
							<tr>
								<td>Amount:</td>
								<td><input type="number" name="sl" min="0" step="1" value="" value="" required></td>
							</tr>
							<tr>
								<td>Type:</td>
								<td><input type="text" name="type" value="" required></td>
							</tr>
							<tr>
								<td>Brand:</td>
								<td><input type="text" name="brand" value="" required></td>
							</tr>
							<tr>
								<td>Image:</td>
								<td><input type="file" name="image_ins" id="image_ins" required></td>
							</tr>
							<tr>
								<td>Info:</td>
								<td><textarea cols="30" name="info" form="forminsert" placeholder="Enter here..."></textarea></td>
							</tr>
							<tr>
							
								<td colspan="2"><div style="width:50%;margin:0 auto;text-align:center;padding: 5%;"><input type="submit" name="submitinset2" value="Submit" onClick="return confirm_insert()"></div></td>
							
							</tr>
						</table>
					</form>
				</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TieuQuangThuan Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
		
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="http://localhost/admin/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
		<script src="http://localhost/admin/src/js/jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
		<script>			
			function insertvalue(){
				var x = document.getElementById("forminsert");
				if (x.style.display === "block") {
				x.style.display = "none";
				} else {
				x.style.display = "block";
				x.style.position = "fixed";
				}
			}
			function confirm_insert() {
				return confirm("Are you sure insert new?");
			}
			
		
			$('.tbdb').Tabledit({
				url: 'edit_prd.php',
				columns: {
					identifier: [0, 'id'],
					editable: [[1, 'name'], [2, 'price'], [3, 'sale'], [4, 'amount'], [5, 'type' ], [6,'brand'],[7,'image_link'],[8,'info']]
				}
			});
		</script>
	
	</body>
</html>

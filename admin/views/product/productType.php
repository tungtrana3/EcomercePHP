       <?php require('../layouts/header.php'); ?>
        <div id="layoutSidenav">
        <?php require('../layouts/navigation.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Danh sách loại sản phẩm</h1>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Loại sản phẩm
								<input style="margin-left: 15%;" type="button" value="New Product / None" name="insertnew" onclick="insertvalue()">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
									<table class="table table-bordered tbdb" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>Tên loại</th>
                                                <th>Hình ảnh</th>
                                                <th>Mô tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												while($row = mysqli_fetch_array($retval)):
											?>
												<tr>
													<td name="id"><?php echo $row["id_product"]; ?></td>
													<td name="name"><?php echo $row["name_product"]; ?></td>
													<td name="image_link"><?php echo $row["image_product"]; ?></td>
													<td name="name"><?php echo $row["name_product"]; ?></td>
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
		</script>
        <?php require('../layouts/footer.php'); ?>
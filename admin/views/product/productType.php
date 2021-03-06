
	 <div id="layoutSidenav">
	 <?php require_once __DIR__ .'/../layouts/navigation.php'; ?>
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
								<input style="margin-left: 15%;" type="button" value="Thêm sản phẩm" name="insertnew" onclick="insertvalue()">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
									<table class="table table-bordered tbdb" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th hidden="true">ID</th>
                                                <th>Tên loại</th>
                                                <th>Hình ảnh</th>
                                                <th>Mô tả</th>
												<th>Tình trạng</th>
												<th></th>
												<th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                                            $stt = 0;
                                            foreach ($productTypes as $row) {?>
                                                <tr>
													<td name="id" hidden="true"><?php echo $row["id"]; ?></td>
													<td name="name"><?php echo $row["typeName"]; ?></td>
													<td name="name"><?php echo $row["img"]; ?></td>
													<td name="name"><?php echo $row["infor"]; ?></td>
													<td name="name"><?php echo $row["status"]; ?></td>
													<td name="name"><?php echo $row["status"]; ?></td>
													<td name="name"><?php echo $row["status"]; ?></td>
													</td>
												</tr>
                                            <?php }
                                        ?>
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<form method="post" id="forminsert" enctype="multipart/form-data">
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
							
								<td colspan="2"><div style="width:50%;margin:0 auto;text-align:center;padding: 5%;">
                                <input type="submit" name="addProduct" value="Submit">
                            </div></td>
							
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
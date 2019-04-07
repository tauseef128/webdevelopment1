<?php 
	require_once '../connection.php';
 	require_once 'session.php' ;
	require_once 'top-header.php' ;
 ?>

<?php require_once 'sidebar.php'?>
            <!-- END HEADER DESKTOP-->
<div class="main-content">
    <div class="section__content section__content--p10">
        <div class="container-fluid">
		    <div class="row m-t-10">
		        <div class="col-md-12">
		        	<div class="card">
                        <div class="card-header">
                            <h3 class="card-heading">Categories</h3>
                            <a href="category-list.php" class="btn btn-primary btn-md right-button">
                               <i class="fas fa-plus"></i> Add
                            </a>
                        </div>
                        <div class="card-body card-block">
		            <div class="table-responsive m-b-80">
		                <table class="table table-borderless " id="dtBasicExample">
		                    <thead>
		                        <tr>
		                            <th>S.NO</th>
		                            <th>Name</th>
		                            <th>Description</th>
		                            <th>status</th>
		                            <th>Deleted</th>
		                            <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                       <?php 
		                       	$query = "SELECT * from categories ";
								$result = $conn->query($query);
								if($result->num_rows > 0){
									$categories = $result->fetch_all();
									foreach ($categories as $key => $value) {
									?>
										<tr>
											<td>
												<?php echo $key + 1 ?>	
											</td>
											<td>
												<?php echo $value[1] ?>	
											</td>
											<td>
												<?php echo $value[2] ?>	
											</td>
											<td>
												<?php echo $value[3] ? '<span class="label label-success"> Active </span>' : '<span class="label label-danger"> InActive </span>';
												 ?>	
											</td>
											<td>
												<?php 
													echo $value[4] ? '<span class="label label-danger"> Deleted </span>' : '<span class="label label-success"> Not Deleted </span>';
												?>
											</td>
											<td>
												<button class="btn btn-sm btn-primary">
													<i class="fa fa-edit"></i> Edit
													
												</button>
												<button class="btn btn-sm btn-danger">
													 <i class="fa fa-trash"></i>  Delete
													
												</button>
												
											</td>
										</tr>
									<?php 
									}
								}else{
									echo "in else";
								}
		                       ?>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		 </div>
	</div>
</div>	

   <?php  require_once 'main-footer.php'?>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php require_once 'footer.php' ?>
   <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
   <script type="text/javascript">
   	$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});

   </script>
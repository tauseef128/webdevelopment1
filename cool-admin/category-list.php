 <?php  require_once 'session.php' ; ?>
 <?php  require_once 'top-header.php' ; ?>

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
		                            <th>date</th>
		                            <th>type</th>
		                            <th>description</th>
		                            <th>status</th>
		                            <th>price</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td>2018-09-29 05:57</td>
		                            <td>Mobile</td>
		                            <td>iPhone X 64Gb Grey</td>
		                            <td class="process">Processed</td>
		                            <td>$999.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-28 01:22</td>
		                            <td>Mobile</td>
		                            <td>Samsung S8 Black</td>
		                            <td class="process">Processed</td>
		                            <td>$756.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-27 02:12</td>
		                            <td>Game</td>
		                            <td>Game Console Controller</td>
		                            <td class="denied">Denied</td>
		                            <td>$22.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-29 05:57</td>
		                            <td>Mobile</td>
		                            <td>iPhone X 64Gb Grey</td>
		                            <td class="process">Processed</td>
		                            <td>$999.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-28 01:22</td>
		                            <td>Mobile</td>
		                            <td>Samsung S8 Black</td>
		                            <td class="process">Processed</td>
		                            <td>$756.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-27 02:12</td>
		                            <td>Game</td>
		                            <td>Game Console Controller</td>
		                            <td class="denied">Denied</td>
		                            <td>$22.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-26 23:06</td>
		                            <td>Mobile</td>
		                            <td>iPhone X 256Gb Black</td>
		                            <td class="denied">Denied</td>
		                            <td>$1199.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-25 19:03</td>
		                            <td>Accessories</td>
		                            <td>USB 3.0 Cable</td>
		                            <td class="process">Processed</td>
		                            <td>$10.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-29 05:57</td>
		                            <td>Accesories</td>
		                            <td>Smartwatch 4.0 LTE Wifi</td>
		                            <td class="denied">Denied</td>
		                            <td>$199.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-24 19:10</td>
		                            <td>Camera</td>
		                            <td>Camera C430W 4k</td>
		                            <td class="process">Processed</td>
		                            <td>$699.00</td>
		                        </tr>
		                        <tr>
		                            <td>2018-09-22 00:43</td>
		                            <td>Computer</td>
		                            <td>Macbook Pro Retina 2017</td>
		                            <td class="process">Processed</td>
		                            <td>$10.00</td>
		                        </tr>
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
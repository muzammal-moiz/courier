<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");


$data="SELECT * FROM  wallert";
$data_wallert=db::getRecordS($data);
?>

<!-- main content start -->
<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #5ce1e6;color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-0 text-light">Wallert</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card" style="background:transparent;">
            <div class="card-body">
                <table
                    class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped"
                    id="componentDataTable3">
                    <thead>
                        <tr>
                            <th><span class="resize-col">ID</span></th>
                            <th><span class="resize-col">Invoice</span></th>
                            <th><span class="resize-col">Number</span></th>
                            <th><span class="resize-col">Date</span></th>
                            <th><span class="resize-col">Amount</span></th>
                            <th><span class="resize-col">Action</span></th>
                        </tr>
                    </thead>
                    <?php
					if($data_wallert){
			       foreach($data_wallert as $wallert){
					?>
                    <tbody>
                        <tr>
                            <td><span class="resize-col"><?php echo $wallert['id'] ?></span></td>
                            <td><span class="resize-col"><?php echo $wallert['innvoice'] ?></span></td>
                            <td><span class="resize-col"><?php echo $wallert['number'] ?></span></td>
                            <td><span class="resize-col"><?php echo $wallert['date'] ?></span></td>
                            <td><span class="resize-col"><?php echo $wallert['amount'] ?></span></td>
                            <td><span class="resize-col">
                                    <a href="action.php?delete_id_wallert=<?php echo $wallert['id'] ?>"
                                        class="btn btn-outline-danger text-dark">Trash</a>
                                </span></td>
                        </tr>
                    </tbody>
                    <?php
				   }
					}
					?>
                </table>
            </div>
        </div>
    </div>

    <?php
	require_once("footer.php")
?>
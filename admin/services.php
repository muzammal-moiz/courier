<?php
require_once("header.php");
require_once("database.php");
require_once("sidebar.php");

$data="SELECT * FROM  services";
$data_services=db::getRecords($data);

?>

<!-- main content start -->
<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #5ce1e6;color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-light" style="padding-top:7px;">Add Services Fields</h5>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="add_services.php" class="btn btn-primary w-100 text-dark">Add Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body">
                        <div class="row g-3">
                            <?php
							if($data_services){
								foreach($data_services as $ds){
									?>
                            <div class="col-lg-4 col-6 col-xs-12">
                                <div class="card main_card">
                                    <div class="card-body">
                                        <img src="uploads/<?php echo $ds['image']; ?>">
                                        <h4 class="mt-4 text-dark"><?php echo $ds['heading']; ?></h4>
                                        <p class="mt-3 text-dark"><?php echo $ds['dcp']; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="update_services.php?id=<?php echo $ds['id']; ?>"
                                                    class="btn btn-primary w-100 text-dark">Edit</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="action.php?delele_service=<?php echo $ds['id']; ?>"
                                                    class="btn btn-outline-danger w-100 text-dark">Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
								}
							}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
		require_once("footer.php")
	?>
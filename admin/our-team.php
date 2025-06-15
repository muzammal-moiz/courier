<?php
require_once("header.php");
require_once("database.php");
require_once("sidebar.php");



$data="SELECT * FROM  team";
$data_team=db::getRecords($data);
?>

<!-- main content start -->
<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #5ce1e6;color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-light" style="padding-top:7px;">Add Team Fields</h5>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="add_our-team.php" class="btn btn-primary w-100 text-dark">Add Our Team</a>
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
							if($data_team){
								foreach($data_team as $ot){
									?>
                            <div class="col-lg-4 col-6 col-xs-12">
                                <div class="card main_card">
                                    <div class="card-body">
                                        <img src="uploads/<?php echo $ot['image']; ?>">
                                        <h4 class="mt-4 text-dark"><?php echo $ot['heading']; ?></h4>
                                        <h4 class="mt-4 text-dark"><?php echo $ot['dcp']; ?></h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="update_our-team.php?update_id_ot=<?php echo $ot['id']; ?>"
                                                    class="btn btn-primary w-100 text-dark">Edit</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="action.php?delete_id_ot=<?php echo $ot['id']; ?>"
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

                            <!-- <div class="col-lg-4 col-6 col-xs-12">
								<div class="card main_card">
									<div class="card-body">
										<img src="images/team-01.jpg">
										<h4 class="mt-4 text-dark">David Backham</h4>
										<h4 class="mt-4 text-dark">Founder</h4>
										<div class="row">
											<div class="col-md-6">
												<a href="update_our-team.php" class="btn btn-primary w-100 text-dark">Edit</a>
											</div>
											<div class="col-md-6">
												<a href="" class="btn btn-outline-danger w-100 text-dark">Trash</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-6 col-xs-12">
								<div class="card main_card">
									<div class="card-body">
										<img src="images/team-03.jpg">
										<h4 class="mt-4 text-dark">Robert Walter</h4>
										<h4 class="mt-4 text-dark">Founder</h4>
										<div class="row">
											<div class="col-md-6">
												<a href="update_our-team.php" class="btn btn-primary w-100 text-dark">Edit</a>
											</div>
											<div class="col-md-6">
												<a href="" class="btn btn-outline-danger w-100 text-dark">Trash</a>
											</div>
										</div>
									</div>
								</div>
							</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
		require_once("footer.php")
	?>
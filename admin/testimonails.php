<?php
require_once("header.php");
require_once("database.php");
require_once("sidebar.php");



$data="SELECT * FROM  testimonails";
$data_testimonails=db::getRecords($data);
?>

<!-- main content start -->
<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #5ce1e6;color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-light" style="padding-top:7px;">Add Testimonails Fields</h5>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <a href="add_testimonails.php" class="btn btn-primary w-100 text-dark">Add Our
                                Testimonails</a>
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
							if($data_testimonails){
								foreach($data_testimonails as $tm){
									?>
                            <div class="col-lg-4 col-6 col-xs-12">
                                <div class="card main_card">
                                    <div class="card-body">
                                        <img src="uploads/<?php echo $tm['image'] ?>">
                                        <h4 class="mt-4 text-dark"><?php echo $tm['designation'] ?></h4>
                                        <h4 class="mt-1 text-dark">
                                            <?php echo $tm['heading'] ?></h4>
                                        <p class="mt-3 text-dark"><?php echo $tm['dcp'] ?></p>
                                        <p class="mt-3 text-dark"></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="update_testimonails.php?update_id_tm=<?php echo $tm['id'] ?>"
                                                    class="btn btn-primary w-100 text-dark">Edit</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="action.php?del_testimonails=<?php echo $tm['id'] ?>"
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
                                        <img src="images/testimonial-02.png">
                                        <h4 class="mt-4 text-dark">Ceo & Founder</h4>
                                        <h4 class="mt-1 text-dark">
                                            Testimonials
                                            What our happy clients
                                            say about?</h4>
                                        <p class="mt-3 text-dark">“It was really great working with Logistbiz team and I
                                            am happy I was introduced to this team! It’s not easy to work on a website
                                            some”</p>
                                        <p class="mt-3 text-dark"></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="update_testimonails.php"
                                                    class="btn btn-primary w-100 text-dark">Edit</a>
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
                                        <img src="images/testimonial-03.png">
                                        <h4 class="mt-4 text-dark">Ceo & Founder</h4>
                                        <h4 class="mt-1 text-dark">
                                            Testimonials
                                            What our happy clients
                                            say about?</h4>
                                        <p class="mt-3 text-dark">“It was really great working with Logistbiz team and I
                                            am happy I was introduced to this team! It’s not easy to work on a website
                                            some”</p>
                                        <p class="mt-3 text-dark"></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="update_testimonails.php"
                                                    class="btn btn-primary w-100 text-dark">Edit</a>
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
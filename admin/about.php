<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");

$data="SELECT * FROM about";
$update_about=db::getRecord($data);

?>
<div class="main-content">
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Update About</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body" style=" border: 4px solid rgb(193 193 193);
					">
                        <div class="row ">
                            <form method="post" action="action.php" enctype="multipart/form-data">
                                <div class="col-sm-12">
                                    <label>Heading</label>
                                    <input class="form-control" type="text" id="formFile" name="heading"
                                        style="height: 50px !important;" value="<?php echo $update_about['heading'];?>">
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label>Upload Your Image</label>
                                    <input class="form-control" type="file" name="image"
                                        style="height: 50px !important;">
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label>Description</label>
                                    <textarea style="height:150px !important;" class="form-control" name="dcp"><?php echo $update_about['dcp'];?>
								</textarea>
                                </div>
                                <input type="hidden" name="id" class="form-control"
                                    value="<?php echo $update_about['id'];?>">
                                <div class="row">
                                    <div class="col-md-4 mx-auto">
                                        <button class="btn btn-success w-100 mt-5" name="update_about"
                                            type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
	require_once("footer.php")
?>
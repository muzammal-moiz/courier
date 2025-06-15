<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");

$id=$_GET['updata_id'];
$data="SELECT * FROM casestudy WHERE id='$id'";
$update_casestudy=db::getRecord($data);
?>

<div class="main-content">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card" style="background: #5ce1e6;color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-light" style="padding-top:7px;">Update Case study Fields</h5>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body" style="border: 4px solid rgb(193 193 193);
					padding: 40px; padding-left:20px; padding-right:20px; margin-top: 5px;">
                        <div class="row g-3">
                            <form method="POST" action="action.php" enctype="multipart/form-data">

                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label"><b>Title</b></label>
                                    <input class="form-control" type="text" id="formFile" name="title"
                                        style="height: 50px !important;"
                                        value="<?php echo $update_casestudy['title']  ?>">
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label"><b>Heading</b></label>
                                    <input class="form-control" type="text" id="formFile" name="heading"
                                        style="height: 50px !important;"
                                        value="<?php echo $update_casestudy['heading']  ?>">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="basicInput" class="form-label"><b>Description</b></label>
                                    <textarea style="    height: 150px !important;" class="form-control"
                                        name="dcp"><?php echo $update_casestudy['dcp']  ?></textarea>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label"><b>Upload Your Image</b></label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        style="height: 50px !important;">
                                </div>
                                <input type="hidden" name="id" class="form-control"
                                    value="<?php echo $update_casestudy['id']  ?>">
                                <div class="row">
                                    <div class="col-md-4 mx-auto">
                                        <button class="btn btn-success w-100 mt-5" name="update_casestudy"
                                            type="submit">Update</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
require_once("footer.php")
?>
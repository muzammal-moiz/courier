<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");
?>

<!-- main content start -->
<div class="main-content">

    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Add Banner Fields</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body" style="border: 4px solid rgb(193 193 193);
					padding: 40px; padding-left:20px; padding-right:20px; margin-top: 5px;">
                        <div class="row g-3">
                            <form method="POST" action="action.php" enctype="multipart/form-data">

                                <div class="col-sm-12">
                                    <label for="formFile" class="form-label"><b>Heading</b></label>
                                    <input class="form-control" type="text" id="formFile" name="heading"
                                        style="height: 50px !important;">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="basicInput" class="form-label"><b>Description</b></label>
                                    <textarea style="    height: 150px !important;" class="form-control"
                                        name="dcp"></textarea>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label"><b>Upload Your Image</b></label>
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        style="height: 50px !important;">
                                </div>
                                <input type="hidden" name="id" class="form-control">
                                <div class="row">
                                    <div class="col-md-4 mx-auto">
                                        <button class="btn btn-success w-100 mt-5" name="add_banner"
                                            type="submit">Submit</button>
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
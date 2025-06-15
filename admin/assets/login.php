<?php
	require_once("header.php");
?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner">
						<h1 class="pbmit-tbar-title">Sign In</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span><a title="" href="index.php" class="home"><span>Home</span></a></span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item">Sign In</span></span>
					</div>
				</div>
			</div>
		</div> 
	</div> 
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content contact_us">  

	<!-- Contact Form -->
	<section class="contact-form_box mt-5 pt-5">
		<div class="container p-0">
			<div class="row g-0">
				<div class="col-md-12 col-xl-6 mx-auto">
					<div class="contact-form_main">
						<div class="pbmit-heading-subheading animation-style2">
							<h4 class="text-center mb-4">Sign In Here</h4>
						</div>
						<form class="contact-form" method="post" id="contact-form" action="https://logistbiz-demo.pbminfotech.com/html-demo/send.php">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" class="form-control" placeholder="User Name" name="" required>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" placeholder="Password" name="password" required>
								</div>
								<div class="col-sm-12">
									<button class="pbmit-btn w-100">
										<span class="pbmit-button-text">Login</span>
									</button>
								</div>
								<div class="col-sm-12 text-center mt-4">
									<a href="register.php">Or Sign Up Here</a>
								</div>
								<div class="col-md-12 col-lg-12 message-status"></div>
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form -->

</div>
<!-- Contact Us Content End -->

<?php
	require_once("footer.php");
?>
<?php
require_once("header.php");

$query="SELECT * FROM banner";
$banner_records=db::getRecords($query);

$data="SELECT * FROM about";
$update_about_=db::getRecord($data);

$data="SELECT * FROM  services";
$data_services=db::getRecords($data);

$data="SELECT * FROM  testimonails";
$data_testimonails=db::getRecords($data);

$data="SELECT * FROM casestudy";
$data_casestudy=db::getRecords($data);

?>
<div class="pbmit-slider-area">
    <!-- START Home 01 REVOLUTION SLIDER 6.6.14 -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_4_1_wrapper" data-alias="home-01" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_4_1" data-version="6.6.14">
            <?php
							if($banner_records){
								foreach($banner_records as $banner_record){
									?>
            <rs-slides style="overflow: hidden; position: absolute;">

                <rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide"
                    data-thumb="revolution/images/slider-1-50x100.jpg" data-in="o:0;" data-out="a:false;">
                    <img src="revolution/images/slider-1.jpg" alt="" title="slider-1" width="1920" height="771"
                        class="rev-slidebg tp-rs-img" data-bg="p:center top;f:auto;" data-no-retina>
                    <rs-layer id="slider-4-slide-4-layer-0" data-type="image" data-rsp_ch="on"
                        data-xy="xo:31px,43px,32px,19px;y:b;yo:40px,7px,5px,6px;"
                        data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
                        data-dim="w:1076px,941px,714px,440px;h:451px,394px,299px,184px;" data-frame_0="x:right;"
                        data-frame_1="st:600;sp:2000;sR:600;" data-frame_999="o:0;st:w;sR:6400;" data-loop_0="y:-10px;"
                        data-loop_999="y:10px;sp:6000;e:sine.inOut;yym:t;" style="z-index:8;"><img
                            src="admin/uploads/<?php echo $banner_record['image']; ?>" alt="" class="tp-rs-img"
                            width="1076" height="451" data-no-retina>
                    </rs-layer>
                    <!--

								

								-->
                    <rs-layer id="slider-4-slide-4-layer-3" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:l,l,l,c;xo:0,30px,22px,-76px;yo:200px,225px,202px,188px;"
                        data-text="w:normal;s:90,70,53,34;l:90,70,53,36;fw:700;" data-frame_0="x:175%;o:1;"
                        data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1360;sp:1000;sR:1360;"
                        data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:6640;"
                        style="z-index:9;font-family:'Space Grotesk';text-transform:capitalize;">
                        <?php echo $banner_record['heading']; ?>
                    </rs-layer>
                    <!--

								-->
                    <rs-layer id="slider-4-slide-4-layer-4" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:l,r,r,r;xo:275px,30px,22px,27px;yo:398px,398px,344px,278px;"
                        data-text="w:normal;s:22,19,17,17;l:26,22,24,28;fw:500;"
                        data-dim="w:877px,767px,582px,425px;h:79px,69px,52px,auto;" data-frame_0="x:175%;o:1;"
                        data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1770;sp:1000;sR:1770;"
                        data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:6230;"
                        style="z-index:10;font-family:'Schibsted Grotesk';">
                        <?php echo $banner_record['dcp']; ?>
                    </rs-layer>
                    <!--

								-->
                    <rs-layer id="slider-4-slide-4-layer-6" data-type="image" data-rsp_ch="on"
                        data-xy="xo:105px,91px,69px,42px;yo:403px,407px,359px,292px;"
                        data-text="w:normal;s:20,17,12,7;l:0,21,15,9;"
                        data-dim="w:107px,93px,70px,43px;h:36px,31px,23px,14px;" data-vbility="t,t,t,f"
                        data-frame_0="x:-50,-43,-32,-19;" data-frame_1="st:1770;sp:1000;" data-frame_999="o:0;st:w;"
                        data-loop_0="x:-10px;" data-loop_999="x:10px;sp:4500;e:sine.inOut;yym:t;" style="z-index:13;">
                        <img src="revolution/images/slider-sharp.png" alt="" class="tp-rs-img" width="107" height="36"
                            data-no-retina>
                    </rs-layer>


                </rs-slide>

            </rs-slides>
            <?php
								}
							}
							?>
            <rs-static-layers>
                <!--
					 -->
            </rs-static-layers>
        </rs-module>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->
</div>
<!-- Page Content -->
<div class="page-content">


    <!-- About Us Start -->
    <section class="about-us_one">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 col-xl-6">
                    <div class="about-one_imgbox">
                        <div class="about-one_img1">
                            <img src="admin/uploads/<?php echo $update_about_['image'];?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="about-one_rightbox">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">About Us</h4>
                            <h2 class="pbmit-title"><?php echo $update_about_['heading'];?></h2>
                            <div class="pbmit-heading_desc">
                                <?php echo $update_about_['dcp'];?>
                            </div>
                        </div>

                        <div class="about-one-bottom_box">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-3 col-xl-4">
                                    <a class="pbmit-btn pbmit-btn-outline" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Our Service -->
    <section class="our-service_section">
        <div class="container-fluid">
            <div class="pbmit-heading-subheading text-center">
                <h4 class="pbmit-subtitle">Services</h4>
                <h2 class="pbmit-title">Our Services</h2>
            </div>
            <div class="row pbmit-column-four">
                <?php
							if($data_services){
								foreach($data_services as $ds){
									?>
                <div class="col-md-6 col-xl-3">
                    <article class="pbmit-service-style-3">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-service-wrapper">
                                <div class="pbmit-service-wrapper-icon-wrapper">
                                    <div class="pbmit-service-wrapper-icon-one">
                                        <img src="admin/uploads/<?php echo $ds['image']; ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-service-wrapper-icon-two">
                                        <img src="admin/uploads/<?php echo $ds['image']; ?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content d-flex justify-content-between">
                                    <h3 class="pbmit-service-title">
                                        <a href="#"><?php echo $ds['heading']; ?></a>
                                    </h3>
                                    <div class="pbmit-svg-btn">
                                        <a class="btn-arrow" href="#">
                                            <i class="pbmit-base-icon-right-arrow-2 pbmit-svg-btn-icon1"></i>
                                            <i class="pbmit-base-icon-right-arrow-2 pbmit-svg-btn-icon2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
								}
							}
							?>
            </div>
        </div>
    </section>

    <!-- Our Service End -->


    <!-- Portfolio Start -->
    <section class="portfolio_one">
        <div class="container-fluid">
            <div class="pbmit-heading-style">
                <h2 class="pbmit-title">CaseStudies</h2>
            </div>
            <div class="portfolio-one_slider">
                <div class="swiper-slider" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="false"
                    data-columns="3" data-margin="5" data-effect="slide">
                    <div class="swiper-wrapper">
                        <?php
							if($data_casestudy){
								foreach($data_casestudy as $ca){
									?>
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-portfolio-style-1">
                                <div class="pbminfotech-post-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="admin/uploads/<?php echo $ca['image']; ?>" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-titlebox">
                                            <div class="pbmit-port-cat">
                                                <a href="#" rel="tag"><?php echo $ca['title']; ?></a>
                                            </div>
                                            <h3 class="pbmit-portfolio-title">
                                                <a href="#"><?php echo $ca['heading']; ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
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
</section>
<!-- Portfolio End -->

<!-- Pricing Start -->
<!-- <section class="pricing_one">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">Pricing Table</h4>
            <h2 class="pbmit-title">Choose right plan for logistic</h2>
        </div>
        <div class="pbmit-ptable-cols pbminfotech-ele-ptable-style-1">
            <div class="row">
                <div class="pbmit-ptable-col col-md-6 col-lg-4">
                    <div class="pbmit-pricing-table-box">
                        <div class="pbmit-heading-wrap d-flex justify-content-between">
                            <div class="pbmit-heading-wrapper">
                                <h3 class="pbminfotech-ptable-heading">Basic</h3>
                                <div class="pbminfotech-sep"></div>
                                <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                            </div>
                            <div class="pbmit-ptable-icon">
                                <div class="pbmit-ptable-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-storage"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-head-wrap">
                            <div class="pbminfotech-ptable-price-w d-flex">
                                <div class="pbminfotech-ptable-symbol">$</div>
                                <div class="pbminfotech-ptable-price">190</div>
                            </div>
                            <div class="pbminfotech-ptable-frequency">M</div>
                        </div>
                        <div class="pbmit-ptable-inner">
                            <div class="pbmit-ptable-lines-w">
                                <div class="pbmit-ptable-line">Advanced Analytics</div>
                                <div class="pbmit-ptable-line">Change Management</div>
                                <div class="pbmit-ptable-line">Corporate Finance</div>
                                <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                <div class="pbmit-ptable-line">Information Technology</div>
                            </div>
                        </div>
                        <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                            <a href="#" class="pbmit-btn">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="pbmit-pricing-table-featured-col pbmit-ptable-col col-md-6 col-lg-4">
                    <div class="pbmit-pricing-table-box">
                        <div class="pbmit-ptablebox-featured-w"></div>
                        <div class="pbmit-heading-wrap d-flex justify-content-between">
                            <div class="pbmit-heading-wrapper">
                                <h3 class="pbminfotech-ptable-heading">Premium</h3>
                                <div class="pbminfotech-sep"></div>
                                <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                            </div>
                            <div class="pbmit-ptable-icon">
                                <div class="pbmit-ptable-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-container-hanging"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-head-wrap">
                            <div class="pbminfotech-ptable-price-w d-flex">
                                <div class="pbminfotech-ptable-symbol">$</div>
                                <div class="pbminfotech-ptable-price">290</div>
                            </div>
                            <div class="pbminfotech-ptable-frequency">M</div>
                        </div>
                        <div class="pbmit-ptable-inner">
                            <div class="pbmit-ptable-lines-w">
                                <div class="pbmit-ptable-line">Advanced Analytics</div>
                                <div class="pbmit-ptable-line">Change Management</div>
                                <div class="pbmit-ptable-line">Corporate Finance</div>
                                <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                <div class="pbmit-ptable-line">Information Technology</div>
                            </div>
                        </div>
                        <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                            <a href="#" class="pbmit-btn">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="pbmit-ptable-col col-md-6 col-lg-4">
                    <div class="pbmit-pricing-table-box">
                        <div class="pbmit-heading-wrap d-flex justify-content-between">
                            <div class="pbmit-heading-wrapper">
                                <h3 class="pbminfotech-ptable-heading">Advanced</h3>
                                <div class="pbminfotech-sep"></div>
                                <div class="pbminfotech-ptable-desc">For Normally Check up Plan</div>
                            </div>
                            <div class="pbmit-ptable-icon">
                                <div class="pbmit-ptable-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-logistbiz-icon pbmit-logistbiz-icon-worldwide-delivery"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-head-wrap">
                            <div class="pbminfotech-ptable-price-w d-flex">
                                <div class="pbminfotech-ptable-symbol">$</div>
                                <div class="pbminfotech-ptable-price">390</div>
                            </div>
                            <div class="pbminfotech-ptable-frequency">M</div>
                        </div>
                        <div class="pbmit-ptable-inner">
                            <div class="pbmit-ptable-lines-w">
                                <div class="pbmit-ptable-line">Advanced Analytics</div>
                                <div class="pbmit-ptable-line">Change Management</div>
                                <div class="pbmit-ptable-line">Corporate Finance</div>
                                <div class="pbmit-ptable-line">Strategy &amp; Marketing</div>
                                <div class="pbmit-ptable-line">Information Technology</div>
                            </div>
                        </div>
                        <div class="pbminfotech-ptable-btn pbmit-svg-btn">
                            <a href="#" class="pbmit-btn">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-spinner_box">
            <div class="pbmit-spinner pbmit-spinner-box-style-2">
                <a class="pbmit-lightbox-video" href="#">
                    <div class="pbmit-ihbox-box">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            viewBox="0 0 200 200">
                            <defs>
                                <path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path">
                                </path>
                            </defs>
                            <text font-size="15" font-family="Prompt,sans-serif" font-weight="400">
                                <textPath startOffset="0" xlink:href="#txt-path">Best price plan - Best price plan -
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->
<!-- Pricing End -->

<!-- Testimonial Start -->
<section class="section-lgb overflow-hidden mt-5 pt-5">
    <div class="container pbmit-col-stretched-yes pbmit-col-left">
        <div class="row g-0">
            <div class="col-md-12 col-xl-6">
                <div class="testimonial-one_left">
                    <div class="pbmit-col-stretched-left">
                        <div class="testimonial-truck1_img">
                            <img src="images/homepage-1/testimonial-truck1.png" class="img-fluid" alt="">
                        </div>
                        <div class="pbmit-road"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Testimonials</h4>
                    <h2 class="pbmit-title">What our happy clients say about?</h2>
                </div>
                <div class="testimonial-one_arrow swiper-btn-custom d-flex flex-row-reverse"></div>
                <div class="swiper-slider" data-arrows-class="testimonial-one_arrow" data-loop="true"
                    data-autoplay="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="30"
                    data-effect="slide">
                    <div class="swiper-wrapper">
                        <?php
							if($data_testimonails){
								foreach($data_testimonails as $tm){
									?>
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-testimonial-style-2">
                                <div class="pbminfotech-post-item">
                                    <div class="pbminfotech-box-desc">
                                        <blockquote class="pbminfotech-testimonial-text">
                                            <p><?php echo $tm['dcp'] ?></p>
                                        </blockquote>
                                    </div>
                                    <div class="pbminfotech-box-author d-flex align-items-center">
                                        <div class="pbminfotech-box-img">
                                            <div class="pbmit-featured-img-wrapper">
                                                <div class="pbmit-featured-wrapper">
                                                    <img src="admin/uploads/<?php echo $tm['image'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-auther-content">
                                            <h3 class="pbminfotech-box-title"><?php echo $tm['heading'] ?></h3>
                                            <div class="pbminfotech-testimonial-detail"><?php echo $tm['designation'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
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
</section>
<!-- Testimonial End -->
</div>
<!-- Page Content End -->

<?php
			require_once("footer.php")
		?>
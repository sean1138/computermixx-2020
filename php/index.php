<?php $pagetitle = "Quality Computer Products and Services"; ?>
<?php include_once "tpl1_meta.tpl"; ?>
	<?php include_once "tpl2_header.tpl"; ?>
	<main>
		<section class="fullwidth">
			<h1>Providing Computer Solutions throughout Northeast Ohio.</h1>
			<div class="container-laptop float-r">
				<div class="main-carousel" style="height:260px;width:420px;" data-flickity='{ "setGallerySize": false, "cellAlign": "left", "contain": true, "autoPlay": 3000, "wrapAround": true }'>
					<!-- data-flickity options: https://flickity.metafizzy.co/options.html -->
					<img src="images/simple_img_1.jpg" width="420" height="260">
					<img src="images/simple_img_2.jpg" width="420" height="260">
					<img src="images/simple_img_3.jpg" width="420" height="260">
					<img src="images/simple_img_4.jpg" width="420" height="260">
				</div>
				<link href="js/flickity.css" rel="stylesheet" type="text/css" />
				<script type="text/javascript" src="js/flickity.pkgd.min.js"></script>
			</div>
			<p class="text-lead"><?php echo $BrandName ?> provides consulting, installation and support services to businesses and individuals throughout Northeast Ohio.</p>
			<ul>
				<li>Full Line of computer products from HP and Lenovo.</li>
				<li>Authorized repair with certified technicians.</li>
				<li>Our experience makes the difference - over 25 years.</li>
			</ul>
		</section>
		<section>
			<div class="banner-text">
				<div class="banner-text-img"><img src="images/circle-hurryin.png" alt="" />
				</div>
				<div class="banner-text-body">
					<h1>Used Chromebooks for just $150.00!</h1>
					<p class="text-lead"><strong>Perfect for:</strong> Students &bull; Travelers &bull; Anyone looking for a quick, user-friendly laptop!</p>
				</div>
			</div>
		</section>
		<section class="fullwidth banner d-none">
			<img src="images/used_chromebooks_at_computermixx_wooster_ohio.jpg" alt="Used Chromebooks for just $150.00" width="1100" height="100" />
		</section>
		<section class="primary">
			<h2>Computer Services from Local Experts</h2>
			<p><span><?php echo $BrandName ?> recoginizes you have a choice in choosing a computer service provider. We have extensively trained our staff to handle the needs of our customers providing fast, reliable results.</span>
			</p>
			<ul>
				<li><?php echo $BrandName ?> is providing Intuit &reg; Solutions including Point of Purchase hardware, software, support, and Intuit Online Payroll.</li>
				<li><?php echo $BrandName ?> provides authorized warranty repair services for HP and Lenovo. Our certified technicians complete repairs locally, at your facility or in our technical center.</li>
				<li><?php echo $BrandName ?> also provides non warranty service on any make or model you may have.</li>
				<li><?php echo $BrandName ?> helps customers become more productive by selling and installing products from Microsoft, Cisco, Symantec, as well as many others.</li>
				<li><?php echo $BrandName ?> carries a superior product line from HP and Lenovo - not found in retail stores.</li>
				<li><?php echo $BrandName ?> provides consulting, installation and support services to businesses and individuals throughout Northeast Ohio.</li>
			</ul>
			<div class="line"></div>
			<!-- <p><img width="286" height="83" src="images/Apple_Reseller0.gif" />
			</p> -->
		</section>
		<aside>
			<?php include_once "tpl3_sidebar.tpl"; ?>
		</aside>
	</main>
	<?php include_once "tpl4_footer.tpl"; ?>

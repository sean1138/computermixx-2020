<?php $pagetitle = "Sales"; ?>
<?php include_once "tpl1_meta.tpl"; ?>
	<?php include_once "tpl2_header.tpl"; ?>
	<main>
		<section class="fullwidth">
			<h1>Products</h1>
			<p class="text-lead"><?php echo $BrandName ?> only offers our customers the finest in computer products and services. Our trained staff will help examine your needs and offer only the right products to reach your goals. </p>
		</section>
		<section class="primary">
			<h2>Featured Products</h2>
			<p><?php echo $BrandName ?> offers a full line of computer products including laptops, desktops and servers from Lenovo and HP. We also offer printers and scanners from HP, Canon, Epson and many other companies. Laptop bags, cables, wireless systems, software, and other accessories are available in our store or can be ordered to meet your needs. Call or stop in so one of our sales associates can help outfit your home or business for all your computing needs.</p>
			<div class="line"></div>
			<div class="flexrow logos-sales">
				<img src="images/wm_canon.svg" alt="Canon" />
				<img src="images/wm_microsoft.svg" alt="Microsoft" />
				<img src="images/wm_lenovo.svg" alt="Lenovo" />
				<img src="images/wm_epson.svg" alt="Epson" />
				<img src="images/wm_hp-compaq.gif" alt="HP Compaq" />
				<img src="images/wm_cisco.svg" alt="Cisco" />
				<img src="images/wm_symantec.svg" alt="Symantec" />
			</div>
			<div class="line"></div>
		</section>
		<aside>
			<?php include_once "tpl3_sidebar.tpl"; ?>
		</aside>
	</main>
	<?php include_once "tpl4_footer.tpl"; ?>

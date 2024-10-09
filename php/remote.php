<?php $pagetitle = "Remote Support"; ?>
<?php include_once "tpl1_meta.tpl"; ?>
<?php include_once "tpl2_header.tpl"; ?>
<main>
	<section class="fullwidth">
		<h1>Remote Support</h1>
		<p class="text-lead">In some cases,
			<?php echo $BrandName ?>can provide remote support for your systems. Contact us by phone for pricing and to see if this service is appropriate for your needs.</p>
	</section>
	<section class="primary">
		<form class="flexform" name="ssid" action="https://www.fastsupport.com/servlet/download/customerDownload" method="POST">
			<fieldset>
				<legend><h2>Remote Support Form</h2></legend>
				<p class="flexform-group">
					<label for="name" class="text-muted wide">Your Name:</label>
					<input id="name" name="name" type="text">
				</p>
				<p class="flexform-group">
					<label for="supportSessionId" class="text-muted wide">Type the 9 digit number:</label>
					<input id="supportSessionId" name="supportSessionId" type="text">
				</p>
				<p class="flexform-group flex-end">
					<input type="SUBMIT" value="Connect">
				</p>
			</fieldset>
		</form>
		<!-- <div class="line"></div> -->
		<h2>Check Warranty</h2>
		<p>To check if you system is still covered under a manufacturer warranty, click on the appropriate link below.</p>
		<ul class="none imgtext">
			<li>
				<a href="https://support.hp.com/us-en/checkwarranty"><img src="images/slo_hp1.png" width="64" height="64">Hewlett Packard</a>
			</li>
			<li>
				<a href="http://pcsupport.lenovo.com/us/en/warrantylookup"><img src="images/slo_lenovo1.png" width="64" height="64">Lenovo</a>
			</li>
		</ul>
	</section>
	<aside>
		<?php include_once "tpl3_sidebar.tpl"; ?>
	</aside>
</main>
<?php include_once "tpl4_footer.tpl"; ?>

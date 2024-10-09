<?php $pagetitle = "_page_template"; ?>
<?php include_once "tpl1_meta.tpl"; ?>
	<?php include_once "tpl2_header.tpl"; ?>
	<main>
		<section class="fullwidth">
			<h1>PAGE_TITLE</h1>
			<p class="text-lead">LEAD_TEXT</p>
		</section>
		<section class="primary">
			<h2>SECTION_TITLE</h2>
			<p>BODY_TEXT</p>
			<div class="line"></div>
		</section>
		<aside>
			<h2>ASIDE</h2>
			<p>usually &lt;?php include_once "tpl3_sidebar.tpl" ?&gt;</p>
			<?php include_once "tpl3_sidebar.tplx"; ?>
		</aside>
	</main>
	<?php include_once "tpl4_footer.tpl"; ?>

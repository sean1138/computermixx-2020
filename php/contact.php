<?php $pagetitle = "Contact"; ?>
<?php include_once "tpl1_meta.tpl"; ?>
<?php include_once "tpl2_header.tpl"; ?>
<main>
	<section class="fullwidth">
		<h1>Contact Us</h1>
		<p class="text-lead mb-0">Take advantage of our convenient office hours and location. If there is anything we can do to assist you, please take a moment to contact us.</p>
	</section>
	<div class="fullwidth" style="margin:0 1em;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.491829339069!2d-81.9409275493223!3d40.79518477922149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88374689061909ff%3A0xce7f08ef09322c86!2sComputerMixx!5e0!3m2!1sen!2sus!4v1455217616501" style="border:1px solid rgba(0,0,0,.08);height:300px;width:100%;" allowfullscreen="" width="400" height="300" frameborder="0"></iframe>
	</div>
	<!-- <div class="halfwidth">
		<img class="fluid-width" src="https://www.computermixx.com/images/office_building.jpg" alt="Our Office Building" />
	</div> -->
	<section class="primary">




		<!-- <form class="flexform" method="POST" action="https://www.computermixx.com/cgi-bin/cgiemail/cgi-bin/computermixx_form.txt"> -->
		<form class="flexform" method="" action="">
			<fieldset>
				<legend><h2>Contact Form</h2></legend>
				<p>Please take a moment to let us know how Computer<strong>Mixx</strong>
					can assist you. We look forward to hearing from you and will respond to your inquiry promply.</p>
				<p class="flexform-group">
					<label for="name" class="text-muted">Name:</label>
					<input id="name" name="name" type="text">
				</p>
				<p class="flexform-group">
					<label for="email" class="text-muted">Email:</label>
					<input id="email" name="email" type="email">
				</p>
				<p class="flexform-group">
					<label for="phone" class="text-muted">Phone:</label>
					<input id="phone" name="phone" type="tel">
				</p>
				<p class="flexform-group">
					<label for="company" class="text-muted">Company:</label>
					<input id="company" name="company" type="text">
				</p>
				<p class="flexform-group">
					<label for="comment" class="text-muted">Comment:</label>
					<textarea id="comment" name="comment" rows="8"></textarea>
				</p>
				<p class="flexform-group flex-end">
					<!-- <input type="hidden" name="success" value="http://www.computermixx.com/thank_you.html"> -->
					<!-- <input type="hidden" name="cgiemail-mailopt" value="sync"> -->
					<!-- <input type="submit" value=" Submit"> -->
					<button onclick="ClearFields(); return false;">Submit</button>
					<script>
						function ClearFields(e) {
						     document.getElementById("name").value = "";
						     document.getElementById("email").value = "";
						     document.getElementById("phone").value = "";
						     document.getElementById("company").value = "";
						     document.getElementById("comment").value = "";
						     e.preventDefault();
						}
					</script>
				</p>
			</fieldset>
		</form>
	</section>
	<aside>
		<img class="fluid-width" src="https://www.computermixx.com/images/office_building.jpg" alt="Our Office Building" />
		<p>Hours:
			<br>Monday, Friday: 8:30AM until 5:00PM
			<br>Tuesday, Wednesday, Thursday: 8:30AM until 6:00PM
			<br>Saturday: 9:00AM until 12:00PM
			<br>Sunday: Closed</p>
		<p><span>Feel free to contact us if you have any questions about our services. We look forward to earning your business.</span>
		</p>
		<p><strong>Address</strong>: 332 S. Market Street
			<br />Wooster, OH 44691</p>
		<p><strong>Email</strong>: <a href="mailto:sales@computermixx.com">sales@computermixx.com</a>
		</p>
		<p><strong>Phone</strong>: 330-264-5383
			<br /> <strong>Toll Free</strong>: 1-888-Wooster</p>
		<p>
	</aside>
</main>
<?php include_once "tpl4_footer.tpl"; ?>

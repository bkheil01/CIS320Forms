<?php include('header.php') ?>

	<div class="container">
		<div class="jumbotron">
			<img src="LOLA.png" class="img-responsive img-rounded">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class = "col-md-4">
				<h1>Who We Are</h1>
				<p>LOLA was created by a group of individuals enthusiastic about all artistic disciplines: painting, music, photography, theater, pottery, woodcarving, writing, jewelry-making, drawing, sculpture, dance and much, much more. They are dedicated to making sure these arts and their creators grow and flourish in the Northwoods of Wisconsin and the Western Upper Peninsula of Michigan.</p>
			</div>
			<div class = "col-md-4">
				<h1>Our Mission</h1>
				<p>Land O' Lakes Area Artisans, Inc. (LOLA) is dedicated to promoting the Arts in Northern Wisconsin and the Upper Peninsula of Michigan. LOLA will support Local Artists in fulfilling their artistic potential while also bringing Enrichment, Arts Education and Beautification to the people of the area, which contributes to the vitality of the larger community.</p>
			</div>
			<div class = "col-md-4">
				<h1>Our Goals</h1>
				<p>To purchase the current rental space to be the permanent home of The LOLA Center for the Arts. The Arts Center will then be able to provide space for all forms of art programming. To provide quality that offers a variety of classes and events, with the purpose of Enlivening, Entertaining and Increasing the quality of life in our area. To award Scholarships to selected area High School Seniors & Adults who intend to enroll in Arts related programs</p>
			</div>
		</div>
	</div>
	<div class="modal fade" id ="contact" role = "dialog">
		<div class="modal-dialog">
			<div class = "modal-content">
				<form class="form-horizontal">
					<div class = "modal-header">
						<p> Contact Site</p>
					</div>
					<div class="modal-body">
						<div class ="form-group">
							<label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
							<div class= "col-lg-10">
								<input type = "text" class = "form-control" id="contact-name" placeholder="full name">
							</div>
						</div>
						<div class ="form-group">
							<label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
							<div class= "col-lg-10">
								<input type = "email" class = "form-control" id="contact-email" placeholder="you@example.com">
							</div>
						</div>
						<div class ="form-group">
							<label for = "contact-message" class = "col-lg-2 control-label">Message:</label>
							<div class= "col-lg-10">
								<textarea class="form-control" rows="8"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-default" data-dismiss = "modal">Close</a>
						<button class ="btn-primary" type="submit">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<style>
	.img-responsive {
		max-width: 100% \9;
		height: 100%;
	}
</style>
</html>

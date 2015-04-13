<?php include('header.php') ?>
	<!-- Credit card form -->
	<div class="container">
		<div class="container" id="container1">
			<div class="row centered-form">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><img class="pull-right" >Login</h3>
						</div>
						<div class="panel-body">
							<form role="form" id="payment-form">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label>Email</label>
											<input required type="text" class="form-control" name="couponCode" />
										</div>
									</div>                        
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label>Password</label>
											<input required type="text" class="form-control" name="password"/>
											<p>Forgot your password? Click <a href="">here</a>.</p>
										</div>                           
									</div>
								</div>                        
								<div class="row">
									<div class="col-xs-12">
										<button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
	</body>
	.panel-title {display: inline;font-weight: bold;}
	.checkbox.pull-right { margin: 0; }
	.pl-ziro { padding-left: 0px; }
	.form-control.error {
		border-color: red;
		outline: 0;
		box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
	}
	label.error {
		font-weight: bold;
		color: red;
		padding: 2px 8px;
		margin-top: 2px;
	}
	.payment-errors {
		font-weight: bold;
		color: red;
		padding: 2px 8px;
		margin-top: 2px;
	}
</style>

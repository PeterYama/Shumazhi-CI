<div class="container" style="padding:10;">

	<!-- Product Form -->
	<div class="row">
		<form class="col s12" action="./data_test.php" method="get" style="padding: 50px;">
			<div class="row">



				<div class="input-field col s6">
					<input placeholder="Product Name" id="product_name" name="product_name" type="text">
				</div>

				<div class="input-field col s6">
					<input placeholder="Product Brand" id="product_brand" name="product_brand" type="text">
				</div>

				<div class="input-field col s12">
					<input placeholder="Product Description" id="product_description" name="product_description" type="text">
				</div>


				<div class="col s12" style="margin-top:50px;">
					<form action="#">
						<div class="file-field input-field">
							<div class="btn-small right">
								<span>Select File </span>
								<input name="product_instructions" type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</form>
				</div>



				<div class="col s12" style="margin-top:50px;">
					<form action="#">
						<div class="file-field input-field">
							<div class="btn-small right">
								<span>Select Images</span>
								<input name="product_image" type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</form>
				</div>
				<input class="btn btn-success" name="register" type="submit" class="btn btn-register" value="Confirm" />
			</div>
		</form>
	</div>
	<div>
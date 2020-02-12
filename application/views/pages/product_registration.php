
<div class="container" style="padding:10;">
	
	<!-- Product Form -->
	<div class="row" >
		<form class="col s12" action="<?php echo base_url(); ?>Product/register" method="post" style="padding: 50px;" enctype="multipart/form-data">
			
			<?php if ($this->session->flashdata()) { ?>
								<div class="alert alert-danger">
									<?=$this->session->flashdata('errors'); ?>
									<?= $this->session->flashdata('msg'); ?>
								</div>
								<?php } ?>
			
			<div class="row">

				

				<div class="input-field col s6">
					<input placeholder="Product Name" id="product_name" name ="product_name" type="text">
				</div>

				<div class="input-field col s6">
					<input placeholder="Product Brand" id="product_brand" name ="product_brand"  type="text">
				</div>

				<div class="input-field col s12">
					<input placeholder="Product Description" id="product_description" name ="product_description"  type="text">
				</div>


				<div class="col s12" style="margin-top:50px;">
					<!-- <form action="#" > -->
						<div class="file-field input-field">
							<div class="btn-small right">
								<span>Select File </span>
								<input name="product_instructions" type="file" multiple >
							</div>
							<div class="file-path-wrapper">
								<input  class="file-path validate" type="text">
							</div>
						</div>
						<!-- </form> -->
					</div>
					

					
					<div class="col s12" style="margin-top:50px;">
						<!-- <form action="#" > -->
							<div class="file-field input-field">
								<div class="btn-small right">
									<span>Select Images</span>
									<input name="product_image" type="file" multiple >
								</div>
								<div class="file-path-wrapper">
									<input  class="file-path validate" type="text">
								</div>
							</div>
							<!-- </form> -->
						</div>
						<input class = "btn btn-success" name="register" type="submit" class="btn btn-register" value="Confirm" />
					</div>
							<!-- <div class="input-field col s12" >
								<p>Product Image</p>
								<img class="responsive-img" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg/335px-Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg.png">
							</div> -->
						</form>
					</div>
					<div>

						

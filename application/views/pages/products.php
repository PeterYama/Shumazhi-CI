	<!-- Main Page -->
	<div class="container">
	    <!-- Status message -->
	    <div class="row" style="padding:10px;">
	        <div class="col s6" style="margin-top: 10px;">Product Page</div>
	        <form action="" class="browser-default right">
	            <input id="search-input" placeholder="Search" type="text" class="browser-default search-field" name="q" value="" autocomplete="off" aria-label="Search box">
	            <label for="search-input"><i class="material-icons search-icon">search</i></label>
	            <div class="search-popup">
	                <div class="search-content">
	                </div>
	            </div>
	        </form>
	    </div>
	    <div class="row" style=" height:50px; margin-top:100px;">

	        <div class="col s12 m12 l6">
	            <div class="container">
	                <div class="row" style="margin-top: 50px;">

	                    <h3 class="white-text">Shumazhi<h3>
	                </div>
	                <p class="white-text">
	                    Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
	                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                    <p>
	                        <p class="white-text">
	                            Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
	                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                            <p>
	            </div>
	        </div>
	        <div class="col s12 m12 l6">
	            <div class="row">
	                <!-- show error messages if the form validation fails -->
	                <?php if ($this->session->flashdata()) { ?>
	                    <div class="alert alert-danger">
	                        <?= $this->session->flashdata('errors'); ?>
	                        <?= $this->session->flashdata('msg'); ?>
	                    </div>
	                <?php } ?>

	                <!-- If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php". -->
	                <form class="col s12" action="<?php echo base_url(); ?>user/register" method="post" style="padding: 50px;">
	                    <div class="row">
	                        <div class="input-field col s6">
	                            <input placeholder="First Name" name="first_name" type="text" class="validate">
	                        </div>
	                        <div class="input-field col s6">
	                            <input name="last_name" placeholder="Last Name" type="text" class="validate">
	                        </div>
	                    </div>


	                    <div class="row">

	                        <div class="input-field col s12">
	                            <input placeholder="Company Name" name="company_name" type="text" class="validate">
	                        </div>

	                        <div class="input-field col s12 ">
	                            <input name="email" type="email" class="validate ">
	                            <label for="email" class="white-text">Email</label>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="input-field col s12">
	                            <input placeholder="Password" name="password" type="password" class="validate">
	                        </div>

	                    </div>
	                    <div class="input-field col s12">
	                        <i class="material-icons prefix">phone</i>
	                        <input placeholder="Phone" name="phone" type="tel" class="validate">
	                    </div>

	                    <div class="row">
	                        <div class="valign-wrapper.align-center">
	                        </div>
	                        <input class="btn btn-success col s12 #1565c0 blue darken-3 " style="margin-top:30px; height:50px" name="Login" type="submit" class="btn btn-register" value="Login" />
	                    </div>
	                    <div class="row">
	                        <label for="existingUser" class="center-align">Don't have an account ?</label>
	                        <input class="btn btn-success col s12 #1b5e20 green darken-3" style="margin-top:30px; height:50px" name="register" type="submit" class="btn btn-register" value="Register" />
	                    </div>

	                </form>
	                <select name="country" name="country">a</select>
	            </div>
	        </div>
	    </div>

	</div>

	</div>
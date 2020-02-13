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

	    <div class="row">
	        <div class="col s12 ">

	            <!-- card -->
	            <div class="card hoverable blue-grey darken-1">

	                <!-- card image -->
	                <div class="card-image right">
	                    <?php
                        require_once dirname(__FILE__) . '\test.php';
                        $data = array(
                            'size' => '150x150',
                            'data' => 'https://shumazhi.appspot.com/api/mongo/getProducts?name=Fridge&model=MK-001'
                        );
                        $image = CallAPI("POST", "https://api.qrserver.com/v1/create-qr-code/", $data);
                        echo '<img src="data:image/png;base64,' . base64_encode($image) . '">';
                        ?>
	                </div>

	                <a class="btn-floating halfway-fab blue btn-large" href="<?php echo base_url(); ?>product_registration"><i class="material-icons">add</i></a>

	                <div class="card-content dark-text">

	                    <span class="flow-text card-title">Fridge MK-001</span>
	                    <p class="card-description ">This 230L top mount refrigerator from Hisense packs plenty of convenient features.
	                        Adjustable shelves and configurable door bins provide your household with customizable flexibility.
	                        Keep your food fresher for longer with the humidity-controlled crisper...
	                    </p>
	                </div>

	                <!-- card action -->
	                <div class="card-action">
	                    <a href="#" class="dark-text text-darken-2">Edit</a>
	                    <a href="#" class="dark-text text-darken-2">Delete</a>
	                </div>

	            </div>

	        </div>
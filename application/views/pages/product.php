<div class="container" style="padding:10;">


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
    <div class="card hoverable" >
      <div class="card-content dark-text">

        <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
          <?=$this->session->flashdata('errors'); ?>
          <?= $this->session->flashdata('msg'); ?>
        </div>
        <?php } ?>
        
        <span class="card-title">Title</span>
        <p>Description</p>
      </div>
      <?php
      require_once dirname(__FILE__) . '\test.php';
      $data = array(
        'size' => '150x150',
        'data' => 'https://shumazhi.appspot.com/api/mongo/getProducts?name=Fridge&model=MK-001'
      );
      $image = CallAPI("POST", "https://api.qrserver.com/v1/create-qr-code/",$data);
      echo '<img style="margin-left:30px;"src="data:image/png;base64,' . base64_encode($image) . '">';
    ?>
      <div class="card-action">
        <a href="#" class="blue-text text-darken-2">Edit</a>
        <a href="#" class="blue-text text-darken-2">Delete</a>

       <!--  <table id = "productList" class = "table" border="1" border-collapse="collapse">
          <thead>
           <tr>
            <th role="button">Product</th>
            <th role="button">Description</th>
            <th role="button">Brand</th>
            <th role="button">Image</th>
            <th role="button">Instructions</th>
            <th role="button">QR</th>
          </tr>
        </thead>
        <tbody>
         <?php 
         // if ($products) {
          // foreach ($products as $product){
            ?>
            <tr>
              <td><?php echo $product->product_name ?></td>
              <td><?php echo $product->product_description ?></td>
              <td><?php echo $product->product_image ?></td>
              <td><?php echo $product->product_instructions ?></td>
              <td><?php echo $product->brand_name?></td>
      </tbody>
    </table> -->
  </div>

</div>
</div>
</div>

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
        
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>

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
              <?php

              // function CallAPI($method, $url, $data = false)
              {
                $curl = curl_init();

                // switch ($method) {
                //   case "POST":
                //   curl_setopt($curl, CURLOPT_POST, 1);

                //   if ($data)
                //     curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                //   break;
                //   case "PUT":
                //   curl_setopt($curl, CURLOPT_PUT, 1);
                //   break;
                //   default:
                //   if ($data)
                //     $url = sprintf("%s?%s", $url, http_build_query($data));
                // }

          // Optional Authentication:
                // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                // curl_setopt($curl, CURLOPT_USERPWD, "username:password");

                // curl_setopt($curl, CURLOPT_URL, $url);
                // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                // $result = curl_exec($curl);

                // curl_close($curl);

                // return $result;
              }
              $data = array(
                // 'size' => '150x150',
                // 'data' => 'https://shumazhi.appspot.com/api/mongo/getProducts?name='product_name'&model='brand_name
              );

              // $image = CallAPI("POST", "https://api.qrserver.com/v1/create-qr-code/",$data);

              // echo '<img src="data:image/png;base64,' . base64_encode($image) . '">';
              ?>
              <td><?php echo $image?></td> -->
        <!--     </tr>
            <?php 
          }
        }

        ?>
      </tbody>
    </table> -->
  </div>

</div>
</div>
</div>
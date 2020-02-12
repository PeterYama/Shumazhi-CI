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
      <div class="card hoverable">
        <div class="card-content dark-text">
          <span class="card-title">Fridge MK-001</span>
          <p>Kicking-off our list is this Swedish 445L integrated fridge from Asko featuring an electronic ice maker and convertible drawer. At 2003mm in height, expect 293L of usable capacity for the fridge compartment and 79L for the freezer. It comes equipped with a dual fridge system, flexible loading racks and a convertible cooling drawer. It’s also boasted to operate at 45 decibels – barely louder than a whisper.</p>
        </div>
        <?php

        function CallAPI($method, $url, $data = false)
        {
          $curl = curl_init();

          switch ($method) {
            case "POST":
              curl_setopt($curl, CURLOPT_POST, 1);

              if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
            case "PUT":
              curl_setopt($curl, CURLOPT_PUT, 1);
              break;
            default:
              if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
          }

          // Optional Authentication:
          curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
          curl_setopt($curl, CURLOPT_USERPWD, "username:password");

          curl_setopt($curl, CURLOPT_URL, $url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

          $result = curl_exec($curl);

          curl_close($curl);

          return $result;
        }
        $data = array(
          'size' => '150x150',
          'data' => 'https://shumazhi.appspot.com/api/mongo/getProducts?name=Fridge&model=MK-001'
        );

        $image = CallAPI("POST", "https://api.qrserver.com/v1/create-qr-code/",$data);

        echo '<img style="margin-left: 20px;"src="data:image/png;base64,' . base64_encode($image) . '">';

        ?>
        <div class="card-action">
          <a href="#" class="blue-text">Edit Product</a>
          <a href="#" class="blue-text">Delete</a>
        </div>
      </div>
      <!-- <Button class="btn" href="<?php echo base_url(); ?>/product_registration" style="float:right;">Add Product</Button> -->
      <a style="float: right;" class="btn-floating btn-large waves-effect waves-light light-blue" href="<?php echo base_url(); ?>/product_registration"><i class="material-icons">add</i></a>
      <? echo 'hello' ?>
    </div>
  </div>
  <div>
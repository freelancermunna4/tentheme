<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<!-- Slider -->
<?php include("common/slider.php");?>
<!-- Slider -->
</header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start">
      <div class="container flex flex-col lg:flex-row gap-y-5 py-6 xl:py-12 lg:gap-y-0 lg:gap-x-6 sm:items-start">
        <!-- Body Content -->
        <div class="w-full">

        <!-- filter -->
        <?php include("common/filter.php");?>
        <!-- filter -->
        <br>
          <div class="items list_view">
            
          <?php 
          $products = _get("products","status='Publish' ORDER BY id DESC");
          
          while($data = mysqli_fetch_assoc($products)){
            $autor_id = $data['pid'];
            $autor = _fetch("person","id=$autor_id");
          ?>
            <div class="item">
              <a href="item.php?id=<?php echo $data['id']?>" class="item_link"></a>
              <div>
                <img class="w-full h-auto rounded"
                  src="admin/upload/<?php echo $data['file_name1']?>"/>
              </div>

              <div>
                <h3 style="padding-left:13px"><?php echo $data['title']?></h3>
                <p style="padding-left:13px"><small> <i>by</i> <a href="index.php?autor=<?php echo $autor['name']?>"><?php echo $autor['name']?></a></small></p>
                <ul class="list_icon">
                  <?php echo $data['mini_content']?>
                </ul>
              </div>

              <div>
                <div></div>

                <div>                  
                  <div>
                    <span class="font-medium">TK.</span>
                    <span><?php echo $data['sell_price']?></span>
                  </div>
                  <p><?php echo $data['sell']?> Sales</p>
                  <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <div style="width:70%">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                </div>

                <div>
                  <a id="show_added_popup" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                  <a target="_blank" href="<?php echo $data['link']?>">
                    <span>Live</span>
                    <span>Preview</span>
                  </a>
                </div>
              </div>

            </div>
          <?php }?>


            <!-- Paginations -->
            <div class="col-span-12 flex flex-col-reverse sm:flex-row gap-6 sm:gap-0 items-center justify-between py-6">
              <div class="flex items-center justify-center flex-wrap gap-1 w-fit">
                <a href="#"
                  class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-l-sm">
                  <i class="fa-solid fa-arrow-left"></i>
                </a>

                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  1
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  2
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  3
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  4
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  5
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  ...
                </a>
                <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                  11
                </a>
                <a href="#"
                  class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-r-sm">
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>

              <div>Page 1 of 12</div>
            </div>
            <!-- Paginations -->

          </div>
        </div>

        <!-- right sidbar -->
        <?php include("common/right-sidebar.php");?>
        <!-- right sidbar -->

      </div>
    </div>
  </main>

  <!-- Cart Popup -->
  <div class="fixed inset-0 m-auto w-full h-full hidden items-center justify-center z-50 cart_added_popup">

    <div onclick="dismis_cart_added_popup()"
      class="fixed inset-0 m-auto w-full h-full bg-black bg-opacity-50 flex items-center justify-center z-30">
    </div>

    <div style="top:50%;left:22%;transform: translate(22%, -50%);" class="relative z-40 bg-white rounded shadow w-fit h-fit p-6 flex flex-col gap-y-5">
      <h3 class="flex items-center gap-x-3 text-xl font-semibold tracking-wide text-gray-800">
        <i class="fa-solid fa-check"></i>
        <span>Item added to your cart</span>
      </h3>

      <div class="flex bg-gray-50 border rounded items-start gap-x-4 p-5">
        <div class="w-full flex items-center gap-x-2">
          <img class="w-20 h-20 rounded object-cover" src="https://s3.envato.com/files/388991077/thumbnail.png" alt="">
          <p>
            Midone - React Admin Dashboard Template + HTML Version</p>
        </div>
        <div class="w-full">
          <h2 class="text-3xl font-semibold text-gray-700">$15</h2>
          <p>
            <b>License:</b>
            <span>Regular</span>
          </p>
        </div>
      </div>

      <div class="border rounded bg-gray-50 p-2">
        <label for="extend_support" class="font-semibold text-sm flex items-center">
          <input type="checkbox" id="extend_support">
          <span class="ml-2 block">
            Extend support to 12 months. +$8.63
          </span>
        </label>
      </div>

      <div class="flex items-center justify-between">
        <a onclick="dismis_cart_added_popup()"
          class="bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded shadow cursor-pointer">Keep
          Browsing</a>
        <a href="cart.php"
          class="shadow bg-green-600 text-white px-4 py-2 rounded focus:ring-2 ring-offset-1 ring-green-600">To to
          Checkout</a>
      </div>

    </div>
  </div>
  <!-- Cart Popup --->

  <script>
    show_added_popup
    $("#show_added_popup").on("click",function(){
      $(".cart_added_popup").show();

    });
  </script>




  <br>
  <br>
  <br>

  <!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->
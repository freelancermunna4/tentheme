<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<!-- Slider -->
<?php include("common/slider.php");?>
<!-- Slider -->
</header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start">
      <div class="container flex flex-col lg:flex-row gap-y-5 py-12 lg:gap-y-0 lg:gap-x-6 sm:items-start">


        <!-- Body Content -->
        <!-- services -->
        <div class="w-full space-y-6">


        <!-- filter -->
        <?php include("common/filter.php");?>
        <!-- filter -->


        <?php 
          $service = _get("service","status='Publish' ORDER BY id DESC");          
          while($data = mysqli_fetch_assoc($service)){
            $autor_id = $data['pid'];
            $autor = _fetch("person","id=$autor_id");
          ?>
          <div class="grid grid-cols-12 gap-x-6 p-6 bg-white item_shadow">
            <div class="col-span-5">
              <div>
                <a href="service-single.php?id=<?php echo $data['id']?>">
                <img class="rounded"
                  src="admin/upload/<?php echo $data['file_name1']?>">
                </a>
              </div>
            </div>

            <div class="col-span-7 w-full">
              <div class="flex flex-col gap-y-2">
                <a href="service-single.php?id=<?php echo $data['id']?>">
                  <h3 class="text-xl font-semibold tracking-wide mb-2"><?php echo $data['title']?></h3>
                </a>
                <div class="w-full flex gap-x-6">
                  <ul class="list_icon space-y-2 pl-2 text-gray-700 w-[420px]">
                    <a href="service-single.php?id=<?php echo $data['id']?>">
                      <?php echo $data['mini_content']?>
                    </a>
                  </ul>
                  <div class="w-full flex border-l flex-col items-center justify-between">
                    <div></div>
                    <div class="flex flex-col items-center justify-center">
                      <h3 class="text-semibold text-xl font-semibold tracking-wide"> TK. <?php echo $data['sell_price']?> </h3>
                      <p><?php echo $data['sell']?> Sales</p>
                    </div>
                    <a href="service-single.php?id=<?php echo $data['id']?>"
                      class="w-fit px-6 border shadow-sm py-2 border-cyan-700 hover:bg-cyan-900 rounded hover:text-white text-cyan-900 text-sm focus:ring-2 focus:border-transparent flex items-center gap-x-2">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Buy Now</span>
                    </a>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          <?php }?>

          <div class="w-full mt-12 flex justify-center">
            <div class="flex items-center space-x-1 w-fit">
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-cyan-800 hover:text-white rounded-l">
                <i class="fa-solid fa-arrow-left"></i>
              </a>

              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                1
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                2
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                3
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                4
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                5
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                ...
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                11
              </a>
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-cyan-800 hover:text-white rounded-r">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>


        <!-- right sidbar -->
        <?php include("common/right-sidebar.php");?>
        <!-- right sidbar -->
        

      </div>
    </div>
  </main>

  <br>
  <br>
  <br>


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->
<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container2 space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Blogs
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="blogs.php"> Blogs
        </a>

      </div>

    </div>
  </header>


  <main class="min-h-screen py-12">
    <div class="flex items-start">
      <div class="container flex gap-12 flex-col lg:flex-row items-start">


        <div class="lg:sticky top-0 w-full lg:min-w-[350px] lg:w-[350px]">
          <label for="voice-search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none text-green-600">
              <i class="fa-solid fa-search"></i>
            </div>
            <input class="shadow w-full h-12 rounded-t px-10 focus:ring-2 focus:outline-none focus:ring-gray-200"
              type="text" id="voice-search" placeholder="Search..." required />
            <button type="button"
              class="flex absolute inset-y-0 right-1.5 text-sm items-center text-green-700 px-2 h-fit py-2 my-auto rounded">
              Search
            </button>
          </div>

          <!-- Filter by Category -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Category">
              <span>Category</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Category">
              <div class="py-0">
                <div class="flex justify-between items-center p-2 hover:bg-cyan-800 hover:text-white rounded">
                  <h6 class="text-sm font-medium">All Categories</h6>
                  <small>192</small>
                </div>
                <ul class="pb-3">
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>WordPress</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>eCommerce</span>
                    <span>9</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>JamStack</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Blogging</span>
                    <span>20</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Courses</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Portfolio</span>
                    <span>12</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <br>
          <!-- Sidebar Image -->
          <div class="w-full h-auto p-4 bg-white shadow-xl">
            <img class="w-full"
              src="https://www.bangladeshisoftware.com/wp-content/uploads/2020/09/online-freelancing-video-banner-1280-by-720.jpg"
              alt="">
          </div>

        </div>

        <!-- Blogs -->
        <div class="div">
          <div class="w-full grid grid-cols-2 gap-6">

            <div class="p-5 bg-white shadow rounded relative">
              <a href="blog.php" class="absolute inset-0 m-auto z-40"></a>
              <img class="w-full"
                src="https://www.bangladeshisoftware.com/wp-content/uploads/2022/01/money-exchangerix-website-1270x714.jpg"
                alt="">
              <h3 class="text-lg font-semibold tracking-wide my-4">Store Management
                Software 4999 Tk Xstorebd.com
              </h3>
              <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full">
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  design</a>
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  development</a>
              </div>
            </div>

            <div class="p-5 bg-white shadow rounded relative">
              <a href="blog.php" class="absolute inset-0 m-auto z-40"></a>
              <img class="w-full"
                src="https://www.bangladeshisoftware.com/wp-content/uploads/2022/01/money-exchangerix-website-1270x714.jpg"
                alt="">
              <h3 class="text-lg font-semibold tracking-wide my-4">Store Management
                Software 4999 Tk Xstorebd.com
              </h3>
              <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full">
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  design</a>
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  development</a>
              </div>
            </div>

            <div class="p-5 bg-white shadow rounded relative">
              <a href="blog.php" class="absolute inset-0 m-auto z-40"></a>
              <img class="w-full"
                src="https://www.bangladeshisoftware.com/wp-content/uploads/2022/01/money-exchangerix-website-1270x714.jpg"
                alt="">
              <h3 class="text-lg font-semibold tracking-wide my-4">Store Management
                Software 4999 Tk Xstorebd.com
              </h3>
              <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full">
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  design</a>
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  development</a>
              </div>
            </div>

            <div class="p-5 bg-white shadow rounded relative">
              <a href="blog.php" class="absolute inset-0 m-auto z-40"></a>
              <img class="w-full"
                src="https://www.bangladeshisoftware.com/wp-content/uploads/2022/01/money-exchangerix-website-1270x714.jpg"
                alt="">
              <h3 class="text-lg font-semibold tracking-wide my-4">Store Management
                Software 4999 Tk Xstorebd.com
              </h3>
              <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full">
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  design</a>
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  development</a>
              </div>
            </div>

            <div class="p-5 bg-white shadow rounded relative">
              <a href="blog.php" class="absolute inset-0 m-auto z-40"></a>
              <img class="w-full"
                src="https://www.bangladeshisoftware.com/wp-content/uploads/2022/01/money-exchangerix-website-1270x714.jpg"
                alt="">
              <h3 class="text-lg font-semibold tracking-wide my-4">Store Management
                Software 4999 Tk Xstorebd.com
              </h3>
              <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full">
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  design</a>
                <a href="#"
                  class="px-2 py-1 bg-gray-900 hover:bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1">web
                  development</a>
              </div>
            </div>

          </div>

          <br>
          <br>

          <!-- Paginations -->
          <div class="col-span-12 flex flex-col-reverse sm:flex-row gap-6 sm:gap-0 items-center justify-between py-6">
            <div class="flex items-center justify-center flex-wrap gap-1 w-fit">
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-l-sm">
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
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-r-sm">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>

            <div>Page 1 of 12</div>
          </div>
          <!-- Paginations -->

        </div>
      </div>

    </div>

  </main>

  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->
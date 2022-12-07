<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>productLESSBD ADMIN Panel</title>
  <!--=== Google Font  ===-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!--=== FONT-AWESOME  ===-->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!--=== Styles ===-->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <main class="flex p-0 m-0 justify-between w-full h-screen overflow-hidden">


    <!--== Sidebar ==-->
    <div id="sidebar"
      class="sidebar transition-all w-[0px] min-w-[0px] lg:min-w-[255px] lg:w-[255px] h-screen overflow-auto bg-white border-r shadow sidebar fixed lg:relative inset-y-0 left-0"
      style="z-index: 99;">

      <div
        class="flex items-center justify-between px-4 gap-x-2 h-20 border-b shadow-sm sticky top-0 left-0 bg-white z-50">
        <a class="flex items-center justify-between gap-x-2 active" href="./">
          <p class="text-blue-600"> <i class="fa-solid fa-crown"></i> </p>
          <p class="flex items-center justify-center"><span
              class="font-semibold text-lg text-blue-500">productLESS</span><span
              class="font-semibold text-lg text-purple-600">BD</span><span
              class="font-bold text-lg text-purple-700">ADMIN</span></p>
        </a>
        <button id="hide_sidebar" class="lg:hidden text-gray-800"> <i class="fa-solid fa-xmark"></i> </button>
      </div>

      <!-- Sidebar Item -> Statistics -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="STATISTICS">
          <span class="text-xs transition-all text-purple-600"><i class="fa-solid fa-chart-simple"></i></span>
          <span class="tracking-wider block">STATISTICS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="STATISTICS">
          <li>
            <a href="./index.php">
              <h4> <i class="fa-solid fa-gauge"></i> </h4>
              <span>Dashboard</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Bank -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="BANK"><span class="text-xs transition-all text-orange-500"><i
              class="fa-solid fa-building-columns"></i></span><span class="tracking-wider block">BANK</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="BANK">
          <li>
            <a href="./deposit-requests.php">
              <h4> <i class="fa-solid fa-money-bill"></i> </h4>
              <span>Deposit Requests</span>
            </a>
          </li>
          <li>
            <a href="./withdrawl-requests.php">
              <h4> <i class="fa-solid fa-money-bill-transfer"></i> </h4>
              <span>Withdrawl Requests</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Users -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="USERS"><span class="text-xs transition-all text-cyan-600"><i
              class="fa-solid fa-users"></i></span><span class="tracking-wider block">USERS</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="USERS">
          <li>
            <a href="./users.php">
              <h4> <i class="fa-solid fa-users"></i> </h4>
              <span>All Users</span>
            </a>
          </li>
          <li>
            <a href="./top-20-users.php">
              <h4> <i class="fa-solid fa-users"></i> </h4>
              <span>Top 20 Users</span>
            </a>
          </li>
          <li>
            <a href="./banned-users.php">
              <h4> <i class="fa-solid fa-users"></i> </h4>
              <span>Banned Users</span>
            </a>
          </li>
          <li>
            <a href="./vip-users.php">
              <h4> <i class="fa-solid fa-users"></i> </h4>
              <span>VIP Users</span>
            </a>
          </li>
        </ul>


      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="productS"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">productS</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="productS">
          <li>
            <a href="./add-new-product.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add New product</span>
            </a>
          </li>
          <li>
            <a href="./my-products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>My products</span>
            </a>
          </li>
          <li>
            <a href="./request-products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Request products</span>
            </a>
          </li>
          <li>
            <a href="./success-products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Success products</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Websites -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Website"><span class="text-xs transition-all text-slate-600"><i
              class="fa fa-internet-explorer"></i></span><span class="tracking-wider block">Website</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Website">
          <li>
            <a href="./add-website.php">
              <h4> <i class="fa fa-internet-explorer"></i> </h4>
              <span>Add Website</span>
            </a>
          </li>
          <li>
            <a href="./active-websites.php">
              <h4> <i class="fa fa-internet-explorer"></i> </h4>
              <span>Active Websites</span>
            </a>
          </li>
          <li>
            <a href="./pending-websites.php">
              <h4> <i class="fa fa-internet-explorer"></i> </h4>
              <span>Pending Websites</span>
            </a>
          </li>
          <li>
            <a href="./add-website-packs.php">
              <h4> <i class="fa fa-internet-explorer"></i> </h4>
              <span>Add Website Packs</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Video Ads -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Video Ads"><span class="text-xs transition-all text-black"><i
              class="fa-solid fa-play-circle"></i></span><span class="tracking-wider block">Video Ads</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Video Ads">
          <li>
            <a href="./add-video.php">
              <h4> <i class="fa-solid fa-play"></i> </h4>
              <span>Add Video</span>
            </a>
          </li>
          <li>
            <a href="./active-videos.php">
              <h4> <i class="fa-solid fa-play"></i> </h4>
              <span>Active Videos</span>
            </a>
          </li>
          <li>
            <a href="./pending-videos.php">
              <h4> <i class="fa-solid fa-play"></i> </h4>
              <span>Pending Videos</span>
            </a>
          </li>
          <li>
            <a href="./add-video-packs.php">
              <h4> <i class="fa-solid fa-play"></i> </h4>
              <span>Add Video Packs</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Gift Recharge -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Lucky Coupon"><span class="text-xs transition-all text-green-600"><i
              class="fa-solid fa-gifts"></i></span><span class="tracking-wider block">Gift Recharge</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Lucky Coupon">
          <li>
            <a href="./add-new-coupon.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Add New Coupon</span>
            </a>
          </li>
          <li>
            <a href="./all-coupon.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>All Coupon</span>
            </a>
          </li>
          <li>
            <a href="./winner-coupon.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Winner</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> Lottery -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Lottery"><span class="text-xs transition-all text-green-700"><i
              class="fa-solid fa-box"></i></span><span class="tracking-wider block">Gift Rewards</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Lottery">
          <li>
            <a href="./add-new-lottery.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Add New Lottery</span>
            </a>
          </li>

          <li>
            <a href="./all-lottery.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>All Lottery</span>
            </a>
          </li>

          <li>
            <a href="./lottery-winner.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Lottery Winner</span>
            </a>
          </li>

          <li>
            <a href="./lottery-setting.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Lottery Setting</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">


      <!-- Sidebar Item -> Game -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Game"><span class="text-xs transition-all text-green-800">
            <i class="fa-solid fa-trophy"></i>
          </span><span class="tracking-wider block">Game Rewards</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="Game">
          <li>
            <a href="./all-game-winner.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>All Winner</span>
            </a>
          </li>
          <li>
            <a href="./game-activities.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Activities</span>
            </a>
          </li>
          <li>
            <a href="./game-settings.php">
              <h4> <i class="fa-solid fa-gifts"></i> </h4>
              <span>Settings</span>
            </a>
          </li>

        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> REPORTS -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="REPORTS">
          <span class="text-xs transition-all text-orange-600"><i class="fa-solid fa-circle-exclamation"></i></span>
          <span class="tracking-wider block">REPORTS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>

        <ul class="ds_ul transition-all" data-ref="REPORTS">
          <li>
            <a href="./reported-pages.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Reported Pages</span>
            </a>
          </li>
          <li>
            <a href="./checked-reports.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Checked Reports</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Sidebar Item -> Settings -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title active md:hidden" data-ref="SETTINGS">
          <span class="text-xs transition-all text-gray-900"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <a href="./settings.php" class="ds_title active hidden md:flex" data-ref="SETTINGS">
          <span class="text-xs transition-all"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-right"></i></span>
        </a>
        <ul class="ds_ul transition-all md:hidden" data-ref="SETTINGS">
          <li>
            <a class="active" href="./settings.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>General Setting</span>
            </a>
          </li>

          <li>
            <a href="./payment-gateway.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Payment Gateway</span>
            </a>
          </li>

          <li>
            <a href="./limit-setting.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Limit Setting</span>
            </a>
          </li>

          <li>
            <a href="./deposit-bank.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Deposit Bank</span>
            </a>
          </li>

          <li>
            <a href="./withdrawl-bank.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Withdrawl Bank</span>
            </a>
          </li>
          <li>
            <a href="./mailing-setting.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Mailing Setting</span>
            </a>
          </li>
          <li>
            <a href="./adsense.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Adsense</span>
            </a>
          </li>
        </ul>
      </div>

    </div>


    <!--== Page Content ==-->
    <div class="w-full h-screen overflow-auto">
      <header class="h-20 bg-white z-40 sticky top-0 left-0 right-0 shadow-sm border-b">
        <div class="h-full flex items-center relative justify-between px-5 xl:px-10">
          <div class="text-xl font-semibold tracking-wide capitalize space-x-3">
            <button id="sidebar_toggler">
              <i class="fa-solid fa-bars"></i>
            </button>
            <span class="hidden sm:inline-block capitalize page_title">Dashboard</span></div>

          <div class="flex items-center justify-center gap-x-3 sm:gap-x-4">
            <div class="relative w-fit z-50"><button type="button"
                class="header_options_toggler w-full p-2 rounded bg-gray-100 shadow border flex items-center justify-center gap-x-3"><span>
                  Bangladeshi Software </span><img class="h-7 w-7 rounded-full"
                  src="https://firebasestorage.googleapis.com/v0/b/bs-game-topup.appspot.com/o/images%2Fimages.png?alt=media&amp;token=f46fd874-00f4-48fe-a8ac-c43abf380491"
                  alt=""> <small class="header_options_icon transition-all transform"><i
                    class="fa-solid fa-chevron-right"></i></small>
              </button>
              <div
                class="header_options absolute w-full bg-white rounded shadow top-full right-0 transition-all origin-top transform scale-y-0">
                <button class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i><span
                    class="text-sm font-medium">Logout</span></button><a target="_blank" href="https://productlessbd.com/"
                  class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3"> <i
                    class="fa fa-internet-explorer"></i>
                  <span class="text-sm font-medium">View Website</span></a></div>
            </div>
          </div>
        </div>
      </header>

      <div class="x_container py-10 flex items-start relative">
        <div style="width:300px;" class="h-screen sticky top-0 left-0 right-0 hidden md:block">
          <ul
            class="-mr-[1px] h-fit bg-gray-100 sticky top-[80px] left-0 border border-r-0 border-gray-200 border-r-transparent rounded-l overflow-hidden">
            <a href="./settings.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer text-base font-medium text-cyan-800">
              <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
              <span>General Setting</span>
            </a>

            <a href="./payment-gateway.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer text-base font-medium text-cyan-800">
              <span class="text-purple-600"><i class="fa-brands fa-amazon-pay"></i></span>
              <span>Payment Gateway</span>
            </a>

            <a href="./limit-setting.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer text-base font-medium text-cyan-800">
              <span class="text-red-600"><i class="fa-solid fa-chart-line"></i></span>
              <span>Limit Setting</span>
            </a>
            <a href="./deposit-bank.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer text-base font-medium text-cyan-800">
              <span class="text-gray-700"><i class="fa-solid fa-building-columns"></i></span>
              <span>Deposit Bank</span>
            </a>
            <a href="./withdrawl-bank.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 bg-white cursor-pointer text-base font-medium text-cyan-800">
              <span class="text-pink-500"><i class="fa-solid fa-vault"></i></span>
              <span>Withdrawl Bank</span>
            </a>
            <a href="./mailing-setting.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer font-medium text-cyan-800">
              <span class="text-orange-600"><i class="fa-brands fa-mailchimp"></i></span>
              <span>Mailing Setting</span>
            </a>
            <a href="./all-notice-setting.php"
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer font-medium text-cyan-800">
              <span class="text-blue-600"><i class="fa-solid fa-circle-info"></i></span>
              <span>All Notice Setting</span>
            </a>
            <a href="./adsense.php"
              class="p-4 gap-x-3 flex items-center hover:bg-white cursor-pointer font-medium text-cyan-800">
              <span class="text-orange-600"><i class="fa-brands fa-google"></i></span>
              <span>Adsense</span>
            </a>
          </ul>
        </div>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">

          <div class="p-5 justify-between items-center bg-white rounded border border-[
        ] shadow-gray-200 sm:flex">
            <div class="mb-1 w-full">
              <div class="mb-4">
                <nav class="flex mb-5 text-gray-600" aria-label="Breadcrumb">
                  <div class="flex items-center space-x-1 md:space-x-2">
                    <div class="inline-flex items-center space-x-3">
                      <a href="./" class="flex items-center space-x-2 -mt-0.5">
                        <small><i class="fa-solid fa-house"></i></small>
                        <span>Home</span></a>
                      <small class="text-xs"><i class="fa-solid fa-chevron-right"></i> </small>
                      <a href="./settings.php">Settings</a>
                      <small class="text-xs"><i class="fa-solid fa-chevron-right"></i> </small>
                      <span class="capitalize page_title"></span>
                    </div>
                  </div>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl capitalize page_title"></h1>
              </div>
              <div class="flex flex-col md:flex-row items-start md:items-center gap-4 justify-between">
                <div class="block items-center sm:flex md:divide-x md:divide-gray-100">
                  <form class="mb-4 sm:pr-3 sm:mb-0" action="#" method="GET"><label for="products-search"
                      class="sr-only">Search</label>
                    <div class="relative mt-1 sm:w-64 xl:w-96"><input type="text" name="email" id="products-search"
                        class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                        placeholder="Search..."></div>
                  </form>
                  <div class="flex items-center w-full sm:justify-end">
                    <div class="flex space-x-2">
                      <a href="#"
                        class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <i class="fa-solid fa-cog"></i></a>
                      <a href="#"
                        class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <i class="fa-solid fa-trash-can"></i></a>
                      <a href="#"
                        class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <i class="fa-solid fa-circle-exclamation"></i></a>
                      <a href="#"
                        class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                        <i class="fa-solid fa-ellipsis-vertical"></i></a>
                    </div>
                  </div>
                </div>
                <div class="w-fit">
                  <button data-target="add_bank" class="popup_show button"> Add New Bank </button>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-col rounded border border-[
        ] shadow-gray-200 bg-white">
            <div class="overflow-x-auto rounded-lg">
              <div class="inline-block min-w-full align-middle">
                <div class="overflow-auto bg-white">
                  <!-- Table -->
                  <table class="min-w-full divide-y divide-gray-200 table-fixed">
                    <thead class="bg-white">
                      <tr>
                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> ID
                        </th>
                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Bank
                          Name </th>
                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                          Currency
                        </th>
                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Bank
                          ID
                          & Description </th>
                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr class="hover:bg-gray-100">
                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 5 </td>
                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> Bkash </td>
                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> BDT </td>
                        <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                          <div class="max-w-[400px]">Enter Your Personal Bkash Number</div>
                        </td>
                        <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                          <a href="./edit-withdraw.php" type="button"
                            class="btn bg-green-600 w-fit text-white">Edit</a>
                          <button data-target="delete_pack" type="button"
                            class="popup_show btn bg-red-500 w-fit text-white">Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- Paginations -->
                  <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

                    <div
                      class="flex flex-col sm:flex-row gap-3 py-3 items-center justify-center sm:justify-between w-full">
                      <div class="w-fit">
                        <p class="text-sm text-gray-700">
                          Showing
                          <span class="font-medium">1</span>
                          to
                          <span class="font-medium">10</span>
                          of
                          <span class="font-medium">97</span>
                          results
                        </p>
                      </div>
                      <div class="w-fit">
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                          <a href="#"
                            class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: mini/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                            </svg>
                          </a>
                          <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                          <a href="#" aria-current="page"
                            class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                          <a href="#"
                            class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                          <a href="#"
                            class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                          <span
                            class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                          <a href="#"
                            class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                          <a href="#"
                            class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                          <a href="#"
                            class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                          <a href="#"
                            class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                            </svg>
                          </a>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <!-- All Popup -->

  <!-- Add New Pack Popup -->
  <div data-target="add_bank"
    class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
    id="delete-product-modal" style="z-index: 111; display: none;">
    <div data-target="add_bank" class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto">
    </div>
    <div class="relative p-4 w-full max-w-md h-full md:h-auto z-50">
      <div class="relative bg-white rounded-2xl shadow-lg p-6 pt-4">
        <div class="flex justify-end">
          <button type="button" data-target="add_bank"
            class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
            data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i>
          </button>
        </div>

        <form class="flex flex-col gap-y-6">
          <h2 class="text-lg font-semibold text-cyan-900">New Bank</h2>
          <div class="flex flex-col gap-y-1">
            <label for="Bank Name">Bank Name</label>
            <input type="text" id="Bank Name" placeholder="Bank Name" class="input" required>
          </div>

          <div class="flex flex-col gap-y-1">
            <label for="Currency Symble">Currency Symble</label>
            <input type="text" id="Currency Symble" placeholder="Currency Symble" class="input" required>
          </div>

          <div class="flex flex-col gap-y-1">
            <label for="Bank Info">Bank Info</label>
            <input type="text" id="Bank Info" placeholder="Bank Info" class="input" required>
          </div>

          <div class="flex justify-end">
            <button class="button">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Delete Pack Popup -->
  <div data-target="delete_pack"
    class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
    id="delete-product-modal" style="z-index: 111; display: none;">
    <div data-target="delete_pack"
      class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto"></div>
    <div class="relative px-4 w-full max-w-md h-full md:h-auto z-50">
      <div class="relative bg-white rounded-2xl shadow-lg">
        <div class="flex justify-end p-2"><button type="button" data-target="delete_pack"
            class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
            data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i> </button></div>
        <div class="p-6 pt-0 text-center text-5xl text-red-500"> <i class="fa-solid fa-circle-exclamation"></i>
          <h3 class="my-9 text-base font-normal text-gray-500">Are You Sure, Want to delete this pack?
          </h3>
          <div class="w-full flex justify-between items-center gap-x-2"><a href="#" data-target="delete_pack"
              class="popup_remove text-white bg-red-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
              data-modal-toggle="delete-product-modal">No, cancel</a>

            <button
              class="disabled:opacity-70 disabled:cursor-not-allowed text-white bg-gradient-to-br from-red-600 to-red-500 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"><span>Yes,
                Confirm</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>
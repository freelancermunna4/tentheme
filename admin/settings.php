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
            <span class="hidden sm:inline-block capitalize page_title"></span></div>

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
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 bg-white cursor-pointer text-base font-medium text-cyan-800">
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
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 hover:bg-white cursor-pointer text-base font-medium text-cyan-800">
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
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Website Info</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Site Title">Site Title</label>
              <input class="input" type="text" id="Site Title" placeholder="Site Title" required>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Site Logo">Site Logo</label>
              <input class="input" type="text" id="Site Logo" placeholder="Site Logo" required>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Site Description">Site Description <small>(Website Meta Description)</small> </label>
              <input class="input" type="text" id="Site Description" placeholder="Site Description" required>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Site Keywords">Site Keywords <small>(Meta Keywords)</small> </label>
              <input class="input" type="text" id="Site Keywords" placeholder="Site Keywords" required>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Site URL">Site URL</label>
              <input class="input" type="text" id="Site URL" placeholder="Site URL" required>
            </div>


            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="default_language">Default Language</label>
              <select class="select" name="" id="default_language" required>
                <option value="english">English</option>
                <option value="bengali">Bengali</option>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>
          <hr class="my-6" />
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Registration Settings</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Coins on Signup">Coins on Signup <small>(added after signup)</small> </label>
              <input class="input" type="text" id="Coins on Signup" placeholder="Coins on Signup" required>
            </div>


            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="1 Account Per IP">1 Account Per IP</label>
              <select class="select" name="" id="1 Account Per IP" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>

            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Email Confirmation">Email Confirmation</label>
              <select class="select" name="" id="Email Confirmation" required>
                <option value="Disabled">Disabled</option>
                <option value="Enabled">Enabled</option>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>
          <hr class="my-6" />
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800"> Withdrawal Settings </h2>
            </div>

            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Payment Currency">Payment Currency</label>
              <select class="select" name="" id="Payment Currency" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="BDT">BDT</option>
                <option value="INR">INR</option>
              </select>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Conversion Rate">Conversion Rate <small>(How many coins for $1.00)</small> </label>
              <input class="input" type="text" id="Conversion Rate" placeholder="Conversion Rate" required>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Minimum Withdrawal">Minimum Withdrawal </label>
              <input class="input" type="text" id="Minimum Withdrawal" placeholder="Minimum Withdrawal" required>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>
          <hr class="my-6" />
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800"> Referral System </h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Comission">User Commission <small>(% of coins earned by referral)</small></label>
              <input class="input" type="text" id="Comission" placeholder="10" required>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>
<?php include("config/functions.php");

    if(isset($_SESSION['person_id'])){
      $id = $_SESSION['person_id'];
    }elseif(isset($_COOKIE['person_id'])){
    $id = $_COOKIE['person_id'];
    }else{
    $id = 0;
    }
    if(isset($_SESSION['person_id'])){
    $id = $_SESSION['person_id'];
    }
    if($id<1){
    header("location:login.php");
    }

    $person = _fetch("person","id=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!--=== Google Font  ===-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script> 
  <!--=== Font awesome  ===-->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>
  
  <!-- SUMMERNOTE TEXTAREA -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js" crossorigin="anonymous"></script>    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />


  <!-- Sweet Alert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!--=== Styles ===-->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <main class="flex p-0 m-0 justify-between w-full h-screen overflow-hidden">

  <div id="sidebar"
      class="sidebar transition-all w-[0px] min-w-[0px] lg:min-w-[255px] lg:w-[255px] h-screen overflow-auto bg-white border-r shadow sidebar fixed lg:relative inset-y-0 left-0"
      style="z-index: 99;">

      <div
        class="flex items-center justify-between px-4 gap-x-2 h-20 border-b shadow-sm sticky top-0 left-0 bg-white z-50">
        <a class="flex items-center justify-between gap-x-2 active" href="./">
          <p class="text-blue-600"> <i class="fa-solid fa-crown"></i> </p>
          <p class="flex items-center justify-center"><span
              class="font-semibold text-lg text-blue-500">Banladeshi</span><span
              class="font-semibold text-lg text-purple-600">Software</span></p>
        </a>
        <button id="hide_sidebar" class="lg:hidden text-gray-800"> <i class="fa-solid fa-xmark"></i> </button>
      </div>

      <!-- Sidebar Item -> Statistics -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title active" data-ref="STATISTICS">
          <span class="text-xs transition-all text-purple-600"><i class="fa-solid fa-chart-simple"></i></span>
          <span class="tracking-wider block">STATISTICS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="STATISTICS">
          <li>
            <a class="active" href="./index.php">
              <h4> <i class="fa-solid fa-gauge"></i> </h4>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a  href="./category.php">
              <h4> <i class="fa-solid fa-gauge"></i> </h4>
              <span>Category</span>
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
        <button class="ds_title" data-ref="product"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">productS</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="product">
          <li>
            <a href="./add-product.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add product</span>
            </a>
          </li>
          <li>
            <a href="./pending-products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Pending Products</span>
            </a>
          </li>
          <li>
            <a href="./published-products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Published Products</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="service"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Service</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="service">
          <li>
            <a href="./add-service.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add Service</span>
            </a>
          </li>
          <li>
            <a href="./pending-service.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Pending Service</span>
            </a>
          </li>
          <li>
            <a href="./published-service.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Published Service</span>
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
        <button class="ds_title md:hidden" data-ref="SETTINGS">
          <span class="text-xs transition-all text-gray-900"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <a href="./settings.php" class="ds_title hidden md:flex" data-ref="SETTINGS">
          <span class="text-xs transition-all"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-right"></i></span>
        </a>
        <ul class="ds_ul transition-all md:hidden" data-ref="SETTINGS">
          <li>
            <a href="./settings.php">
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
                class="header_options_toggler w-full p-2 rounded bg-gray-100 shadow border flex items-center justify-center gap-x-3">

                <a class="pr-1" target="_blank" href="../index.php">
                  <span class="text-sm font-medium"><i class="fa fa-eye"></i></span></a>
                <span><?php echo $person['name']?></span><img class="h-7 w-7 rounded-full"
                  src="upload/<?php echo $person['file_name']?>"> <small class="header_options_icon transition-all transform"><i
                    class="fa-solid fa-chevron-right"></i></small>
              </button>
              <div
                class="header_options absolute w-full bg-white rounded shadow top-full right-0 transition-all origin-top transform scale-y-0">               

                <a target="_blank" href="../index.php"
                  class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3"> <i
                    class="fa fa-internet-explorer"></i>
                  <span class="text-sm font-medium">View Website</span></a>

                  <a href="logout.php" class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i><span
                    class="text-sm font-medium">Logout</span></a>

              </div>
            </div>
          </div>
        </div>
      </header>
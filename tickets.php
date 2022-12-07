<!DOCTYPE html>
<html lang="en">

<head>
  <!--
      theme name: Bangladeshi Software
      version: 1.0
      author: @bangladeshisoftware
     -->

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- FONT-AWESOME -->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- CSS Styles -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Tickets</title>
</head>

<body>
  <!-- Header -->
  <header class="bg-white shadow bg-cover bg-center"
    style="background-image: linear-gradient(to right, #CEF3F3, #cef3f3c2), url('https://www.bangladeshisoftware.com/wp-content/uploads/2019/06/header-bg-copyright.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Header Links -->
    <div class="container flex justify-between items-center h-20 relative">
      <a href="index.php">
        <img class="w-32 xl:w-40" src="assets/images/logo.png" alt="" />
      </a>


      <!-- Header UL -->
      <button id="toggle_menu" class="text-lg lg:hidden relative z-50"><i class="fa-solid fa-bars"></i></button>
      <div class="hidden fixed inset-0 m-auto w-full h-full bg-black z-40 bg-opacity-40" id="mobile_header_overlay">
      </div>
      <ul id="menu_ul"
        class="flex lg:items-center fixed lg:static top-20 inset-x-0 mx-auto lg:mx-0 gap-3 flex-col lg:flex-row lg:bg-transparent bg-white w-[90%] lg:w-auto p-6 lg:p-0 rounded shadow-lg lg:border-transparent lg:shadow-none items-start transform scale-y-0 lg:scale-y-100 origin-top z-50 border transition-transform">
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="services.php">Services</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="blogs.php">Blogs</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="team.php">Team</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="investor.php">Investor</a>
        </li>

        <li class="relative header_sub_parent">
          <a class="header_sub_ul_toggle flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="#">Pages</a>
          <div
            class="transition-all transform origin-top scale-y-0 py-2 absolute z-50 top-[100%] inset-x-0 mx-auto w-56 space-y-1">
            <ul class="bg-white p-3 rounded shadow-xl border">
              <li><a href="about.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">About
                  US</a></li>
              <li><a href="contact.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Contact
                  US</a></li>
              <li><a href="refund-policy.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Refund
                  Policy</a></li>
              <li><a href="privacy-policy.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Privacy
                  Policy</a></li>
              <li><a href="terms-and-conditions.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Terms
                  and Conditions</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="flex items-center px-3 h-[44px]" href="signup.php">Signup</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] text-white space-x-2 rounded focus:ring-1 focus:ring-[#11987d] ring-offset-2 shadow"
            style="
                      background-image: conic-gradient(from 1turn, #0e9479, #16a085);
                    " href="login.php">
            <span class="text-sm">
              <i class="fa-solid fa-lock"></i>
            </span>
            <span>Login</span>
          </a>
        </li>

        <li class="relative">
          <div class="p-0.5 w-fit h-fit bg-gray-100 rounded-md hover:from-transparent transition-all">
            <button id="dashboard_options_handler"
              class="flex items-center gap-x-2 px-3 h-[44px] rounded bg-white hover:bg-gray-100 transition-all focus:ring-2 ring-offset-2 focus:ring-gray-200"
              href="#">

              <a href="cart.php" class="mr-1 relative flex items-center gap-x-1 text-sm">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart_items_wrapper"> </span>
              </a>
              <small>Shamim Reza</small>
              <img class="w-7 h-7 rounded-full" src="https://i.ibb.co/Ryr9PQB/index.jpg" alt="" />
              <small class="block transition-all transform rotate-180">
                <i class="fa-solid fa-chevron-up"></i>
              </small>
            </button>
          </div>

          <div id="dashboard_options"
            class="absolute w-full rounded h-fit bg-white shadow top-[105%] inset-x-0 mx-auto transition-all transform origin-top scale-y-0 z-50">
            <div class="flex flex-col py-2">
              <a href="dashboard.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-gauge"></i></span>
                <span>Dashboard</span>
              </a>

              <a href="##" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-sign-out"></i></span>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </li>
      </ul>

    </div>

    <!-- Sub Header -->
    <div class="container2 space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Tickets
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="tickets.php"> tickets
        </a>

      </div>

    </div>
  </header>
  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start py-6">
      <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

        <!-- Body Sidebar -->
        <div class="w-full lg:min-w-[350px] lg:w-[350px] bg-white p-5 rounded-sm shadow">
          <div class="sidebar_item overflow-hidden">
            <button class="ds_title text-base font-normal w-full flex justify-between pb-1.5" data-ref="my-dashboard">
              <span class="block text-base font-2">GENERAL</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="my-dashboard">
              <li>
                <a href="dashboard.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-gauge"></i>
                  </span>
                  <span>DASHBOARD</span>
                </a>
              </li>

              <li>
                <a href="download.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-file-arrow-down"></i>
                  </span>
                  <span>Download</span>
                </a>
              </li>

              <li>
                <a href="order.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-person-military-pointing"></i>
                  </span>
                  <span>Order</span>
                </a>
              </li>


              <li>
                <a href="reseller.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-person-military-pointing"></i>
                  </span>
                  <span>Re Seller</span>
                </a>
              </li>


              <li>
                <a href="tickets.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-ticket"></i>
                  </span>
                  <span>SUPPORT TICKETS</span>
                </a>
              </li>

            </ul>
          </div>

          <hr class="my-2" />
          <div class="sidebar_item overflow-hidden">
            <button class="ds_title text-base font-normal w-full flex items-center justify-between pb-1.5 pt-4"
              data-ref="setting">
              <span class="tracking-wider block font-2">SETTING</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="setting">
              <li>
                <a href="profile.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-user"></i>
                  </span>
                  <span>Profile</span>
                </a>
              </li>

              <li>
                <a href="security.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-shield"></i>
                  </span>
                  <span>Security</span>
                </a>
              </li>

              <li>
                <a href="verification.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-user-check"></i>
                  </span>
                  <span>Verification</span>
                </a>
              </li>
            </ul>
          </div>

          <hr class="my-2" />
          <div class="sidebar_item overflow-hidden">
            <button class="ds_title text-base font-normal w-full flex justify-between pb-1.5 pt-4" data-ref="account">
              <span class="tracking-wider block font-2">ACCOUNT</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="account">
              <li>
                <a href="activities.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-chart-line"></i>
                  </span>
                  <span>Activity Log</span>
                </a>
              </li>
              <li>
                <button
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-delete-left"></i>
                  </span>
                  <span>Delete Account</span>
                </button>
              </li>
            </ul>
          </div>
        </div>

        <!-- Body Content -->
        <div class="w-full overflow-hidden bg-white shadow rounded-sm">

          <!-- component -->
          <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
              <div>
                <h2 class="text-gray-600 font-semibold">Submit Ticket</h2>
                <span class="text-xs">All Tickets</span>
              </div>
              <div class="flex items-center justify-between">
                <div class="flex bg-gray-50 items-center p-2 rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd" />
                  </svg>
                  <input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="" placeholder="search...">
                </div>
                <div class="lg:ml-40 ml-10 space-x-8">
                  <a href="ticket.php" class="btn_blue">
                    New Ticket</a>
                </div>
              </div>
            </div>
            <div>
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                    <thead>
                      <tr>
                        <th
                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                          Subject
                        </th>
                        <th
                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                          Last update
                        </th>
                        <th
                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">Lorem, ipsum dolor.</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                            Jan 21, 2020
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Activo</span>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">Lorem, ipsum dolor.</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                            Jan 21, 2020
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-red-400 opacity-50 rounded-full"></span>
                            <span class="relative">Closed</span>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">Lorem, ipsum dolor.</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                            Jan 21, 2020
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Activo</span>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">Lorem, ipsum dolor.</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                            Jan 21, 2020
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-red-400 opacity-50 rounded-full"></span>
                            <span class="relative">Closed</span>
                          </span>
                        </td>
                      </tr>

                    </tbody>
                  </table>

                  <!-- Paginations -->
                  <div class="flex flex-col-reverse xl:flex-row gap-6 xl:gap-0 items-center justify-between p-6">
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
            </div>
          </div>


        </div>

      </div>
    </div>
  </main>


  <!-- Footer -->
  <footer class="bg-white pt-[74px]">
    <div class="container grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">

      <div class="space-y-6">
        <img class="w-36" src="assets/images/logo.png" alt="">
        <div class="flex space-x-5">
          <a href="https://www.facebook.com/bangladeshisoftware"
            class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-facebook"></i>
            <small>Facebook</small>
          </a>
          <a href="https://www.facebook.com/bangladeshisoftware"
            class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-youtube"></i>
            <small>Youtube</small>
          </a>
        </div>
      </div>

      <div>
        <p>Bangladeshi Software is the biggest Software Company In Bangladesh. We provide any Desktop & Android
          Software.
          We Provide 100 Percent Customer Satisfaction Copyright © by SHAMIMLEM.</p>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="dmca.php">DMCA</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="contact.php">Contact US</a>
          </li>
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="cookies-policy.php">Cookies Policy</a>
          </li>
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="privacy-policy.php">Privacy Policy</a>
          </li>

        </ul>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="investor.php">Join Investor</a>
          </li>


          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="reseller.php">Join Reseller</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="mailto:shamimlem@yahoo.com">shamimlem@yahoo.com</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="tel:+08801719182586">+08801719182586</a>
          </li>

        </ul>
      </div>
    </div>


    <div class="container flex flex-col xl:flex-row w-full justify-between items-center gap-y-4 xl:gap-y-0 py-12">
      <ul class="flex items-center justify-start w-full xl:w-[400px] gap-x-4 flex-wrap">
        <li> <a href="index.php" class="hover:text-blue-600 hover:underline">Products</a> </li>
        <li> <a href="services.php" class="hover:text-blue-600 hover:underline">Services</a> </li>
        <li> <a href="investor.php" class="hover:text-blue-600 hover:underline">Investor</a> </li>
        <li> <a href="reseller.php" class="hover:text-blue-600 hover:underline">Reseller</a> </li>
      </ul>

      <p class="w-full xl:text-right">
        <span class="text-gray-700 text-base"> All Rights Reserved © Bangladeshi Software 2022 <span>SHAMIMLEM.</span>
      </p>
    </div>

  </footer>
  <!-- Footer -->


  <script src="assets/js/app.js"></script>
</body>

</html>
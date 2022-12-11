<?php include("common/header-sidebar.php")?>
      <div style="padding-left: 0;" class="x_container flex items-start relative">
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
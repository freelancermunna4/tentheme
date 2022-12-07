<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">

        <form class="grid grid-cols-2 gap-y-6 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Admin Profit</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Profit By">Profit By %</label>
            <input class="input" type="number" id="Profit By" placeholder="10" required>
          </div>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button class="button">Change</button>
            </div>
          </div>
        </form>

        <hr class="my-6" />

        <form class="grid grid-cols-2 gap-y-6 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">User Profit</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Profit By">Profit By %</label>
            <input class="input" type="number" id="Profit By" placeholder="10" required>
          </div>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button class="button">Change</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </main>

  <!-- All Popup -->
  <!-- Delete Popup -->
  <div data-target="delete_coupon"
    class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
    id="delete-product-modal" style="z-index: 111; display: none;">
    <div data-target="delete_coupon"
      class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto"></div>
    <div class="relative px-4 w-full max-w-md h-full md:h-auto z-50">
      <div class="relative bg-white rounded-2xl shadow-lg">
        <div class="flex justify-end p-2"><button type="button" data-target="delete_coupon"
            class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
            data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i> </button></div>
        <div class="p-6 pt-0 text-center text-5xl text-red-500"> <i class="fa-solid fa-circle-exclamation"></i>
          <h3 class="my-9 text-base font-normal text-gray-500">Want to Delete Coupon?
          </h3>

          <div class="w-full flex justify-between items-center gap-x-2"><a href="#" data-target="delete_coupon"
              class="popup_remove text-white bg-red-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
              data-modal-toggle="delete-product-modal">No, cancel</a>

            <button
              class="disabled:opacity-70 disabled:cursor-not-allowed text-white bg-red-500 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"><span>Yes,
                Delete</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>
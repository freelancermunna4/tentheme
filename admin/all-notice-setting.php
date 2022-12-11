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
              class="p-4 gap-x-3 flex items-center border-b border-gray-200 bg-white cursor-pointer font-medium text-cyan-800">
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

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="product Notice">product Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="product Notice" placeholder="product Notice"
                  required></textarea>
              </div>
              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button class="button">Submit</button>
                </div>
              </div>
            </form>

            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="Website Notice">Website Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="Website Notice" placeholder="Website Notice"
                  required></textarea>
              </div>
              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button class="button">Submit</button>
                </div>
              </div>
            </form>

            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="Video Notice">Video Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="Video Notice" placeholder="Video Notice"
                  required></textarea>
              </div>
              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button class="button">Submit</button>
                </div>
              </div>
            </form>

            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="Gift Recharge Notice">Gift Recharge Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="Gift Recharge Notice"
                  placeholder="Gift Recharge Notice" required></textarea>
              </div>
              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button class="button">Submit</button>
                </div>
              </div>
            </form>

            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="Gift Rewards Notice">Gift Rewards Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="Gift Rewards Notice"
                  placeholder="Gift Rewards Notice" required></textarea>
              </div>
              <div class="col-span-2 flex justify-start">
                <div class="w-fit">
                  <button class="button">Submit</button>
                </div>
              </div>
            </form>

            <form class="grid grid-cols-2 gap-y-6">
              <div class="col-span-2 flex flex-col gap-y-1">
                <label for="Game Rewards Notice">Game Rewards Notice</label>
                <textarea class="input p-3 min-h-[70px]" type="text" id="Game Rewards Notice" placeholder="product Notice"
                  required></textarea>
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
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>
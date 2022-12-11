<?php include("common/header-sidebar.php")?>
      <div style="padding-left: 0;" class="x_container flex items-start relative">
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
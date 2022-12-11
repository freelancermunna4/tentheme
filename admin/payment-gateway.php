<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>

        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Payoneer</h2>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Payoneer Email">Payoneer Email</label>
              <input class="input" type="text" id="Payoneer Email" placeholder="Payoneer Email" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
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
              <h2 class="text-xl font-semibold text-cyan-800">Paypal</h2>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Paypal Email">Paypal Email</label>
              <input class="input" type="text" id="Paypal Email" placeholder="Paypal Email" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
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
              <h2 class="text-xl font-semibold text-cyan-800">Bkash</h2>
            </div>
            <div class="flex flex-col gap-y-1">
              <label for="Bkash Number">Bkash Number</label>
              <input class="input" id="Bkash Number" placeholder="Bkash Number" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
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
              <h2 class="text-xl font-semibold text-cyan-800">Rocket</h2>
            </div>
            <div class="flex flex-col gap-y-1">
              <label for="Rocket Number">Rocket Number</label>
              <input class="input" id="Rocket Number" placeholder="Rocket Number" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
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
              <h2 class="text-xl font-semibold text-cyan-800">Nagat</h2>
            </div>
            <div class="flex flex-col gap-y-1">
              <label for="Nagat Number">Nagat Number</label>
              <input class="input" id="Nagat Number" placeholder="Nagat Number" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
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
              <h2 class="text-xl font-semibold text-cyan-800">Bank Details</h2>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Bank Details">Bank Details</label>
              <textarea class="input p-3 min-h-[100px]" id="Bank Details" placeholder="Bank Details"
                required></textarea>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="" id="Status" required>
                <option value="Disabled">Disabled</option>
                <option value="Receive & Send">Receive & Send</option>
                <option value="Receive Only">Receive Only</option>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button class="button">Submit</button>
              </div>
            </div>

          </form>


        </div>
      </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>
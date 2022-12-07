<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-6 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Start New Lottery</h2>
          </div>

          <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="UserUser">Next Days</label>
            <select class="select" name="" id="UserUser" required>
              <option value="0 Days">0 Days</option>
              <option value="1 Days">1 Days</option>
              <option value="2 Days">2 Days</option>
              <option value="3 Days">3 Days</option>
              <option value="4 Days">4 Days</option>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="UserUser">Next Withdraw</label>
            <select class="select" name="" id="UserUser" required>
              <option value="0 Days">0 Hour </option>
              <option value="1 Days">1 Hour </option>
              <option value="2 Days">2 Hour </option>
              <option value="3 Days">3 Hour </option>
              <option value="4 Days">4 Hour </option>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Ticket Price">Ticket Price</label>
            <input class="input" type="number" id="Ticket Price" placeholder="Ticket Price" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Profit By">Profit By %</label>
            <input class="input" type="number" id="Profit By" placeholder="0" required>
          </div>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button class="button">Start New Lottery</button>
            </div>
          </div>

        </form>

        <hr class="my-6" />

        <form class="grid grid-cols-2 gap-y-6 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Change Profile Percentage</h2>
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
            <h2 class="text-xl font-semibold text-cyan-800">Add More Withdraw Time</h2>
          </div>


          <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="UserUser">Add Time</label>
            <select class="select" name="" id="UserUser" required>
              <option value="1 Hour">1 Hour</option>
              <option value="2 Hour">2 Hour</option>
              <option value="3 Hour">3 Hour</option>
            </select>
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

  <script src="js/app.js"></script>
</body>

</html>
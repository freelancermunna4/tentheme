<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add Product</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="product Title">Product Title</label>
            <input class="input" type="text" id="product Title" placeholder="product Title" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="product Link">product Link</label>
            <input class="input" type="text" id="product Link" placeholder="product Link" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Reward Coin">Reward Coin</label>
            <input class="input" type="text" id="Reward Coin" placeholder="Reward Coin" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Visitor">Visitor</label>
            <input class="input" type="text" id="Visitor" placeholder="Visitor" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="product Description">product Description</label>
            <textarea class="input p-3 min-h-[100px]" type="text" id="product Description" placeholder="product Description"
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
  </main>

  <script src="js/app.js"></script>
</body>

</html>
<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add Video</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Video ID">Video ID</label>
            <input class="input" type="text" id="Video ID" placeholder="Video ID" required>
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Video Title">Video Title</label>
            <input class="input" type="text" id="Video Title" placeholder="Video Title" required>
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Visits">Visits</label>
            <input class="input" type="text" id="Visits" placeholder="1000" required>
          </div>


          <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="UserUser">Add Pack</label>
            <select class="select" name="" id="UserUser" required>
              <option value="0.10">0.10 Coin (20 seconds)</option>
              <option value="0.20">0.20 Coin (40 seconds)</option>
              <option value="0.30">0.30 Coin (60 seconds)</option>
              <option value="0.40">0.40 Coin (80 seconds)</option>
            </select>
          </div>

          <div class="col-span-2 flex justify-end">
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
<div class="flex justify-between items-center">
            <!-- View Change Icon -->
            <div class="flex items-center  gap-x-4">
              <button data-view="list_view"
                class="items_view_handler active_view text-gray-500 hover:text-black text-xl">
                <span><i class="fa-solid fa-list"></i></span>
              </button>
              <button data-view="grid_view"
                class="items_view_handler text-gray-400 hover:text-black gap-y-[3px] gap-x-0.5 group grid grid-cols-12">
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
              </button>
            </div>

            <!-- Sorting Buttons -->
            <div class="flex items-center  gap-x-4 sort">
              <ul>
                <li id="filter">Filter
                  <ul id="filter_list">
                    <li><a href="<?php echo $cr_url; ?>?sort=best-rated">Best rated</a></li>
                    <li><a href="<?php echo $cr_url; ?>?sort=Newest">Newest</a></li>
                    <li><a href="<?php echo $cr_url; ?>?sort=Price Low">Price Low</a></li>
                    <li><a href="<?php echo $cr_url; ?>?sort=Price High">Price High</a></li>
                </ul>
                </li>
              </ul>            
          </div>
          </div>

        <script>
          $("#filter_list").hide();
          $("#filter").click(function(){
            $("#filter_list").toggle();
          });
        </script>
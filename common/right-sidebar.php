        <!-- Body Sidebar -->
        <div class="sticky -top-52 w-full lg:min-w-[350px] lg:w-[350px]">

          <label for="voice-search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none text-green-600">
              <i class="fa-solid fa-search"></i>
            </div>
            <input class="shadow w-full h-12 rounded-t px-10 focus:ring-2 focus:outline-none focus:ring-gray-200"
              type="text" id="voice-search" placeholder="Search..." required />
            <button type="button"
              class="flex absolute inset-y-0 right-1.5 text-sm items-center text-green-700 px-2 h-fit py-2 my-auto rounded">
              Search
            </button>
          </div>

          <!-- Filter by Category -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Category">
              <span>Category</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Category">
              <div class="py-0">
                <div class="flex justify-between items-center p-2 hover:bg-cyan-800 hover:text-white rounded">
                  <h6 class="text-sm font-medium">All Categories</h6>
                  <small>192</small>
                </div>
                <ul class="pb-3">
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>WordPress</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>eCommerce</span>
                    <span>9</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>JamStack</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Blogging</span>
                    <span>20</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Courses</span>
                    <span>12</span>
                  </li>
                  <li
                    class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                    <span>Portfolio</span>
                    <span>12</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <br>

          <!-- Filter by Price -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Price">
              <span>Price</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Price">
              <div class="py-4 flex flex-wrap gap-2 items-center w-full">

                <div class="relative">
                  <input type="text" class="px-5 w-28 py-2 border rounded focus:border-gray-400" placeholder="5">
                  <span class="text-sm absolute inset-y-0 my-auto flex items-center left-2.5">$</span>
                </div>
                <span>to</span>
                <div class="relative">
                  <input type="text" class="px-5 w-28 py-2  border rounded focus:border-gray-400" placeholder="51">
                  <span class="text-sm absolute inset-y-0 my-auto flex items-center left-2.5">$</span>
                </div>
                <button class="py-2 px-4 rounded bg-gray-300 focus:ring-2 text-black"> <i
                    class="fa-solid fa-chevron-right"></i>
                </button>

              </div>
            </div>
          </div>
          <br>

          <!-- Filter by Rating -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Rating">
              <span>Rating</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Rating">
              <div class="p-2">
                <ul class="space-y-3">
                  <li>
                    <label for="all" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="all" name="rating" checked>
                      <span>All</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="1" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="1" name="rating">
                      <span>1 stars and higher</span>
                      <span class="ml-auto">2</span>
                    </label>
                  </li>
                  <li>
                    <label for="2" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="2" name="rating">
                      <span>2 stars and higher</span>
                      <span class="ml-auto">6</span>
                    </label>
                  </li>
                  <li>
                    <label for="3" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="3" name="rating">
                      <span>3 stars and higher</span>
                      <span class="ml-auto">3</span>
                    </label>
                  </li>
                  <li>
                    <label for="4" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="4" name="rating">
                      <span>4 stars and higher</span>
                      <span class="ml-auto">7</span>
                    </label>
                  </li>
                  <li>
                    <label for="5" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="5" name="rating">
                      <span>5 stars</span>
                      <span class="ml-auto">41</span>
                    </label>
                  </li>
                </ul>
                <br>
                <button class="btn_blue">Submit</button>
              </div>
            </div>
          </div>
          <br>

          <!-- filter by Date Added -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Date Added">
              <span>Date Added</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Date Added">
              <div class="p-2">
                <ul class="space-y-3">
                  <li>
                    <label for="anydate" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="anydate" name="by_date" checked>
                      <span>Any Date</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_year" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_year" name="by_date" checked>
                      <span>In the last year</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_month" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_month" name="by_date" checked>
                      <span>In the last month</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_week" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_week" name="by_date" checked>
                      <span>In the last week</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                </ul>
                <br>
                <button class="btn_blue">Submit</button>
              </div>
            </div>
          </div>
        </div>
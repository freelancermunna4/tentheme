<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">


        <div class="flex flex-col rounded-lg shadow-md border border-[
    ] shadow-gray-200 bg-white">
          <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-auto bg-white">
                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                  <thead class="bg-white">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Price
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Price
                        Name </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Price
                        Value </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Time
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> First </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 10 Thousand TK </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> TK.10,000 </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 25-09-2022 </td>
                      <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">

                        <button data-target="delete_lottery" type="button"
                          class="popup_show btn bg-red-500 w-fit text-white">Delete</button>
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> Second </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 5 Thousand TK </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> TK.5,000 </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 25-09-2022 </td>
                      <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">

                        <button data-target="delete_lottery" type="button"
                          class="popup_show btn bg-red-500 w-fit text-white">Delete</button>
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> Third </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 2 Thousand TK </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> TK.2,000 </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 25-09-2022 </td>
                      <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">

                        <button data-target="delete_lottery" type="button"
                          class="popup_show btn bg-red-500 w-fit text-white">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>


        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add New Winner</h2>
          </div>

          <div class="col-span-2 flex flex-col gap-y-1">
            <label for="First Winner Number">First Winner Number</label>
            <input class="input" type="text" id="First Winner Number" placeholder="23231">
          </div>

          <div class="col-span-2 flex flex-col gap-y-1">
            <label for="Second Winner Number">Second Winner Number</label>
            <input class="input" type="text" id="Second Winner Number" placeholder="34432">
          </div>

          <div class="col-span-2 flex flex-col gap-y-1">
            <label for="Third Winner Number">Third Winner Number</label>
            <input class="input" type="text" id="Third Winner Number" placeholder="53123">
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
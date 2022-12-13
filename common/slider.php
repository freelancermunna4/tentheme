<div class="hidden xl:block h-[320px]">
      <div class="absolute inset-0 m-auto w-full h-full z-40 overflow-hidden" id="header_slider_slides">
        <div class="absolute inset-0 w-full h-full m-auto z-40 flex items-center justify-start">

          <div class="absolute z-10 inset-0 m-auto w-full h-full">

            <?php 
            $pg_name = trim($cr_url,".php");
            $sliders = _get("slider","pg_name='$pg_name' ORDER BY id ASC");
            $i = 0;
            while($slide = mysqli_fetch_assoc($sliders)){ $i++;
            ?>
            <img data-target="<?php echo $i; ?>" style="transform: translateX(0%); transition: all 0.8s;"
              class="header_slides_image w-full h-full object-cover absolute inset-0 z-20"
              src="admin/upload/<?php echo $slide['file_name']?>" alt="">

            <div class="header_slides_text w-full h-full absolute inset-y-0 my-auto left-0 opacity-0"
              style="z-index: 30;" data-target="<?php echo $i; ?>">
              <div class="container flex flex-col items-start justify-center gap-y-5 h-full">
                <a href="#" class="text-3xl text-gray-600 hover:text-[#f75389] font-medium tracking-wide max-w-[400px]"
                  style="transform: translateY(-50%);transition: transform 0.5s;  "><?php echo $slide['title']?></a>
                <div class="flex flex-wrap gap-2 items-center"
                  style="transform: translateY(50%); transition: transform 0.5s;  ">
                  <a href="<?php echo $slide['link1']; ?>" class="px-4 py-1 rounded bg-gray-900 hover:bg-[#f75389] text-white text-sm"><?php echo $slide['btn1']; ?></a>
                  <a href="<?php echo $slide['link2']; ?>" class="px-4 py-1 rounded bg-gray-900 hover:bg-[#f75389] text-white text-sm"><?php echo $slide['btn2']; ?></a>
                </div>
              </div>
            </div>
            <?php }?>


          </div>

        </div>
      </div>

      <div class="absolute z-50 left-0 bottom-0 w-full h-20">
        <div class="container flex items-center gap-x-4">

        <?php 
            $sliders = _get("slider","pg_name='$pg_name' ORDER BY id ASC");
            $i = 0;
            while($slide = mysqli_fetch_assoc($sliders)){ $i++;
            ?>
          <button data-target="<?php echo $i; ?>"
            class="header_slides_toggle w-9 h-9 rounded-full border ring shadow focus:ring-offset-2 focus:bg-white">
            <img class="w-full h-full object-cover rounded-full" src="admin/upload/<?php echo $slide['file_name']?>" alt=""> </button>
            <?php }?>


        </div>
      </div>
    </div>



    <script>

      // Slider

      const header_slider_slides = document.getElementById("header_slider_slides");
      const all_header_slides_toggle = document.querySelectorAll(
        ".header_slides_toggle"
      );

      const all_header_slides_image = document.querySelectorAll(
        ".header_slides_image"
      );

      const all_header_slides_text = document.querySelectorAll(".header_slides_text");

      if (
        header_slider_slides &&
        all_header_slides_toggle &&
        all_header_slides_text
      ) {
        all_header_slides_toggle.forEach((btn) => {
          btn.addEventListener("click", function () {
            const target = this.dataset.target;

            all_header_slides_text.forEach((text) => {
              const text_target = text.dataset.target;

              if (text_target === target) {
                text.style.zIndex = "40";
                text.style.opacity = "1";
                text.children[0].children[0].style.transform = "translateY(0%)";
                text.children[0].children[1].style.transform = "translateY(0%)";
              } else {
                text.style.zIndex = "30";
                text.style.opacity = "0";
                text.children[0].children[0].style.transform = "translateY(-50%)";
                text.children[0].children[1].style.transform = "translateY(50%)";
              }
            });

            all_header_slides_image.forEach((img) => {
              const img_target = img.dataset.target;
              if (target === img_target) {
                img.style.zIndex = "10";
                img.style.transform = "translateX(0%)";
                img.style.opacity = "1";
              } else {
                img.style.zIndex = "5";
                img.style.opacity = "0";
                setTimeout(() => {
                  img.style.transform = "translateX(100%)";
                }, 500);
              }
            });

            all_header_slides_toggle.forEach((btn) =>
              btn.setAttribute("disabled", "true")
            );

            setTimeout(() => {
              all_header_slides_toggle.forEach((btn) =>
                btn.removeAttribute("disabled")
              );
            }, 500);
          });
        });
      }

      const all_header_sub_parent = document.querySelectorAll(".header_sub_parent");
      const all_header_sub_ul_toggle = document.querySelectorAll(
        ".header_sub_ul_toggle"
      );

      if (all_header_sub_parent && all_header_sub_ul_toggle) {
        for (let i = 0; i < all_header_sub_ul_toggle.length; i++) {
          all_header_sub_ul_toggle[i].addEventListener("mouseenter", function () {
            this.nextElementSibling.classList.remove("scale-y-0");
            this.nextElementSibling.classList.add("scale-y-100");
            this.classList.add("bg-white");
          });

          all_header_sub_parent[i].addEventListener("mouseleave", function () {
            this.children[0].classList.remove("bg-white");
            this.children[1].classList.remove("scale-y-100");
            this.children[1].classList.add("scale-y-0");
          });
        }
      }

      const reseller_btn = document.getElementById("reseller_btn");
      if (reseller_btn) {
        reseller_btn.addEventListener("click", function () {
          this.innerText = "Processing...";
        });
      }

      const copy_affiliate_link_btn = document.getElementById(
        "copy_affiliate_link_btn"
      );

      if (copy_affiliate_link_btn) {
        copy_affiliate_link_btn.addEventListener("click", function () {
          var copyText = document.getElementById("affiliate_link_input");

          copyText.select();

          copyText.setSelectionRange(0, 99999);

          navigator.clipboard.writeText(copyText.value);

          this.innerHTML = "Copied";

          setTimeout(() => {
            this.innerHTML = `<i class="fa-solid fa-copy"></i>`;
          }, 1000);
        });
      }

    </script>
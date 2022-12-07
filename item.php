<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container2 space-y-6 pt-12">
      <!-- Page name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Lorem ipsum dolor sit amet.
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="item.php"> item title here
        </a>

      </div>
      <br>
      <!-- Basic Info -->
      <div class="flex items-center flex-wrap gap-x-6 gap-y-3 text-xs sm:text-base mt-12 ">
        <p class="text-gray-500 flex items-center gap-x-1">
          <i class="fa-solid fa-cart-shopping"></i>
          <span>21 sales</span>
        </p>
        <p class="text-green-600 flex items-center gap-x-1">
          <span>Recently Updated</span>
          <i class="fa-solid fa-circle-check"></i>
        </p>
        <p class="text-green-600 flex items-center gap-x-1">
          <span>Well Documented</span>
          <i class="fa-solid fa-circle-check"></i>
        </p>
      </div>

      <!-- Reviews&Comments -->
      <div class="flex items-center justify-start pt-6 overflow-auto" style="margin-bottom:-2px;">

        <a href="#" data-item="item_details" class="item_content_toggler active flex items-center gap-x-1 px-6 py-3">
          <span class="font-normal tracking-wide">Item</span>
          <span class="font-normal tracking-wide">Details</span>
        </a>

        <a href="#" data-item="item_reviews" class="item_content_toggler flex items-center gap-x-2 px-6 py-3">
          <span class="font-normal tracking-wide">Reviews</span>
          <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <span style="width:88%"
              class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
          </p>
          <span>4.3</span>
          <span class="px-2 text-xs py-1 rounded bg-cyan-700 text-white shadow block">21</span>
        </a>

        <a href="#" data-item="item_comments" class="item_content_toggler flex items-center gap-x-2 px-6 py-3">
          <span class="font-normal tracking-wide">Comments</span>
          <span class="px-2 text-xs py-1 rounded bg-cyan-700 text-white shadow block">21</span>
        </a>

      </div>
    </div>
  </header>


  <main class="min-h-screen bg-gray-50 ">
    <div class="flex items-start">
      <div class="container2 flex flex-col lg:flex-row gap-y-6 lg:gap-y-0 gap-x-12 relative">

        <!-- Theme Content -->
        <div class="w-full pt-12">

          <!-- Item Details -->
          <div data-item="item_details" class="item_content w-full space-y-6">
            <!-- Theme Thumbnail -->
            <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="bg-white border p-4">
              <a href="#" class="block w-full">
                <img class="w-full"
                  src="https://themeforest.img.customer.envatousercontent.com/files/398879361/Preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=3b0e5cf150cad45010303b0172d5083b"
                  alt="">
              </a>

              <div class="pt-6 pb-4 gap-x-4 flex-wrap flex justify-center">
                <a href=""
                  class="block px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 focus:ring-2 ring-blue-500 focus:ring-offset-2 w-fit  text-white tracking-wide space-x-1">
                  <span>Live Preview</span>
                  <i class="fa-regular fa-eye"></i>
                </a>

                <a href=""
                  class=" block px-4 py-2 rounded bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 w-fit text-white tracking-wide space-x-1">
                  <span>Screenshots</span>
                  <i class="fa-solid fa-image"></i>
                </a>


                <div class="flex gap-x-0.5 flex-wrap">
                  <a href=""
                    class=" block px-3 py-2 rounded-l bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 w-fit text-white tracking-wide space-x-1">
                    <span>Share</span>
                    <i class="fa-solid fa-share"></i>
                  </a>

                  <a href=""
                    class="w-9 py-2 bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 flex justify-center items-center text-white tracking-wide space-x-1"><i
                      class="fa-brands fa-facebook-f"></i>
                  </a>

                  <a href=""
                    class="w-9 py-2 rounded-r bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 flex justify-center items-center text-white tracking-wide space-x-1"><i
                      class="fa-brands fa-youtube"></i>
                  </a>
                </div>


              </div>


            </div>

            <!-- Others Theme Content -->
            <div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat veniam ipsam nam, mollitia maxime
              excepturi saepe vero voluptates beatae deserunt molestiae est, odit minima dolores nihil recusandae animi,
              perspiciatis dolorem. Culpa obcaecati illo asperiores! Mollitia ad aliquid nobis quis voluptates neque
              odio illum ratione, incidunt, quos accusantium quia deserunt expedita. Dicta atque sequi excepturi
              aspernatur error culpa laborum illum pariatur in quasi, maxime tempore animi reiciendis, a sed, neque
              voluptates amet fugiat blanditiis. Maxime, est, aliquam quis ut illo adipisci libero accusantium nemo quos
              amet officiis enim cupiditate unde ea id assumenda! Rerum repellendus fuga ullam cumque maiores nesciunt
              nostrum debitis ea voluptate, itaque, sunt eligendi non unde. Placeat magni maiores et debitis quae
              laborum. Labore nulla soluta nobis, est nesciunt odit unde alias nostrum temporibus, laudantium
              repellendus quo autem et? Incidunt eum facere vitae exercitationem maxime nemo consequatur. Quod error
              temporibus soluta fugiat? Tenetur repellat tempore reiciendis vel modi odio aliquam nobis excepturi
              voluptatum quos, repudiandae itaque sed possimus nulla minus soluta laborum quasi blanditiis doloremque
              alias dolores, dignissimos hic accusamus cum. Eos ea rem at voluptatibus! Aut ratione suscipit recusandae
              saepe incidunt, voluptas cupiditate, ab est assumenda, eveniet vitae vel doloribus. Repudiandae aliquam
              facere voluptate ratione impedit enim asperiores similique illum placeat vitae laudantium voluptates animi
              saepe est, rerum autem harum et, in dolore odit maiores non quis exercitationem nostrum. Fugiat nisi ullam
              voluptates quo, ea fugit saepe odit dolor quia corporis. Accusamus nesciunt itaque neque porro, iure
              tempore expedita voluptate repellat possimus consectetur recusandae dicta laboriosam? Deleniti ut quam
              earum atque fugit error omnis ex aspernatur voluptatibus facere. Odio pariatur similique beatae, amet
              officia architecto quae mollitia illum et suscipit aliquam adipisci doloribus porro molestiae nostrum
              minus harum asperiores culpa eum. Dolorem iure rem sed commodi. Modi libero perferendis exercitationem
              similique, iste consectetur ab aspernatur. Inventore porro perspiciatis, accusamus eaque quasi quisquam
              excepturi explicabo consequatur! Architecto blanditiis excepturi expedita dignissimos iure? Molestias,
              quidem natus. Non reprehenderit repellat quibusdam praesentium pariatur dolore ut optio nostrum tempora
              voluptatibus debitis at id repudiandae placeat vel quaerat quos accusantium numquam eligendi, perspiciatis
              et. In, nobis. Voluptate delectus quos, reprehenderit minus ullam doloremque sit, vitae ut, officia
              cupiditate voluptates quas repudiandae adipisci repellat quam eligendi amet quo. Voluptas deleniti aperiam
              facilis. Ut cumque est dolor porro minus nostrum quaerat inventore, corporis facilis sunt cum ex
              blanditiis quas. Voluptatibus dolor necessitatibus earum? Delectus, earum eaque vitae repellendus est
              tenetur explicabo temporibus id doloribus, illum officiis tempora harum qui quibusdam sit iste quas error
              voluptatum? Quis explicabo provident necessitatibus omnis quod ipsam vitae, esse adipisci aut accusamus
              ratione distinctio eligendi commodi neque aperiam sapiente quas eius illum ipsum doloribus perferendis qui
              maxime in architecto? Atque, culpa tenetur odit dolore cupiditate sapiente molestias laborum id corrupti
              exercitationem iure repellendus aperiam ducimus. Culpa eveniet a aspernatur maiores aliquid tempora totam
              in cumque rem, obcaecati possimus ex temporibus assumenda porro repudiandae amet similique rerum omnis
              pariatur officia harum suscipit. Voluptatum perferendis, quis itaque expedita reiciendis veniam suscipit
              hic ipsa incidunt explicabo nesciunt voluptatibus sapiente excepturi dolores numquam unde quo quaerat
              rerum veritatis? Ex atque illum deleniti fugiat consequuntur nulla praesentium sint, molestias dicta quis
              alias incidunt inventore officiis modi quia voluptatum omnis, fugit excepturi! Eos itaque est cupiditate
              non facilis alias recusandae illum praesentium pariatur, excepturi repudiandae provident ullam nostrum id
              amet aut hic ex laudantium dignissimos a facere! Harum cumque possimus, in temporibus repellat aspernatur
              vitae sequi? Quo totam libero fugiat neque, adipisci possimus quaerat qui perferendis laborum cumque
              veniam! Tenetur exercitationem eligendi assumenda dicta? Recusandae tempora deserunt magni, libero culpa
              ab mollitia, molestiae at ullam modi, ad iure. Rem praesentium vero minus vitae, illo ipsam nesciunt
              pariatur, fugit explicabo minima quidem voluptates recusandae commodi tempora quod laudantium tenetur
              eaque magnam obcaecati sed aliquid voluptatum suscipit voluptate. Atque, iure maiores! Amet non reiciendis
              magnam aut, illum quam esse fugiat voluptatum ullam! Accusamus consequuntur, vero doloremque aliquid
              laboriosam nisi quos quam, placeat itaque necessitatibus numquam autem fugiat eius ab dolorem. Maxime,
              aperiam quis dolorum a esse harum eaque quibusdam quia dignissimos! Corporis, nobis adipisci at dolor
              quidem voluptatem fuga, repellendus, atque ut ab vel accusamus sequi impedit officia tempora mollitia eos
              velit! Unde dolorem aspernatur est eligendi alias eveniet. Facere iusto fugit quo blanditiis illo alias
              non porro expedita vitae a dignissimos magni accusantium minus debitis id aperiam similique cupiditate
              eligendi possimus cumque sint deserunt, ad esse nesciunt. Labore dolorem id est quos a amet, rerum
              inventore cumque sed sit at aspernatur? Cum ullam ex saepe delectus minima assumenda, illum id, facilis
              sunt quae nisi. Voluptatem blanditiis ut officia neque ipsum nulla quasi vero veniam perspiciatis?
              Consequatur, enim odio. Eius inventore quos deserunt a ea. Quam, maxime totam nulla veritatis sunt
              repudiandae, ut fugit in ipsa pariatur voluptatum delectus, dolorem eaque dolor quibusdam sit architecto
              quasi aut! Expedita minima quibusdam fugit asperiores accusamus perspiciatis vero nesciunt! Animi
              repudiandae nihil sint dicta, quibusdam, dolores laborum mollitia, repellendus ullam porro quia quo
              molestias doloremque cum at. Debitis, voluptate. Sint assumenda eos optio ullam ab quae ducimus itaque sit
              rerum, officia tenetur asperiores sed dolorum distinctio, esse eius modi. Illo ipsum iste animi voluptate
            </div>


            <div>
              porro ex amet, sequi aliquid. Obcaecati, pariatur quis. Recusandae cum eligendi iste laboriosam numquam
              veniam quos dolor! Adipisci odit molestiae animi cum numquam suscipit architecto, illo ullam vel
              consequuntur laborum commodi enim iusto. Debitis a tempora blanditiis? Praesentium architecto labore rem
              nam, velit iusto dolorum consectetur optio a sequi amet quibusdam ullam nesciunt. Rerum magni quisquam
              labore error nulla, corporis id consectetur non consequuntur quas blanditiis ea laborum totam incidunt
              harum at ipsum aperiam iusto officiis assumenda. Quae perferendis repudiandae, tempore fuga quo sapiente
              recusandae error, excepturi quia itaque eos qui cupiditate quam, natus mollitia sunt eum amet dolore.
              Natus earum ipsam facere libero deserunt voluptates tenetur. Rerum impedit, dolorum voluptate illum ipsam
              accusantium modi incidunt itaque facere omnis architecto alias laborum reprehenderit amet corporis fuga
              ipsum est nihil numquam doloribus aliquid optio? Obcaecati in vitae non quo beatae at? Molestias, iste
              libero obcaecati nemo impedit perspiciatis ut harum minima corporis earum eos aliquid nobis odit eum ullam
              delectus, nesciunt ab possimus? Repudiandae, excepturi mollitia. Aut modi facilis placeat, id veniam
              ducimus commodi quos dolores voluptatem. Commodi impedit sapiente tenetur dolores architecto explicabo
              vitae omnis mollitia aperiam natus doloribus, necessitatibus odio rem voluptates aliquam modi suscipit
              nisi. Possimus, laborum provident. Temporibus, consequatur possimus! Perspiciatis quae debitis atque vero
              sed omnis ex corporis quod, beatae, culpa id voluptates officiis. Assumenda nihil, minus, ea ipsam est,
              cupiditate voluptate mollitia eveniet eligendi voluptatem possimus vel illo esse adipisci. Iusto quas
              explicabo placeat numquam ut repudiandae fuga cumque exercitationem deleniti maxime neque libero, minus
              nulla ducimus. Saepe vero debitis impedit magnam quidem esse natus quod ea, reprehenderit autem laborum
              culpa consequatur pariatur labore odio quibusdam quis numquam soluta nostrum est minima laudantium ullam
              corporis ex! Praesentium enim mollitia quia. Sunt officia at, quidem optio voluptatibus quo fuga
              doloremque consectetur architecto est ullam dolore quibusdam, nihil veritatis iure? Aspernatur, atque
              officia hic dolore exercitationem consectetur? Dolor doloribus molestias iure praesentium excepturi?
              Delectus in sequi quaerat ipsa dignissimos. Eius quibusdam illo quas dolorum recusandae obcaecati eveniet.
              Corrupti excepturi delectus ipsa perspiciatis cum voluptatibus soluta suscipit numquam nesciunt, assumenda
              unde laboriosam, nisi animi similique eius mollitia libero alias eveniet? Iure vitae laudantium in
              recusandae eius voluptatibus veniam facere fugit excepturi nobis pariatur, possimus vel quibusdam nulla.
              Accusantium, ratione laborum sunt temporibus modi, quo praesentium voluptatem possimus tempore porro
              dolorem rerum culpa rem quisquam maxime nostrum. Assumenda modi non tempore? Nam eius mollitia corrupti
              labore est quo laboriosam quia maxime aliquam et! Consectetur at illo, delectus assumenda perferendis eius
              repudiandae maxime! Deserunt debitis provident facere exercitationem tempora, quaerat consequuntur quos
              sapiente quisquam eos dolor illo distinctio laboriosam molestiae amet similique voluptates! Sint
              voluptatibus id veniam in, cumque ut harum voluptatum, tempore, iure soluta qui? Deleniti possimus aperiam
              debitis odio vitae magni dolore ducimus eos ipsa esse nulla architecto, id reprehenderit magnam et ullam
              numquam asperiores eum? Laudantium deserunt, quia saepe excepturi illo magni voluptate fugit provident
              commodi nihil soluta dolorem culpa. Voluptatem omnis impedit debitis ex quidem dolorem, reiciendis non
              consectetur optio beatae doloribus dignissimos quo modi inventore porro, eius labore aut illum fugit
              voluptas est ratione. Obcaecati veniam ea aliquam voluptatum. Tenetur nostrum incidunt temporibus sunt
              dicta quis quidem illo, molestias voluptatum autem nulla, reprehenderit aspernatur iusto suscipit repellat
              sint praesentium ea harum? Rerum eos quia ut non error impedit laudantium modi provident dolores animi,
              corrupti culpa tempore maxime, perspiciatis incidunt in eveniet saepe facilis temporibus molestias quae
              sapiente quasi dolorum tempora! Impedit fuga, laborum quam nulla pariatur tenetur illo, voluptatem dolor
              perspiciatis adipisci quaerat vitae iure facilis et quisquam assumenda expedita nihil inventore odit magni
              harum eveniet quasi! Dicta, non magni ipsum assumenda odio voluptatem blanditiis veniam iste voluptas,
              magnam ducimus nihil enim sit, error corrupti. Minima perferendis commodi repellat rerum, temporibus
              excepturi totam maxime necessitatibus vero accusantium voluptates hic in saepe perspiciatis inventore
              eveniet a. Magni qui odit autem facere consequuntur dolore repellat sapiente. Unde tenetur quam
              repellendus maxime voluptates possimus obcaecati, repellat provident. Tempore tenetur culpa quis repellat
              exercitationem velit, vel veniam nostrum hic expedita aut ad molestias suscipit, iusto sed minima cumque
              nobis vero quibusdam repudiandae esse delectus? Animi fugit quod aut odio! Libero, neque ipsum? Ad maiores
              blanditiis culpa magni perspiciatis numquam labore, deleniti velit, dolor quaerat molestias ex praesentium
              earum, ipsam officia provident amet fuga odio hic expedita optio distinctio deserunt corporis minus. Odit
              illo odio sit atque fugit earum libero cum dolor provident a, delectus veritatis ducimus debitis nihil
              fuga! Eos, aliquid nam voluptate omnis sint aspernatur provident iusto tempore dolore ab, voluptatem,
              asperiores eaque quas facere impedit. Iste quaerat ex, laborum nesciunt, explicabo cum, aperiam incidunt
              dignissimos excepturi nobis qui natus alias minima ut consequatur magnam eaque adipisci vel sunt pariatur
              animi? Non est cupiditate iusto vero, vel repellat commodi alias nulla nemo, sint eligendi aliquam facere
              repellendus, et maiores! Sapiente necessitatibus consequuntur eveniet vero modi quae fugiat inventore
              ipsum. Ullam, facere, non, laboriosam tempore recusandae officiis vel qui aspernatur nihil iure molestiae
              veritatis doloremque dicta commodi placeat harum possimus numquam eligendi voluptate esse consequatur
              corporis! Praesentium quibusdam dolorum consequuntur incidunt tempore assumenda, dignissimos, suscipit eos
              laudantium quidem nam error. Asperiores deleniti assumenda officiis quae perferendis quos! Nobis soluta
              consectetur similique hic vitae ipsa dignissimos facere delectus aperiam illum molestias doloribus,
              voluptatum debitis voluptas. Reprehenderit quidem repellendus nam accusantium fugit, veniam consectetur.
              Corrupti perspiciatis corporis saepe fugit deserunt, numquam incidunt modi quae impedit consectetur
              dolorum explicabo consequuntur, dolorem officia eos temporibus nulla magnam hic consequatur quaerat? Amet
              dolore nemo iusto officiis expedita, eligendi ab beatae deserunt impedit esse fugit. Molestias temporibus
              veritatis quis beatae necessitatibus dicta nam sit deleniti odit provident ea blanditiis laborum ad unde,
              libero, iusto saepe vel maxime ut. Nam totam quos sit. Nostrum quam soluta quia ipsum quod voluptatem a
              nam, quaerat ullam repudiandae doloribus nihil delectus voluptates sit incidunt doloremque reprehenderit!
              Impedit facilis voluptas laboriosam autem dicta? Veritatis earum amet, quos, at cum et nisi tenetur
              possimus magnam pariatur sunt quae dolores similique ut tempore unde dolorum ducimus praesentium soluta?
              Sed mollitia qui iste, provident fuga distinctio itaque consequuntur in iusto unde. Ipsa laudantium
              debitis pariatur quasi minima. Vitae fugiat dolor, at aut delectus, quod voluptatibus illum mollitia ad
              suscipit recusandae? Corporis voluptate mollitia perferendis quidem rerum quis soluta, maxime reiciendis
              aperiam nisi, aut molestiae officia eligendi natus. Alias voluptatibus harum quas molestiae neque
              quibusdam iure saepe sequi voluptates, praesentium dolorem deserunt explicabo consequuntur labore rerum, a
              laboriosam. Ullam facilis cupiditate, beatae laudantium ipsa aspernatur iure, ducimus voluptatibus
              possimus temporibus, eaque ratione molestiae minima. Id in ratione at ducimus maiores, blanditiis cumque,
              distinctio aperiam, porro minus qui ab tempore repellendus asperiores! Maiores enim culpa hic possimus
              eius. Corrupti aliquid et sint porro nostrum voluptatibus sed illo soluta dignissimos. Iusto fugiat
              perferendis error in quae voluptatem illum odio? Id excepturi adipisci voluptates fugit incidunt dicta a
              minima. Voluptas fugiat saepe assumenda deleniti veniam eligendi numquam quia ducimus et natus libero qui
              officia dignissimos corrupti minima architecto, ut hic animi tempora voluptatum. Inventore harum ea,
              deserunt omnis, quisquam libero officia dolore qui quidem aperiam molestiae dicta. Quod, veritatis
              perspiciatis perferendis, repudiandae quasi adipisci quae nemo magni voluptatem aliquid non inventore?
              Nemo sed illum temporibus dolorum tempora ut laborum odio libero repellat ratione, magni accusantium
              placeat quae quis adipisci deleniti hic dolore dolorem quibusdam voluptatum labore. Illum est consequatur
              quia, quos porro dolore accusamus voluptates culpa quae similique et animi fugit pariatur eum eos dolorem
              ex doloribus, possimus nulla repellendus expedita. Consequatur aut explicabo consequuntur maxime, impedit
              minima assumenda blanditiis illo dolorem quasi ut delectus dolore officiis, vitae nisi, eligendi velit
              ipsum! Fugit, laboriosam nulla. Tenetur, saepe? Sit consequatur unde doloribus blanditiis voluptatum dicta
              vel molestiae laborum ab? Modi illum dolorum iste fuga id inventore nobis nam impedit architecto beatae
              facilis voluptatibus nostrum quidem laboriosam facere ipsam illo, molestias consequatur placeat rem natus.
              Qui, nesciunt quisquam. Necessitatibus vero dolorum earum dolorem odio dicta, quis debitis voluptatum
              dolore saepe voluptates nulla sint cum in nihil non repudiandae iusto eos quam neque doloremque omnis
              distinctio et assumenda. Eius praesentium tempora rerum impedit eligendi nam. Sunt impedit assumenda dicta
              quis? Voluptatem quis quibusdam quasi corporis. Ab, repellendus quis eius dolores ipsa ullam perferendis
              impedit magni iusto adipisci vel ratione sequi, aliquid optio illo temporibus! Eveniet maiores natus
              consectetur accusantium voluptate error sed qui optio aspernatur consequatur. Ex quia eveniet aliquid
              voluptas quo possimus ut quidem quod consequuntur quos?
            </div>

          </div>

          <!-- Item Reviews -->
          <div data-item="item_reviews" class="item_content hidden">

            <div class="flex justify-between items-center">
              <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span>21 Reviews</span>
                <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <span style="width:88%"
                    class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                </p>
              </h3>

              <select
                class="border-4 w-52 ring-2 py-1 text-sm bg-white border-white rounded ring-gray-300 focus:ring-gray-500 outline-none">
                <option value="">Sort by Newest</option>
                <option value="">Sort by Highest Rating</option>
                <option value="">Sort by Lowest Rating</option>
              </select>
            </div>

            <!-- reiviews -->
            <div class="pt-6 space-y-4">
              <!-- review -->
              <div class="rounded border overflow-hidden">
                <div class="flex items-center justify-between bg-gray-100 p-4">
                  <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span style="width:100%"
                      class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </span>
                  </p>

                  <p> by <a href="#" class="hover:underline text-blue-800">stacksagar</a> 1 month ago </p>
                </div>
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat consequuntur
                  natus? Molestiae
                  quos assumenda totam non magnam alias odio illo perspiciatis, soluta maxime hic accusantium, optio
                  vitae. Quasi, voluptates!</p>
              </div>

              <!-- review -->
              <div class="rounded border overflow-hidden">
                <div class="flex items-center justify-between bg-gray-100 p-4">
                  <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span style="width:80%"
                      class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </span>
                  </p>

                  <p> by <a href="#" class="hover:underline text-blue-800">munna</a> 10 days ago </p>
                </div>
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat consequuntur
                  natus? Molestiae
                  quos assumenda totam non magnam alias odio illo perspiciatis, soluta maxime hic accusantium, optio
                  vitae. Quasi, voluptates!</p>
              </div>

            </div>


          </div>

          <!-- Item Comments -->
          <div data-item="item_comments" class="item_content hidden">
            <div class="flex justify-between items-center">
              <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span>14 Comments found.</span>

              </h3>

              <select
                class="border-4 w-52 ring-2 py-1 text-sm bg-white border-white rounded ring-gray-300 focus:ring-gray-500 outline-none">
                <option value="">Sort by Newest</option>
                <option value="">Sort by Highest Rating</option>
                <option value="">Sort by Lowest Rating</option>
              </select>
            </div>

            <!-- comments -->
            <div class="pt-6 space-y-3">
              <div class="border rounded overflow-hidden">

                <div class="p-4 border-b bg-gray-50">
                  <div class="overflow-hidden flex items-center justify-between">
                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                      <img class="w-10 h-10 object-contain rounded-full"
                        src="https://randomuser.me/api/portraits/men/22.jpg" alt="">
                      <span>John Doe</span>
                    </a>
                    <small>1 month ago</small>
                  </div>
                  <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam suscipit
                    dicta, ab in
                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                </div>

                <div class="pl-8 pr-4 py-4">
                  <div class="overflow-hidden flex items-center justify-between">
                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                      <img class="w-10 h-10 object-contain rounded-full" src="https://i.ibb.co/Ryr9PQB/index.jpg"
                        alt="">
                      <span>Steve</span>
                    </a>
                    <small>1 month ago</small>
                  </div>
                  <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam suscipit
                    dicta, ab in
                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                </div>

              </div>

              <div class="border rounded overflow-hidden">

                <div class="p-4 border-b bg-gray-50">
                  <div class="overflow-hidden flex items-center justify-between">
                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                      <img class="w-10 h-10 object-contain rounded-full"
                        src="https://randomuser.me/api/portraits/men/23.jpg" alt="">
                      <span>Steve Smith</span>
                    </a>
                    <small>1 month ago</small>
                  </div>
                  <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam suscipit
                    dicta, ab in
                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                </div>

                <div class="pl-8 pr-4 py-4">
                  <div class="overflow-hidden flex items-center justify-between">
                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                      <img class="w-10 h-10 object-contain rounded-full" src="https://i.ibb.co/Ryr9PQB/index.jpg"
                        alt="">
                      <span>Shamim Reza</span>
                    </a>
                    <small>1 month ago</small>
                  </div>
                  <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam suscipit
                    dicta, ab in
                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                </div>

              </div>


            </div>

          </div>

        </div>

        <!-- RightBar Info -->
        <div class="w-full lg:min-w-[350px] lg:w-[350px]">

          <div class="w-full sticky top-0 pt-12">
            <!-- Price&Cart-Button area -->
            <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="w-full border p-6 space-y-5">
              <div class="flex justify-between items-center relative">
                <button class="toggle_license" class="font-medium text-lg">
                  <span class="item_title">Regular Price</span>
                  <small class="text-gray-500"><i class="fa-solid fa-caret-down"></i></small>
                </button>
                <div class="relative">
                  <div class="flex items-start text-gray-800 absolute right-0 -top-5">
                    <span class="text-sm">$.</span>
                    <del class="text-base font-medium tracking-wide items_del_price">44</del>
                  </div>
                  <div class="flex items-start text-green-600">
                    <span class="text-sm">$.</span>
                    <h4 class="text-xl font-semibold tracking-wide items_price">33</h4>
                  </div>
                </div>

                <div
                  class="hidden item_licenses absolute top-[115%] inset-x-0 z-40 max-w-[350px] border shadow bg-white rounded">
                  <div data-title="Regular License" data-price="33" data-oldprice="44"
                    class="item_license p-5 border-b cursor-pointer hover:bg-gray-100 group">
                    <div class="flex justify-between items-center">
                      <h4 class="text-base font-semibold">Regular License</h4>
                      <h2 class="flex items-start">
                        <small>$</small>
                        <span class="text-xl font-semibold text-gray-900">33</span>
                      </h2>
                    </div>
                    <p class="text-gray-600 py-1 text-sm font-normal">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum reiciendis beatae, nulla maxime
                      animi accusamus.
                    </p>

                    <div
                      class="absolute -top-2 -z-10 rounded left-4 w-4 h-4 bg-white group-hover:bg-gray-100 border-l border-t transform rotate-45">
                    </div>
                  </div>

                  <div data-title="Regular License" data-price="250" data-oldprice="400"
                    class="item_license p-5 border-b cursor-pointer hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                      <h4 class="text-base font-semibold">Extended License</h4>
                      <h2 class="flex items-start">
                        <small>$</small>
                        <span class="text-xl font-semibold text-gray-900">300</span>
                      </h2>
                    </div>
                    <p class="text-gray-600 py-1 text-sm font-normal">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum reiciendis beatae, nulla maxime
                      animi accusamus.
                    </p>
                  </div>

                  <div class="px-5 py-3">
                    <a href="#" class="text-blue-500 hover:underline text-center block text-sm">View license details</a>
                  </div>
                </div>

              </div>


              <div class="w-full border-b"> </div>


              <ul class="space-y-2 text-sm">
                <li class="flex text-sm items-center justify-start gap-x-3 text-gray-600">
                  <small>
                    <i class="fa-solid fa-check"></i>
                  </small>
                  <span> Quality checked! </span>
                </li>
                <li class="flex text-sm items-center justify-start gap-x-3 text-gray-600">
                  <small>
                    <i class="fa-solid fa-check"></i>
                  </small>
                  <span>Future updates!</span>
                </li>
                <li class="flex text-sm items-center justify-start gap-x-3 text-gray-600">
                  <small>

                    <i class="fa-solid fa-check"></i>
                  </small>
                  <span> 8 Month Support from us! </span> </li>
              </ul>

              <button
                class="w-full h-11 flex items-center justify-center rounded focus:ring-2 ring-green-600 ring-offset-2 bg-green-600 text-white gap-x-2">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Buy Now</span>
              </button>

            </div>

            <br>

            <!-- Necessary Information -->
            <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
          rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="border bg-white p-4 space-y-4">

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Last Update
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  30 Aug 2022
                </a>
              </div>

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Published
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  20 Jul 2022
                </a>
              </div>

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Compatible Browsers
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  Edge, Firefox, Chrome, Opera, US Browser, Safari, all modern browser.
                </a>
              </div>

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Columns
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  Edge, Firefox, Chrome, Opera, US Browser, Safari, all modern browser.
                </a>
              </div>

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Documentation
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  <span> Well Documented </span>
                  <span class="text-green-600">
                    <i class="fa-solid fa-check-circle"></i>
                  </span>
                </a>
              </div>

              <div class="flex justify-between items-start w-full gap-x-3">
                <p class="w-6/12 h-auto block font-medium">
                  Layout
                </p>
                <a href="#" class="w-6/12 block font-normal text-sm">
                  Full Responsive
                </a>
              </div>

            </div>

            <br>

            <div>
              <h3 class="bg-green-600 text-white p-3 rounded-t">Recommended Products</h3>
              <div class="bg-[#f3f3f3]">

                <a href="item.php" class="block px-4 py-6 pb-0 hover:bg-green-100">
                  <div class="flex items-start gap-x-4">
                    <h2 class="text-base font-semibold text-gray-700 text-left w-7/12">Lorem ipsum dolor amet
                      consectetur. dolor amet</h2>
                    <img class="w-5/12"
                      src="https://themeforest.img.customer.envatousercontent.com/files/398879361/Preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=3b0e5cf150cad45010303b0172d5083b"
                      alt="">
                  </div>
                  <p class="text-gray-500 py-5 border-b">Lorem ipsum dolor sit amet consectetur.</p>
                </a>
                <a href="item.php" class="block px-4 py-6 pb-0 hover:bg-green-100">
                  <div class="flex items-start gap-x-4">
                    <h2 class="text-base font-semibold text-gray-700 text-left w-7/12">Lorem ipsum dolor amet
                      consectetur. dolor amet</h2>
                    <img class="w-5/12"
                      src="https://themeforest.img.customer.envatousercontent.com/files/398879361/Preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=3b0e5cf150cad45010303b0172d5083b"
                      alt="">
                  </div>
                  <p class="text-gray-500 py-5 border-b">Lorem ipsum dolor sit amet consectetur.</p>
                </a>
                <a href="item.php" class="block px-4 py-6 pb-0 hover:bg-green-100">
                  <div class="flex items-start gap-x-4">
                    <h2 class="text-base font-semibold text-gray-700 text-left w-7/12">Lorem ipsum dolor amet
                      consectetur. dolor amet</h2>
                    <img class="w-5/12"
                      src="https://themeforest.img.customer.envatousercontent.com/files/398879361/Preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=3b0e5cf150cad45010303b0172d5083b"
                      alt="">
                  </div>
                  <p class="text-gray-500 py-5 border-b">Lorem ipsum dolor sit amet consectetur.</p>
                </a>
                <a href="item.php" class="block px-4 py-6 pb-0 hover:bg-green-100">
                  <div class="flex items-start gap-x-4">
                    <h2 class="text-base font-semibold text-gray-700 text-left w-7/12">Lorem ipsum dolor amet
                      consectetur. dolor amet</h2>
                    <img class="w-5/12"
                      src="https://themeforest.img.customer.envatousercontent.com/files/398879361/Preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=3b0e5cf150cad45010303b0172d5083b"
                      alt="">
                  </div>
                  <p class="text-gray-500 py-5 border-b">Lorem ipsum dolor sit amet consectetur.</p>
                </a>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->
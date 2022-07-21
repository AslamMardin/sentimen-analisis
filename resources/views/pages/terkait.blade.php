  <?php foreach ($kategoris as $key => $kategori) : ?>
      <div id="<?= $kategori ?>" class="my-3 mb-5 p-3 bg-body rounded">
        <h6 class="border-bottom fw-light fs-6 pb-2 mb-0">Postingan Akun Terkait  
            <?php 
            if ($kategori == "unasman") {
            // code...
                echo "Universitas Al-Asyariah Mandar";
            }else if($kategori == "sulbar"){
                echo "Sulawesi Barat";
            }else {
                echo "Polewali Mandar";
            }
            ?>
        !</h6>
        <?php 
        $angka = 0;
        $items = $kategori ."s";
        foreach ($$items as $key => $item) {
            // code...
            $angka++;
            if ($angka > $batasan) {
                // code...
                break;
            }
            ?>
            <!-- akun pertama -->
            <div class="d-flex text-muted gap-x-2 pt-3 position-relative border-bottom" style="font-size:11px">
                <div class="flex-shrink-0 d-flex justify-content-center align-items-start">
                   <img src="<?= $item->user->profile_image_url ?>" class="rounded-circle d-block" width="45" height="45">
               </div>

               <div class="pb-3 mb-0 flex-grow-1 ms-3 small lh-sm  w-100" style="font-size: 11px;">

                <h6 class="text-info text-wrap mb-1" style="max-width: 80%; font-size:11px">
                   @<?= $item->user->screen_name ?>
               </h6>


               <span class="text-gray-dark">
                <i class="bi bi-calendar3"></i> 
                <?php     
                $date = date_create($item->created_at);
                echo date_format($date,"Y/m/d H:i:s");
                ?>
            </span>
            <?php if($item->user->location) : ?>
                <strong class="fw-light mt-1 d-block">
                    <i class="bi bi-geo-alt-fill"></i>
                    <?= $item->user->location ?></strong>

                <?php endif ?>
                <div class="py-2 d-block px-1 bg-light text-secondary" style="min-height:70px;overflow-wrap: break-word;">
                    <i class="bi bi-chat-text" style="font-size:11px"></i> 

                    <?= $item->text ?>
                </div>
                <strong class="fw-light mt-1 d-block">
                    Following  
                    <span class="fw-bold text-dark">
                    <?= $item->user->friends_count ?>
                    </span>
                    Followers  
                    <span class="fw-bold text-dark">
                    <?= $item->user->followers_count ?>
                    </span>
                        
                    </strong>        


                    <div class="d-flex justify-content-end">

                     <a target="_blank" href="https://twitter.com/<?= $item->user->screen_name ?>/status/<?= $item->id_str ?>" class="text-secondary fw-light position-absolute" style="top: 20px; right: 20px; font-size: 11px;"><i class="bi bi-eye-fill"></i></a>
                 </div>


             </div>
         </div>
         <!-- akhir akun pertama -->
     <?php } ?>
 </div>

<?php endforeach ?>

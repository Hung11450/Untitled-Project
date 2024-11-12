
<div class="row mb">
    <div class="boxtrai mr" style="margin-bottom: auto;">
    <div class="row mb">
        <div class="boxtitle"><?= $onesp['name'] ?></div>
            <div class="row boxcontent">            
                      <?= $onesp['mota']; ?>  
                      <div class="row mb">  
                      <img class="spct" src="<?= BASE_URL . $onesp['img'] ?>">
                      </div>  
            </div>            
        </div>       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $onesp['id'] ?>});
            });
            </script>                  
        <div class="row" id="binhluan">
                                
        <div class="row mb">
        <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">            
                        <?php
                            foreach($sp_cung_loai as $sanPham){ ?>
                                <li><a href="index.php?act=sanphamct&idsp=<?= $sanPham['id'] ?>"><?= $sanPham['name'] ?></a></li>
                        <?php } ?>
            </div>            
        </div>                            
            </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>

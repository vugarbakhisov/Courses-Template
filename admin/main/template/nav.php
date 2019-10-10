 <?php   require_once '../../settings/class/mesaj.php';
    require_once '../../settings/code/mesaj.php';
 ?>
      <div class="nk-sidebar">           
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Navigation</li>
                <li>
                    <a href="index.php" aria-expanded="false">
                        <i class="mdi mdi-home"></i><span class="nav-text">Ana Səhifə</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-cogs"></i><span class="nav-text">Nizamlamalar</span></a>
                    <ul aria-expanded="false">
                        <li><a href="umumi-nizam.php">Ümumi</a></li>
                        <li><a href="elaqe-nizam.php">Əlaqə</a></li>
                        <li><a href="sosial-nizam.php">Sosial</a></li>
                    </ul>
                </li>
                <li>
                    <a href="haqqinda.php" aria-expanded="false">
                        <i class="mdi mdi-information-outline"></i><span class="nav-text">Haqqında</span>
                    </a>
                </li>
                <li>
                    <a href="slider.php" aria-expanded="false">
                        <i class="fas fa-image"></i><span class="nav-text">Slider</span>
                    </a>
                </li>
                <li>
                    <a href="yemekler.php" aria-expanded="false">
                        <i class="mdi mdi-food-fork-drink"></i><span class="nav-text">Yeməklər</span>
                    </a>
                </li>
              
<li>
                    <a href="kateqoriya.php" aria-expanded="false">
                        <i class="mdi mdi-tooltip-edit"></i><span class="nav-text">Kateqoriyalar</span>
                    </a>
                </li>
               
                    <?php 
                            if ($x['status']=='gozleme') {
                               
                              ?> <li>
                                <a href="mesaj.php" aria-expanded="false">

                        <i class="fa fa-comments" aria-hidden="true"></i><span class="nav-text">Mesajınız Var!! 
                    </a>
                </li>
                          <?php }else{?>
                            <li>
                    <a href="mesaj.php" aria-expanded="false">

                        <i class="fa fa-comments" aria-hidden="true"></i><span class="nav-text">Mesajlar  
                    </a>
                    </li>
                <?php } ?>
                
                 
            </ul>
        </div>
    </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
<div class="main-footer"> 
                    
                    <div class="one">
                        <div class="one-1">
                            <h4>HỆ THỐNG CỬA HÀNG LAPTOP LHL</h4><br>
                        <div class="one12">
                            <?php
                                $sql_chinhanh = "SELECT * FROM tbl_chinhanh ORDER BY id_chinhanh ASC";
                                $query_chinhanh = mysqli_query($mysqli,$sql_chinhanh);   
                                while($row_chinhanh= mysqli_fetch_array($query_chinhanh)){     
                            ?>
                            <p> 
                                <?php echo $row_chinhanh['chinhanh']?> <br>
                                
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                        $sql_tenchinhsach = "SELECT * FROM tbl_tenchinhsach ORDER BY id_tenchinhsach ASC";
                        $query_tenchinhsach = mysqli_query($mysqli,$sql_tenchinhsach);
                        
                    ?>
                        <div class="one-1">
                        <H4>CHÍNH SÁCH</H4><br><br>
                        <div class="one12">
                        <ul class="one13">
                            <?php
                                while($row_tenchinhsach= mysqli_fetch_array($query_tenchinhsach)){
                            ?>
                            <!-- <li><a href="#" title="Chính sách sử dụng website"> Chính sách sử dụng website </a> </li><br> -->
                            <li><a href="./index.php?quanly=chinhsach&id=<?php echo $row_tenchinhsach['id_tenchinhsach'] ?>"><?php echo $row_tenchinhsach['tenchinhsach'] ?></a></li><br>
                            <?php } ?>
                        </ul>
                        </div>
                     </div>
                        <div class="one-1">
                            <H4>THÔNG TIN LIÊN HỆ </H4><br><br>
                            <div>
                                <?php
                                    $sql_lienhe = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe ASC";
                                    $query_lienhe = mysqli_query($mysqli,$sql_lienhe);   
                                    while($row_lienhe= mysqli_fetch_array($query_lienhe)){     
                                ?>
                                <ul class="one12">
                                    <li><?php echo $row_lienhe['lienhe']?></li>
                                    
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                     <div class="one-1">
                        <div class="one-footer">
                            <H4>THEO DÕI CHÚNG TÔI Ở ĐỊA CHỈ MXH</H4><br><br>
                            <a href="https://www.facebook.com/huynhnhatlinh1610" >
                                <img src="https://cdn.tgdd.vn/2020/03/GameApp/Facebook-200x200.jpg">   
                             </a>
                            <a href="https://www.instagram.com/accounts/login/">
                                <img src="http://store-images.s-microsoft.com/image/apps.31997.13510798887167234.6cd52261-a276-49cf-9b6b-9ef8491fb799.30e70ce4-33c5-43d6-9af1-491fe4679377">
                            </a>
                        <div class="one-footer1"> 
                            <a href="http://online.gov.vn/Home/WebDetails/78935?AspxAutoDetectCookieSupport=1">
                                <img src="http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png">
                            </a>
                        </div>
                        </div>     
                    </div>
                </div>
                </div>
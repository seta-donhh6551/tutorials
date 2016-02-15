<?php $this->load->view("menu"); ?>
<div id="content">
    <div id="content_left">
        <?php $this->load->view("homes/study"); ?>
        <?php $this->load->view("layouts/left-menu"); ?>
        <!-- student here -->
        <?php $this->load->view("homes/students"); ?>
        <!-- student here -->
        <div id="content_left_end">
            <?php $this->load->view("homes/review"); ?>
        </div>
    </div>
    <div id="content_center">
        <div id="content_center_top">
            <div id="content_center_top_title"> 
                <!--h1>BÀI VIẾT MỚI</h1-->
                <h1><a href="<?php echo base_url(); ?>html-css.html" title="HTML CSS">HTML CSS</a></h1>
            </div>
            <div id="content_center_top_detail">
                <?php
                if (isset($hphphtml)) {
                    echo "<img src='" . base_url() . "uploads/cate/thumb/$hphphtml[cate_images]' alt='" . $hphphtml['cate_name'] . "' title='" . $hphphtml['cate_name'] . "' class='basicimg' />";
                    echo "<h2><a href='" . base_url() . "html-css.html' title='" . $hphphtml['cate_name'] . "'>" . $hphphtml['cate_name'] . "</a></h2>";
                    echo "<div class='post_info'>" . cut_str($hphphtml['cate_ext'], 0, 250) . "</div>";
                }
                ?>
                <div style="clear:left;"></div>
                <ul class="list_posts" style="padding-left:33px">
                    <?php
                    if (isset($htmlcss)) {
                        foreach ($htmlcss as $html) {
                            echo "<li><a href='" . base_url() . "html-css/" . $html['post_title_rewrite'] . "-" . $html['post_id'] . ".html' title='" . $html['post_title'] . "'>" . $html['post_title'] . "</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="cls"></div>
        <div id="content_center_mid">
            <div class="content_center_lagre_top">
                <h1><a href="<?php echo base_url(); ?>php-can-ban.html" title="PHP CĂN BẢN">PHP CĂN BẢN</a></h1>
                <div style="padding:5px 0px;">
                    <?php
                    if (isset($hphpbasic)) {
                        echo "<img src='" . base_url() . "uploads/cate/thumb/$hphpbasic[cate_images]' alt='" . $hphpbasic['cate_name'] . "' title='" . $hphpbasic['cate_name'] . "' class='basicimg' />";
                        echo "<h2><a href='" . base_url() . "php-can-ban.html' title='" . $hphpbasic['cate_name'] . "'>" . $hphpbasic['cate_name'] . "</a></h2>";
                        echo "<div class='post_info'>" . cut_str($hphpbasic['cate_ext'], 0, 250) . "</div>";
                    }
                    ?>
                </div>
                <div class="cls"></div>
            </div>
            <div class="cls"></div>
            <div class="content_center_lagre_mid">
                <ul class="list_posts">
                    <?php
                    if (isset($phpbasic)) {
                        foreach ($phpbasic as $basic) {
                            echo "<li><a href='" . base_url() . "php-can-ban/" . $basic['post_title_rewrite'] . "-" . $basic['post_id'] . ".html' title='" . $basic['post_title'] . "'>" . $basic['post_title'] . "</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="content_center_lagre_bottom"></div>
        </div>
        <div id="content_center_lagre">
            <div class="content_center_lagre_top">
                <h1><a href="<?php echo base_url(); ?>php-nang-cao.html" title="PHP NÂNG CAO">PHP NÂNG CAO</a></h1>
                <div style="padding:5px 0px;">
                    <?php
                    if (isset($hphpadvan)) {
                        echo "<img src='" . base_url() . "uploads/cate/thumb/$hphpadvan[cate_images]' alt='" . $hphpadvan['cate_name'] . "' title='" . $hphpadvan['cate_name'] . "' class='basicimg' />";
                        echo "<h2><a href='" . base_url() . "php-nang-cao.html' title='" . $hphpadvan['cate_name'] . "'>" . $hphpadvan['cate_name'] . "</a></h2>";
                        echo "<div class='post_info'>" . cut_str($hphpadvan['cate_ext'], 0, 250) . "</div>";
                    }
                    ?>
                    <div class="cls"></div>
                </div>
            </div>
            <div class="cls"></div>
            <div class="content_center_lagre_mid">
                <ul class="list_posts">
                    <?php
                    if (isset($advance)) {
                        foreach ($advance as $phpadv) {
                            echo "<li><a href='" . base_url() . "php-nang-cao/" . $phpadv['post_title_rewrite'] . "-" . $phpadv['post_id'] . ".html' title='" . $phpadv['post_title'] . "'>" . $phpadv['post_title'] . "</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="content_center_lagre_bottom"></div>
        </div>
    </div>
    <div id="content_right"> 
        <div class="content_right_end">
            <div class="edu_bottom">
                <div class="edu_l"> <a href='<?php echo base_url() ?>hoc-php.html'><img src="<?php echo base_url() ?>public/images/hoc-php.png" alt="Làm sao để học PHP tốt?" title="Làm sao để học PHP tốt?" /></a> </div>
                <div class="edu_r padingtop">
                    <h2 class="hocphp"><a href="<?php echo base_url() ?>hoc-php.html" title="Học PHP ở đâu tốt nhất?">Học PHP tốt nhất?</a></h2>
                    <p style="color:#333">Làm sao để học PHP tốt?</p>
                    <p style="color:#333">Học PHP ở đâu tốt nhất Hà Nội?</p>
                    <p style="color:#333">Học lập trình PHP tại Hà Nội</p>
                </div>
            </div>
        </div>
        <div class="cls"></div>
        <div class="content_right_lagre mgtop">
            <h1><a href="<?php echo base_url(); ?>yii2-framework.html" title="YII2 FRAMEWORK">YII2 FRAMEWORK</a></h1>
            <?php
            if (isset($hphpframe)) {
                echo "<img src='" . base_url() . "uploads/cate/thumb/$hphpframe[cate_images]' alt='" . $hphpframe['cate_name'] . "' title='" . $hphpframe['cate_name'] . "' class='basicimg' />";
                echo "<h2><a href='" . base_url() . "yii2-framework.html' title='" . $hphpframe['cate_name'] . "'>" . $hphpframe['cate_name'] . "</a></h2>";
                echo "<div style='padding:5px 7px; 5px 0px'>" . cut_str($hphpframe['cate_ext'], 0, 250) . "</div>";
            }
            ?>
            <div class="cls"></div>
            <ul class="list_posts">
                <?php
                if (isset($phpfw)) {
                    //echo "<pre>".print_r($newest)."</pre>";die();
                    foreach ($phpfw as $code) {
                        echo "<li><a href='".base_url()."yii2-framework/".$code['post_title_rewrite']."-".$code['post_id'].".html' title='" . $code['post_title'] . "'>" . $code['post_title'] . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="content_right_lagre mgtop" style="padding-left:30px">
            <h2 style="font-size:15px;color:#fb8701;margin-bottom:5px">OFFLINE PHP TEAM</h2>
            <iframe width="300" height="169" src="http://www.youtube.com/embed/hK8D1ADBrLc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="content_right_lagre">
            <h1><a href="<?php echo base_url(); ?>php-training.html" title="BÀI TẬP PHP">PHP TRAINING</a></h1>
            <?php
            if (isset($hphptrain)) {
                echo "<img src='" . base_url() . "uploads/cate/thumb/$hphptrain[cate_images]' alt='" . $hphptrain['cate_name'] . "' title='" . $hphptrain['cate_name'] . "' class='basicimg' />";
                echo "<h2><a href='" . base_url() . "php-training.html'>" . $hphptrain['cate_name'] . "</a></h2>";
                echo "<div style='padding:5px 0px;'>" . cut_str($hphptrain['cate_ext'], 0, 250) . "</div>";
            }
            ?>
            <div class="cls"></div>
            <ul class="list_posts">
                <?php
                if (isset($training)) {
                    //echo "<pre>".print_r($newest)."</pre>";die();
                    foreach ($training as $train) {
                        echo "<li><a href='" . base_url() . "php-training/" . $train['post_title_rewrite'] . "-" . $train['post_id'] . ".html' title='" . $train['post_title'] . "'>" . $train['post_title'] . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="content_right_end" style="padding-left:20px">
            <object style="border:1px solid #DDD; overflow: hidden; width: 320px; height: 250px;"  data="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/hocthietkewebsite&amp;width=320&amp;height=250&amp;connections=10&amp;header=false">
            </object>
        </div>
        <div class="content_right_end">
            <div class="cls" style="border-bottom:1px solid #DDD;width:300px;margin:0px auto"></div>
            <div class="edu_bottom"> <img src="<?php echo base_url() ?>public/images/phone.png" alt="Liên hệ học PHP" title="Liên hệ học PHP" />
                <h3 class="sup">Liên hệ</h3>
                <p>Yahoo:<a href='ymsgr:sendim?northstar189&amp;m=hello' title='Liên hệ'>&nbsp;<span style="color:#fb8701">northstar189</span></a></p>
                <p>Phone: 0974.136.509</p>
            </div>
        </div>
    </div>
</div>
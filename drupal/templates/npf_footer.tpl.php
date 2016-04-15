<div class="footer blueBg">
    <div class="container">
        <div class="left">
            <a href="<?= $base_path ?>" class="footerLogo left desktop"><img src="<?= $base_path . path_to_theme() ?>/images/footer-logo.png" alt="National Parkinson's Foundation"></a>
            <ul class="social left">
                <li><a target="_blank" href="https://www.facebook.com/parkinsondotorg"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/ParkinsonDotOrg"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/NPFGuru"><i class="fa fa-youtube"></i></a></li>
                <li><a target="_blank" href="https://instagram.com/parkinsondotorg"><i class="fa fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://www.pinterest.com/parkinsondotorg"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a target="_blank" href="https://plus.google.com/103309421803035035908/posts"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <?php
                $footerBlurb = module_invoke('block','block_view','45');
                print render($footerBlurb['content']);    
            ?> 
            
        </div>
        <!-- /.left -->
        <div class="right desktop">
            <a target="_blank" href="http://give.org/charity-reviews/national/health/national-parkinson-foundation-in-miami-fl-570"><img class="bbb" src="<?= $base_path . path_to_theme() ?>/images/bbbLogo.png" /></a>
            <a target="_blank" href="https://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=6306#.VUkQ4tNViko"><img class="navigator" src="<?= $base_path . path_to_theme() ?>/images/navigatorLogo.png" /></a>
            <a target="_blank" href="http://www.guidestar.org/organizations/59-0968031/national-parkinson-foundation.aspx"><img class="guidestar" src="<?= $base_path . path_to_theme() ?>/images/guidestarLogo.png" /></a>
        </div><!--/.right-->
        <ul class="footerNav">
            <li>
                <?php
                    $footer1 = module_invoke('block','block_view','37');
                    print render($footer1['content']);    
                ?> 
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer2 = module_invoke('block','block_view','38');
                    print render($footer2['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer3 = module_invoke('block','block_view','39');
                    print render($footer3['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer4 = module_invoke('block','block_view','40');
                    print render($footer4['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer5 = module_invoke('block','block_view','41');
                    print render($footer5['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer6 = module_invoke('block','block_view','42');
                    print render($footer6['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer7 = module_invoke('block','block_view','43');
                    print render($footer7['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footer8 = module_invoke('block','block_view','47');
                    print render($footer8['content']);    
                ?>
                
            </li>
            <li class="border"></li>
            <li>
                <?php
                    $footerCopy = module_invoke('block','block_view','44');
                    print render($footerCopy['content']);    
                ?>
                
            </li>
        </ul>
         <a href="<?= $base_path ?>" class="footerLogo left mobile"><img src="<?= $base_path . path_to_theme() ?>/images/footer-logo.png" alt="National Parkinson's Foundation"></a>
        <div class="mobile bottomLogos">
            <a target="_blank" href="http://give.org/charity-reviews/national/health/national-parkinson-foundation-in-miami-fl-570"><img class="bbb" src="<?= $base_path . path_to_theme() ?>/images/bbbLogo.png" /></a>
            <a target="_blank" href="https://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=6306#.VUkQ4tNViko"><img class="navigator" src="<?= $base_path . path_to_theme() ?>/images/navigatorLogo.png" /></a>
            <a target="_blank" href="http://www.guidestar.org/organizations/59-0968031/national-parkinson-foundation.aspx"><img class="guidestar" src="<?= $base_path . path_to_theme() ?>/images/guidestarLogo.png" /></a>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.footer blueBg -->
<img id="dev" src="<?= $base_path . path_to_theme() ?>/images/dev.jpg" />
<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="header container">
  <div class="logo left">
    <a href="<?= $base_path ?>" title="Logo"><img src="<?= $base_path . path_to_theme() ?>/images/npfLogo-blue.png" alt="National Parkinson Foundation" /></a>
  </div><!--./logo -->
  <div class="right utility">
    <ul class="left desktop">
      <li>
        <?php
              $espanol = module_invoke('block','block_view','31');
              print render($espanol['content']);    
        ?>        
      </li>
      <li class="separator"><img src="<?= $base_path . path_to_theme() ?>/images/utility-nav-bg.gif" /></li>
      <li>
        <?php
              $yourArea = module_invoke('block','block_view','32');
              print render($yourArea['content']);    
        ?>         
      </li>          
      <li class="separator"><img src="<?= $base_path . path_to_theme() ?>/images/utility-nav-bg.gif" /></li>
      <li>
        <?php
              $signIn = module_invoke('block','block_view','33');
              print render($signIn['content']);    
        ?>        
      </li>
      <li class="separator"><img src="<?= $base_path . path_to_theme() ?>/images/utility-nav-bg.gif" /></li>
      <li>
        <?php
              $eCart = module_invoke('block','block_view','34');
              print render($eCart['content']);    
        ?>          
      </li>
      <li class="separator"><img src="<?= $base_path . path_to_theme() ?>/images/utility-nav-bg.gif" /></li>
      <li class="search">
        <a href="javascript:void(0);">Search</a>
      </li>
      <li class="separator"><img src="<?= $base_path . path_to_theme() ?>/images/utility-nav-bg.gif" /></li>
    </ul>
    <div class="mobile mobileContainer right">
      <div class="mobileToggle right">
          <span></span>
          <span></span>
          <span></span>
          <i class="fa fa-times"></i>
      </div>
      <!-- /.mobileToggle -->
      <div class="mobileSearch right">
          <div class="mobileSearchIcon search">            
            <a href="javascript:void(0);"><i class="fa fa-search"></i><i class="fa fa-times"></i></a>
          </div>
          <!-- /.mobileSearchIcon -->
      </div>
      <!-- /.mobileSearch -->
      <ul class="mobileUtility right">
          <li>
            <?php
              $signIn = module_invoke('block','block_view','33');
              print render($signIn['content']);    
            ?> 
          </li>
          <li>
            <a href="/find-help/helpline">Call Us</a>
          </li>
      </ul>
      <!-- /.mobileUtility -->
    </div>
    <!-- /.mobile mobile_container -->
    <a class="helpLine desktop" href="/find-help/helpline">Call Our<br />
    <strong>HELPLINE</strong><br />
    1-800-4PD-INFO</a>    
    <ul class="donateLinksWrap desktop">
      <li>
        <a href="https://secure3.convio.net/prkorg/site/SPageNavigator/donate_form.html" class="donate button orange">DONATE</a>
        <div class="donationLinks">
          <div class="left">
            <h3>Your gift can help make life better for people with Parkinson's</h3>
          </div>
          <div class="right">
            <?php
              $donateLinks = module_invoke('block','block_view','36');
              print render($donateLinks['content']);    
            ?>             
          </div>
        </div>
      </li>
    </ul>
    <div class="searchBox">
      <form action="/search/node" method="post" >
        <input type="text" name="keys" />
        <div class="searchSubmit">
          <i class="fa fa-search"></i>
          <input type="submit" name="op" class="button lightBlueBg searchButton" value="Search" />
        </div>
        <input type="hidden" value="<?php print drupal_get_token('search_form'); ?>" name="form_token" />
        <input type="hidden" value="search_form" id="edit-search-form" name="form_id" />
      </form>
    </div><!--/.searchBox-->
    <ul class="donateLinksWrap mobile">
      <li>
        <a href="javascript:void(0);" id="donateShow" class="donate button orange">DONATE</a>
        <div id="donateLinkShow" class="donationLinks">
          <div class="left">
            <h3>Your gift can help make life better for people with Parkinson's</h3>
          </div>
          <div class="right">
            <?php
              $donateLinks = module_invoke('block','block_view','36');
              print render($donateLinks['content']);    
            ?> 
          </div>
        </div>
      </li>
    </ul>    
  </div><!--/.utility-->
  <div class="clear"></div>
</div><!--/.header-->
<div class="navigation blueBg">
  <ul class="mainNav">
      <li><a href="<?= $base_path ?>understanding-parkinsons" class="understanding">Understanding Parkinson's</a>
          <div class="subnav container">
            <?php
              $understandLeft = module_invoke('block','block_view','11');
              print render($understandLeft['content']);    
            ?>
            <?php
              $understandMid = module_invoke('block','block_view','12');
              print render($understandMid['content']);    
            ?>   
              <div class="subnavBlurb right">
                  <div class="left">
                      <h2><a href="<?= $base_path ?>understanding-parkinsons">Understanding Parkinson's</a></h2>
                      <?php
                        $understandRight = module_invoke('block','block_view','13');
                        print render($understandRight['content']);    
                      ?>
                  </div>
                  <div class="subnavBlurbImg">
                      <a href="<?= $base_path ?>understanding-parkinsons">
                        <?php
                          $understandImg = module_invoke('block','block_view','14');
                          print render($understandImg['content']);
                        ?>
                      </a>
                  </div>
              </div><!--/.subnavBlurb-->
          </div>
      </li>
      <li><a href="<?= $base_path ?>find-help" class="findHelp">Find Help</a>
          <div class="subnav container">
            <?php
              $helpLeft = module_invoke('block','block_view','15');
              print render($helpLeft['content']);    
            ?>
            <?php
              $helpMid = module_invoke('block','block_view','16');
              print render($helpMid['content']);    
            ?>     
              <div class="subnavBlurb right">
                  <div class="left">
                      <h2><a href="<?= $base_path ?>find-help">Find Help</a></h2>
                      <?php
                        $helpRight = module_invoke('block','block_view','17');
                        print render($helpRight['content']);    
                      ?> 
                  </div>
                  <div class="subnavBlurbImg">
                      <a href="<?= $base_path ?>find-help">
                        <?php
                          $helpImg = module_invoke('block','block_view','18');
                          print render($helpImg['content']);    
                        ?>  
                      </a>
                  </div>
              </div><!--/.subnavBlurb-->
          </div>
      </li>
      <li><a href="<?= $base_path ?>expert-care-research" class="expertCare">Expert Care & Research</a>
          <div class="subnav container">
              <?php
                $researchLeft = module_invoke('block','block_view','19');
                print render($researchLeft['content']);    
              ?>
              <?php
                $researchMid = module_invoke('block','block_view','20');
                print render($researchMid['content']);    
              ?>        
              <div class="subnavBlurb right">
                  <div class="left">
                      <h2><a href="<?= $base_path ?>expert-care-research">Expert Care &amp; Research</a></h2>
                      <?php
                        $researchRight = module_invoke('block','block_view','21');
                        print render($researchRight['content']);    
                      ?>
                  </div>
                  <div class="subnavBlurbImg">
                      <a href="<?= $base_path ?>expert-care-research">
                        <?php
                        $researchRight = module_invoke('block','block_view','22');
                        print render($researchRight['content']);    
                      ?>
                      </a>
                  </div>
              </div><!--/.subnavBlurb-->
          </div>
      </li>
      <li><a href="<?= $base_path ?>get-involved" class="getInvolved">Get Involved</a>
          <div class="subnav container">
              <?php
                $getLeft = module_invoke('block','block_view','23');
                print render($getLeft['content']);    
              ?>
              <?php
                $getMid = module_invoke('block','block_view','24');
                print render($getMid['content']);    
              ?>
              <div class="subnavBlurb right">
                  <div class="left">
                      <h2><a href="<?= $base_path ?>get-involved">Get Involved</a></h2>
                      <?php
                        $getMid = module_invoke('block','block_view','25');
                        print render($getMid['content']);    
                      ?> 
                  </div>
                  <div class="subnavBlurbImg">
                      <a href="<?= $base_path ?>get-involved">
                        <?php
                          $getImg = module_invoke('block','block_view','26');
                          print render($getImg['content']);    
                        ?> 
                      </a>
                  </div>
              </div><!--/.subnavBlurb-->
          </div>
      </li>
      <li><a href="<?= $base_path ?>our-impact" class="ourImpact">Our Impact</a>
          <div class="subnav container">
              <?php
                $impactLeft = module_invoke('block','block_view','27');
                print render($impactLeft['content']);    
              ?>
              <?php
                $impactMid = module_invoke('block','block_view','28');
                print render($impactMid['content']);    
              ?>
              <div class="subnavBlurb right">
                  <div class="left">
                      <h2><a href="<?= $base_path ?>our-impact">Our Impact</a></h2>
                      <?php
                        $impactMid = module_invoke('block','block_view','29');
                        print render($impactMid['content']);    
                      ?>
                  </div>
                  <div class="subnavBlurbImg">
                      <a href="<?= $base_path ?>our-impact">
                        <?php
                          $impactImg = module_invoke('block','block_view','30');
                          print render($impactImg['content']);    
                        ?> 
                      </a>
                  </div>
              </div><!--/.subnavBlurb-->
          </div>
      </li>
      <li class="mobile"><a href="<?= $base_path ?>?q=espanol">Espa&ntilde;ol</a></li>
      <li class="mobile"><a href="<?= $base_path ?>?q=find-help/resources-in-your-community">In Your Area</a></li>
      <li class="mobile"><a href="https://secure3.convio.net/prkorg/site/Ecommerce?store_id=2162">NPF Shop</a></li>
  </ul>
</div><!--.navigation-->
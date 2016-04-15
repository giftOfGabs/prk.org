<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
<div class="landing">
    <?php if($title): ?>
    <div class="intro landing">
         <div class="fifty left">
          <div class="landingBlurb">
            <h1><?= $title; ?></h1>
            <p>
            <?= $node->field_landing_intro['und'][0]['value']; ?>
            </p>
          </div>
          <!-- /.landingBlurb -->
         </div>
        <!--/.fifty-->
        <div class="fifty left featuredImage">
            <?php
                $uri = 'public://';
                $path= file_create_url($uri);
            ?>
            <img src="<?= $path .$node->field_featured_image['und'][0]['filename']; ?>" />
        </div><!--/.fifty-->
    </div>
    <!-- /.intro -->
    <?php endif; ?>
    <div class="blueBg">
        <div class="breadcrumbs container">
            <ul class="left">
                <li><a class="smaller" href="javascript:void(0);">Make Text Smaller</a></li>
                <li><a class="larger" href="javascript:void(0);">Make Text Larger</a></li>
            </ul>
            <div class="right">
                <?= $breadcrumb ?>
            </div>
        </div><!-- /.breadcrumbs-->
    </div><!--/.blueBg-->
    <ul class="contentBoxes">   
    <!--   DO NOT LINE BREAK THE <LI> ELEMENTS BELOW BECAUSE THIS WILL BREAK THE LAYOUT -->
    <?php if(isset($node->field_content_block_1[LANGUAGE_NONE])): ?>            
            <li class="contentBox noBorderLeft">
                <div class="blockContent">
                    <?= $node->field_content_block_1[LANGUAGE_NONE][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
                             
    <?php endif; ?>
    <?php if(isset($node->field_content_block_2[LANGUAGE_NONE])): ?>
        <li class="contentBox">
            <div class="blockContent">
                <?= $node->field_content_block_2[LANGUAGE_NONE][0]['value'];?>
            </div><!--/.blockContent-->
        </li>
    <?php endif; ?>
    <?php if(isset($node->field_content_block_3[LANGUAGE_NONE])): ?>
        <li class="contentBox">
            <div class="blockContent">
                <?= $node->field_content_block_3[LANGUAGE_NONE][0]['value'];?>
            </div><!--/.blockContent-->
        </li>
    <?php endif; ?>
    <?php 
        if(!empty($node->field_content_block_4[LANGUAGE_NONE]) && !empty($node->field_content_block_5[LANGUAGE_NONE]) && !empty($node->field_content_block_6[LANGUAGE_NONE])): ?>
           <!--show all 4,5,6-->
            <li class="contentBox noBorderLeft"><div class="blockContent"><?= $node->field_content_block_4[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox"><div class="blockContent"><?= $node->field_content_block_5[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox"><div class="blockContent"><?= $node->field_content_block_6[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
    <?php endif; ?>      
        
    <?php 
        if(!empty($node->field_content_block_4[LANGUAGE_NONE]) && !empty($node->field_content_block_5[LANGUAGE_NONE]) && empty($node->field_content_block_6[LANGUAGE_NONE])): ?>
        <!--just 6 empty-->
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom"><div class="blockContent"><?= $node->field_content_block_4[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox noBorderBottom fifth"><div class="blockContent"><?= $node->field_content_block_5[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
     <?php endif; ?>
    
    <?php 
        if(!empty($node->field_content_block_4[LANGUAGE_NONE]) && empty($node->field_content_block_5[LANGUAGE_NONE]) && empty($node->field_content_block_6[LANGUAGE_NONE])): ?>
        <!--if both 5 & 6 are empty-->
        <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
        <li class="contentBox noBorderBottom"><div class="blockContent"><?= $node->field_content_block_4[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
        <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
    <?php endif; ?>    

    <?php 
        if(!empty($node->field_content_block_7[LANGUAGE_NONE]) && !empty($node->field_content_block_8[LANGUAGE_NONE]) && !empty($node->field_content_block_9[LANGUAGE_NONE])): ?>
           <!--show all 7,8,9-->
            <li class="contentBox noBorderLeft"><div class="blockContent"><?= $node->field_content_block_7[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox"><div class="blockContent"><?= $node->field_content_block_8[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox ninth"><div class="blockContent"><?= $node->field_content_block_9[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
    <?php endif; ?>      
        
    <?php 
        if(!empty($node->field_content_block_7[LANGUAGE_NONE]) && !empty($node->field_content_block_8[LANGUAGE_NONE]) && empty($node->field_content_block_9[LANGUAGE_NONE])): ?>
        <!--just 9 empty-->
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom"><div class="blockContent"><?= $node->field_content_block_7[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox noBorderBottom ninth"><div class="blockContent"><?= $node->field_content_block_8[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
     <?php endif; ?>
    
    <?php 
        if(!empty($node->field_content_block_7[LANGUAGE_NONE]) && empty($node->field_content_block_8[LANGUAGE_NONE]) && empty($node->field_content_block_9[LANGUAGE_NONE])): ?>
        <!--if both 8 & 9 are empty-->
        <li class="empty contentBox noBorderBottom solo"><div class="blockContent"></div></li>
        <li class="contentBox noBorderBottom solo"><div class="blockContent"><?= $node->field_content_block_7[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
        <li class="empty contentBox noBorderBottom solo"><div class="blockContent"></div></li>
    <?php endif; ?>  
    <?php 
        if(!empty($node->field_content_block_10[LANGUAGE_NONE]) && !empty($node->field_content_block_11[LANGUAGE_NONE]) && !empty($node->field_content_block_12[LANGUAGE_NONE])): ?>
           <!--show all-->
            <li class="contentBox noBorderLeft"><div class="blockContent"><?= $node->field_content_block_10[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox"><div class="blockContent"><?= $node->field_content_block_11[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox"><div class="blockContent"><?= $node->field_content_block_12[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
    <?php endif; ?>      
        
    <?php 
        if(!empty($node->field_content_block_10[LANGUAGE_NONE]) && !empty($node->field_content_block_11[LANGUAGE_NONE]) && empty($node->field_content_block_12[LANGUAGE_NONE])): ?>
        <!--just 12 empty-->
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom"><div class="blockContent"><?= $node->field_content_block_10[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="contentBox noBorderBottom eleventh"><div class="blockContent"><?= $node->field_content_block_11[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
            <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
     <?php endif; ?>
    
    <?php 
        if(!empty($node->field_content_block_10[LANGUAGE_NONE]) && empty($node->field_content_block_11[LANGUAGE_NONE]) && empty($node->field_content_block_12[LANGUAGE_NONE])): ?>
        <!--if both 11 & 12 are empty-->
        <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
        <li class="contentBox noBorderBottom"><div class="blockContent"><?= $node->field_content_block_10[LANGUAGE_NONE][0]['value'];?></div><!--/.blockContent--></li>
        <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
    <?php endif; ?>        
    </ul><!--/.contentBoxes-->
    <?php
        if(!empty($node->field_ad_area_1_content[LANGUAGE_NONE]) && !empty($node->field_ad_area_1_image[LANGUAGE_NONE])): ?>
        <!--make sure first ad contentn and image are filled in to show-->
        <div class="adSection left blueBg">
            <div class="left fiftyFive">
              <div class="adContent">
                <?= $node->field_ad_area_1_content['und'][0]['value'];?>
              </div><!--/.adContent-->
            </div>
            <!-- /.fiftyFive -->
           <div class="adImage left fourtyFive">
              <img src="<?= $path .$node->field_ad_area_1_image['und'][0]['filename']; ?>" />
            </div>
            <!-- /.adImage -->
        </div>
        <!-- /.adSection -->
    <?php endif; ?>  
    <?php
        if(!empty($node->field_ad_area_2_content[LANGUAGE_NONE]) && !empty($node->field_ad_area_2_image[LANGUAGE_NONE])): ?>
        <div class="adSection left skyBlueBg">
            <div class="right fiftyFive">
              <div class="adContent">
                <?= $node->field_ad_area_2_content['und'][0]['value'];?>
              </div><!--/.adContent-->
            </div>
            <!-- /.fiftyFive -->
            <div class="adImage left fourtyFive">
              <img src="<?= $path .$node->field_ad_area_2_image['und'][0]['filename']; ?>" />
            </div>
            <!-- /.adImage -->
        </div>
        <!-- /.adSection -->
    <?php endif; ?>  
</div>

<?php include(path_to_theme().'/templates/npf_pre_footer.tpl.php'); ?>
<!-- /.preFooter -->
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>

<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
<div class="waysToGive">
    <?php if($title): ?>
    <div class="intro landing">
        <div class="fifty left">
            <div class="landingBlurb">
                <h1><?= $title; ?></h1>
                <p><?= $node->field_wtg_intro['und'][0]['value']; ?></p>
            </div>
            <!-- /.landingBlurb -->
        </div>
        <!--/.fifty-->
        <div class="fifty left featuredImage">
            <?php
                $uri = 'public://';
                $path= file_create_url($uri);
            ?>
            <img src="<?= $path .$node->field_wtg_image['und'][0]['filename']; ?>" />
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
    <ul class="contentBoxes wtg">
        <?php if(isset($node->field_wtg_block_1[LANGUAGE_NONE])): ?>            
            <li class="contentBox noBorderLeft">
                <img src="<?= $path .$node->field_wtg_block_img_1['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_1['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>                             
        <?php endif; ?>
        <?php if(isset($node->field_wtg_block_2[LANGUAGE_NONE])): ?>
            <li class="contentBox">
                <img src="<?= $path .$node->field_wtg_block_img_2['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_2['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
        <?php endif; ?>
        <?php if(isset($node->field_wtg_block_3[LANGUAGE_NONE])): ?>
            <li class="contentBox">
                <img src="<?= $path .$node->field_wtg_block_img_3['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_3['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
        <?php endif; ?>
        <?php 
            if(!empty($node->field_wtg_block_4[LANGUAGE_NONE]) && !empty($node->field_wtg_block_5[LANGUAGE_NONE]) && !empty($node->field_wtg_block_6[LANGUAGE_NONE])): ?>
               <!--show all 4,5,6-->
                <li class="contentBox noBorderLeft">
                    <img src="<?= $path .$node->field_wtg_block_img_4['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_4['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox">
                    <img src="<?= $path .$node->field_wtg_block_img_5['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_5['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox">
                    <img src="<?= $path .$node->field_wtg_block_img_6['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_6['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
        <?php endif; ?>   
        <?php 
            if(!empty($node->field_wtg_block_4[LANGUAGE_NONE]) && !empty($node->field_wtg_block_5[LANGUAGE_NONE]) && empty($node->field_wtg_block_6[LANGUAGE_NONE])): ?>
                <!--just 6 empty-->
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
                <li class="contentBox noBorderBottom">
                    <img src="<?= $path .$node->field_wtg_block_img_4['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_4['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox noBorderBottom fifth">
                    <img src="<?= $path .$node->field_wtg_block_img_5['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_5['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
         <?php endif; ?>        
        <?php 
            if(!empty($node->field_wtg_block_4[LANGUAGE_NONE]) && empty($node->field_wtg_block_5[LANGUAGE_NONE]) && empty($node->field_wtg_block_6[LANGUAGE_NONE])): ?>
            <!--if both 5 & 6 are empty-->
            <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom">
                <img src="<?= $path .$node->field_wtg_block_img_4['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_4['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
            <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
        <?php endif; ?>    

        <?php 
            if(!empty($node->field_wtg_block_7[LANGUAGE_NONE]) && !empty($node->field_wtg_block_8[LANGUAGE_NONE]) && !empty($node->field_wtg_block_9[LANGUAGE_NONE])): ?>
               <!--show all 7,8,9-->
                <li class="contentBox noBorderLeft">
                    <img src="<?= $path .$node->field_wtg_block_img_7['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_7['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox">
                    <img src="<?= $path .$node->field_wtg_block_img_8['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_8['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox ninth">
                    <img src="<?= $path .$node->field_wtg_block_img_9['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_9['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
        <?php endif; ?>      
        <?php 
            if(!empty($node->field_wtg_block_7[LANGUAGE_NONE]) && !empty($node->field_wtg_block_8[LANGUAGE_NONE]) && empty($node->field_wtg_block_9[LANGUAGE_NONE])): ?>
            <!--just 9 empty-->
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
                <li class="contentBox noBorderBottom">
                    <img src="<?= $path .$node->field_wtg_block_img_7['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_7['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox noBorderBottom ninth">
                    <img src="<?= $path .$node->field_wtg_block_img_8['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_8['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
        <?php endif; ?>        
        <?php 
            if(!empty($node->field_wtg_block_7[LANGUAGE_NONE]) && empty($node->field_wtg_block_8[LANGUAGE_NONE]) && empty($node->field_wtg_block_9[LANGUAGE_NONE])): ?>
            <!--if both 8 & 9 are empty-->
            <li class="empty contentBox noBorderBottom solo"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom solo">
                <img src="<?= $path .$node->field_wtg_block_img_7['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_7['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
            <li class="empty contentBox noBorderBottom solo"><div class="blockContent"></div></li>
        <?php endif; ?>  
        <?php 
            if(!empty($node->field_wtg_block_10[LANGUAGE_NONE]) && !empty($node->field_wtg_block_11[LANGUAGE_NONE]) && !empty($node->field_wtg_block_12[LANGUAGE_NONE])): ?>
               <!--show all-->
                <li class="contentBox noBorderLeft">
                    <img src="<?= $path .$node->field_wtg_block_10_image['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_10['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox">
                    <img src="<?= $path .$node->field_wtg_block_11_image['und'][0]['filename']; ?>" />
                    <div class="blockContent">
                        <?= $node->field_wtg_block_11['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox">
                    <img src="<?= $path .$node->field_wtg_block_12_image['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_12['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
        <?php endif; ?>      
        <?php 
            if(!empty($node->field_wtg_block_10[LANGUAGE_NONE]) && !empty($node->field_wtg_block_11[LANGUAGE_NONE]) && empty($node->field_wtg_block_12[LANGUAGE_NONE])): ?>
            <!--just 12 empty-->
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
                <li class="contentBox noBorderBottom">
                    <img src="<?= $path .$node->field_wtg_block_10_image['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_10['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="contentBox noBorderBottom eleventh">
                    <img src="<?= $path .$node->field_wtg_block_11_image['und'][0]['filename']; ?>" />
                    <div class="blockContent">                        
                        <?= $node->field_wtg_block_11['und'][0]['value'];?>
                    </div><!--/.blockContent-->
                </li>
                <li class="emptyHalf contentBox noBorderBottom"><div class="blockContent"></div></li>
         <?php endif; ?>
        
        <?php 
            if(!empty($node->field_wtg_block_10[LANGUAGE_NONE]) && empty($node->field_wtg_block_11[LANGUAGE_NONE]) && empty($node->field_wtg_block_12[LANGUAGE_NONE])): ?>
            <!--if both 11 & 12 are empty-->
            <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
            <li class="contentBox noBorderBottom">
                <img src="<?= $path .$node->field_wtg_block_10_image['und'][0]['filename']; ?>" />
                <div class="blockContent">                    
                    <?= $node->field_wtg_block_10['und'][0]['value'];?>
                </div><!--/.blockContent-->
            </li>
            <li class="empty contentBox noBorderBottom"><div class="blockContent"></div></li>
        <?php endif; ?>
    </ul><!--/.contentBoxes-->
</div>    
<?php include(path_to_theme().'/templates/npf_pre_footer.tpl.php'); ?>
<!-- /.preFooter -->
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>

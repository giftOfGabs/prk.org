<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
    <?php if($title): ?>
    <div class="intro">
        <h1 class="container"><?= $title; ?></h1>
        <?php if(isset($node->field_intro[LANGUAGE_NONE])): ?>
        <p class="container">
        <?= $node->field_intro[LANGUAGE_NONE][0]['value']; ?>
        </p>
        <?php endif; ?>
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
    <div class="mainContent container">
        <div class="right innerContent">
        <?php
            $node = menu_get_object();
            $nid = $node->nid;
            global $user;
            if ($user->uid) {
              echo '<a href="?q=node/'.$nid.'/edit&destination=admin/content" class="editLink">Edit</a>';
            } ?>
            <style type="text/css">
            .innerContent img {
                clear: none;
                display: inherit;
                float: none !important;
                margin: 0;
            }
            .innerContent h2, .innerContent p {
                float: none;
                width: auto;
            }
            .field-name-field-by .field-label {
                font-weight: normal;
            }
            article.node-pd-library .field-name-body, article.node-pd-library .field-name-field-attachment, article.node-pd-library .field-name-field-attachment, article.node-pd-library .field-name-field-pd-date, article.node-pd-library .field-name-field-pd-intro,article.node-pd-library .field-name-field-image, article.node-pd-library .field-name-field-taxonomy-tags{display: none;}
            </style>
            <script>
                $(document).ready(function(){
                    $('.field-item .file').appendTo('.attach p');
                    $('.date-display-single').appendTo('.pdDate p');
                    if($('.date-display-single').length > 0) {
                        //Show only year in date
                        var str = $('.date-display-single').html();
                        var splitDate = str.split(',');
                        var year = splitDate[2];
                        $('.date-display-single').text(year);
                    }
                });
            </script>
            <?php if(isset($node->field_by[LANGUAGE_NONE])): ?> 
                <div class="eventWrap">
                    <h5>By</h5>
                    <p><?= $node->field_by['und'][0]['value']; ?></p>
                </div>
            <?php endif; ?>
            <?php if(isset($node->field_pd_date[LANGUAGE_NONE])): ?> 
                <div class="eventWrap pdDate">
                    <h5>Year</h5>
                    <p></p>
                </div>
            <?php endif; ?>        
            <?php if(isset($node->body[LANGUAGE_NONE])): ?> 
                <div class="eventWrap">
                    <?= $node->body['und'][0]['value']; ?>
                </div>
            <?php endif; ?>

            <?php if(isset($node->field_attachment[LANGUAGE_NONE])): ?> 
                <div class="eventWrap attach">
                    <h5>Attachment</h5>
                    <p></p>
                </div>
            <?php endif; ?>  


            <?php print render($page['content']);
        ?>
        </div>
        <!-- /.left innerContent -->
        <div class="sidebar left">
            <?php if ($page['internal_subnav']): ?>
            <div class="internal_subnav">
                <?php print render($page['internal_subnav']); ?>
            </div>
            <?php endif; ?>
            <?php
            print render($page['sidebar_cta']);
            ?>
        </div>
        <!-- /.sidebar left -->
        <div class="recommended container">
         <?php
            print render($page['related_content']);
         ?>
        </div>
        <!-- /.recommended -->
    </div>
    <!-- /.mainContent container -->
    <?php include(path_to_theme().'/templates/npf_pre_footer.tpl.php'); ?>
    <!-- /.preFooter -->
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>

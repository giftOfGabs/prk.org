<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
    <?php if($title): ?>
    <div class="intro">
        <h1 class="container"><?= $title; ?></h1>
        <?php if(!empty($node->field_intro[LANGUAGE_NONE])): ?>
            <p class="container">
            <?= $node->field_intro['und'][0]['value']; ?>
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
    <div class="mainContent container siteSearch">
        <div class="right innerContent">
            <?php print render($page['content']); ?>        
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
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>

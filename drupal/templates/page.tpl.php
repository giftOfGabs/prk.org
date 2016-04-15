<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
    <div class="intro">
        <h1 class="container"><?= $title; ?></h1>
        <?php if(isset($node->field_intro[LANGUAGE_NONE])): ?>
            <p class="container">
            <?= $node->field_intro[LANGUAGE_NONE][0]['value']; ?>
            </p>
        <?php endif; ?>           
    </div>
        <!-- /.intro -->
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
        <?php if(isset($node->field_anchor_section_links[LANGUAGE_NONE])): ?>
        <div class="anchorSectionLinks">
            <?php print $node->field_anchor_section_links[LANGUAGE_NONE][0]['safe_value']; ?>
        </div>
        <?php endif; ?>
        <!-- /.anchorSectionLinks -->
        <?php
            $node = menu_get_object();
            $nid = $node->nid;
            global $user;
            if ($user->uid) {
              echo '<a href="?q=node/'.$nid.'/edit&destination=admin/content" class="editLink">Edit</a>';
            }
            //print render($page['content']['system_main']['nodes'][$nid]['body']);
            print render($page['content']);
        ?>
        <?php if(isset($node->field_next[LANGUAGE_NONE])): ?>
            <?php if ($node->field_next[LANGUAGE_NONE][0]['safe_value']!='http://'): ?>
                <a class="button lightBlueBg next" href="<?php print $node->field_next[LANGUAGE_NONE][0]['safe_value']; ?>">Next >></a>
            <?php endif; ?>
        <?php endif; ?>
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

<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
    <div class="intro">          
        <h1 class="container"><?= $title; ?></h1>                
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
    <script>
        $(document).ready(function(){
            $('.date-display-single').appendTo('.date p');
            $('.field-name-field-event-date-min .field-items').appendTo('.date p');
        });
    </script>
    <style>
        article.node-event .field, article .links{display: none;}
    </style>
    <div class="mainContent container">
        <div class="right innerContent">
        <?php
            $node = menu_get_object();
            $nid = $node->nid;
        global $user;
        if ($user->uid) {
          echo '<a href="?q=node/'.$nid.'/edit&destination=admin/content" class="editLink">Edit</a>';
        }
            
        ?>
        <?php if(isset($node->field_event_image[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <img src="/sites/default/files/<?= $node->field_event_image['und'][0]['filename']; ?>" />
                
            </div>
        <?php endif; ?>
        <?php if(isset($node->body[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <p><?= $node->body['und'][0]['value']; ?></p>
            </div>
        <?php endif; ?>
        <div class="eventWrap date">
            <h5>Event Date</h5>
            <p></p>
        </div>        
        <?php if(isset($node->field_fees[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <h5>Fees</h5>
                <p><?= $node->field_fees['und'][0]['value']; ?></p>
            </div>
        <?php endif; ?>
        <?php if(isset($node->field_contact_name[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <h5>Contact Name</h5>
                <p><?= $node->field_contact_name['und'][0]['value']; ?></p>
            </div>
        <?php endif; ?>
        <?php if(isset($node->field_contact_email[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <h5>Contact email</h5>
                <p><a href="mailto:<?= $node->field_contact_email['und'][0]['value']; ?>"><?= $node->field_contact_email['und'][0]['value']; ?></a></p>
            </div>
        <?php endif; ?>
        <?php if(isset($node->field_contact_phone[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <h5>Contact Phone</h5>
                <p><?= $node->field_contact_phone['und'][0]['value']; ?></p>
            </div>
        <?php endif; ?>
        <?php if(isset($node->field_link_text[LANGUAGE_NONE])): ?> 
            <div class="eventWrap">
                <p><a href="<?= $node->field_link_url['und'][0]['value']; ?>"><?= $node->field_link_text['und'][0]['value']; ?></a></p>
            </div>
        <?php endif; ?>
        <div class="eventWrap">
            <a href="/calendar-node-field-event-date-new/month/">Back to Calendar</a>        
        </div>  

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
    <!-- /.preFooter -->
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>

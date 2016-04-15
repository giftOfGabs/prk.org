<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php print $head_title; ?></title>
  <meta name="description" content="We make life better for people with Parkinson’s through expert care and research. Everything we do helps people enjoy life with friends, families, children and grandchildren until there is a tomorrow without Parkinson’s." />

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@ParkinsonDotOrg">
  <meta name="twitter:title" content="National Parkinson Foundation: Believe in Better">
  <meta name="twitter:description" content="We make life better for people with Parkinson’s through expert care and research. Everything we do helps people enjoy life with friends, families, children and grandchildren until there is a tomorrow without Parkinson’s.">
  <meta name="twitter:creator" content="@ParkinsonDotOrg">
  <meta name="twitter:image" content="http://www.parkinson.org/sites/all/themes/npf2015/images/Facebook-share-graphic.jpg">

  <!-- Open Graph data -->
  <meta property="og:site_name" content="National Parkinson Foundation" />
  <meta property="og:title" content="National Parkinson Foundation: Believe in Better" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php global $base_url; print $base_url . url($_GET['q']); ?>"/>
  <meta property="og:image" content="http://www.parkinson.org/sites/all/themes/npf2015/images/Facebook-share-graphic.jpg" />
  <meta property="og:description" content="We make life better for people with Parkinson’s through expert care and research. Everything we do helps people enjoy life with friends, families, children and grandchildren until there is a tomorrow without Parkinson’s." /> 
  
  

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php print $styles; ?>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KKWGQL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KKWGQL');</script>
  <!-- End Google Tag Manager -->

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-558aa5ad013bc04d" async="async"></script>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>

<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php
$theme_path = base_path() . 'sites/all/themes/law_library_bootstrap/';
?>

<!-- CUL BRANDING  <?php print $theme_path; ?> -->
<section class="cul-branding">
        <img class="cu-logo" src="<?php print $theme_path; ?>images/cul-branding/cu-logo.png" />
</section>

<!-- LAW BRANDING + MAIN NAVIGATION-->
<header class="main-nav">

    <h1>
        <a href="/"><img class="law-logo" src="<?php print $theme_path; ?>images/law-logo.png" /></a>
    </h1>
    
    <ul>
        <li><a class="active" href="/" title="">HOME</a> /</li>
        <li><a href="#" title="">ABOUT <span class="caret-icon">></span></a> /</li>
        <li><a href="#" title="">USING THE LIBRARY <span class="caret-icon">></span></a> /</li>
        <li><a href="#" title="">RESEARCH <span class="caret-icon">></span></a> /</li>
        <li><a href="#" title="">EXPLORE</a></li>
        <li><a href="#" title="">SPECIAL COLLECTIONS <span class="caret-icon">></span></a> /</li>
        <li><a href="#" title="">OTHER COLLECTIONS <span class="caret-icon">></span></a></li>
    </ul>

</header>


<!-- HEADER IMAGE -->

 <section class="header-interior">
        
</section>
    
<!--"<?php print $theme_path; ?>images/header-interior.jpg"-->

    <div class="nav">
        <?php print render($page['navigation']); ?>
    </div>

<!-- CONTENT -->
<section class="row page-content">

    <nav class="breadcrumb">
        <a href="#">About</a> <span class="separator">></span>
        <strong>Our Space</strong>
    </nav>  

    <div class="main-content col-xs-12 col-sm-12 col-md-10 col-lg-10">

        <header class="page">
            <h2 class="title-content"><?php print $title; ?></h2>
        </header>

		<?php print render($page['content']); ?>
	</div>

    <sidebar class="sidebar-nav col-xs-12 col-sm-12 col-md-2 col-lg-2">
        
        <h4>OTHER AREAS</h4>

            <ul>
                <li><a href="#">Reading Room</a></li>
                <li><a href="#">Squash Court</a></li>
                <li><a href="#">Law Library Map</a></li>
            </ul>

        <h4 class="linked"><a href="#">RESERVE A ROOM<span class="separator">></span></a></h4>

    </sidebar>

</section>

<footer class="row">
      <?php print render($page['footer']); ?>
</footer>

		
        
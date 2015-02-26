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
$theme_path = base_path() . 'sites/all/themes/persuasivemaps_bootstrap';
?>


<!-- HEADER -->
        <header>

            <!-- navbar-static-top MAKES the dropdown to display on top -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                       

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                         <h1>
                             <a class="cornell-logo" href="#"></a>
                        </h1>
                
                        <h2>
                            <a href="#">Cornell University Library</a> | <a href="#">Division of Rare & Manuscript Collections</a>
                        </h2>

                  
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!--<ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Browse Collection <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">All Persuasive Maps</a></li>
                                    <li><a href="#">By Subject (Recommended)</a></li>
                                    <li><a href="#">Advance Search</a></li>
                                </ul>
                            </li>

                            <li><a href="/resources">Resources</a></li>
                            <li><a href="/thematic-notes">Thematic Notes</a></li>
                        </ul>-->

                        <?php print render($page['mainnav']); ?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
                    
        </header>

        

        <!-- CONTENT FEATURED MAP AND INTRO -->
        <section class="home-content row">

            <!-- keep classes LIKE featured-maps AT THE END -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 featured-maps">




<div id="owl-demo" class="owl-carousel">
      <!--<div><img src="<?php print $theme_path; ?>/images/map-1.jpg"><div class="legend">Short Title / Date</div></div>
      <div><a href=""><img src="<?php print $theme_path; ?>/images/map-2.jpg"><div class="legend">Map Legend</a></div></div>
      <div><img src="<?php print $theme_path; ?>/images/map-3.jpg"><div class="legend">Map Legend</div></div>
      <div><img src="<?php print $theme_path; ?>/images/map-4.jpg"><div class="legend">Map Legend</div></div>
      -->


    <?php print render($page['carousel']); ?>
</div>

                
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 home-intro">

                <h3>PERSUASIVE CARTOGRAPHY<span>The P.J. Mode Collection</span></h3>

                <p>This is a collection of "persuasive" cartography: maps primarily intended to influence the opinion of the viewer, rather than to communicate “objective” geographic information.</p>

                <p>Maps in the collection address a wide range of messages about religion, politics, slavery, temperance, bias, woman’s suffrage, poverty, prostitution, avarice, health and hazard, conservation, romance and marriage, empire, international power, war and peace, advertising and promotion, etc.</p>  

                <p>The collection also reflects a broad spectrum of means for accomplishing the intended persuasion, including allegorical, satirical and pictorial mapping; inclusion (or exclusion) of critical information; significant cartographic elements (projection, scale, perspective, color, text, etc.); and intentional deception.</p>

                <p>Learn more about <a href="#">persuasive cartography and the collection</a></p>

                <!-- Dropdown Browse Collections -->

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle browse-collection" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    BROWSE COLLECTION<span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">All Persuasive Maps</a></li>
                        <li><a href="#">By Subject (Recommended)</a></li>
                        <li><a href="#">Advance Search</a></li>
                    </ul>
                </div>
            </div>

        </section>

        <!-- FOOTER -->
        <footer>
            <nav>
                <ul class="list-inline">
                    <li><a href="#">Feedback</a> </li>
                    <li><a href="#">Copyright</a></li>
                </ul> 
            </nav>
        </footer>

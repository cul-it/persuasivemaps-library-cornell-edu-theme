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
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Browse Collection <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">All Persuasive Maps</a></li>
                                    <li><a href="#">By Subject (Recommended)</a></li>
                                    <li><a href="#">Advance Search</a></li>
                                </ul>
                            </li>
                            


                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Thematic Notes</a></li>
                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
                    
        </header>

        

        <!-- CONTENT FEATURED MAP AND INTRO -->
        <section class="inteior-content about row">

            <!-- keep classes LIKE featured-maps AT THE END -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 interior-copy">

                <h3>PERSUASIVE CARTOGRAPHY<span>The P.J. Mode Collection</span></h3>

                <h4>About Persuasive Cartography</h4>

                <p>This is a collection of  “persuasive cartography,” maps primarily intended to influence the opinion of the viewer rather than to communicate “objective” geographic information (Tyner 1974). Maps of this sort have also been described as “suggestive cartography,” “rhetorical cartography” and “propaganda maps” (a less apt term, because the word “propaganda” has become a pejorative).</p> 
                <p>In fact, no map provides an entirely objective view of reality.  Even the best-intended cartographer must decide what projection to use, what features to include and what to exclude, what colors, what shading, what text, what images – all of which shape the message communicated by the finished product. Every map is somewhere along a spectrum from objective to subjective, from science to art. We deal here with maps that have crossed a line – itself admittedly subjective – into the preference for communicating some message other than objective geographic information.</p>
                
                <p>Why maps? Why not paintings or sculpture or other persuasive visual images, or for that matter, persuasion by the written word alone? Are the messages communicated by Guernica and To Kill a Mockingbird somehow less persuasive than those embodied in maps? The answer is that maps are different from other forms of communication in one significant way. In a Dutch emblem book from 1714, there is a portrait by Vincent Vander Vinne of a mapmaker looking up intently from his charts:
                </p>

                <p>This is a collection of  “persuasive cartography,” maps primarily intended to influence the opinion of the viewer rather than to communicate “objective” geographic information (Tyner 1974). Maps of this sort have also been described as “suggestive cartography,” “rhetorical cartography” and “propaganda maps” (a less apt term, because the word “propaganda” has become a pejorative).</p> 
                <p>In fact, no map provides an entirely objective view of reality.  Even the best-intended cartographer must decide what projection to use, what features to include and what to exclude, what colors, what shading, what text, what images – all of which shape the message communicated by the finished product. Every map is somewhere along a spectrum from objective to subjective, from science to art. We deal here with maps that have crossed a line – itself admittedly subjective – into the preference for communicating some message other than objective geographic information.</p>
                
                <p>Why maps? Why not paintings or sculpture or other persuasive visual images, or for that matter, persuasion by the written word alone? Are the messages communicated by Guernica and To Kill a Mockingbird somehow less persuasive than those embodied in maps? The answer is that maps are different from other forms of communication in one significant way. In a Dutch emblem book from 1714, there is a portrait by Vincent Vander Vinne of a mapmaker looking up intently from his charts:
                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 side-bar">
                <ul>
                    <li><a href="#">Suggestive Cartography</a></li>
                    <li><a href="#">History of the Collection</a></li>
                </ul>   
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

    <!--<?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>-->


    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
    <script src="<?php print $theme_path; ?>/js/jquery-1.9.1.min.js"></script> 
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   
         

       <script type="text/javascript" src="<?php print $theme_path; ?>/js/owl.carousel/owl-carousel/owl.carousel.js"></script>  
       
   

    <!-- Utils
    <script type="text/javascript" src="<?php print $theme_path; ?>js/utils.js"></script>-->





    </style>

    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay : false,
        stopOnHover : true,
        pagination: false,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"fade",
        navigation:true,
        navigationText : ["<",">"]
      });
    });
    </script>

		
        
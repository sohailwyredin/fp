<?php
/**
 * Created by PhpStorm.
 * Users: sohail
 * Date: 1/25/2018
 * Time: 3:03 PM
 */?>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <a href="index.html" class="logo">
                    <span class="logo-small">
                        <i class="mdi mdi-radar"></i>
                    </span>
                    <span class="logo-large">
                        <i class="mdi mdi-radar"></i> Minton
                    </span>
                </a>
                <!-- Image Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<img src="assets/images/logo_dark.png" alt="" height="24" class="logo-lg">-->
                <!--<img src="assets/images/logo_sm.png" alt="" height="24" class="logo-sm">-->
                <!--</a>-->

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16">
                                    <span class="badge badge-danger float-right">5</span>Notification
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-comment-account"></i>
                                </div>
                                <p class="notify-details">
                                    Robert S. Taylor commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <p class="notify-details">
                                    New user registered.
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger">
                                    <i class="mdi mdi-airplane"></i>
                                </div>
                                <p class="notify-details">
                                    Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small class="text-white">Welcome ! John</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-open"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div><!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="index.html">
                            <i class="ti-home"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="ti-paint-bucket"></i>UI Kit
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-portlets.html">Portlets</a>
                            </li>
                            <li>
                                <a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
                            </li>
                            <li>
                                <a href="ui-tabs.html">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="ui-notification.html">Notification</a>
                            </li>
                            <li>
                                <a href="ui-bootstrap.html">BS Elements</a>
                            </li>
                            <li>
                                <a href="ui-typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="ti-light-bulb"></i>Components
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="components-grid.html">Grid</a>
                            </li>
                            <li>
                                <a href="components-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="components-widgets.html">Widgets</a>
                            </li>
                            <li>
                                <a href="components-nestable-list.html">Nesteble</a>
                            </li>
                            <li>
                                <a href="components-range-sliders.html">Range Sliders </a>
                            </li>
                            <li>
                                <a href="components-sweet-alert.html">Sweet Alerts </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="ti-spray"></i>Other
                        </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Icons</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="icons-materialdesign.html">Material Design</a>
                                    </li>
                                    <li>
                                        <a href="icons-themifyicon.html">Themify Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-ionicons.html">Ion Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-fontawesome.html">Font awesome</a>
                                    </li>
                                    <li>
                                        <a href="icons-weather.html">Weather Icons</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Forms</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="form-elements.html">General Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.html">Advanced Form</a>
                                    </li>
                                    <li>
                                        <a href="form-validation.html">Form Validation</a>
                                    </li>
                                    <li>
                                        <a href="form-wizard.html">Form Wizard</a>
                                    </li>
                                    <li>
                                        <a href="form-wysiwig.html">WYSIWYG Editor</a>
                                    </li>
                                    <li>
                                        <a href="form-summernote.html">Summernote</a>
                                    </li>
                                    <li>
                                        <a href="form-uploads.html">Multiple File Upload</a>
                                    </li>
                                    <li>
                                        <a href="form-xeditable.html">X-editable</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Tables</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatable.html">Data Table</a>
                                    </li>
                                    <li>
                                        <a href="tables-editable.html">Editable Table</a>
                                    </li>
                                    <li>
                                        <a href="tables-responsive.html">Responsive Table</a>
                                    </li>
                                    <li>
                                        <a href="tables-tablesaw.html">Tablesaw</a>
                                    </li>
                                    <li>
                                        <a href="tables-foo-tables.html">Foo Table</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Charts</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="chart-flot.html">Flot Chart</a>
                                    </li>
                                    <li>
                                        <a href="chart-morris.html">Morris Chart</a>
                                    </li>
                                    <li>
                                        <a href="chart-chartist.html">Chartist chart</a>
                                    </li>
                                    <li>
                                        <a href="chart-nvd3.html">Nvd3 charts</a>
                                    </li>
                                    <li>
                                        <a href="chart-chartjs.html">Chartjs Charts</a>
                                    </li>
                                    <li>
                                        <a href="chart-peity.html">Peity Charts</a>
                                    </li>
                                    <li>
                                        <a href="chart-sparkline.html">Sparkline Charts</a>
                                    </li>
                                    <li>
                                        <a href="chart-other.html">Other Chart</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Maps</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="map-google.html"> Google Map</a>
                                    </li>
                                    <li>
                                        <a href="map-vector.html"> Vector Map</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Mail</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="mail-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="mail-compose.html">Compose Mail</a>
                                    </li>
                                    <li>
                                        <a href="mail-read.html">View Mail</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="ti-files"></i>Pages
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="pages-starter.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirmmail.html">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">404 Error</a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">500 Error</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="ti-gift"></i>Extras
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="extras-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="extras-team.html">Team Members</a>
                                    </li>
                                    <li>
                                        <a href="extras-timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="extras-invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="extras-calendar.html"> Calendar</a>
                                    </li>
                                    <li>
                                        <a href="extras-email-template.html">Email template</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="extras-maintenance.html">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="extras-coming-soon.html">Coming-soon</a>
                                    </li>
                                    <li>
                                        <a href="extras-gallery.html"> Gallery</a>
                                    </li>
                                    <li>
                                        <a href="extras-pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="extras-faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="extras-treeview.html">Treeview</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div><!-- end #navigation -->
        </div><!-- end container -->
    </div><!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

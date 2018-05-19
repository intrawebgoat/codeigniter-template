<?php
// Example of loading additional components
$this->template->javascript
                           ->add('https://www.gstatic.com/charts/loader.js')
                           ->add('dashboard.js');
?>
<div class="uk-grid-collapse" uk-height-viewport uk-grid>
    <!--HEADER-->
    <header class="uk-width-1-1 uk-box-shadow-large uk-position-z-index">
        <div class="uk-container uk-container-expand uk-background-primary uk-padding-remove-left">
            <nav class="uk-navbar uk-light" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-margin-left uk-logo " href="#">Example</a>
                </div>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .overlay-search; animation: uk-animation-fade" href="#"></a>
                </div>
                <div class="overlay-search uk-navbar-right uk-flex-1" hidden>
                    <div class="uk-navbar-item uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                        </form>
                    </div>
                    <a class="uk-navbar-toggle" uk-close uk-toggle="target: .overlay-search; animation: uk-animation-fade" href="#"></a>
                </div>
                <div class="uk-navbar-right uk-hidden@s">
                    <a href="#"><span uk-icon="icon: menu"></span></a>
                </div>
                <div class="uk-navbar-right uk-visible@s">
                    <ul  class="uk-navbar-nav">
                        <li><a href="#" data-uk-icon="icon:bell"></a></li>
                        <li><a href="#" data-uk-icon="icon:mail"></a></li>
                        <li>
                            <a href="#" data-uk-icon="icon:user"></a>
                            <div class="uk-navbar-dropdown" uk-dropdown="pos: top-left">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">YOUR ACCOUNT</li>
                                    <li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
                                    <li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#"><span data-uk-icon="icon: sign-out"></span> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--/HEADER-->
    <!--LEFT BAR-->
    <aside class="uk-visible@m uk-width-auto uk-box-shadow-large uk-position-z-index">
        <div class="uk-flex uk-flex-center" uk-box>
            <ul class="uk-nav-default uk-nav-parent-icon uk-padding-small" uk-nav>
                <li class="uk-active">
                    <a href="#" class="uk-text-center uk-text-primary">
                        <span uk-icon="icon:thumbnails;ratio:1.8"></span><br>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="uk-nav-divider"></li>
                <li>
                    <a href="#" class="uk-text-center">
                        <span uk-icon="icon:mail;ratio:1.8"></span><br>
                        <span>Messages</span>
                    </a>
                </li>
                <li class="uk-nav-divider"></li>
                <li>
                    <a href="#" class="uk-text-center">
                        <span uk-icon="icon:users;ratio:1.8"></span><br>
                        <span>Team</span>
                    </a>
                </li>
                <li class="uk-nav-divider"></li>
                <li>
                    <a href="#" class="uk-text-center">
                        <span uk-icon="icon:cog;ratio:1.8"></span><br>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!--/LEFT BAR-->
    <!--CONTENT-->
    <div id="content" class="uk-width-expand uk-background-muted uk-padding">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl" data-uk-grid>
                <div>
                    <span class="uk-text-small"><span data-uk-icon="icon:users" class="uk-margin-small-right uk-text-primary"></span>New Users</span>
                    <h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">2.134</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up">15%</span> more than last week.
                    </div>
                </div>
                <div>
                    <span class="uk-text-small"><span data-uk-icon="icon:social" class="uk-margin-small-right uk-text-primary"></span>Social Media</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">8.490</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-warning" data-uk-icon="icon: triangle-down">-15%</span> less than last week.
                    </div>
                </div>
                <div>
                    <span class="uk-text-small"><span data-uk-icon="icon:clock" class="uk-margin-small-right uk-text-primary"></span>Traffic hours</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">12.00<small class="uk-text-small">PM</small></h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up"> 19%</span> more than last week.
                    </div>
                </div>
                <div>
                    <span class="uk-text-small"><span data-uk-icon="icon:search" class="uk-margin-small-right uk-text-primary"></span>Week Search</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">9.543</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-danger" data-uk-icon="icon: triangle-down"> -23%</span> less than last week.
                    </div>
                </div>
                <div class="uk-visible@xl">
                    <span class="uk-text-small"><span data-uk-icon="icon:users" class="uk-margin-small-right uk-text-primary"></span>Lorem ipsum</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">5.284</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up"> 7%</span> more than last week.
                    </div>
                </div>
            </div>
            <hr>
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <!-- panel -->
                <div class="uk-width-2-3@l uk-width-1-2@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom">Geographic Chart</h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <img src="http://byhumans.works/assets/mapa1.svg" alt="">
                            <p class="uk-text-muted uk-text-small uk-text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
                <!-- panel -->
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-4@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom">Activity</h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <img src="http://byhumans.works/assets/mapa2.svg" alt="">
                            <p class="uk-text-muted uk-text-small uk-text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <footer class="uk-section uk-section-small uk-text-center">
                <hr>
                <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</span>
            </footer>
        </div>
    </div>
    <!--/CONTENT-->
</div>
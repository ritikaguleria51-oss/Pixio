    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsebanner" aria-expanded="false" aria-controls="collapsebanner">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Banners
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsebanner" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionbanner">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="http://127.0.0.1:8000/admin/banners/create">Add Banner</a>
                                        <a class="nav-link" href="http://127.0.0.1:8000/admin/banners">All Banners</a>
                                   </nav>
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsehome" aria-expanded="false" aria-controls="collapsehome">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsehome" aria-labelledby="headingHome" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.home.create'); ?>">Add Home</a>
                                    <a class="nav-link" href="<?php echo route('admin.home.index'); ?>">All Home</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseaboutme" aria-expanded="false" aria-controls="collapseaboutme">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                About Me
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseaboutme" aria-labelledby="headingAboutMe" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.about-me.create'); ?>">Add About Me</a>
                                    <a class="nav-link" href="<?php echo route('admin.about-me.index'); ?>">All About Me</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseaboutus" aria-expanded="false" aria-controls="collapseaboutus">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                About Us
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseaboutus" aria-labelledby="headingAboutUs" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.about-us.create'); ?>">Add About Us</a>
                                    <a class="nav-link" href="<?php echo route('admin.about-us.index'); ?>">All About Us</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseblog" aria-expanded="false" aria-controls="collapseblog">
                                <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                                Blogs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseblog" aria-labelledby="headingBlog" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.blog.create'); ?>">Add Blog</a>
                                    <a class="nav-link" href="<?php echo route('admin.blog.index'); ?>">All Blogs</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepricing" aria-expanded="false" aria-controls="collapsepricing">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Pricing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsepricing" aria-labelledby="headingPricing" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.pricing.create'); ?>">Add Pricing Plan</a>
                                    <a class="nav-link" href="<?php echo route('admin.pricing.index'); ?>">All Pricing Plans</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseshop" aria-expanded="false" aria-controls="collapseshop">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Shop
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseshop" aria-labelledby="headingShop" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.shop.create'); ?>">Add Shop Product</a>
                                    <a class="nav-link" href="<?php echo route('admin.shop.index'); ?>">All Shop Products</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseportfolio" aria-expanded="false" aria-controls="collapseportfolio">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Portfolio
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseportfolio" aria-labelledby="headingPortfolio" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.portfolio.create'); ?>">Add Portfolio</a>
                                    <a class="nav-link" href="<?php echo route('admin.portfolio.index'); ?>">All Portfolio</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefeatures" aria-expanded="false" aria-controls="collapsefeatures">
                                <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                                Features
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsefeatures" aria-labelledby="headingFeatures" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.features.create'); ?>">Add Features</a>
                                    <a class="nav-link" href="<?php echo route('admin.features.index'); ?>">All Features</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepromogrid" aria-expanded="false" aria-controls="collapsepromogrid">
                                <div class="sb-nav-link-icon"><i class="fas fa-th-large"></i></div>
                                Promo Grid
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsepromogrid" aria-labelledby="headingPromoGrid" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.promo-grid.create'); ?>">Add Promo Grid</a>
                                    <a class="nav-link" href="<?php echo route('admin.promo-grid.index'); ?>">All Promo Grid</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsetopcollection" aria-expanded="false" aria-controls="collapsetopcollection">
                                <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                                Top Collection
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsetopcollection" aria-labelledby="headingTopCollection" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.top-collection.create'); ?>">Add Top Collection</a>
                                    <a class="nav-link" href="<?php echo route('admin.top-collection.index'); ?>">All Top Collection</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseoffers" aria-expanded="false" aria-controls="collapseoffers">
                                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                Featured Offers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseoffers" aria-labelledby="headingOffers" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo route('admin.featured-offers.create'); ?>">Add Featured Offers</a>
                                    <a class="nav-link" href="<?php echo route('admin.featured-offers.index'); ?>">All Featured Offers</a>
                                </nav>
                            </div>



                           
                              


                            <!-- <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
    </div>

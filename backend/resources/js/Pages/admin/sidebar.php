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
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                sliders
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/sliders/add-sliders.php">Add sliders</a>
                                    <a class="nav-link" href="<?php echo base_url?>/sliders/all-sliders.php">All sliders</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseabouts" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Abouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseabouts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionabouts">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/abouts/add-abouts.php">Add abouts</a>
                                    <a class="nav-link" href="<?php echo base_url?>/abouts/all-abouts.php">All abouts</a>
                                   </nav>
                                </nav>
                            </div>

                                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecategories" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas  fa-table"></i></div>
                                Products categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsecategories" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordioncategories"> 
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/products-categories/add-categories.php">Add categories</a>
                                    <!-- <a class="nav-link" href="<?php echo base_url?>/products-categories/all-categories.php">All categories</a> -->
                                   </nav>
                                </nav>
                            </div> 

                            <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecharts" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Product type
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsecharts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/products-type/add-products.php">Add products-type</a>
                                    <!-- <a class="nav-link" href="<?php echo base_url?>/products-type/all-products.php">All product-types</a> -->
                                </nav>
                            </a>
                        </nav>
                    </div>
                    
                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas  fa-table"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordion"> 
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/products/add-products.php">Add products</a>
                                    <a class="nav-link" href="<?php echo base_url?>/products/all-products.php">All products</a>
                                   </nav>
                                </nav>
                            </div> 


                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefeatures" aria-expanded="false" aria-controls="collapsefeatures">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Features
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsefeatures" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionfeatures">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/features/add-features.php">Add features</a>
                                    <a class="nav-link" href="<?php echo base_url?>/features/all-features.php">All features</a>
                                </nav>
                            </a>
                        </nav>
                    </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsebanner" aria-expanded="false" aria-controls="collapsebanner">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Banners
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsebanner" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionbanner">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/banners/add-banners.php">Add banner</a>
                                    <a class="nav-link" href="<?php echo base_url?>/banners/all-banners.php">All banner</a>
                                   </nav>
                                    </a>
                                </nav>
                            </div>


                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefacts" aria-expanded="false" aria-controls="collapsefacts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Facts
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsefacts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionfacts">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/facts/add-facts.php">Add facts</a>
                                    <a class="nav-link" href="<?php echo base_url?>/facts/all-facts.php">All facts</a>
                                   </nav>
                                    </a>
                                </nav>
                            </div>


                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseshops" aria-expanded="false" aria-controls="collapseshops">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                shops
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseshops" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionshops">
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"> -->
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url?>/shops/add-shops.php">Add shops</a>
                                    <a class="nav-link" href="<?php echo base_url?>/shops/all-shops.php">All shops</a>
                                   </nav>
                                    </a>
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

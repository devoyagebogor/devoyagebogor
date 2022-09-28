       <div id="layoutSidenav">
           <div id="layoutSidenav_nav">
               <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                   <div class="sb-sidenav-menu">
                       <div class="nav">
                           <div class="sb-sidenav-menu-heading">Homepage</div>
                           <a class="nav-link" href="index.html">
                               <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Dashboard
                           </a>
                           <div class="sb-sidenav-menu-heading">Project</div>
                           <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Layouts
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                           </a>
                           <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="<?= base_url('development/project_web_devs_review'); ?>">Promo</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Packages</a>
                                   <a class="nav-link" href="layout-sidenav-light.html">Gallery</a>
                               </nav>
                           </div>
                           <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                               <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Pages
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                           </a>
                           <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                       Deresto
                                       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                   </a>
                                   <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                       <nav class="sb-sidenav-menu-nested nav">
                                           <a class="nav-link" href="login.html">Login</a>
                                       </nav>
                                   </div>
                                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                       Clients
                                       <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                   </a>
                                   <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                       <nav class="sb-sidenav-menu-nested nav">
                                           <a class="nav-link" href="401.html">Testimonials</a>
                                           <a class="nav-link" href="404.html">Message</a>
                                       </nav>
                                   </div>
                               </nav>
                           </div>
                           <div class="sb-sidenav-menu-heading">Addons</div>

                           <a class="nav-link" href="#">
                               <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Tables
                           </a>

                           <div class="sb-sidenav-menu-heading">Sign Out</div>
                           <a class="nav-link" href="#">
                               <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-in-left"></i></div>
                               Logout
                           </a>
                       </div>
                   </div>
                   <div class="sb-sidenav-footer">
                       <div class="small">Logged in as:</div>
                       Start Bootstrap
                   </div>
               </nav>
           </div>

           <div id="layoutSidenav_content">
               <main>
                   <div class="container-fluid px-4">
                       <h1 class="mt-4">Dashboard</h1>
                       <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active">Devoyage Bogor - Deresto Coffee & Kitchen</li>
                       </ol>

                       <div class="row">
                           <div class="col-auto">
                               <small>
                                   <?= $this->session->flashdata('dev'); ?>
                               </small>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-primary text-white mb-4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                   <div class="card-body">Promo +</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">View Details</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-warning text-white mb-4">
                                   <div class="card-body">Packages +</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">View Details</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-success text-white mb-4">
                                   <div class="card-body">Gallery +</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">View Details</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-danger text-white mb-4">
                                   <div class="card-body">Testimonials</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">View Details</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-xl-6">
                               <div class="card mb-4">
                                   <div class="card-header">
                                       <i class="bi bi-gear-wide-connected"></i>
                                       Services & Facilities
                                   </div>
                                   <div class="card-body">
                                       <div class="btn-group d-flex gap-md-2">
                                           <a href="#" class="btn btn-primary">Services +</a>
                                           <a href="#" class="btn btn-success">Facilities +</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-6">
                               <div class="card mb-4">
                                   <div class="card-header">
                                       <i class="bi bi-people-fill"></i>
                                       Author
                                   </div>
                                   <div class="card-body">
                                       <div class="btn-group d-flex gap-md-2">
                                           <a href="#" class="btn btn-warning">Contact +</a>
                                           <a href="#" class="btn btn-secondary">Address +</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>
               </main>
               <footer class="py-4 bg-light mt-auto">
                   <div class="container-fluid px-4">
                       <div class="d-flex align-items-center justify-content-between small">
                           <div class="text-muted">Copyright &copy; Devoyage - Deresto Coffee & Kitchen</div>
                           <div>
                               <a href="#">GitHub</a>
                               &middot;
                               <a href="#">Marcomm</a>
                           </div>
                       </div>
                   </div>
               </footer>
           </div>
       </div>
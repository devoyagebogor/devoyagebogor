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
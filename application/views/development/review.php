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

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Images</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Text</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Images</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Text</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($view_promo as $result) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/img/uploaded/promo/')  .  $result['poto']; ?>" alt="img-devoyage" style="height: 100px; width= auto;" class="rounded mx-auto d-block">
                                        </td>
                                        <td><?= $result['title']; ?></td>
                                        <td><?= $result['caption']; ?></td>
                                        <td><?= $result['paragraph']; ?></td>
                                        <?php $now = $result['date'];
                                        $tg = date('d M Y', $now); ?>
                                        <td><?= $tg; ?></td>
                                        <td class="btn-group-vertical gap-2 d-grid">

                                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editThisPromo<?= $result['id']; ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="<?= base_url('development/d_Dpromo/' . $result['id']) ?>" class="btn btn-danger" onclick="return confirm('Delete Promo ?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editThisPromo<?= $result['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editThisPromoLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editThisPromoLabel">Update Promo ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <form action="<?php echo base_url('development/projcet_update_promo/') . $result['id']; ?>" method="post" enctype="multipart/form-data">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                    <input type="text" class="form-control" placeholder="Title Promo" aria-label="Title Promo" aria-describedby="basic-addon1" name="title_promo" value="<?= $result['title']; ?>">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Caption</span>
                                                                    <input type="text" class="form-control" placeholder="Caption Promo" aria-label="Caption Promo" aria-describedby="basic-addon2" name="caption_promo" value="<?= $result['caption']; ?>">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Periode</span>
                                                                    <input type="text" class="form-control" placeholder="Periode-promo" aria-label="Periode-promo" aria-describedby="basic-addon3" name="periode_promo" value="<?= $result['periode']; ?>">
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-4 offset-lg-1">
                                                            <label for="textpromo" class="form-label"><span class="fw-bold">Text Promo</span></label>
                                                            <textarea name="text_promo" id="text_promo" cols="5" rows="2" class="form-control"><?= $result['paragraph']; ?></textarea>
                                                            <span><small class="text-danger">*required</small></span>

                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input type="file" class="form-control" placeholder="Images" name="img_promo">
                                                            <span class="input-group-text" id="basic-addon1">JPG|PNG</span>
                                                        </div>
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-3">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
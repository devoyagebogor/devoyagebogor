        <!-- Modal Hot Promo-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Promo +</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="<?php echo base_url('development/dev_promo'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" placeholder="Title Promo" aria-label="Title Promo" aria-describedby="basic-addon1" name="title_promo">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Caption</span>
                                        <input type="text" class="form-control" placeholder="Caption Promo" aria-label="Caption Promo" aria-describedby="basic-addon2" name="caption_promo">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Periode</span>
                                        <input type="text" class="form-control" placeholder="Periode-promo" aria-label="Periode-promo" aria-describedby="basic-addon3" name="periode_promo">
                                    </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1">
                                <label for="textpromo" class="form-label"><span class="fw-bold">Text Promo</span></label>
                                <textarea name="text_promo" id="text_promo" cols="5" rows="2" class="form-control"></textarea>
                                <span><small class="text-danger">*required</small></span>

                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" placeholder="Images" name="img_promo">
                                <span class="input-group-text" id="basic-addon1">JPG|PNG</span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add +</button>
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

        <!-- Modal Packages -->
        <div class="modal fade" id="staticBackdropPackages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Packages +</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <h5 class="card-header">Add Packages Devoyage</h5>
                            <div class="card-body">
                                <h5 class="card-title">Today is THe Best Day</h5>
                                <form>
                                    <div class="mb-3">
                                        <label for="inputTitle" class="form-label">Title Package</label>
                                        <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" name="title_package">
                                        <div id="titleHelp" class="form-text">Add the Title for Visitors Web</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="captionPackage" class="form-label">Caption Package</label>
                                        <input type="text" class="form-control" id="captionPackage" name="caption_package">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <label class="form-label" for="filePicturePackage">Add Picture Pacakage</label>
                                        <input type="file" class="form-control" id="filePicturePackage" name="img_packages">
                                    </div>
                                    <div class="d-grid mt-2 mb-2">
                                        <button type="submit" class="btn btn-primary">Add Package +</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/'); ?>chart-area-demo.js"></script>
        <script src="<?= base_url('assets/js/'); ?>chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/datatables-simple-demo.js"></script>
        </body>

        </html>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <small>
                                    <?= $this->session->flashdata('dev'); ?>
                                </small>
                                <form action="<?= base_url('authdevs/index'); ?>" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" value="<?= set_value('email'); ?>" name="email" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pass1" value="<?= set_value('pass1'); ?>" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('authdevs/auth_reg_system'); ?>">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <?php $th = time();
                    $year = date("Y", $th); ?>
                    <div class="text-muted">Copyright &copy; Devoyage Bogor - Deresto Coffee & Kitchen <?= $year; ?></div>
                    <div>
                        <a href="#">PT DAS Brothers</a>
                        &middot;
                        <a href="#">Marcomm</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
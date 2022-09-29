<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Register</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('development/register_of_development'); ?>" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="email" value="<?= set_value('email'); ?>" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('email'); ?>
                                    </small>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pass1" value="<?= set_value('pass1'); ?>" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('pass1'); ?>
                                    </small>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pass2" value="<?= set_value('pass2'); ?>" />
                                        <label for="inputPassword">Verify Password</label>
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('pass2'); ?>
                                    </small>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="<?= base_url('authdevs/system_reg_p'); ?>">Forgot Password?</a>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('authdevs'); ?>">Have an account? Sign in!</a></div>
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
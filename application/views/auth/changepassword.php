<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Change Password untuk:</h1>
                            <p class="text-lead text-white"><?= $this->session->userdata('reset_email'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card card-profile bg-secondary mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <img src="<?= base_url('assets') ?>/img/profile/default.jpg" class="rounded-circle border-secondary">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-7 px-5">
                            <?= $this->session->flashdata('message'); ?>
                            <form role="form" action="<?= base_url('auth/changepassword'); ?>" method="POST">
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Masukkan password baru" type="password" id="password1" name="password1">
                                    </div>
                                </div>
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Konfirmasi password baru" type="password" id="password2" name="password2">
                                    </div>
                                    <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-2">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
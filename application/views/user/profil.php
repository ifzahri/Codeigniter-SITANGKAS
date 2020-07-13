<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?= base_url('assets/img/profile/') . $user['image']; ?>); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="display-2 text-white">Hello <?= $user['name']; ?></h1>
                        <p class="text-white mt-0 mb-5">Berikut adalah profil anda. Anda bisa melihat data diri anda dan melakukan perubahan data diri anda disini.</p>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="<?= base_url('assets'); ?>/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center mb-6">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="text-center">
                                <h5 class="h3">
                                    <?= $user['name']; ?>
                                </h5>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Cimahi, Jawa Barat
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i> Role Anda: <?= $this->session->userdata('role_id'); ?>
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Sistem Informatika Jaringan & Aplikasi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit profile</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('user/profil'); ?>
                            <h6 class="heading-small text-muted mb-4">Data Diri</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">Username</label>
                                            <input type="text" id="name" name="name" class="form-control" value="<?= $user['name']; ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Email address</label>
                                            <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-7 justify-content-center">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image" lang="en">
                                                <label class="custom-file-label" for="image">Pilih foto profil</label>
                                            </div>
                                        </div>
                                        <div class="justify-content-end">
                                            <div class="col-sm-2">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            </form>
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Change Password</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <form action="<?= base_url('user/changepassword'); ?>" method="POST">
                                            <div class="form-group">
                                                <label class="form-control-label" for="current_password">Current Password</label>
                                                <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Current Password">
                                                <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="new_password1">New Password</label>
                                            <input type="password" id="new_password1" name="new_password1" class="form-control" placeholder="New Password">
                                            <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="new_password2">Repeat Password</label>
                                            <input type="password" id="new_password2" name="new_password2" class="form-control" placeholder="Repeat Password">
                                            <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Change</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
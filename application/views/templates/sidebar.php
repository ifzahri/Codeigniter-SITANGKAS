    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="<?= base_url('assets'); ?>/pages/dashboards/dashboard.html">
                    <h1 class="display-4">SITANGKAS.</h1>
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- QUERY -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                                                FROM `user_menu` JOIN `user_access_menu`
                                                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                                WHERE `user_access_menu`.`role_id` = $role_id
                                                ORDER BY `user_access_menu`.`menu_id` ASC  
                                                ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>

                    <!-- LOOPING MENU -->
                    <?php foreach ($menu as $m) : ?>
                        <!-- Heading -->
                        <h6 class="navbar-heading p-0 text-muted"><?= $m['menu']; ?></h6>

                        <!-- LOOPING SUBMENU -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = " SELECT *
                                                            FROM `user_sub_menu` JOIN `user_menu`
                                                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                                            WHERE `user_sub_menu`.`menu_id` = $menuId
                                                            AND `user_sub_menu`.`is_active` = 1
                                                        ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <ul class="navbar-nav">
                            <?php foreach ($subMenu as $sm) : ?>
                                <?php if ($title == $sm['title']) : ?>
                                    <li class="nav-item active">
                                    <?php else : ?>
                                    <li class="nav-item">
                                    <?php endif; ?>
                                    <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                        <i class="<?= ($sm['icon']); ?>"></i>
                                        <span class="nav-link-text"><?= ($sm['title']); ?></span>
                                    </a>
                                    </li>
                                <?php endforeach; ?>
                        </ul>
                        <hr class="my-3">
                    <?php endforeach; ?>
                    <!-- Navigation - GENERAL -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('user/profil'); ?>">
                                <i class="ni ni-single-02"></i>
                                <span class="nav-link-text">My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tombol-keluar" href="<?= base_url('auth/logout'); ?>">
                                <i class="ni ni-lock-circle-open"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
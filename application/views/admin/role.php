     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h6 class="h2 text-white d-inline-block mb-0"><?= $title; ?></h6>
                         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                             <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                 <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                 <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Default</li>
                             </ol>
                         </nav>
                     </div>
                     <div class="col-lg-6 col-5 text-right">
                         <a href="#" class="btn btn-sm btn-neutral">New</a>
                         <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">
         <div class="row">
             <div class="card card-frame col-lg">
                 <div class="card-body">

                     <div class="col-lg">

                         <div class="table-responsive" data-toggle="list" data-list-values='["id", "menu", "action"]'>
                             <table class="table align-items-center table-flush">
                                 <button class="btn btn-icon btn-outline-primary mb-3" type="button" data-toggle="modal" data-target="#newRoleModal">
                                     <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                     <span class="btn-inner--text">Tambah Role</span>
                                 </button>

                                 <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                                 <?= $this->session->flashdata('message'); ?>

                                 <thead class="thead-light">
                                     <tr>
                                         <th scope="col" class="sort" data-sort="id">#</th>
                                         <th scope="col" class="sort" data-sort="menu">Role</th>
                                         <th scope="col" class="sort" data-sort="action">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody class="list">
                                     <?php $i = 1; ?>
                                     <?php foreach ($role as $r) : ?>
                                         <tr>
                                             <td class="id"><?= $i; ?></td>
                                             <td class="menu"><?= $r['role']; ?></td>
                                             <td class="action">
                                                 <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-success" target="_blank">Access</a>
                                                 <a href="" class="badge badge-md badge-pill badge-primary">Edit</a>
                                                 <a href="" class="badge badge-md badge-pill badge-danger">Delete</a>
                                             </td>
                                         </tr>
                                         <?php $i++; ?>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-6">
                 <div class="card bg-dark text-white border-0">
                     <img class="card-img" src="<?= base_url('assets'); ?>/img/theme/img-1-1000x600.jpg" alt="Card image">
                     <div class="card-img-overlay d-flex align-items-center">
                         <div>
                             <h5 class="h2 card-title text-white mb-2">Menu Management</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                             <p class="card-text text-sm font-weight-bold">Last updated 3 mins ago</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
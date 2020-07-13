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

                         <div class="table-responsive" data-toggle="list" data-list-values='["id", "title", "menu", "url", "icon", "active"]'>
                             <table class="table align-items-center table-flush">
                                 <button class="btn btn-icon btn-outline-primary mb-3" type="button" data-toggle="modal" data-target="#newSubMenuModal">
                                     <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                     <span class="btn-inner--text">Tambah Submenu</span>
                                 </button>
                                 <?php if (validation_errors()) : ?>
                                     <div class="alert alert-danger" role="alert">
                                         <?= validation_errors(); ?>
                                     </div>
                                 <?php endif; ?>

                                 <?= $this->session->flashdata('message'); ?>

                                 <thead class="thead-light">
                                     <tr>
                                         <th scope="col" class="sort" data-sort="id">#</th>
                                         <th scope="col" class="sort" data-sort="title">Title</th>
                                         <th scope="col" class="sort" data-sort="menu">Menu</th>
                                         <th scope="col" class="sort" data-sort="url">URL</th>
                                         <th scope="col" class="sort" data-sort="icon">Icon</th>
                                         <th scope="col" class="sort" data-sort="active">Active</th>
                                         <th scope="col">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody class="list">
                                     <?php $i = 1; ?>
                                     <?php foreach ($subMenu as $sm) : ?>
                                         <tr>
                                             <td class="id"><?= $i; ?></td>
                                             <td class="title"><?= $sm['title']; ?></td>
                                             <td class="menu"><?= $sm['menu']; ?></td>
                                             <td class="url"><?= $sm['url']; ?></td>
                                             <td class="icon"><?= $sm['icon']; ?></td>
                                             <td class="active"><?= $sm['is_active']; ?></td>
                                             <td class="action">
                                                 <a href="<?= base_url('admin/editsubmenu/') . $sm['id']; ?>" class="badge badge-md badge-pill badge-primary" data-toggle="modal" data-target="#editSubMenuModal">Edit</a>
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
         </div>
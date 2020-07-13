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
                                 <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Landing Page</a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('user/laporan'); ?>"><?= $title; ?></a></li>
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
                         <h1>Laporan</h1>
                         <h3>Nama: <?= $user['name']; ?></h3>
                         <div class="table-responsive py-4">
                             <table class="table table-flush" id="datatable-buttons">
                                 <thead class="thead-light">
                                     <tr>
                                         <th>#</th>
                                         <th>Nomor</th>
                                         <th>Tanggal</th>
                                         <th>Nama</th>
                                         <th>Jumlah</th>
                                         <th>Keterangan</th>
                                     </tr>
                                 </thead>
                                 <tfoot>
                                     <tr>
                                         <th>#</th>
                                         <th>Nomor</th>
                                         <th>Tanggal</th>
                                         <th>Nama</th>
                                         <th>Jumlah</th>
                                         <th>Keterangan</th>
                                     </tr>
                                 </tfoot>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($pemasukan as $p) : ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $p['nomor']; ?></td>
                                             <td><?= $p['tanggal']; ?></td>
                                             <td><?= $p['nama']; ?></td>
                                             <td><?= $p['jumlah']; ?></td>
                                             <td>

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
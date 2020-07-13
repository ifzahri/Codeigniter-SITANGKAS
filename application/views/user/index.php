     <!-- Header -->
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
                                 <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>"><?= $title; ?></a></li>
                             </ol>
                         </nav>
                     </div>
                 </div>
                 <!-- Card stats -->
                 <div class="row">
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                                         <span class="h2 font-weight-bold mb-0">Rp. <?= $saldo; ?></span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                             <i class="ni ni-money-coins"></i>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">User Aktif</h5>
                                         <span class="h2 font-weight-bold mb-0"><?= $useraktif; ?></span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                             <i class="ni ni-chart-bar-32"></i>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">
         <div class="row">
             <div class="col-xl-8">
                 <div class="card">
                     <div class="card-header border-0">
                         <div class="row align-items-center">
                             <div class="col">
                                 <h3 class="mb-0">Laporan Uang Kas <?= $user['name']; ?></h3>
                             </div>
                             <div class="col text-right">
                                 <a href="<?= base_url('user/laporan'); ?>" class="btn btn-sm btn-primary">See all</a>
                             </div>
                         </div>
                     </div>
                     <div class="table-responsive">
                         <!-- Projects table -->
                         <table class="table align-items-center table-flush">
                             <thead class="thead-light">
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Nomor</th>
                                     <th scope="col">Tanggal</th>
                                     <th scope="col">Nama</th>
                                     <th scope="col">Jumlah</th>
                                 </tr>
                             </thead>
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
             <div class="col-xl-4">
                 <!-- Progress track -->
                 <div class="card">
                     <!-- Card header -->
                     <div class="card-header">
                         <!-- Title -->
                         <h5 class="h3 mb-0">Riwayat Pembayaran <?= $user['name']; ?></h5>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <!-- List group -->
                         <ul class="list-group list-group-flush list my--3">
                             <?php foreach ($pemasukan as $p) : ?>
                                 <li class="list-group-item px-0">
                                     <div class="row align-items-center">
                                         <div class="col-auto">
                                             <!-- Avatar -->
                                             <a href="#" class="avatar rounded-circle">
                                                 <img alt="Image placeholder" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                                             </a>
                                         </div>
                                         <div class="col">
                                             <h5><?= $p['nama']; ?> telah membayar uang kas pada <?= $p['tanggal']; ?> sebesar Rp.<?= $p['jumlah']; ?> </h5>
                                             <div class="progress progress-xs mb-0">
                                                 <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             <?php endforeach; ?>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
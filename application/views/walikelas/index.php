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
                                 <li class="breadcrumb-item"><a href="<?= base_url('walikelas'); ?>"><?= $title; ?></a></li>
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
                                         <h5 class="card-title text-uppercase text-muted mb-0">Total Pemasukan</h5>
                                         <span class="h2 font-weight-bold mb-0">Rp. <?= $totalpemasukan; ?></span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                                             <i class="ni ni-app"></i>
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
                                         <h5 class="card-title text-uppercase text-muted mb-0">Total Pengeluaran</h5>
                                         <span class="h2 font-weight-bold mb-0">Rp. <?= $totalpengeluaran; ?></span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                             <i class="ni ni-chart-pie-35"></i>
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
                                 <h3 class="mb-0">Laporan Pemasukan</h3>
                             </div>
                             <div class="col text-right">
                                 <a href="<?= base_url('admin/laporanpemasukan'); ?>" class="btn btn-sm btn-primary">See all</a>
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
                                 <?php foreach (array_slice($pemasukan, 0, 5) as $p) : ?>
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
                 <!-- Timeline card -->
                 <div class="card">
                     <!-- Card header -->
                     <div class="card-header">
                         <!-- Title -->
                         <h5 class="h3 mb-0">Riwayat Pemasukan</h5>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                             <?php foreach (array_slice($riwayatpemasukan, 0, 3) as $p) : ?>
                                 <div class="timeline-block">
                                     <span class="timeline-step badge-success">
                                         <i class="ni ni-bell-55"></i>
                                     </span>
                                     <div class="timeline-content">
                                         <div class="d-flex justify-content-between pt-1">
                                             <div>
                                                 <span class="text-muted text-sm font-weight-bold"><?= $p['nama']; ?></span>
                                             </div>
                                             <div class="text-right">
                                                 <small class="text-muted"><i class="fas fa-clock mr-1"></i><?= $p['tanggal'] ?></small>
                                             </div>
                                         </div>
                                         <h6 class="text-sm mt-1 mb-0">Membayar sebesar Rp. <?= $p['jumlah'] ?></h6>
                                     </div>
                                 </div>
                             <?php endforeach; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-8">
                 <div class="card">
                     <div class="card-header border-0">
                         <div class="row align-items-center">
                             <div class="col">
                                 <h3 class="mb-0">Laporan Pengeluaran</h3>
                             </div>
                             <div class="col text-right">
                                 <a href="<?= base_url('admin/laporanpengeluaran'); ?>" class="btn btn-sm btn-primary">See all</a>
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
                                     <th scope="col">Jumlah</th>
                                     <th scope="col">Keterangan</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach (array_slice($pengeluaran, 0, 5) as $p) : ?>
                                     <tr>
                                         <td><?= $i; ?></td>
                                         <td><?= $p['nomor']; ?></td>
                                         <td><?= $p['tanggal']; ?></td>
                                         <td><?= $p['jumlah']; ?></td>
                                         <td><?= $p['keterangan']; ?></td>
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
                 <!-- Timeline card -->
                 <div class="card">
                     <!-- Card header -->
                     <div class="card-header">
                         <!-- Title -->
                         <h5 class="h3 mb-0">Riwayat Pengeluaran</h5>
                     </div>
                     <!-- Card body -->
                     <div class="card-body">
                         <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                             <?php foreach (array_slice($riwayatpengeluaran, 0, 3) as $p) : ?>
                                 <div class="timeline-block">
                                     <span class="timeline-step badge-success">
                                         <i class="ni ni-bell-55"></i>
                                     </span>
                                     <div class="timeline-content">
                                         <div class="d-flex justify-content-between pt-1">
                                             <div>
                                                 <span class="text-muted text-sm font-weight-bold">Bendahara</span>
                                             </div>
                                             <div class="text-right">
                                                 <small class="text-muted"><i class="fas fa-clock mr-1"></i><?= $p['tanggal'] ?></small>
                                             </div>
                                         </div>
                                         <h6 class="text-sm mt-1 mb-0"><?= $p['keterangan']; ?> sebesar Rp. <?= $p['jumlah'] ?></h6>
                                     </div>
                                 </div>
                             <?php endforeach; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
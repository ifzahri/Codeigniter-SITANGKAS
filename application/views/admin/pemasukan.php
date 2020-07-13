     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body">
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6">
                         <h6 class="h2 text-white d-inline-block mb-0"><?= $title; ?></h6>
                         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                             <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                 <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                                 <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">
         <div class="row">
             <div class="card card-frame col-lg-6">
                 <div class="card-body">
                     <div class="col-lg">
                         <form action="<?= base_url('uangkas/tambahpemasukan'); ?>" method="POST">
                             <?= $this->session->flashdata('message'); ?>
                             <div class="form-group">
                                 <label for="nomor">Nomor</label>
                                 <input type="number" id="nomor" name="nomor" class="form-control" placeholder="Nomor Transaksi" value="<?= $nomor; ?>" readonly="">
                             </div>
                             <?= form_error('nomor', '<small class="text-danger">', '</small>'); ?>
                             <div class="form-group">
                                 <label for="tanggal">Tanggal</label>
                                 <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="<?= date('Y/m/d'); ?>" required="">
                             </div>
                             <div class="form-group">
                                 <label for="nama">Nama</label>
                                 <select name="nama" id="nama" class="form-control" aria-placeholder="Nama" required="">
                                     <option value="">Pilih Nama</option>
                                     <?php foreach ($nama as $n) : ?>
                                         <option value="<?= $n['name']; ?>" aria-required="true"><?= $n['name']; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                                 <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                             </div>
                             <div class="form-group">
                                 <label for="jumlah">Jumlah</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text" id="basic-addon1">Rp.</span>
                                     </div>
                                     <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Pembayaran" required="">
                                 </div>
                             </div>
                             <div class="form-group content-justify-end">
                                 <button type="submit" class="btn btn-primary float-right">Kirim</button>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
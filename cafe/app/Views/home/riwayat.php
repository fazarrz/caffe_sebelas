<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>

<!-- Start header -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Pesanan</h1>
            </div>
        </div>
    </div>
</div>
<!-- End header -->


<!-- Start History -->
<?php $id = $riwayat[0]['id']; ?>

<div class="px-4 px-lg-0"><br>
    <div class="heading-title text-center">
        <h2>PESANANKU</h2>
        <p>Jika pesanan selesai, silahkan menuju kasir untuk melakukan pembayaran dan mengambil pesanan.</p>
    </div>
    <div class="pb-5">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
    <form action="<?= base_url('user/beli/belimenu') ?>" method="post">
        <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Menu</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Tanggal</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Qty</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Total</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Status Pesanan</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Status Bayar</div>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($riwayat as $history) : ?>
            <tr>
                <th scope="row" class="border-0">
                <div class="p-2">
                    <img src="<?= base_url("/upload/" . $history['gambar'].'')?>" alt="" width="90" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?= $history['menu'] ?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Harga : <?= $history['harga']?></span>
                    </div>
                </div>
                </th>
                <td class="border-0 align-middle"><strong><?= date("d F Y  (G:i)", strtotime($history['tgl_order']))?></strong></td>
                <td class="border-0 align-middle"><strong><?= $history['jumlah']?></strong></td>
                <td class="border-0 align-middle"><strong><?= $history['jumlah']* $history['harga']?></strong></td>
                <td class="border-0 align-middle"><strong>
                    <?= $history['statusorder'] == 0 ? 'Menunggu Konfirmasi' : '' ?>
                    <?= $history['statusorder'] == 1 ? 'Sedang Dimasak' : '' ?>
                    <?= $history['statusorder'] == 2 ? 'Selesai' : '' ?> 
                </strong></td>
                <td class="border-0 align-middle"><strong>
                    <?= $history['status'] == 0 ? 'Belum Bayar' : '' ?>
                    <?= $history['status'] == 1 ? 'Lunas' : '' ?>
                </strong></td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
<?php $id = $history['id'] ?>
<!-- End History -->
<?= $this->endSection() ?>
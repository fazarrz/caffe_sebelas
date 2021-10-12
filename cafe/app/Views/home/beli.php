<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>

<!-- Start header -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Keranjang</h1>
            </div>
        </div>
    </div>
</div>
<!-- End header -->

<div class="px-4 px-lg-0"><br>
    <div class="heading-title text-center">
        <h2>KERANJANGKU</h2>
        <p>Cek kembali isi keranjang anda sebelum melakukan pemesanan.</p>
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
                    <div class="py-2 text-uppercase">Harga</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Qty</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Jumlah</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Hapus</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $index = 0;
                    $i = 1;
                    foreach ($keranjang as $item) : ?>
                <tr>
                    <input type="hidden" name="id_menu<?= $i ?>" value="<?= $item['id_menu'] ?>">
                    <input type="hidden" name="hargamenu<?= $i ?>" value="<?= $item['harga'] ?>">
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="<?= base_url("/upload/" . $item['gambar'].'')?>" alt="" width="90" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?= $item['menu'] ?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Status: Ada</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong id="harga<?= $index ?>" class="harga"><?= $item['harga'] ?></strong></td>
                  <td class="border-0 align-middle"><strong><input style="width: 50px; text-align: center;" type="number" class="qty" name="jumlah<?= $i++ ?>" data-index="<?= $index ?>" id="qty<?= $index ?>" value="1" min="1"></strong></td>
                  <td class="border-0 align-middle"><strong><input style="border: none; width: 70px; font-weight: bold;" type="text" class="total" name="total_harga" value="<?= $item['harga'] ?>" id="total<?= $index++ ?>"></strong></td>
                  <td class="border-0 align-middle"><a href="<?= base_url()?>/user/beli/delete/<?=$item['id_keranjang']?>" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Atas Nama</div>
          <div class="p-4">
            <p class="font-italic mb-4">Dibawah ini adalah data diri yang akan menjadi penerima pesanan.</p>
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Nama  : </strong><strong><?= $pelanggan['pelanggan'] ?></strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Email : </strong><strong><?= $pelanggan['email'] ?></strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">No.Telepon : </strong><strong><?= $pelanggan['no_telp'] ?></strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Alamat : </strong><strong><?= $pelanggan['alamat'] ?></strong></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Total Semua Pesanan </div>
          <div class="p-4">
            <p class="font-italic mb-4">Jika anda menekan tombol "pesan sekarang" berarti pesanan ini akan diproses.</p>
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total : </strong><strong class="total-pesan">0</strong></li>
            </ul><button  type="submit"class="btn btn-dark rounded-pill py-2 btn-block">Pesan Sekarang</button>
          </div>
        </div>
      </div>
    </form>    
  </div>
</div>
<!-- End Cart -->

<!-- Start Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let semuaHarga = $('.harga');
        semuaHarga = Array.from(semuaHarga);
        let harga = semuaHarga.map(data => parseInt(data.innerText));
        const totalHarga = harga.reduce((value, current) => {
        return value + current
        } );
        $('.total-pesan').html(totalHarga);
        
        $(document).on("change keyup blur", ".qty", function() {
            let index = $(this).data('index');
            let harga = $(`#harga${index}`).text();
            var y = harga;
            var z = $(`#qty${index}`).val();
            let total = $(`#total${index}`)
            // var dec = ((dit / 100)).toFixed(2); //its convert 10 into 0.10
            // var mult = main * dec; // gives the value for subtract from main value
            var x = y*z;
            total.val(x);
            let subtotal = $('.total');
            subtotal = Array.from(subtotal);
            const totalSemua = subtotal.map(data => parseInt(data.value)).reduce((total, current) => total + current);
            $('.total-pesan').html(totalSemua);
        });

        $(document).on('click', '#btn-modal', function(){
            let formKeranjang = $('#form-keranjang'),html;
            $('.modal-body').html(formKeranjang)
        })
    </script>

<!-- End Javascript -->
<?= $this->endSection() ?>


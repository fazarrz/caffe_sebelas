<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            p{
                font-size: 7px;   
            }
            h4{
                font-size: 15px;  
            }
            table{
                font-family: sans-serif;
                color : #232323;
                border-collapse: collapse;
            }
            table, th, td{
                border: 1px solid #999;
                padding: 8px 20px;
            }
            h6{
                text-align: right;
            }
            

        </style>

    </head>
    <body>
        <h4>CAFE SEBELAS BANDUNG</h4>
        <p>Telp. (022) 4920322, Fax. (042) 4567542</p>
        <p>Jl. Budi Cilember, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153</p><br>
        <hr>
        <h6>
            <?= date('d F Y', $awal) ?> - <?= date('d F Y', $sampai) ?>
        </h6>
        <h3 style="text-align: center">Laporan Keuangan</h3><br><br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Tanggal Order</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                <?php foreach($order as $value):?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $value['id_pelanggan']?></td>
                    <td><?= date("d F Y", strtotime($value['tgl_order']));?></td>
                    <td>Rp. <?= $value['total']?></td>
                </tr>
                <?php endforeach;?>
                <tr>
                    <td colspan="3"><b>Total</b></td>
                    <td><b>Rp. <?= $masukan ? $masukan : '0' ?></b></td>
                </tr>
            </tbody>      
        </table>
        <div style="text-align: right;">
            <h5>Bandung, <?= date('d F Y') ?></h5>
            <p style="font-size: 9px">TTD</p>
            <p style="font-size: 9px">ADMIN CAFE SEBELAS</p>
        </div>
    </body>
</html>
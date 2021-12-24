<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pesan Kamar</title>
</head>

<body>
   <div>

      <?= $nama_pemesan ?>
      <?= $nomor_identitas ?>
      <?= $jk ?>
      <?= $tipe_kamar ?>
      <?= $durasi_menginap ?>

      <?php if ($diskon == '10%') : ?>
         <?= $diskon ?>
      <?php endif; ?>

      <?= $total_bayar ?>
   </div>


</body>

</html>
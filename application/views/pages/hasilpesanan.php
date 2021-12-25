<div class="body">
    <div class="resi">
        <div class="item">
            <h1>Hasil Pesanan Anda</h1>
            <table class="hasil">
                <tr>
                    <td class="bold">Nama Pemesanan</td>
                    <td>: <?= $nama_pemesan ?></td>
                </tr>
                <tr>
                    <td class="bold">Nomor Identitas</td>
                    <td>: <?= $nomor_identitas ?></td>
                </tr>
                <tr>
                    <td class="bold">Jenis Kelamin</td>
                    <td>: <?= $jk ?></td>
                </tr>
                <tr>
                    <td class="bold">Tipe Kamar</td>
                    <td>: <?= $tipe_kamar ?></td>
                </tr>
                <tr>
                    <td class="bold">Durasi Penginapan</td>
                    <td>: <?= $durasi_menginap ?> Hari</td>
                </tr>
                <?php if ($diskon == '10%') : ?>
                    <tr>
                        <td class="bold">Discount</td>
                        <td>: <?= $diskon ?> </td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td class="bold">Total Bayar</td>
                    <td>: Rp. <?= $total_bayar ?></td>
                </tr>
            </table>

            <a class="button" href="<?= base_url() ?>Pesankamar">Pesan Kembali</a>
        </div>
    </div>
</div>
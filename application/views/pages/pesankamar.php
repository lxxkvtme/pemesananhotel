<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar</title>
</head>

<body>
    <section>

        <?= $this->session->flashdata('flash'); ?>


        <div>
            <form method="post" action="<?= base_url('Pesankamar/addPemesanan') ?>">
                <div>
                    <div>
                        <label for="">Nama Pemesanan</label>
                        <input type="text" name="nama_pemesan" id="nama_pemesan">
                        <small style="color: red;"> <?= form_error('nama_pemesan') ?></small>
                    </div>
                    <div>
                        <label for="jk">jenis Kelamin</label>
                        <div>
                            <input type="radio" name="jk" value="Laki-laki">Laki-laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                            <small style="color: red;"> <?= form_error('jk') ?></small>
                        </div>
                    </div>
                    <div>
                        <label for="">Nomor Identitas</label>
                        <input type="number" name="nomor_identitas" id="nomor_identitas">
                        <small style="color: red;"> <?= form_error('nomor_identitas') ?></small>
                    </div>
                </div>
                <div>
                    <label for="tipe_kamar">Tipe Kamar</label>
                    <select name="tipe_kamar" id="tipe_kamar" onChange="pilihKamar()">
                        <option value="" disabled selected>Pilih Jenis Kamar</option>
                        <option value="Standar">STANDAR</option>
                        <option value="Deluxe">DELUXE</option>
                        <option value="Family">FAMILY</option>
                    </select>
                </div>
                <div>
                    <label for="">Harga</label>
                    <input type="number" name="harga_kamar" id="harga_kamar" readonly>
                </div>
                <div>
                    <label for="">Tanggal Pesan</label>
                    <input type="date" name="tanggal_pesan">
                    <small style="color: red;"> <?= form_error('tanggal_pesan') ?></small>
                </div>
                <div>
                    <label for="">Durasi Menginap</label>
                    <input type="number" name="durasi_menginap" id="durasi_menginap">
                    <small style="color: red;"> <?= form_error('durasi_menginap') ?></small>
                </div>
                <div>
                    <label for="">Termasuk Breakfest</label>
                    <input type="checkbox" name="termasuk_breakfast" id="breakfast" value="Ya">Ya
                </div>
                <div>
                    <label for="">Total bayar</label>
                    <input type="number" name="total_bayar" id="total_bayar" readonly>
                </div>
                <input type="text" name="diskon" id="diskon" hidden>
        </div>
        <div>
            <button type="button" onClick='totalBayar()'>Hitung Total Bayar</button>
            <button type="submit">Simpan</button>
            <button type="reset">Batal</button>
        </div>
        </form>
        </div>
    </section>

    <!-- buat dropdown otomatis -->
    <script>
        function pilihKamar() {
            let pilih = document.getElementById('tipe_kamar')
            let hasil = pilih.options[pilih.selectedIndex]

            if (hasil.value == 'Standar') {
                document.getElementById('harga_kamar').value = 500000
            } else if (hasil.value == 'Deluxe') {
                document.getElementById('harga_kamar').value = 600000
            } else if (hasil.value == 'Family') {
                document.getElementById('harga_kamar').value = 700000
            } else {
                document.getElementById('harga_kamar').value = null
            }
        }

        pilihKamar()

        function totalBayar() {
            let hargakamar = document.getElementById('harga_kamar').value
            let durasi = document.getElementById('durasi_menginap').value
            let breakfast = document.getElementById('breakfast')
            let cekBreakfast = ''

            if (breakfast.checked) {
                cekBreakfast = 80000
            } else {
                cekBreakfast = null
            }

            let total = hargakamar * durasi + cekBreakfast
            let diskon = total * 0.1
            let totalharga = ''


            if (durasi > 3) {
                totalharga = total - diskon
                document.getElementById('diskon').value = '10%'
            } else {
                totalharga = total
                document.getElementById('diskon').value = null
            }

            document.getElementById('total_bayar').value = totalharga

        }

        totalBayar()
    </script>



</body>

</html>
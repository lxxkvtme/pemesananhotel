<div class="body">
    <div class="form">
        <div class="item">
            <h1>Pemesanan Kamar Hotel</h1>
            <?= $this->session->flashdata('flash');
            echo form_open('Pesankamar/addPemesanan'); ?>
            <div class="isian">
                <div class="form-control">
                    <label for="">Nama Pemesanan</label>
                    <div class="input">
                        <input type="text" name="nama_pemesan" id="nama_pemesan">
                        <small style="color: red;"> <?= form_error('nama_pemesan') ?></small>
                    </div>
                </div>
                <div class="form-control">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="input">
                        <div>
                            <input type="radio" name="jk" value="Laki-laki">Laki-laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </div>
                        <small style="color: red;"> <?= form_error('jk') ?></small>
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Nomor Identitas</label>
                    <div class="input">
                        <input type="text" name="nomor_identitas" id="nomor_identitas" maxlength="16">
                        <small style="color: red;"> <?= form_error('nomor_identitas') ?></small>
                    </div>
                </div>
                <div class="form-control">
                    <label for="tipe_kamar">Tipe Kamar</label>
                    <div class="input">
                        <select name="tipe_kamar" id="tipe_kamar" onChange="pilihKamar()">
                            <option value="" disabled selected>Pilih Jenis Kamar</option>
                            <option value="Standar">STANDAR</option>
                            <option value="Deluxe">DELUXE</option>
                            <option value="Family">FAMILY</option>
                        </select>
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Harga</label>
                    <div class="input">
                        <input type="number" name="harga_kamar" id="harga_kamar" readonly>
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Tanggal Pesan</label>
                    <div class="input">
                        <input type="date" name="tanggal_pesan">
                        <small style="color: red;"> <?= form_error('tanggal_pesan') ?></small>
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Durasi Menginap</label>
                    <div class="input">
                        <input type="number" name="durasi_menginap" id="durasi_menginap">Hari
                        <small style="color: red;"> <?= form_error('durasi_menginap') ?></small>
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Termasuk Breakfest</label>
                    <div class="input">
                        <input type="checkbox" name="termasuk_breakfast" id="breakfast" value="Ya"> Ya
                    </div>
                </div>
                <div class="form-control">
                    <label for="">Total bayar</label>
                    <div class="input">
                        <input type="number" name="total_bayar" id="total_bayar" readonly>
                    </div>
                </div>
                <input type="text" name="diskon" id="diskon" hidden>
            </div>
            <div class="tombol">
                <button type="button" onClick='totalBayar()'>Hitung Total Bayar</button>
                <button type="submit">Simpan</button>
                <button type="reset">Batal</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>




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
</script>
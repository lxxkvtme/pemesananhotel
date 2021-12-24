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
        <div>
            <form method="post" action="<?= base_url() ?>Welcome/addProduk">
                <div>
                    <div>
                        <label for="">Tipe Kamar</label>
                        <select name="" id="pilihJenisKamar" onChange='pilih()'>
                            <option value="" disabled selected>Pilih Jenis Kamar</option>
                            <option value="standar">STANDAR</option>
                            <option value="deluxe">DELUXE</option>
                            <option value="family">FAMILY</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Harga</label>
                        <input type="number" name="harga" id="harga" readonly>
                    </div>
                    <div>
                        <button type="button">Hitung Total Bayar</button>
                        <button type="submit">Simpan</button>
                        <button type="reset">Batal</button>
                    </div>
            </form>
        </div>
    </section>

    <script>
        function pilih() {
            let pilih = document.getElementById('pilihJenisKamar')
            let hasil = pilih.options[pilih.selectedIndex]

            if (hasil.value == 'standar') {
                document.getElementById('harga').value = 500000
            } else if (hasil.value == 'deluxe') {
                document.getElementById('harga').value = 600000
            } else if (hasil.value == 'family') {
                document.getElementById('harga').value = 700000
            } else {
                document.getElementById('harga').value = null
            }

            console.log(hasil.value)
        }

        pilih()
    </script>
</body>

</html>
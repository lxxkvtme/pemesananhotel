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
            <form>
                <div>
                    <div>
                        <label for="">Nama Pemesanan</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">jenis Kelamin</label>
                        <div>
                            <input type="radio" name="" id="">Laki-laki
                            <input type="radio" name="" id="">Perempuan
                        </div>
                    </div>
                    <div>
                        <label for="">Nomor Identitas</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Tipe Kamar</label>
                        <select name="" id="">
                            <option value="" disabled selected>Pilih Jenis Kamar</option>
                            <option value="">STANDAR</option>
                            <option value="">DELUXE</option>
                            <option value="">FAMILY</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Harga</label>
                        <input type="number" disabled>
                    </div>
                    <div>
                        <label for="">Tanggal Pesan</label>
                        <input type="date">
                    </div>
                    <div>
                        <label for="">Durasi Menginap</label>
                        <input type="number">
                    </div>
                    <div>
                        <label for="">Termasuk Breakfest</label>
                        <input type="checkbox" name="" id="">Ya
                    </div>
                    <div>
                        <label for="">Total bayar</label>
                        <input type="number" disabled>
                    </div>
                </div>
                <div>
                    <button type="button">Hitung Total Bayar</button>
                    <button type="submit">Simpan</button>
                    <button type="reset">Batal</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
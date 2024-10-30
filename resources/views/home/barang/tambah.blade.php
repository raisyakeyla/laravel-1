<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Data Barang</h1>
    <br>
    <form action="/barang/simpan" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Gambar</label>
            <input
                type="text"
                class="form-control"
                name="gambar"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Barang</label>
            <input
                type="text"
                class="form-control"
                name="nama_barang"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ID Jenis</label>
            <input
                type="number"
                class="form-control"
                name="id_jenis"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Harga Beli</label>
            <input
                type="number"
                class="form-control"
                name="harga_beli"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Harga Jual</label>
            <input
                type="number"
                class="form-control"
                name="harga_jual"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stok</label>
            <input
                type="number"
                class="form-control"
                name="stok"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        <button type="submit">simpan</button>
   </form>
</body>
</html>
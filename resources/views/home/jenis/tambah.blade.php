<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Data Jenis</h1>
    <br>
    <form action="/jenis/simpan" method="post">
        @csrf
       
        <div class="mb-3">
            <label for="" class="form-label">Nama Jenis</label>
            <input
                type="text"
                class="form-control"
                name="nama_jenis"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        <button type="submit">simpan</button>
   </form>
</body>
</html>
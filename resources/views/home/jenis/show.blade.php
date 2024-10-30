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
    <form action="/jenis/{{$jenis->id}}/update" method="post">
        @csrf
       
        <div class="mb-3">
            <label for="" class="form-label">Nama Jenis</label>
            <input
                type="text"
                class="form-control"
                name="nama_jenis"
                id=""
                value="{{ $jenis->nama_jenis }}"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help Text</small>
        </div>
        <button type="submit">simpan</button>
   </form>
</body>
</html>
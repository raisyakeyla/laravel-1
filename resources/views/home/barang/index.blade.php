<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman data barang</h1>
    <br>
    <a href="/barang/tambah">tambah barang</a>
    <div
        class="table-responsive"
    >
        <table
        border="3"
        class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">gambar</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">ID jenis</th>
                    <th scope="col">harga beli</th>
                    <th scope="col">harga jual</th>
                    <th scope="col">stok</th>
                    <th scope="col">aksi</th>

                </tr>
            </thead>
            <tbody>
               @foreach($barang as $barang)
               <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->gambar }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->id_jenis }}</td>
                <td>{{ $barang->harga_beli }}</td>
                <td>{{ $barang->harga_jual }}</td>
                <td>{{ $barang->stok }}</td>
                <td><a href="/barang/{{ $barang->id }}/show">edit</a>
                    <a href="/barang/{{ $barang->id }}/destroy"
                    onclick="return confrim('yakin nih mau dihapus?')">hapus</a>
                       
                </td>
               </tr>
               @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
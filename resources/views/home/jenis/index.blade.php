<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman data jenis</h1>
    <br>
    <a href="/jenis/tambah">tambah jenis</a>
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
                    <th scope="col">nama_jenis</th>
                    <th scope="col">aksi</th>

                </tr>
            </thead>
            <tbody>
               @foreach($jenis as $jenis)
               <tr>
                <td>{{ $jenis->id }}</td>
                <td>{{ $jenis->nama_jenis }}</td>
                <td><a href="/jenis/{{ $jenis->id }}/show">edit</a>
                   
                </td>
               </tr>
               @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h3>Data User</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Telpon</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $id => $datauser)
                <tr>
                    <td>{{ $id + 1 }}</td>
                    <td>{{ $datauser['nik'] }}</td>
                    <td>{{ $datauser['name'] }}</td>
                    <td>{{ $datauser['alamat'] }}</td>
                    <td>{{ $datauser['email'] }}</td>
                    <td>{{ $datauser['no_telp'] }}</td>
                    <td>{{ $datauser['role'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <style>
        #pegawai{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-collapse: collapse;
            with: 100%;
        }
        #pegawai td, #pegawai th{
            border: 1px solid #bababa;
            padding: 8px;
        }
        #pegawai tr:nth-child(even){
            background-color: #bababa;
        }
        #pegawai tr:hover{
            background-color: #ddd;
        }
        #pegawai th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff7777;
            color: azure;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 align="center">Laporan Data Pegawai</h3>
    <table class="pegawai">
        <thead>
            <tr>
                <th>Id Pegawai</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $a)
            <tr>
                <td>{{ $a->id_pegawai }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->no_hp }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
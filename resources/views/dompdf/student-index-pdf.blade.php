<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>

  <h1>Data Mahasiswa</h1>

  <table id="customers">
    <tr>
      <th>NIM</th>
      <th>Name</th>
      <th>Jenis Kelamin</th>
      <th>Kelas</th>
      <th>Alamat</th>
      <th>Status</th>
    </tr>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student->nim}}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->gender }}</td>
      <td>{{ $student->class }}</td>
      <td>{{ $student->address }}</td>
      <td>{{ $student->status }}</td>
    </tr>
    @endforeach

  </table>

</body>

</html>

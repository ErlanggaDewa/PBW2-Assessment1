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

  <h1>Data Buku</h1>

  <table id="customers">
    <tr>
      <th>ISBN</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Harga</th>
      <th>Tahun Rilis</th>
      <th>Status</th>
    </tr>
    @foreach ($books as $book)
    <tr>
      <td>{{ $book->isbn}}</td>
      <td>{{ $book->title }}</td>
      <td>{{ $book->author }}</td>
      <td>{{ $book->price }}</td>
      <td>{{ $book->release_year }}</td>
      <td>{{ $book->status }}</td>
    </tr>
    @endforeach

  </table>

</body>

</html>

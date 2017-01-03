<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Download Laporan Mengepul</h3>
    <br><br>
    <table border="1" style="padding: 5px 5px">
      <tr>
        <td style="padding: 10px 15px">ID</td>
        <td>
          Jenis
        </td>
        <td>
          Berat
        </td>
        <td>
          Nama Pemesan
        </td>
        <td>
          Status
        </td>
        <td>
          Waktu Pesan
        </td>
      </tr>
      @foreach($mengepul as $ngepul)
        <tr>
          <td>
            {{$ngepul->id}}
          </td>
          <td>
            {{$ngepul->jenis}}
          </td>
          <td>
            {{$ngepul->berat}}
          </td>
          <td>
            {{$ngepul->oleh}}
          </td>
          <td>
            {{$ngepul->status}}
          </td>
          <td>
            {{$ngepul->updated_at}}
          </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ready To PDF</title>
  </head>
  <body>
    <h2>Ready To PDF</h2>

    <a href="{{route('htmltopdf', ['download' => 'pdf'])}}" style="text-decoration: none;">Export to PDF</a>
    <a href="/adminsampah/transaksi">Home</a>
    <br><br>
    <table border="1" style="padding: 5px 5px">
      <tr>
        <td style="padding: 10px 15px">
          Berat
        </td>
        <td>
          Daerah
        </td>
        <td>
          Nama Pemesan
        </td>
        <td>
          Nama Jasa
        </td>
        <td>
          Status Pengambilan
        </td>
        <td>
          Waktu Menyampah
        </td>
      </tr>
      @foreach($mengepul as $ngepul)
        <tr>
          <td>
            {{$ngepul->berat}} Kg
          </td>
          <td>
            {{$ngepul->daerah}}
          </td>
          <td>
            {{$ngepul->namam}}
          </td>
          <td>
            {{$ngepul->namaj}}
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

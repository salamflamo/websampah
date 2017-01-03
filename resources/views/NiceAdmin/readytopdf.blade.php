<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ready To PDF</title>
  </head>
  <body>
    <h2>Ready To PDF</h2>
    <button>Export To PDF</button>

    <table>
      <tr>
        <td>ID</td>
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
      @foreach($data as $dat)
        <tr>
          <td>
            {{$dat->id}}
          </td>
          <td>
            {{$dat->jenis}}
          </td>
          <td>
            {{$dat->oleh}}
          </td>
          <td>
            {{$dat->status}}
          </td>
          <td>
            {{$dat->updated_at}}
          </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>

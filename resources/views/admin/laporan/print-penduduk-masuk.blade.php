<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Print</title>
  <style>
    *{
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    }
    .text-center{
      text-align: center;
      line-height: 10px;
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    }
    .text-label{
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    }
    td{
      padding: 0px;
    }
    p{
      font-size: 18px;
    }
    .text-list-details{
      font-size: 12px;
      padding: 10px;
    }
    tr td{
			font-size: 12px;
			border: 1px #9a9a9a solid;
      height: 20px;
      padding-top: 5px;
		}
		tr th{
			font-size: 12px;
			border: 1px #9a9a9a solid;
      height: 20px;
      padding-top: 5px;
		}
  </style>
</head>
<body>
  <div class="text-center">
    <h1 style="font-weight: 700;">RUKUN TETANGGA 003/003</h1>
    <h4 style="font-weight: 400;">KELURAHAN SAWAH BARU KECAMATAN CIPUTAT</h4>
    <h4 style="font-weight: 400;">KOTA TANGERANG SELATAN</h4>
    <p style="font-size: 18px; color: #686868">Jalan Raya No.7 Tangerang Selatan</p>
    <hr><br>
    <h3 style="font-weight: 700; margin-top: 20px;"><u>LAPORAN DATA PENDUDUK MASUK</u></h3>
    <h4 style="font-weight: 400; margin-top: 20px;">Periode : {{ $date_from }} - {{ $date_to }}</h4><br><br>
  </div>
  <div style="margin-top: 20px;">
    <table width="100%">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">NIK</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Pelapor</th>
          <th class="text-center">Alasan</th>
          <th class="text-center">Status Penduduk</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        @foreach($data as $d)
        <tr>
          <td class="text-center">{{ $i++ }}</td>
          <td class="text-center">{{ $d->nik }}</td>
          <td class="text-center">{{ $d->name }}</td>
          <td class="text-center">{{ $d->nama_pelapor }}</td>
          <td class="text-center">{{ $d->alasan }}</td>
          <td class="text-center">
            @foreach($data_details as $b)
              @if($b->id_penduduk == $d->id_penduduk)
                Penduduk Tetap
              @endif
            @endforeach
            @foreach($data_details_2 as $c)
              @if($c->id_penduduk == $d->id_penduduk)
                Penduduk Sementara
              @endif
            @endforeach
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
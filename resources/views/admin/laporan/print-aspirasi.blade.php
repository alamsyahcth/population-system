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
    <h1 style="font-weight: 700;">PEMERINTAH KOTA TANGERANG SELATAN</h1>
    <h4 style="font-weight: 700;">KECAMATAN CIPUTAT</h4>
    <h4 style="font-weight: 700;">KELURAHAN SAWAH BARU</h4>
    <h4 style="font-weight: 700;">RUKUN TETANGGA 003 RUKUN WARGA 003</h4>
    <hr><br>
    <h3 style="font-weight: 700; margin-top: 20px;"><u>LAPORAN DATA ASPIRASI</u></h3>
    <h4 style="font-weight: 400; margin-top: 20px;">Periode : {{ $date_from }} - {{ $date_to }}</h4><br><br>
  </div>
  <div style="margin-top: 20px;">
    <table width="100%">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Nomor Handphone</th>
          <th class="text-center">Kategori Aspirasi</th>
          <th class="text-center">Isi Aspirasi</th>
          <th class="text-center">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1 ?>
        @foreach($data as $d)
        <tr>
          <td class="text-center">{{ $i++ }}</td>
          <td class="text-center">{{ $d->name }}</td>
          <td class="text-center">{{ $d->phone }}</td>
          <td class="text-center">{{ $d->name_aspirasi }}</td>
          <td class="text-center">{{ $d->isi }}</td>
          <td class="text-center">
            @if($d->status_aspirasi == 1)
              Menunggu Feedback
            @endif
            @if($d->status_aspirasi == 2)
              Diterima
            @endif
            @if($d->status_aspirasi == 3)
              Ditolak
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
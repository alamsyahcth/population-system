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
      line-height: 10% !important;
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
    tr{
      height: 5px !important;
    }
    }
    td{
      height: 5px !important;
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
    <h3 style="font-weight: 700; margin-top: 20px;"><u>SURAT PENGANTAR</u></h3>
  <h4 style="font-weight: 400; margin-top: 20px;">Nomor : {{ $data->no_sp }}</h4><br><br>
  </div>
    <table style="margin-left: 50px; margin-top:40px;">

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Nama</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $data->name }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Tempat Lahir</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $data->tempat_lahir }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Tanggal Lahir</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $data->tanggal_lahir }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Jenis Kelamin</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          @if($data->jenis_kelamin == 'L')
            <p>Laki-laki</p>
          @else
            <p>Perempuan</p>
          @endif
        </div>
      </div>

       <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Pekerjaan</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $data->pekerjaan }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label">Alamat</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $data->alamat }}</p>
        </td>
      </tr>
      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;">
          <p class="text-label" style="align-items: flex-start;">Keperluan</p>
        </td>
        <td>
          <p>:</p>
        </td>
      </tr>
      @foreach($keperluan as $k)
      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td style="padding-right:30px;"></td>
        <td></td>
        <td>
          <p style="font-weight: 700; margin-top:10px">{{ $k->nama_keperluan }}</p>
          <p style="margin-bottom: 30px;">{{ $k->detail_pelayanan_keterangan }}</p>
        </td>
      </tr>
      @endforeach

      <tr colspan="3"><td></td></tr>
      <tr colspan="3"><td></td></tr>
      <tr colspan="3"><td></td></tr>
      <tr colspan="3"><td></td></tr>
    </table>
    <br><br><br><br>
    <div>
      <table width="100%" style="margin-left: 100px;">
        <tr style="padding-top: -20px;  height:300px; min-height:300px;">
          <td class="text-center">
            <p style="line-height: 30px;">Ketua RW</p>
          </td>
          <td class="text-center">
            <p>Tangerang Selatan, {{ date("d/m/Y") }}</p>
            <p>Ketua RT</p>
          </td>
        </tr>
        <tr colspan="2"><td></td></tr>
        <tr colspan="2"><td></td></tr>
        <tr colspan="2"><td></td></tr>
        <tr colspan="2"><td></td></tr>
        <tr colspan="2"><td></td></tr>
        <tr style="padding-top: -20px;  height:300px; min-height:300px;">
          <td class="text-center">
            <p>(TIDIN)</p>
          </td>
          <td class="text-center">
            <p>(SANDI)</p>
          </td>
        </tr>
      </table>
    </div>
</body>
</html>
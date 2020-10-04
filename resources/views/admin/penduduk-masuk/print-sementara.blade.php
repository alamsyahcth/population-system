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
      font-size: 12px;
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
    <h1 style="font-weight: 700;">RUKUN TETANGGA 003/003</h1>
    <h4 style="font-weight: 400;">KELURAHAN SAWAH BARU KECAMATAN CIPUTAT</h4>
    <h4 style="font-weight: 400;">KOTA TANGERANG SELATAN</h4>
    <p style="font-size: 18px; color: #686868">Jalan Raya No.7 Tangerang Selatan</p>
    <hr><br>
    <h3 style="font-weight: 700; margin-top: 20px;"><u>SURAT KETERANGAN</u></h3>
    <h4 style="font-weight: 400; margin-top: 20px;">Nomor : 000{{ $sementara->id }}/Masuk/<?php echo date("d/m/Y") ?></h4><br><br>
  </div>
    <table style="margin-left: 50px;">
      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td colspan="3">
          <h6>A. Data Penduduk Baru</h6>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">NIK</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->nik }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Nama</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->name }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Jenis Kelamin</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          @if($sementara->jenis_kelamin == 'L')
            <p>Laki-laki</p>
          @else
            <p>Perempuan</p>
          @endif
        </div>
      </div>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Tempat Lahir</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->tempat_lahir }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Tanggal Lahir</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->tanggal_lahir }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Agama</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->agama }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Pendidikan</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->pendidikan }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Status Perkawinan</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->status_perkawinan }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Status Keluarga</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->status_dalam_keluarga }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Kewarganegaraan</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->kewarganegaraan }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Nama Ayah</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->nama_ayah }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Nama Ibu</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->nama_ibu }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Alamat</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p>{{ $sementara->alamat }}</p>
        </td>
      </tr>

      <tr style="padding-top: -20px;  height:300px; min-height:300px;">
        <td width="30%">
          <p class="text-label">Status</p>
        </td>
        <td>
          <p>:</p>
        </td>
        <td>
          <p class="text-secondary">sementara</p>
        </td>
      </tr>
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
            <p>Ketua RW</p>
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
            <p>John Doe</p>
          </td>
          <td class="text-center">
            <p>Ahmad Jauhari</p>
          </td>
        </tr>
      </table>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container" style="height: 500px;">
	<div class="row d-flex align-self-center h-100">
		<div class="col-md-6 d-flex pr-4">
			<div class="justify-content-center align-self-center">
				<h1 class="text-primary-2" style="font-weight: 700; font-size:70px;">Selamat Datang</h1>
				<h3>Di Sistem Kependudukan RT.003 RW.03 Kelurahan Sawah Baru</h3>
				<a href="{{ url('/login/penduduk') }}" class="btn btn-primary mt-5">Silahkan Masuk</a>
			</div>
		</div>
		<div class="col-md-6 d-flex">
			<div class="justify-content-center align-self-center text-center">
				<img src="{{ asset('img/illustration/home-illustration.svg') }}" height="300px" class="img-fluid pl-5"/>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
	{{-- <div class="row mb-4">
		<div class="col-md-12 text-center">
			<h2 class="text-primary-2" style="font-weight: 700;">Berita Terbaru</h2>
			<h6>Berita tentang RT.002 RW.02 Sawah Baru</h6>
		</div>
	</div>
	<div class="row">
		<?php  for ($i=0; $i < 10; $i++) { ?>
		<div class="col-md-4 p-2">
			<a href="#" class="card card-hover">
				<img class="card-img-top" src="{{ asset('img/photo/image-news.jpg') }}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</a>
		</div>
		<?php } ?>
	</div> --}}
</div>
@endsection
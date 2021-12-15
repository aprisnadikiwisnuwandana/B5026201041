@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-primary" > Beli </a>
	<br/>
    <br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $b)
		<tr>
			<td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang }}</td>
			<td>{{ $b->Jumlah }}</td>
			<td>{{ $b->Harga }}</td>
			<td>

				<a href="/keranjangbelanja/hapus/{{ $b->ID}}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $keranjangbelanja->links() }}

@endsection

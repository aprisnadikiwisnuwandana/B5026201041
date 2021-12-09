@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pendapatan</h3>

    <a href="/pendapatan/tambah" class="btn btn-primary" > + Tambah Pendapatan Baru</a>
	<br/>
    <br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
			<td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pendapatan->links() }}

@endsection

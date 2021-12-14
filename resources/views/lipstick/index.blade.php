@extends("layout.ceria")
@section("title", "Tabel Lipstick")

@section("isikonten")

    <h1>Tabel Lipstick</h1>

    <a href="/lipstick/tambah" class="btn btn-primary"> + Tambah Lipstick Baru</a>


	<form class="mt-3" action="/lipstick/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Lipstick .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Merk</th>
			<th>Tersedia</th>
			<th>Opsi</th>

		</tr>
		@foreach($lipstick as $l)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $l->merklipstick }}</td>
			<td>{{ $l->tersedia }}</td>
			<td>
				<a href="/lipstick/edit/{{ $l->kodelipstick}} " class="btn btn-warning">Edit</a>
				<a href="/lipstick/hapus/{{ $l->kodelipstick}}" class="btn btn-danger">Hapus</a>
                <a href="/lipstick/detail/{{ $l->kodelipstick}}" class="btn btn-success">View Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $lipstick->links() }}
@endsection

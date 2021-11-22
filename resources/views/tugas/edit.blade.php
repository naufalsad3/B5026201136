<!DOCTYPE html>
<html>
<head>
	<title>Penugasan Tabel Laravel - 5026201136</title>
</head>
<body>

	<h2>Naufal Sadewa (5026201136) / PWEB B</h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="tanggal" value="{{ $t->Tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="namatugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

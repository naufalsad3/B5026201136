@extends("layout.ceria")
@section("title", "Input Lipstick")

@section("isikonten")
    <h1>Input Lipstick</h1>

	<a href="/lipstick " class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>


	<form action="/lipstick/store" method="post">
		{{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">Merk</label>
            <input type="text" class="form-control" name="merklipstick" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stocklipstick" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" required>
                    <label class="form-check-label" for="hadir">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" id="tidak" name="tersedia" value="X" checked="checked" required>
                    <label class="form-check-label" for="tidak">
                      TIDAK
                    </label>
                  </div>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

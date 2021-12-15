@extends("layout.ceria")
@section("title","5026201136 - Naufal Sadewa")

@section("isikonten")
<h4 style="padding-top: 10px"><center>5026201136 - Naufal Sadewa</center></h4>
<br>
<div class="card-body">
    <table class="table">
        <tr>
            <th scope="col">Anda pengunjung ke:</th>
            <th scope="col">{{ $pagecounter->total() }}</th>

      </tr>
    </table>
</div>
@endsection

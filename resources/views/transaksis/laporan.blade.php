@php
  $total = 0;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Transaksi</title>
  <style>
    table.static {
      position: relative;
      border: 1px solid #543535;
    }
  </style>
</head>

<body>
  <div class="form-group">
    <h3 align="center" style="margin-top: 50px"><b>Laporan Data Transaksi <br>
    Manson Barbershop</b></h3>
    <hr />
    <br>
    @method('put')
    <p style="margin-left: 40px">Periode: {{ $periode }}</p>
    <table id="laporan" class="static " align="center" rules="all" border="1px" style="width: 95%">
      <tr>
        <th>ID Transaksi</th>
        <th>Pelayanan</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Barberman</th>
        <th>Total</th>
      </tr>

      @foreach ($laporan as $index => $lp )
      @php
        $total += $lp['total_pembayaran']
      @endphp
      <tr>
        <td>L-PBU-{{ $index +1 }}</td>
        {{-- <td> {{ $transaksi -> id }}</td> --}}
        <td> {{ $lp ->pelayanan->jenis }}</td>
        <td> {{ $lp ->user->name }}</td>
        <td> {{ $lp ->tanggal }}</td>
        <td> {{ $lp ->jam }} WIB</td>
        <td> {{ $lp ->barberman->nama ?? 'None' }}</td>
        <td id="harga">Rp. {{ number_format($lp ->pelayanan->harga) }}</td>
      </tr>
      @endforeach
      <tr>
        <td style="font-weight: bold">Total</td>
        <td colspan="5"></td>
        <td id="total">Rp. {{ number_format($total) }}</td>
      </tr>

    </table>
  </div>
  <script>
//     function calculateTotal() {
//     var table = document.getElementById("laporan");
//     var rows = table.getElementsByTagName("tr");
//     var total = 0;
//    for (var i = 1; i < rows.length - 1; i++) { // skip the first row (header) and last row (total)
//     var cells = rows[i].getElementsById("harga");
//     var price = parseInt(cells[1].innerHTML);
//     total += price;
//   }
//   document.getElementById("total").innerHTML = total;
// }
// calculateTotal();

    window.print();
  </script>
</body>

</html>
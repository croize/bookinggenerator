<div>
    Invoice Code : @if($invoice_code <= 9) 00{{$invoice_code}} @elseif($invoice_code <= 99) 0{{$invoice_code}} @elseif($invoice_code <= 999) {{$invoice_code}} @endif <br>
    Nama : {{$name}}<br>
    nama_barang : {{$nama_barang}}<br>
    kecamatan : {{$kecamatan}}<br>
    kabupaten : {{$kabupaten}}<br>
    hargatotal : {{$hargatotal}}<br>
    jumlah : {{$jumlah}}<br>
    kode pos : {{$kode_pos}}<br>
    alamat : {{$alamat}}<br>
    no hp : {{$no_hp}}<br>
    provinsi : {{$provinsi}}
</div>

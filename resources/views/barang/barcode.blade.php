<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Barcode</title>
</head>
<style>
    .text-center{
        text-align: center;
    }
</style>
<body>
    <table width="100%" >  
        <tr>
            @foreach ($dataBarang as $key=>$barang)
                <td class="text-center" style="border: 1px solid;">
                    <p> {{ $barang->nama_barang }} - Rp. {{format_uang($barang->harga_modal) }}</p>
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($barang->kode_barang,'C39') }}" 
                    alt="{{ $barang->kode_barang }}" 
                    width="180" height="60"
                    />
                    <br>
                {{ $barang->kode_barang }}
                </td>
                @if($no++ % 3 == 0)
                    </tr><tr>
                @endif
            @endforeach
        </tr>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        .margin-top {
            margin-top: 50px;
        }
        .justify-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <h2 class="justify-center">Bunda Viken Kids and Baby Spa</h2>
        <p class="justify-center">
            Perum Griya Permata Gedangan Tahap 3 Blok N3-25<br>
            Gedangan, Sidoarjo<br>
            No. Telp : 0812-5291-6514
        </p>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p>Id Transaksi:</p>
                <p>Id Pelanggan:</p>
                <p>Nama Pelanggan:</p>
                <p>Nama Ananda:</p>
                <p>Layanan:</p>
                <p>Harga Layanan:</p>
                <p>Total:</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            @foreach ($transaksi as $k)
                <p>: {{ $k->id }}</p>
                <p>: {{ $k->id_pelanggan }}</p>
                <p>: {{ $k->nama_bunda }}</p>
                <p>: {{ $k->nama_ananda }}</p>
                <p>: Rp. {{ $k->harga }}</p>
                <p>: Rp. {{ $k->harga }}</p>
                <p>: Rp. <?php echo $k->harga + $k->harga ?>  </p>
            @endforeach
            </div>
        </div>
        <hr>
        <p class="justify-center">~Terimakasih~</p>

    </div>
</body>
<script>window.print()</script>
</html>

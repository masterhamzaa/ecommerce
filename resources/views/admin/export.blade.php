<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factures</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8062/8062571.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style>


.myfooter {
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
    border-radius:10px;
	background-color: #4494ff;
	color: #fff;
	text-align: center;
    align-items: center;
    line-height: 0.5em;
    padding-top: 13px
}

</style>
</head>
<body>
    <header>
        <img src="https://cdn-icons-png.flaticon.com/512/8062/8062571.png" style="width: 50px;height:50px" alt="">
    </header>
    <h1 class="text-primary font-italic text-monospace">{{ $title }}</h1>
    <span class="text-capitalize">{{ $date }}</span>

    <table class="table ">


        <tr class="thead-dark">
            <th>#</th>
            <th>Client</th>
            <th>Products</th>
            <th>Montant</th>
            <th>Date</th>
        </tr>
        @foreach($factures as $facture)

        <tr>
            <td>{{ $facture->commanderef }}</td>

            <td style="width: 110px">{{ $facture->client_name }}</td>
            <td>{{ $facture->produits }}</td>
            <td style="width: 120px">{{ $facture->ttc }} DH</td>
            <td style="width: 110px">
                {{$facture->datedefacture}}
            </td>
        </tr>

        @endforeach
    </table>

    <div class="myfooter">
        <p>Copyriht&copy;{{date('Y')}}-corporation master</p>
    </div>

</body>
</html>

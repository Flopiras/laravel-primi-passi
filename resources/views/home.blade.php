<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>{{$title}}</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-success text-center py-4">HELLO WORLD!!</h1>
        <div class="text-center">
            <p>
                Welcome in this wonderful place!
            </p>
            <a class="btn btn-primary mb-4" href=" {{ url('next') }}">Next Page</a>
            <p>
                Developed by {{$dev_name}}
            </p>
        </div>
    </div>
</body>

</html>
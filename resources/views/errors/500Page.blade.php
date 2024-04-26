<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 Unauthorized</title>
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet" />
    <style>
        h1 {
            font-size: 200px !important;
        }

        h3 {
            font-size: 50px !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>500</h1>
                <h3>Internal Error</h3>
                <button class="btn btn-primary">Home</button>
            </div>
        </div>
    </div>
</body>

{{-- 404 -> Not Found
500 -> Internal Server Error --}}

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.j
s"></script>
<!-- Core theme JS-->
<script src="{{ asset('asset/js/scripts.js') }}"></script>

</html>

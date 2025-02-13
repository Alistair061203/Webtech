<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        
        <form>
        <button class = "btn btn-info btn=sm"> Back</button>

            <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Category:</p>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Item Name:</p>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Price:</p>
                <div class="col-sm-3">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Qty:</p>
                <div class="col-sm-3">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <p class="col-sm-6 col-form-label"></p>
                <div class="col-sm-3">
                <button class = "btn btn-info btn=sm"> Submit</button>
                </div>
            </div>

        </form>
    </div>
</body>

</html>

<style>
    .container {
        width: 400px;
        background: white;
        border: 1px solid black;
        border-radius: 10px;
        padding: 30px 40px;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;

    }
</style>
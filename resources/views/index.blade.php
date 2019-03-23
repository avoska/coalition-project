<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coalition test</title>

    <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/js/app.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-6 offset-3">
            <form id="productForm" action="{{ route('product-add') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Product name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="stock">Quantity in stock</label>
                    <input type="text" class="form-control" name="stock" id="stock"
                           placeholder="Enter product quantity in stock">
                </div>
                <div class="form-group">
                    <label for="price">Product price per item</label>
                    <input type="text" class="form-control" name="price" id="price"
                           placeholder="Product price per item">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Product name</th>
                    <th scope="col">Quantity in stock</th>
                    <th scope="col">Price per item</th>
                    <th scope="col">Datetime submitted</th>
                    <th scope="col">Total value number</th>
                </tr>
                </thead>
                <tbody id="productsTableBody">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>

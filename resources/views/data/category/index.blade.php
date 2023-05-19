<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
</head>
<body>

<form style="width: 500px;" method="post" action="{{ route('category.store') }}" class="container">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Category</label>
        <input type="text" name="category" class="form-control" id="exampleInputName" aria-describedby="category"
               placeholder="Enter category">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('data.index') }}" class="btn btn-secondary">add new record</a>
</form>


<div class="album py-md-5 text-center ">
    <div class="container">
        @foreach($categories as $c)
            <div class="row" bis_skin_checked="1" style="border-bottom: 100px">
                <div class="col-md-4" bis_skin_checked="1">
                    <div class="card mb-4 box-shadow" bis_skin_checked="1">
                        <div class="card-body" bis_skin_checked="1">
                            <p class="card-text">{{ $c['category'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>

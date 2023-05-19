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




<form style="width: 500px;" method="post" action="{{ route('data.store') }}" class="container">
    @csrf
    <div class="form-group">
        <label for="exampleFormCategoriesSelect">Select categories</label>
        <select class="form-control" name="category_id" id="exampleFormCategoriesSelect">
            <option value="{{ $categories['id'] }}">{{ $categories['category'] }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="Name"
               placeholder="Enter name">
        @error("name")
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPrice">Price</label>
        <input type="text" name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
        @error("price")
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('category.index') }}" class="btn btn-secondary">add category</a>
</form>


<div class="album py-md-5 text-center ">
    <div class="container">
        @foreach($data as $dt)
                <div class="row" bis_skin_checked="1" style="border-bottom: 100px">
                    <div class="col-md-4" bis_skin_checked="1">
                        <div class="card mb-4 box-shadow" bis_skin_checked="1">
                            <div class="card-body" bis_skin_checked="1">
                                <p class="card-text">{{ $dt['name'] }}</p>
                                <p class="card-text">{{ $dt['price'] }}</p>
                                <small class="text-muted">{{ $categories['category'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>

        <div class="container">
            {{ $data->links() }}
        </div>
</div>

</body>
</html>

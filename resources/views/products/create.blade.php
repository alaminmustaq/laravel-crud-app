<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}" >
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="number" id="qty" name="qty">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <input type="submit" value="Submit Product">
    </form>
    
    
</body>
</html>
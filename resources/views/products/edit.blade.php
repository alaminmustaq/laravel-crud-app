<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update' , ['product' => $product])}}" >
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$product->name}}">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="number" id="qty" name="qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="{{$product->price}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{$product->description}}">
        </div>
        <input type="submit" value="Update">
    </form>
    
    
</body>
</html>
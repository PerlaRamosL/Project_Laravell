<div class="container">
    <h2>Products</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-4"style="margin-bottom: 30px;">
                <div class="card" style="height: 100%; margin-bottom: 30px;">
                    <img src="{{Storage::get('/app/public/'.$product->thumbnail)}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Precio: $ {{$product->price}}</li>
                    </ul>
                    <div class="card-body">
                        <button class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

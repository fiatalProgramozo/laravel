<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{$product->price}} руб</p>
            <p>
                <a href="{{route('basket')}}" class= "btn btn-primary"
                role = "button">В корзину</a>
                {{$product->getCategory()}}
                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64" class="btn btn-default"
                    role="button">Подробнее</a>
                <input type="hidden" name="_token" value="jMk1lwsxNjrZDJL3TqSoRVoqy1iF5pyJiLY5ece3">
            </form>
            </p>
        </div>
    </div>
</div>

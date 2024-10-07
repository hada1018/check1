@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <form class="form" action="/products/register" method="get">
        @csrf
        <div class="top-header">
            <div class="top-header__title">
                <h2>商品一覧</h2>
            </div>
            <div class="top-header__button">
                <button type="submit">+ 商品を追加</button>
            </div>
        </div>
    </form>
    <div class="contents">
        <div class="search">
            <form class="form" action="/products/search" method="post">
                @csrf
                <div class="search-criteria">
                    <input type="text" name="name" placeholder="商品名で検索" ></input>
                </div>
                <div class="search-criteria">
                    <button type="submit" >検 索</button>
                </div>
                <div class="search-criteria">
                    <p>価格順で表示</p>
                </div>
                <div class="search-criteria">
                    <select class="search-criteria__select" name="sort" >
                        <option value="" disabled selected>価格で並べ替え</option>
                        <option value="upper">高い順に表示</option>
                        <option value="lower">低い順に表示</option>
                    </select>
                </div>
            </form>
            <hr>
        </div>
        <div class="product">
            <form class="form" action="/products/detail" method="post">
                @csrf
                @foreach ($products as $product)
                <div class="product-list">
                    <div class="product-img" >
                        <div class="product-list__img" >
                            <?php $fname = "storage/img/" . $product['image'] ?>
                            <input type="image" src="{{ asset($fname) }}" name="name" value="{{ $product['name'] }}"></input>
                        </div>
                        <div class="product-list__detail" >
                            <div>{{ $product['name'] }}</div>
                            <div>&yen;{{ $product['price'] }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="content">
    <form class="form" action="/register" method="post">
        @csrf
        <div class="top-header">
            <div class="top-header__title">
                <h2>"ストロベリー"の商品一覧</h2>
            </div>
        </div>
    </form>
    <div class="contents">
        <div class="search">
            <form class="form" action="/products/search" method="post">
                @csrf
                <div class="search-criteria">
                    <input type="text" name="name" value="ストロベリー" ></input>
                </div>
                <div class="search-criteria">
                    <button type="submit" >検 索</button>
                </div>
            </form>
            <form class="form" action="/search" method="post">
                @csrf
                <div class="search-criteria">
                    <p>価格順で表示</p>
                </div>
                <div class="search-criteria">
                    <select class="search-criteria__select" name="sort" required >
                        <option value="" disabled selected>価格で並べ替え</option>
                        <option value="upper">高い順に表示</option>
                        <option value="lower">低い順に表示</option>
                    </select>
                </div>
            </from>
            <hr>
        </div>
        <div class="product">
            <div class="product-list">
                <div class="product-img" >
                    <div class="product-list__img" >
                        <input type="image" src="{{ asset('storage/img/strawberry.png') }}"></input>
                    </div>
                </div>
                <div class="product-list__detail" >
                    <div>ストロベリー</div>
                    <div>&yen;1200</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

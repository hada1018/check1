@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="content">
    <form class="form" action="/register" method="post">
        @csrf
        <table class="form__table">
            <tr><td>
                <h2>商品登録</h2>
            </td></tr>
            <tr><td>
                <p class="form__table-name">商品名</p>
            </td></tr>
            <tr><td>
                <input type="text" name="name" placeholder="商品を入力" ></input>
            </td></tr>
            <tr><td>
                <p class="form__table-name">値段</p>
            </td></tr>
            <tr><td>
                <input type="text" name="value" placeholder="値段を入力" ></input>
            </td></tr>
            <tr><td>
                <p class="form__table-name">商品画像</p>
            </td></tr>
            <tr><td>
                <label>
                    ファイルを選択
                    <input type="file" ></input>
                </label>
            </td></tr>
            <tr><td>
                <p class="form__table-name">季節</p>
                <p class="form__table-msg">複数選択可</p>
            </td></tr>
            <tr><td>
                <input type="checkbox" name="season" value="spring" >春</input>
                <input type="checkbox" name="season" value="summer" >夏</input>
                <input type="checkbox" name="season" value="autumn" >秋</input>
                <input type="checkbox" name="season" value="winter" >冬</input>
            </td></tr>
            <tr><td>
                <p class="form__table-name">商品説明</p>
            </td></tr>
            <tr><td>
                <textarea name="expalin" placeholder="商品の説明を入力" ></textarea>
            </td></tr>
            <tr><td>
                <div class="form__button" >
                    <input type="button" class="form__btn-rtn" onclick="history.back()" value="戻る" ></input>
                    <button type="submit" class="form__btn-reg" >登録</button>
                </div>
            </td></tr>
        </table>
    </form>
</div>
@endsection

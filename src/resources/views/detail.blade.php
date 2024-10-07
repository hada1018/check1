@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="content">
    <form class="form" action="/register" method="post">
        @csrf
        <table class="form__table" >
            <tr>
                <td>
                    <div class="form__title" >
                        <p class="form__title-name" >商品一覧</p>
                        <p>></p>
                        <p>キウイ</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form__product-img" >
                        <input type="image" src="{{ asset('storage/img/banana.png') }}"></input>
                    </div>
                    <label>
                        ファイルを選択
                        <input type="file" ></input>
                    </label>
                    <p class="form__fname">banana.png</p>
                </td>
                <td>
                    <div class="form__item-right" >
                        <p class="form__table-name">商品名</p>
                        <input type="text" name="name" placeholder="商品を入力" ></input>
                        <p class="form__table-name">値段</p>
                        <input type="text" name="value" placeholder="値段を入力" ></input>
                        <p class="form__table-name">季節</p>
                        <div class="form__item-right-checkbox" >
                            <input type="checkbox" name="season" value="spring" >春</input>
                            <input type="checkbox" name="season" value="summer" >夏</input>
                            <input type="checkbox" name="season" value="autumn" >秋</input>
                            <input type="checkbox" name="season" value="winter" >冬</input>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="form__table-name">商品説明</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="expalin" placeholder="商品の説明を入力" ></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="form__button" >
                        <input type="button" class="form__btn-rtn" onclick="history.back()" value="戻る" ></input>
                        <button type="submit" class="form__btn-reg" >変更を保存</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection

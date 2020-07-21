@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="" method="post">
        @csrf
        <div>
            <label for="">メールアドレス</label>
            <input type="text" name="email" value="">
        </div>
        <div>
            <label for="">パスワード</label>
            <input type="text" name="password" value="">
        </div>
        <div>
            <label for="">パスワード（確認用）</label>
            <input type="text" name="password_confirm" value="">
        </div>
        <div>
            <label for="">お名前</label>
            <input type="text" name="name" value="">
        </div>
        <div>
            <label for="">フリガナ</label>
            <input type="text" name="name_kana" value="">
        </div>
        <div>
            <label for="">性別</label>
            <input type="text" name="sex" value="">
        </div>
        <div>
            <label for="">生年月日</label>
            <input type="text" name="birthday" value="">
        </div>
        <div>
            <label for="">郵便番号</label>
            <input type="text" name="zip" value="">
        </div>
        <div>
            <label for="">都道府県</label>
            <input type="text" name="prefecture" value="">
        </div>
        <div>
            <label for="">市区町村</label>
            <input type="text" name="address1" value="">
        </div>
        <div>
            <label for="">以降の住所</label>
            <input type="text" name="address2" value="">
        </div>
        <div>
            <label for="">建物名、号室</label>
            <input type="text" name="address3" value="">
        </div>

        <div>
            <input type="submit" value="登録">
        </div>
    </form>
@endsection

{{-- @section('assets')
<script src="{{ mix('/js/member_add.js') }}"></script>
@endsection --}}
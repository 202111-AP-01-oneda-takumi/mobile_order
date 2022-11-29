@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/allergy.css">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
@endsection

@section('content')
<div class="container">

  <div class="register">
    <div class="register__title">
      <h1>ユーザー情報編集</h1>
    </div>

    <form role="form" action="/register" method="post">
      @csrf
      <ul class="register__form">
        <li class="register__item">
          <p class="register__itemText">おなまえ（ひらがな）</p>
          <input type="text" name="name" id="name" class="register__input" tabindex="1">
        </li>
        <li class="register__item">
          <p class="register__itemText">メールアドレス</p>
          <input type="email" name="email" id="email" class="register__input" tabindex="4">
        </li>
        <li class="register__item">
          <p class="register__itemText">パスワード</p>
          <a class="register__input" href="">パスワードの変更はこちら</a>
        </li>
        <li class="register__item">
          <p class="register__itemText">アレルギーがあれば選択してください。</p>
          @include('includes.allergy')
        </li>
      </ul>

      <div class="register__buttons">
        <button class="button --white"><a href="{{ route('user.loginForm')}}">戻る</a></button>
        <button class="button --bulue" name="submit" value="register" type="submit">編集完了</button>
      </div>
    </form>
  </div>
</div>
@endsection
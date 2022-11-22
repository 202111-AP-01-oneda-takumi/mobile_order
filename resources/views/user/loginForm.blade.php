@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection


<div class="login">
  <h1 class="login__title">ログイン</h1>
  <button class="button --white"><a href="{{ route('admin.top')}}">管理者ログイン</a></button>


  <form action="/login" method="post" name="Login_Form" class="login__form">
    @csrf
    <div class="login__items">
      <div class="login__item">
        <p class="login__itemText">メールアドレス</p>
        <input type="text" class="login__input" name="email" required />
      </div>
      <div class="login__item">
        <p class="login__itemtext">パスワード</p>
        <input type="password" class="login__input" name="password" required />
      </div>
    </div>
    <div class="login__button">
      <button class="button --bulue" name="Submit" value="Login" type="Submit">ログイン</button>
    </div>
  </form>
  <div class="login__register">
  <a href="{{ route('user.registerForm')}}" class="login__registerItem">新規登録画面へ</a>
  <a href="" class="login__registerItem">パスワードを忘れた方</a>
  </div>
</div>
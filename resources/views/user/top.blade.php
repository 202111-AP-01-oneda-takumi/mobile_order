@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection

<div class="user_main">
  <div class="user_main__head">
    <div id="hamburgerOpen" class="user_main__icon">
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line --1"></span>
        <span class="hamburger__line --2"></span>
        <span class="hamburger__line --3"></span>
      </div>
      <nav class="hamburger__menu">
        <ul class="hamburger__menuList">
          <li class="hamburger__menuItem"><a href="{{ route('user.info') }}">ユーザー情報を見る</a></li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
          <li class="hamburger__menuItem">メニュー1</li>
        </ul>
        <div class="hamburger__logOut">
          <button class="button --bulue"><a href="{{ route('user.logout')}}">ログアウト</a></button>
        </div>
      </nav>
      <div class="black-bg" id="js-black-bg"></div>
    </div>

    <div class="user_main__head_center">
      <h1 class="user_main__head_text">メニュー 一覧</h1>
    </div>
    <a href="{{ route('user.cart') }}" class="user_main__icon">
      <img class="user_main__icon_right" src="img/iconCart.svg" class="user_main__cart_img" alt="">
    </a>
  </div>
  <nav>
    <ul class="user_main__menu_bar">
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">人気&おすすめ</a>
      </li>
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">アルコール</a>
      </li>
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">ソフトドリンク</a>
      </li>
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">一品</a>
      </li>
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">ご飯もの</a>
      </li>
      <li class="user_main__menu_bar_list">
        <a href="#" class="user_main__menu_bar_item">デザート</a>
      </li>
    </ul>
  </nav>
  <section class="user_main__menu_list_1">
    <div class="user_main__menu_list_title">
      <h2 class="user_main__menu_list_text">人気&おすすめ</h2>
    </div>
    <div class="user_main__menu">
      <ul class="user_main__menu_list">
        <li class="user_main__menu_item">
          <a href="">
            <img class="user_main__menu_image" src="img/img_sake.JPG" alt="">
            <p class="user_main__menu_text">鮭のホイル焼き</p>
          </a>
        </li>
        <li class="user_main__menu_item">
          <a href="">
            <img class="user_main__menu_image" src="img/img_kinoko.JPG" alt="">
            <p class="user_main__menu_text">きのことベーコンの<br>トマトパスタ</p>
          </a>
        </li class="user_main__menu_item">
        <li class="user_main__menu_item">
          <a href="">
            <img class="user_main__menu_image" src="img/img_sake.JPG" alt="">
            <p class="user_main__menu_text">鮭のホイル焼き</p>
          </a>
        </li>
        <li class="user_main__menu_item">
          <a class="" href="">
            <img class="user_main__menu_image" src="img/img_kinoko.JPG" alt="">
            <p class="user_main__menu_text">きのことベーコンの<br>トマトパスタ</p>
          </a>
        </li>
        <li class="user_main__menu_item">
          <a href="">
            <img class="user_main__menu_image" src="img/img_sake.JPG" alt="">
            <p class="user_main__menu_text">鮭のホイル焼き</p>
          </a>
        </li>
        <li class="user_main__menu_item">
          <a class="" href="">
            <img class="user_main__menu_image" src="img/img_kinoko.JPG" alt="">
            <p class="user_main__menu_text">きのことベーコンの<br>トマトパスタ</p>
          </a>
        </li>
      </ul>
    </div>
  </section>
@section('js')
  <script src="{{ asset('/js/humburger.js') }}"></script>
@endsection
</div>
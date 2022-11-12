@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/user.css">
@endsection

<div class="user_main">
  <div class="user_main__head">






    <a href="{{ route('user.info') }}" class="user_main__icon">
      <img class="user_main__icon_left" src="img/icon_hamburgerMenu.svg"  alt="画像">
    </a>




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
            <p class="user_main__menu_text">秋刀魚の塩焼き</p>
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
            <p class="user_main__menu_text">秋刀魚の塩焼き</p>
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
            <p class="user_main__menu_text">秋刀魚の塩焼き</p>
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
</div>
@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/user_top.css">
@endsection

<div class="user_main">
  <div class="user_main__head">
    <a href="" class="user_main__icon">
      <img class="user_main__icon_left" src="img/icon_gear-mark.svg" alt="画像">
    </a>
    <div class="user_main__head_center">
      <h1 class="user_main__head_text">メニュー 一覧</h1>
    </div>
    <a href="" class="user_main__icon">
      <img class="user_main__icon_right" src="img/icon_cart.svg" class="user_main__cart_img" alt="">
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
      <ul>
        <li class="user_main__menu">
          <a href="">
            <img src="img/img_sake.JPG" alt="">
            <p>秋刀魚の塩焼き</p>
          </a>
        </li>
        <li>
          <a class="" href="">
            <img src="img/img_kinoko.JPG" alt="">
            <p>きのことベーコンのトマトパスタ</p>
          </a>
        </li>
      </ul>
    </div>
  </section>
</div>
@extends('layouts.index')
<div class="adminTop">
  <h1 class="adminTop__title">オーダー管理</h1>

  @section('content')
  <div class="adminTop__top">
    <div id="hamburgerOpen" class="user_main__icon">
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line --1"></span>
        <span class="hamburger__line --2"></span>
        <span class="hamburger__line --3"></span>
      </div>
      <nav class="hamburger__menu">
        <ul class="hamburger__menuList">
          <li class="hamburger__menuItem"><a href="{{ route('admin.userList') }}">ユーザー情報 一覧</a></li>
          <li class="hamburger__menuItem"><a href="{{ route('admin.menuList') }}">メニュー 一覧</a></li>
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




  </div>

  <ul class="adminTop__list">
    <li class="adminTop__item">
      <div class="adminTop__information">
        <ul class="adminTop__informationList">
          <li class="adminTop__informationItem">卓番号<span class="number">A2</span></li>
          <div class="adminTop__informationRight">
            <li class="adminTop__informationItem --right">伝票番号<span class="number">0002</span></li>
            <li class="adminTop__informationItem --right">Time<span class="time">15:54</span></li>
          </div>
        </ul>
      </div>
      <div class="adminTop__menu">
        <ul class="adminTop__menuList">
          <li class="adminTop__order" type="disc">生ビール<span class="count">2</span></li>
        </ul>
      </div>
    </li>
    <li class="adminTop__item">
      <div class="adminTop__information">
        <ul class="adminTop__informationList">
          <li class="adminTop__informationItem">卓番号<span class="number">A1</span></li>
          <div class="adminTop__informationRight">
            <li class="adminTop__informationItem --right">伝票番号<span class="number">0001</span></li>
            <li class="adminTop__informationItem --right">Time<span class="time">15:43</span></li>
          </div>

        </ul>
      </div>
      <div class="adminTop__menu">
        <ul class="adminTop__menuList">
          <li class="adminTop__order" type="disc">生ビール<span class="count">3</span></li>
          <li class="adminTop__order" type="disc">鮭のホイル焼き<span class="count">1</span></li>
        </ul>
      </div>
    </li>
  </ul>
</div>


@endsection

@section('js')
  <script src="{{ asset('/js/humburger.js') }}"></script>
@endsection

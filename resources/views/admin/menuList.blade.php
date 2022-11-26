@extends('layouts.index')
<main class="menuList">
  <div class="menuList__title">
    <h1 class="menuList__titleText">メニュー 一覧</h1>
  </div>
  @section('content')
  <div class="menuList__wrap">
    <table>
      <tr class="menuList__list">
        <th class="menuList__item --url">画像url</th>
        <th class="menuList__item --name">商品名</th>
        <th class="menuList__item --area">配置場所</th>
        <th class="menuList__item --are">アレルギー情報</th>
        <th class="userList__item --edit">編集</th>
        <th class="userList__item --delete">削除</th>

      </tr>
      <tr class="menuList__list">
        <td class="menuList__item --url">image.png</td>
        <td class="menuList__item --name">鮭のホイル焼き</td>
        <td class="menuList__item --area">1</td>
        <td class="menuList__item --are">アレルギー情報</td>
        <td class="userList__item --edit"><a href="{{ route('admin.userEdit') }}">編集</a></td>
        <td class="userList__item --delete"><a href="">削除</a></td>

      </tr>
    </table>

  </div>
</main>

@endsection

@section('js')
<!-- <script src="{{ asset('/js/humburger.js') }}"></script> -->
@endsection
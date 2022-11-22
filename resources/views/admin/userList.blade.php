@extends('layouts.index')
<main class="userList">
  <div class="userList__title">
  <button class="button --bulue"><a href="{{ route('admin.top')}}">戻る</a></button>
    <h1 class="userList__titleText">ユーザー情報 一覧</h1>
  </div>
  @section('content')
  <div class="userList__wrap">
    <table class="userList__body">
      <tr class="userList__list">
        <th class="userList__item --id">ID</th>
        <th class="userList__item --name">おなまえ</th>
        <th class="userList__item --mail">メールアドレス</th>
        <th class="userList__item --are">アレルギー情報</th>
        <th class="userList__item --">管理者権限</th>
        <th class="userList__item --edit">編集</th>
        <th class="userList__item --delete">削除</th>
      </tr>
      <tr class="userList__list">
        <td class="userList__item --id">1</td>
        <td class="userList__item --name">admin</td>
        <td class="userList__item --mail">admin@admin.com</td>
        <td class="userList__item --are">アレルギー情報</td>
        <td class="userList__item --">0 or 1</td>
        <td class="userList__item --edit"><a href="">編集</a></td>
        <td class="userList__item --delete"><a href="">削除</a></td>
      </tr>
    </table>

  </div>
</main>

@endsection

@section('js')
<!-- <script src="{{ asset('/js/humburger.js') }}"></script> -->
@endsection
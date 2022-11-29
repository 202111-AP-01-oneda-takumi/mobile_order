@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/allergy.css">
@endsection

@section('content')
<main>
  <div class="infomationConfirmation">
    <h1 class="infomationConfirmation__title">ユーザー情報確認</h1>
    <dl class="infomationConfirmation__dl">
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">おなまえ</dt>
        <dd class="infomationConfirmation__dd">{{ $user['name'] }}</dd>
      </div>
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">メールアドレス</dt>
        <dd class="infomationConfirmation__dd">{{ $user['email'] }}</dd>
      </div>
      <!-- <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">パスワード</dt>
        <dd class="infomationConfirmation__dd">・・・・・・・・・・</dd>
      </div> -->
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">アレルギー情報</dt>
        <dd class="infomationConfirmation__dd">{{ $user['alergy'] }}</dd>
        @include('includes.allergy')
      </div>
    </dl>
    <div class="infomationConfirmation__buttons">
      <button class="button --white" type="button" onClick="history.back()">
        戻る
      </button>
      <button class="button --bulue">
        <a href="{{ route('admin.userEdit')}}">変更する</a>
      </button>
    </div>
  </div>
</main>
@endsection
@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
<main>
  <div class="infomationConfirmation">
    <h1 class="infomationConfirmation__title">ユーザー情報確認</h1>
    <dl class="infomationConfirmation__dl">
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">おなまえ</dt>
        <dd class="infomationConfirmation__dd">おねだ　たくみ</dd>
      </div>
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">メールアドレス</dt>
        <dd class="infomationConfirmation__dd">t.oneda.carecon@gmail.com</dd>
      </div>
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">パスワード</dt>
        <dd class="infomationConfirmation__dd">・・・・・・・・・・</dd>
      </div>
      <div class="infomationConfirmation__item">
        <dt class="infomationConfirmation__dt">アレルギー情報</dt>
        <dd class="infomationConfirmation__dd">アレルギーリスト</dd>
      </div>
    </dl>
    <div class="infomationConfirmation__buttons">
      <button class="button --white" type="button" onClick="history.back()">
        戻る
      </button>
      <button class="button --bulue">
        変更する
      </button>
    </div>
  </div>
</main>
@endsection
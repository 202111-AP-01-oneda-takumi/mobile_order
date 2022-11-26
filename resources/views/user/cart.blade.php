@extends('layouts.index')

<!-- カート内確認 -->

@section('content')
<div class="cart">
  <h1 class="cart__title">カート内確認</h1>
  <p class="cart__attention">こちらの内容でよろしければ「注文確定」ボタンをクリックしてください。</p>
  <ul class="cart__list">
    <li class="cart__item">
      <p class="cart__text">キノコ</p>

      <div class="cart__quantity">数量
        <div include="form-input-select()">
          <select required class="selectbox">
            <option value="" hidden>1</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>

    </li>
    <li class="cart__item">
      <p class="cart__text">ビール</p>
      <div class="cart__quantity">数量
        <div include="form-input-select()">
          <select required class="selectbox">
            <option value="" hidden>1</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
    </li>
    <li class="cart__item">
      <p class="cart__text">パスタ</p>
      <div class="cart__quantity">数量
        <div include="form-input-select()">
          <select required class="selectbox">
            <option value="" hidden>1</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
    </li>
  </ul>
  <div class="infomationConfirmation__buttons">
    <button class="button --white" type="button" onClick="history.back()">
      戻る
    </button>
    <button id="modalOpen" class="button --bulue">注文確定</button>
    <div id="easyModal" class="modal">
      <div class="modal__content">
        <div class="modal__header">
          <p class="modal__headerText">注文を確定します</p>
          <span id="modalClose" class="modal__close">×</span>
        </div>
        <div class="modal__body">
          <button class="button --bulue" type="button" onClick="history.back()">
            確定する
          </button>
        </div>
      </div>
    </div>
  </div>

  @section('js')
  <script src="{{ asset('/js/modal.js') }}"></script>
  @endsection
</div>
@endsection

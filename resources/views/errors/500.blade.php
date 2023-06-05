@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center"  style="color:red">
          <p>サーバーエラーが発生しました。このエラーが続くようであれば、お手数ですがお問合せください。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
@extends('layouts.master')
@section('title', 'お問合せフォーム（確認）')
@section('content')

<form action="/" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="name" value="{{$name}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="hidden" name="content" value="{{$content}}">
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">お名前</label>
        <div class="col-sm-6">{{$name}}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">メールアドレス</label>
        <div class="col-sm-6">{{$email}}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">お問合せ内容</label>
        <div class="col-sm-6">{{$content}}</div>
    </div>
    <div class="form-group row mt-5">
        <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">送信</button>
        </div>
    </div>
</form>

@endsection
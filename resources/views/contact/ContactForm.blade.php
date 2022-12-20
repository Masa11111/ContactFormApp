@extends('layouts.master')
@section('title', 'お問合せフォーム')
@section('content')

        <form method="post" action="/" class="mt-3">
            @method('patch')
            {{csrf_field()}}
            <div class="mb-3">
                <label for="inputName" class="form-label">お名前</label>
                <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="inputName" placeholder="お名前">
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">メールアドレス</label>
                <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="inputEmail" placeholder="name@example.com">
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputContent" class="form-label">お問い合せ内容</label>
                <textarea class="form-control @if($errors->has('content')) is-invalid @endif" name="content" id="inputContent" rows="3"></textarea>
                @error('content')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>

@endsection
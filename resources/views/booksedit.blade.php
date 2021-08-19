@extends('layouts.app')

@section('JavaScript', 'books_validation')

@section('content')
<div class="row container">
    <div class="col-md-12" id="bookValidation">
    @include('common.errors')
    <form action="{{ route('book.update') }}" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{$book->id}}">
        <div class="form-group">
           <label for="item_name">本のタイトル</label>
           <input type="text" name="item_name" class="form-control" value="{{$book->item_name}}">
        </div>
        <div class="form-group">
           <label for="item_amount">金額</label>
        <input type="text" name="item_amount" class="form-control" value="{{$book->item_amount}}">円
        </div>
        <div class="form-group">
           <label for="item_number">冊数</label>
        <input type="text" name="item_number" class="form-control" value="{{$book->item_number}}">冊
        </div>
        <div class="form-group">
           <label for="published">出版日</label>
            <input type="datetime" name="published" class="form-control" value="{{$book->published}}"/>
        </div>
        <div class="form-group">
            <label for="item_img">表紙画像</label>
            <input type="file" name="item_img"/>
        </div>
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">保存</button>
            <a class="btn btn-link pull-right" href="{{ route('book.index') }}">
                Back
            </a>
        </div>
    </form>
    </div>
</div>
@endsection
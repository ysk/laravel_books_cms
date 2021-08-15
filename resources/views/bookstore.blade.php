@extends('layouts.app')
@section('content')
<div class="row container">
    <div class="col-md-12">
    @include('common.errors')

    <form action="{{ route('book.store') }}" method="POST" class="form-horizontal">
    @csrf

        <div class="form-group">
           <label for="item_name">Title</label>
           <input type="text" name="item_name" class="form-control" value="{{ old('item_name') }}">
        </div>




        <div class="form-group">
           <label for="item_amount">金額</label>
        <input type="text" name="item_amount" class="form-control" value="{{ old('item_amount') }}">
        </div>

        <div class="form-group">
           <label for="item_number">数</label>
        <input type="text" name="item_number" class="form-control" value="{{ old('item_number') }}">
        </div>

        
        <div class="form-group">
           <label for="published">公開日</label>
            <input type="date" name="published" class="form-control" value="{{ old('published') }}"/>
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
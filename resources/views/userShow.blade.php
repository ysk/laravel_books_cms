@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-title">プロフィール 参照</div>
    <div class="card-body">
        <div class="card-body">
            <table class="table table-striped task-table">
                <tr>
                    <th>{{ $user->name }}さんのプロフィール</th>
                </tr>
                <tr>
                    <td class="table-text">
                        <div class="form-group">
                        <div class="form-group">{{ $user->name }}</div>
                        <div class="form-group">{{ $user->email }}</div>
                        <div class="form-group">{{ $user->text }}</div>
                        <div class="form-group">{{ $user->url }}</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>{{ $user->name }}さんの本一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td class="table-text">
                                    @if($book->item_img)
                                    <img src="/upload/{{ $book->item_img }}" alt="{{ $book->item_name }}" style="width:150px;">
                                    @else
                                    <img src="/images/no_image.png" alt="No Image" style="width:150px;">
                                    @endif
                                    <div>{{ $book->item_name }}</div>
                                    <div>{{ $book->item_amount }}円</div>
                                    <div>{{ $book->item_number }}冊</div>
                                    <div>{{ $book->published->format('Y年m月d日') }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



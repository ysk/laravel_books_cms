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
                    <div class="form-group">{{$user->id}}</div>
                        <div class="form-group">{{ $user->image_file_name }}</div>
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
                                    <div>{{ $book->item_name }}</div>
                                    <div>{{ $book->item_number }}</div>
                                    <div>{{ $book->item_amount }}</div>
                                    <div>{{ $book->published }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



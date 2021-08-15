@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-title">プロフィール 編集</div>
    <div class="card-body">
    @include('common.errors')

        <div class="card-body">
            <table class="table table-striped task-table">
            <tr>
                <th>プロフィール編集</th>
            </tr>
            <tr>
                <td class="table-text">

                    <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                <div class="form-group">{{ $user->image_file_name }}</div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="text">{{ $user->text }}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="url" class="form-control" value="{{ $user->url }}">
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">保存</button>
                    <a class="btn btn-primary" href="{{ route('profile.show') }}">戻る</a>
                </div>
                </form>
                </td>
            </tr>
            </table>
        </div>
    </div>
</div>
@endsection


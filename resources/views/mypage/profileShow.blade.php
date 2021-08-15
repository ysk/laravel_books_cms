@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-title">プロフィール 参照</div>


    <div class="card-body">
        <div class="card-body">
            <table class="table table-striped task-table">
                <tr>
                    <th>プロフィール一覧</th>
                </tr>
                <tr>
                    <td class="table-text">
                        <div class="form-group">{{ $user->image_file_name }}</div>
                        <div class="form-group">{{ $user->name }}</div>
                        <div class="form-group">{{ $user->email }}</div>
                        <div class="form-group">{{ $user->text }}</div>
                        <div class="form-group">{{ $user->url }}</div>
                        <div class="well well-sm"><a class="btn btn-primary" href="{{ route('profile.edit') }}">編集</a></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-title">本のタイトル</div>
    @include('common.errors')

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if (count($books) > 0)
    <div class="card-body">
        <div class="card-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>みんなの本一覧</th>
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
                            <td>
                                <a href="{{ url('books/edit/' . $book->id) }}" class="btn btn-danger">更新</a>
                            </td>
                            <td>
                                <form action="{{ url('books/destroy/' . $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-mod-4 offset-md-4">
        {{ $books->links() }}
        </div>
    </div>
</div>
@endsection


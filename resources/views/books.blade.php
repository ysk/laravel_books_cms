@extends('layouts.app')

@section('JavaScript', 'books_index')

@section('content')
<div class="card-body">
    <div class="card-title">本のタイトル</div>
    @include('common.errors')

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    {{-- 検索結果の表示 --}}
    @if (isset($result))
    <div class="alert alert-success">
        {{ $result }}
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
                            <div><a href="{{ url('user/' . $book->user->id) }}">{{ $book->user->name }}</a>さん</div>    
                            <div>{{ $book->item_name }}</div>
                                <div>{{ $book->item_number }}</div>
                                <div>{{ $book->item_amount }}円</div>
                                <div>{{ $book->published->format('Y年m月d日') }}</div>
                                <div>
                                @if($book->item_img)
                                <img src="/upload/{{ $book->item_img }}" alt="{{ $book->item_name }}" style="width:150px;">
                                @else
                                <img src="/images/no_image.png" alt="No Image" style="width:150px;">
                                @endif
                            </div>
                            </td>
                            <td>
                                @auth
                                    @if (Auth::id() == $book->user->id) 
                                    <a href="{{ url('books/edit/' . $book->id) }}" class="btn btn-danger">更新</a>
                                    @endif
                                @endauth
                            </td>
                            <td>
                                @auth
                                    @if (Auth::id() == $book->user->id) 
                                    <div id="bookDelete">
                                    <form action="{{ url('books/destroy/' . $book->id) }}" method="POST" @submit="confirmSubmit()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">削除</button>
                                    </form>
                                    </div>
                                    @endif
                                @endauth
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


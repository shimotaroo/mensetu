@extends('app')

@section('title', '面接情報編集')

@section('content')

    @include('nav')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto my-5">
                <div class="card mt-5 mb-3">
                    <div class="card-body text-center">
                        <h2 class='h4 card-title text-center mt-5 mb-1'><span class="bg cyan darken-3 text-white py-3 px-4 rounded-pill">面接情報を編集する</span></h2>
                        <p class="mt-4">Edit</p>

                        @include('error_card_list')

                        <div class="mt-5">
                            <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
                                @method('PATCH')
                                @include('articles.form')
                                <button type="submit" class="btn btn-block cyan darken-3 text-white waves-effect col-lg-6 col-md-7 col-sm-8 col-xs-10 mx-auto mt-5">
                                    更新する
                                </button>
                                <a class='btn btn-block grey text-white waves-effect col-lg-6 col-md-7 col-sm-8 col-xs-10 mx-auto mt-3 mb-5' href="{{ route('articles.index') }}">戻る</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')

@endsection

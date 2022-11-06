@extends('layouts.template')
@section('content')
        <div class="py-3 my-5">
            <hr>
                <div class="py-3 my-5 text-center">
                    <h1 class="text-2xl">{{$article->title}}</h1>
                    <p>{{$article->description}}</p>
                    <p>{{$article->content}}</p>
                    <a href="/admin"><button class="my-3 mx-5 bg-green-600 px-9 py-3 text-white rounded">Show More</button></a>
                    <form class="inline" action="/admin/delete/{{$article->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="my-3 mx-5 bg-red-600 px-9 py-3 text-white rounded">Delete</button>
                    </form>
                </div>
            <hr>
        </div>
@endsection
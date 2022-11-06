@extends('layouts.template')
@section('content')
        <div class="py-3 my-5">
            <hr>
                <div class="py-3 my-5 text-center">
                    <h1 class="text-2xl">{{$article[0]->title}}</h1>
                    <p>{{$article[0]->description}}</p>
                    <p>{{$article[0]->content}}</p>
                    <a href="/articles"><button class="my-3 mx-5 bg-green-600 px-9 py-3 text-white rounded">Back</button></a>
                </div>
                <hr>
                <hr>
                <div class="py-3 my-5 text-center">
                    <h1 class="text-2xl">{{$author[0]->name}}</h1>
                    <p>{{$author[0]->email}}</p>
                </div>
        </div>
@endsection
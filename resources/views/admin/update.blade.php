@extends('layouts.template')
@section('content')
    <form action="/admin/update/{{$article->id}}" method="POST">
        @csrf
        @method('put')
        <input type="text" placeholder="Title..." name="articleTitle" class="px-9 py-3 rounded" value="{{$article->title}}">
        <input type="text" placeholder="Description..." name="articleDescription" class="px-9 py-3 rounded" value="{{$article->description}}">
        <input type="text" placeholder="Content..." name="articleContent" class="px-9 py-3 rounded" value="{{$article->content}}">
        <br>
        <button class="mt-5 py-3 px-9 rounded text-white bg-green-700">Submit Article</button>
    </form>
@endsection
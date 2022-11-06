@extends('layouts.template')
@section('content')
    <form action="/admin/create" method="POST">
        @csrf
        @method('post')
        <input type="text" placeholder="Title..." name="articleTitle" class="px-9 py-3 rounded">
        <input type="text" placeholder="Description..." name="articleDescription" class="px-9 py-3 rounded">
        <input type="text" placeholder="Content..." name="articleContent" class="px-9 py-3 rounded">
        <br>
        <button class="mt-5 py-3 px-9 rounded text-white bg-green-700">Submit Article</button>
    </form>
@endsection
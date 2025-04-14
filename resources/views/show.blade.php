@extends('layouts.app') {{-- @extends() kullanımı bu şekildedir. --}}
@section('title', $task->title)

@section('content')

<p>{{ $task->description }}</p>

@if(!empty($task->long_description))
    <p>{{ $task->long_description }}</p>
@endif

<p>Oluşturulma Tarihi: {{ $task->created_at->format('d.m.Y H:i') }}</p>
<p>Güncellenme Tarihi: {{ $task->updated_at->diffForHumans() }}</p>

<div>
    <form action="{{route('tasks.destroy',['task' =>$task->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" >Delete</button>
    </form>
</div>
@endsection


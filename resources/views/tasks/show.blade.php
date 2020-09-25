@extends('layout')

@section('title', 'Task detail')

@section('content')
	<div class="px-64">
		<div>
		<a href="/tasks/{{$task->id}}/edit"><button>Edit</button></a>
		</div>
		<h1 class="font-bold text-3xl">Task</h1>
		Title : {{$task->title}} <br/>
		<hr>
		Body
		<p>{{$task->body}}</p>
		<hr>
		create : {{$task->created_at}} <br/>
		update : {{$task->updated_at}}

	</div>
@endsection
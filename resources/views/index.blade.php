@extends('layouts.app')

@section('title', 'List of tasks')

@section('content')
    @forelse($arrTasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task->id])}}"> {{ $task->title }} </a>
        </div>
    @empty
        <div>There is no task!</div>
    @endforelse
@endsection
{{--<div>--}}
{{--    Hello Im a blade template!--}}
{{--    --}}{{-- @if (count($tasks)) --}}
{{--    @forelse ($tasks as $task)--}}
{{--        <div>--}}
{{--            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>--}}
{{--        </div>--}}
{{--    @empty--}}
{{--        <div>There are no tasks!</div>--}}
{{--    @endforelse--}}
{{--    --}}{{-- @endif --}}
{{--</div>--}}

{{--@isset($name)--}}
{{--    <div>The name is: {{ $name }}</div>--}}
{{--@endisset--}}

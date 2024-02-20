@extends('layouts.app')
@section('title', 'Task List')
@section('content')
    <h1 class="mt-5 mb-4">Task List</h1>
    <div class="row">
        @forelse ($tasks as $task)
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $task->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $task->description }}</p>
                    
                    </div>
                    <div class="card-footer">
                       
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger">There are no tasks to display!</div>
        @endforelse
    </div>
@endsection
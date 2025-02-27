@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Task Details</h1>
        <div>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Status: 
                @if($task->status == 'pending')
                    <span class="badge bg-warning">Pending</span>
                @elseif($task->status == 'in_progress')
                    <span class="badge bg-primary">In Progress</span>
                @else
                    <span class="badge bg-success">Completed</span>
                @endif
            </h6>
            <p class="card-text">{{ $task->description ?: 'No description provided.' }}</p>
            <div class="text-muted">
                <small>Created: {{ $task->created_at->format('Y-m-d H:i') }}</small><br>
                <small>Last Updated: {{ $task->updated_at->format('Y-m-d H:i') }}</small>
            </div>
        </div>
    </div>
@endsection

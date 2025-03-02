@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Detalles de la tarea</h1>
        <div>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Estado: 
                @if($task->status == 'pending')
                    <span class="badge bg-warning">Pendiente</span>
                @elseif($task->status == 'in_progress')
                    <span class="badge bg-primary">En progreso</span>
                @else
                    <span class="badge bg-success">Completada</span>
                @endif
            </h6>
            <p class="card-text">{{ $task->description ?: 'No se proporcionó descripción.' }}</p>
            <div class="text-muted">
                <small>Creada: {{ $task->created_at->format('Y-m-d H:i') }}</small><br>
                <small>Última actualización: {{ $task->updated_at->format('Y-m-d H:i') }}</small>
            </div>
        </div>
    </div>
@endsection

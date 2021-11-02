@extends('layouts.main')


@section('container')


@if (session()->has('Success'))
    <div class="alert alert-success text-center" role="alert">
    {{session('Success')}}
    </div>
@endif
<form action="{{route('tasks.store')}}" method="post">
@csrf 
<div class="input-group mb-3">
    <input type="text" class="form-control @error('task') is-invalid @enderror" name="task" placeholder="Create new task">
    <button class="btn btn-outline-secondary" type="submit" name="submit">Add TASK</button>
    @error('task')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
</form>
@if (count($tasks))
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$task->task}}</td>
        <td>
            <a href="/tasks/{{$task->id}}/edit" class="badge bg-warning text-decoration-none">Edit</a>
            <form action="{{route('tasks.destroy', $task->id )}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('how ur day?')">Delete</button>
            </form>
            @endforeach
            @else 
            <p class="text-center mt-3">No Tasks!</p>
        </td>
    </tr>
</tbody>
</table>
@endif
@endsection
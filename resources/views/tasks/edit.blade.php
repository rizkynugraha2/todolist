@extends('layouts.main')

@section('container')
    
<form action="{{route('tasks.update', $task)}}" method="post">
    @method('put')
    @csrf 
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="task" placeholder="Edit task" value="{{$task->task}}">
        <button class="btn btn-outline-secondary" type="submit" name="submit">Update</button>
    </div>
</form>
@endsection
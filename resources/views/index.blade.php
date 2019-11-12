@extends('layouts.app')
@section('title')
    Todo List
@endsection

@section('content')

    <h1 class="text-center my-5">Task List</h1>
    <div class="row justify-content-center">

        <div class="col-md-8">
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @elseif(session('delete'))
                <div class="alert alert-danger">
                    {{session('delete')}}
                </div>

                @endif
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                        <li>{{$todo->title}}</li>

                       <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-2">Delete</a>
                       <a href="/todos/{{$todo->id}}/show" class="btn btn-info my-2">view</a>

                        <hr>

                        @endforeach
                        {{-- <li>Task 1</li>
                        <li>Task 2</li>
                        <li>Task 3</li>
                        <li>Task 4</li> --}}

                    </ul>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title')
    Create Todos   
@endsection

@section('content')
<h1 class="text-center">Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create new todo</div>
            <div class="card-body">
                <div class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" id="" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success">Create Todo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
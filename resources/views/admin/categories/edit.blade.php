@extends('layouts.app')

@section('content')
   @include('admin.includes.errors')
    
    <div class="panel panel-default">
        <!-- heading  -->
        <div class="panel-heading">
            Update category: {{ $category->name }}
        </div>
        <!-- body  -->
        <div class="panel-body">
            <form action="{{ route('category.update', ['id'=> $category->id])}}" method="post">
                {{  csrf_field()}}
                <div class="form-group">
                    <label for="name"> Name </label>   
                    <input type="text" value="{{$category->name}}" name="name" class="form-control">            
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Update Category</button>         
                </div>
            
            </form>
        </div>
    </div>
    
@stop
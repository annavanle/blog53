@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')         
    <div class="panel panel-default">
        <!-- heading  -->
        <div class="panel-heading">
            Create new post here
        </div>
        <!-- body  -->
        <div class="panel-body">
            <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                {{  csrf_field()}}
                <!-- title  -->
                <div class="form-group">
                    <label for="title"> Title </label>   
                    <input type="text" name="title" class="form-control">            
                </div>
                <!-- featured  -->
                <div class="form-group">
                    <label for="featured"> Featured Image</label>   
                    <input type="file" name="featured" class="form-control">            
                </div>
                <!-- category  -->
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id}}">{{$category->name}}</option>

                        @endforeach
                    </select>
                </div>
                <!-- tags  -->
                <div class="form-group">
                    <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                    <div class="checkbox">
                        <label> <input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}}</label>
                    </div>
                    @endforeach
                </div>
                <!-- content  -->
                <div class="form-group">
                    <label for="content"> Content </label>   
                    <textarea name="content" id="content" cols="20" rows="10" class="form-control"></textarea>          
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Store Post</button>         
                </div>
            
            </form>
        </div>
    </div>
@stop 

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop 

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>
@stop 


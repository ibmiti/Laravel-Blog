@extends('layouts.primary')

@section('title', 'Create Article')

@section('content')

<style>
    body {
        background-color: lightblue;
    }

</style>


<div class="jumbotron jumbotron-fluid justify-content-center text-center">
        <h1>Welcome to the Article Creation Page</h1> 
    </div>


    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Create Article</h1>

            <form method="POST" action="{{ route('store_normal_article') }}">
            @csrf
            <div class="row">
                <label for="title" class="control-label">Article Title</label>
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Something Spookey scary or exciting">
            </div>

            <div class="row mt-3">
                <label for="excerpt" class="control-label">Article Excerpt</label>
                <input type="textarea" name="excerpt" class="form-control form-control-lg mt-3" placeholder="A short snippet from the article">
            </div>

            <div class="row mt-3">
                <label for="excerpt" class="control-label">Body</label>
                <input type="textarea" name="body" class="form-control form-control-lg mt-3" placeholder="The entire sha-bang">
            </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Article</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-primary" type="submit">
                            <a style="color:white;" href="{{ url('create_list_article') }} ">
                            Switch to List Article    
                            </a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
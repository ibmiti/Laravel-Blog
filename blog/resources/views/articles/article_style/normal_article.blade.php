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
                <label for="paragraph 1" class="control-label">Paragraph 1</label>
                <input type="textarea" name="p1" class="form-control form-control-lg mt-3" placeholder="First Paragraph Here">
            </div>

            <div class="row mt-3">
                <label for="paragraph 2" class="control-label">Paragraph 2</label>
                <input type="textarea" name="p2" class="form-control form-control-lg mt-3" placeholder="Second Paragraph Here">
            </div>

            <div class="row mt-3">
                <label for="paragraph 3" class="control-label">Paragraph 3</label>
                <input type="textarea" name="p3" class="form-control form-control-lg mt-3" placeholder="Third Paragraph Here">
            </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Article</button>
                    </div>
                   
                </div>
            </form>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary" type="submit">
                        <a style="color:white;" href="{{ url('create_list_article') }} ">
                        Switch to List Article 
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
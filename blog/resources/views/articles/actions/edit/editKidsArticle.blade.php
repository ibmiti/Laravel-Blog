@extends('layouts.primary')

@section('title', 'Create Article')

@section('content')

<style>
    body {
        /* background-color: lightblue; */
    }

    #jumbo {
        background-color: lightblue;
    }
    

</style>


<div id="jumbo" class="jumbotron jumbotron-fluid justify-content-center text-center">
    <h1>Welcome to the Kids Article Update/Delete Page</h1> 
</div>


    <div class="row">
        <div class="col-sm-12">
        <h1 class="text-center">Edit Kids Article {{ $kidsArticle->title }} </h1>

            <form method="POST" action="{{ route('storeBabyArticle') }}">
            @csrf

            <div class="row">
                    <!-- <label for="title" class="control-label">Article Image</label> -->
                    <input type="text" name="image" class="form-control form-control-lg" placeholder="A cool image here">    
            </div>

            <div  class="row mt-3">
                <!-- <input type="file" name="image5" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"> -->
                <input type="text" name="image_credit" class="form-control form-control-lg mt-3" placeholder="Give credit for image">
            </div>
            
            <div class="row mt-4">
                <!-- <label for="title" class="control-label">Article Title</label> -->
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Something Spookey scary or exciting for the Title">
            </div>

            <div class="row mt-4">
                <!-- <label for="title" class="control-label">Article Title</label> -->
                <input type="text" name="quip" class="form-control form-control-lg" placeholder="Something short and interesting maybe even a quote for the quip field?">
            </div>

            <div class="row mt-3">
                <!-- <label for="excerpt" class="control-label">Article Excerpt</label> -->
                <input type="textarea" name="excerpt" class="form-control form-control-lg mt-3" placeholder="A short snippet from the article for the excerpt">
            </div>

            <div class="row mt-3">
                <!-- <label for="header 1" class="control-label">Header 1</label> -->
                <input type="textarea" name="h1" class="form-control form-control-lg mt-3" placeholder="Header 1">
            </div>

            <div class="row mt-3">
                <!-- <label for="paragraph 1" class="control-label">Paragraph 1</label> -->
                <input type="textarea" name="p1" class="form-control form-control-lg mt-3" placeholder="First Paragraph Here">
            </div>

            <div class="row mt-3">
                <!-- <label for="header 2" class="control-label">Header 2</label> -->
                <input type="textarea" name="h2" class="form-control form-control-lg mt-3" placeholder="Header 2">
            </div>

            <div class="row mt-3">
                <!-- <label for="paragraph 2" class="control-label">Paragraph 2</label> -->
                <input type="textarea" name="p2" class="form-control form-control-lg mt-3" placeholder="Second Paragraph Here">
            </div>

            <div class="row mt-3">
                <!-- <label for="heading 3" class="control-label">Header 3</label> -->
                <input type="textarea" name="h3" class="form-control form-control-lg mt-3" placeholder="Header 3">
            </div>

            <div class="row mt-3">
                <!-- <label for="paragraph 3" class="control-label">Paragraph 3</label> -->
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
                        <a style="color:white;" href="{{ url('viewSelectArticlePage') }} ">
                        Back
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
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
    <h1>Create or Edit?</h1> 
</div>


    <div class="row">
        <div class="col-sm-12">
            <div class="row justify-content-center mt-3">
                <div class="col-sm-4">
                    <button class="btn btn-block btn-primary" type="submit">
                        <a style="color:white;" href="{{ url('viewSelectArticlePage') }} ">
                        Create
                        </a>
                    </button>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-block btn-primary" type="submit">
                        <a style="color:white;" href="{{ url('viewEditArticlePage') }} ">
                        Edit
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection 
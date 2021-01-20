@extends('layouts.primary')

@section('content')
    <div class="jumbotron jumbotron-fluid justify-content-center text-center">
        <h1>SELECT YOUR ARTICLE STYLE</h1> 
    </div>

    <style>
        a { 
            color: white;   
        }
        button {
            padding : 5px;
            margin : 2px;
        }
    </style>
    <div class="container container-fluid">
        <!-- <button class="btn btn-primary">
            <a href="{{ route('create_normal_article') }}">
            Normal Article
            </a>
        </button> -->
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <button class="btn btn-secondary">
                <a href="{{ url('createBabyArticle') }}">
            Baby
            </a>
            </button>
            <button class="btn btn-secondary">
                <a href="{{ url('createKidArticle') }}">
            Kid
            </a>
            </button>
            <button class="btn btn-secondary">
                <a href="{{ url('createGuideArticle') }}">
            Guide
            </a>
            </button>
            <button class="btn btn-secondary">
                <a href="{{ url('createHealthArticle') }}">
            Health
            </a>
            </button>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
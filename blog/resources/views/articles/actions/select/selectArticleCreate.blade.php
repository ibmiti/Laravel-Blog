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
        <div class="row text-center">
            <div class="col-sm-3">
                <button class="btn btn-secondary btn-lg">
                    <a href="{{ url('createBabyArticle') }}">
                         Baby
                    </a>
                </button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-secondary btn-lg">
                    <a href="{{ url('createKidArticle') }}">
                        Kid
                    </a>
                </button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-secondary btn-lg">
                    <a href="{{ url('createGuideArticle') }}">
                        Guide
                    </a>
                </button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-secondary btn-lg">
                    <a href="{{ url('createHealthArticle') }}">
                        Health
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
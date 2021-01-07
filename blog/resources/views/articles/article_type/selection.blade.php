@extends('layouts.primary')

@section('content')
    <div class="jumbotron jumbotron-fluid justify-content-center text-center">
        <h1>SELECT YOUR ARTICLE STYLE</h1> 
    </div>

    <style>
        a { 

            color: white;   
        }
    </style>
    <div class="container container-fluid">
        <button class="btn btn-primary">
            <a href="{{ route('create_normal_article') }}">
            Normal Article
            </a>
        </button>
        <button class="btn btn-secondary">
            <a href="{{ url('create_list_article') }}">
          Guide | List Article
          </a>
        </button>
        <button class="btn btn-secondary">
            <a href="{{ url('create_baby_article') }}">
          Baby Article
          </a>
        </button>
        <button class="btn btn-secondary">
            <a href="{{ url('create_kid_article') }}">
          Kid Article
          </a>
        </button>
    </div>
@endsection
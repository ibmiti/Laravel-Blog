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
          List Style Article
          </a>
        </button>
    </div>
@endsection
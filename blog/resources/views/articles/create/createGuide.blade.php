@extends('layouts.primary')

@section('title', 'Create List Article')

@section('content')

<style>
    body {
        background-color : pink;
    }
</style>

<script>
    window.onload = () => {
        document.getElementById("exampleModal").className += " show";
    }
</script>

<div class="jumbotron jumbotron-fluid justify-content-center text-center">
        <h1>Welcome to the List Article Creation Page</h1> 
</div>

<div class="row">
    <div class="col-sm-12">
    <hr>
        <h1 class="text-center">Create Your Guide</h1>
        <p class="text-center">Below you can choose the length of your List blog</p>
    <hr>

        <div class="container container-fluid">
            <div class="col-xs-1" align="center">
                <form method="GET">
                    <input class="btn" value="5" type="submit" name="form_select">
                    <input class="btn" value="6" type="submit" name="form_select">
                    <input class="btn" value="7" type="submit" name="form_select">
                    <input class="btn" value="8" type="submit" name="form_select">
                    <input class="btn" value="9" type="submit" name="form_select">
                    <input class="btn" value="10" type="submit" name="form_select">
                </form>
            </div>
        </div>

<?php
    $form_select = $_GET["form_select"] ?? '';
?>

        @switch($form_select)
            @case('5')
                <x-default_form />
            @break 
            @case('6')
                <x-form_6 />
            @break  
            @case('7')
                <x-form_7 />
            @break  
            @case('8')
                <x-form_8 />
            @break  
            @case('9')
                <x-form_9 />
            @break  
            @case('10')
                <x-form_10 />
            @break   
        @endswitch
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
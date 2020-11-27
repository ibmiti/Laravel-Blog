@extends ('layout')
@section('title', 'Keep up with us')
@section ('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }
</style>

<x-header-image/>

<div class="container">
    <div class="row">
        <h1 class="col-lg text-center">Keeping up with the Bassinet</h1>
    </div>

    <div class="row">
        <h1 class="col-lg text-center">The Latest Articles From The Bassinet</h1>
    </div>
    
    <div class="row">
      <div class="col-sm">
          <ul>
           
          </ul>
        </div>
    </div>
</div>
@endsection


@extends ('layouts.primary')

@section('title', 'Welcome Home')
@section('content')

<style>
 
 #color-overlay {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: grey;
   opacity: 0.1;
}

</style>

<!-- <main class="mt-5 pt-5"> -->
<div class="container">

  <x-header-image/>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1>baby latest</h1>
      </div>
      <div class="col-sm">
        <h1>Kids latest</h1>
      </div>
      <div class="col-sm">
        <h1>Guides Latest</h1>
    </div>
    <div class="row">
      <div class="col-sm">
        @foreach ()

        @endforeach
      </div>
      <div class="col-sm">
        @foreach ()

        @endforeach
      </div>
      <div class="col-sm">
        @foreach ()

        @endforeach
      </div>

    </div>
</div>

@endsection

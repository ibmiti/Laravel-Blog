@extends ('layout')
@section ('title', 'Admin Login')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
.col-lg  {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Big Shoulders Stencil Display', cursive;
    font-size: 40px;
}


.container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
}

}
</style>

@section ('content')

<x-header-image/>

<div class="container">
    
    <div class="row">
        <h1 class="col-lg text-center">Login the Bassinet</h1>
    </div>
    
    <div class="row">
        <h1 class="col-lg text-center">Hello You</h1>
    </div>

    
    <form class="justify-content-center" method="POST" action="{{ route('contact.store_and_send') }}">
        @csrf
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="John">

                @if($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
                @endif

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="theBestEmail@gmail.com">

                @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
                @endif

        </div>
        
        <div class="form-group">
            <input type="submit" name="send" value="Login" class="btn btn-dark btn-block">
        </div>
    </form>

</div>

  <div class="row">
    <form class="col-lg" action=""></form>
  </div>
</div>
@endsection
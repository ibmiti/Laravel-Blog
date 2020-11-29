@extends ('layout')
@section ('title', 'Contact us')


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

/* form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
}

.form-control:focus {
    border-color: #000;
    box-shadow: none;
}

label {
    font-weight: 600;
}

.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}

.form-control.error {
    border-color: red;
    padding: .375rem .75rem; */
}
</style>

@section ('content')

<x-header-image/>

<div class="container">
    
    <div class="row">
        <h1 class="col-lg text-center">Contacting the Bassinet</h1>
    </div>
    
    <div class="row">
        <h1 class="col-lg text-center">We Wont Share Your Deets</h1>
    </div>

    
    <form class="justify-content-center" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="John">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="theBestEmail@gmail.com">
        </div>
        <div class="form-group">
            <label for="suject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="whats the message about?">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea type="textarea" name="message" id="message" class="form-control" rows="3" placeholder="Rant or Rave! =D"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </div>
    </form>

</div>



    <!-- PHP Skills test - Spend 60 minutes or less getting this as far as you can, please submit your files even if they are not fully finished.

Create a webpage with a form that has the following text input fields: Product name, Quantity in stock, Price per item.

The submitted data of the form should be saved in an XML / JSON file with valid XML / JSON syntax.
Underneath of the form, the web page should display all of the data which has been submitted in rows ordered by date time submitted, the order of the data columns should be: Product name, Quantity in stock, Price per item, Datetime submitted, Total value number.
The "Total value number" should be calculated as (Quantity in stock * Price per item).
The last row should how a sum total of all of the Total Value numbers.
For extra credit, include functionality to edit each line.
Solution requirements:

Use Php / Html / Javascript / Css.
Use Twitter Bootstrap.
The form should be submitting the data and updating the data being displayed on the page using Ajax.
Provide all the files related to the solution in one zip file, the solution should work directly after extracting it on a server without the need to modify anything in the files to make it work. -->

  <div class="row">
    <form class="col-lg" action=""></form>
  </div>
</div>
@endsection
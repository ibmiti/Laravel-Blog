@extends ('layout')
@section ('title', 'Contact us')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
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

    
    <form class="row justify-content-center" method="POST" action="">
        @csrf
        <div class="form-group">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Email">
            <button type="button" class="btn btn-secondary btn-sm">Send</button>
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
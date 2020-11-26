@extends ('layout')

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

<main class="mt-5 pt-5">
<div class="container">

  <!--Section: Jumbotron-->
  <section class="card wow fadeIn" style="background-image: url(images/bearJumboBB2.png); background-position: center; position: relative; background-repeat:no-repeat;">
  <div id="color-overlay"></div>
    <!-- Content -->
    <div style="min-height: 300px;" class="card-body text-white text-center py-5 px-5 my-5">
      <div class="mb-4"></div>
    </div>
    <!-- Content -->
  </section>
  <!--Section: Jumbotron-->
  <hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-sm">
      Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
    </div>
    <div class="col-sm">
    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
    </div>
    <div class="col-sm">
    <img src="images/bbLogo.png" class="d-inline-block align-to" width="80" height="100" style="padding-top:15px"/>        
    </div>
  </div>
</div>

@endsection

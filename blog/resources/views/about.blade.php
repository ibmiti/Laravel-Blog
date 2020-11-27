@extends ('layout')
@section ('title', 'get to know us')
@section ('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    .col-md {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px;
    }

    .col-sm {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px;
    }

    ul {
      list-style-type: none;
    }

</style>

<x-header-image/>

<div class="container">
    <div class="row">
        <h1 class="col-lg text-center">Get to know the Bassinet</h1>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus in nulla iure est dasdasdasdad orem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus in nulla iure est dasdasdasdad
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi quis alias facere tempore dicta distinctio error, praesentium nihil deleniti rerum debitis nam ratione eius neque suscipit libero, consectetur asperiores?
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore amet animi ad eius culpa ea officiis veritatis! Maiores laudantium itaque ab, rerum, laboriosam id voluptatibus minus at cumque, odio corporis!
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam ratione repudiandae dolore ipsam deleniti libero corrupti. Voluptatibus aut autem repellendus. Soluta mollitia ullam id consequuntur, quis reiciendis ipsa. Nam, quia.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic sequi quasi vitae iusto harum omnis corporis iste eos, amet magnam, sint in libero a eveniet! Est doloribus aliquam exercitationem obcaecati?
      </div>
    </div>
    
    <div class="row">
        <h1 class="col-lg text-center">The Latest Articles From The Bassinet</h1>
    </div>
    
    <div class="row">
      <div class="col-sm">
          <ul>
              @foreach($articles as $article)
                <li>{{ $article->title }}</li>
                <p>{{ $article->excerpt }}</p>
                <hr>
              @endforeach
          </ul>
        </div>
    </div>
      
    
</div>
@endsection
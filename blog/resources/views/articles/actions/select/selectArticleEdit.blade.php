@extends('layouts.primary')

@section('content')
    <div class="jumbotron jumbotron-fluid justify-content-center text-center">
        <h1>Editing Articles</h1> 
    </div>
<style>
/* 
| This css will be set within a dedicated css file later
*/
.jumbotron {
    background-color: white !important;
}
a {
    color: white;
}
a:hover, a:focus, a:active {
    text-decoration: none;
    color: black;
}
button {
    padding : 5px;
    margin : 2px;
}
/* 
|   Modal
*/
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div class="container container-fluid">
    <!-- <button class="btn btn-primary">
        <a href="{{ route('create_normal_article') }}">
        Normal Article
        </a>
    </button> -->
    <div class="row">
        <div class="col-3"></div>
        <button id="baby" class="btn btn-secondary">
            <!-- <a href="{{ url('createBabyArticle') }}"> -->
        Baby
        </a>
        </button>
        <button id="kid" class="btn btn-secondary">
            <!-- <a href="{{ url('createKidArticle') }}"> -->
        Kid
        </a>
        </button>
        <button id="guide" class="btn btn-secondary">
            <!-- <a href="{{ url('createGuideArticle') }}"> -->
        Guide
        </a>
        </button>
        <button id="health" class="btn btn-secondary">
            <!-- <a href="{{ url('createHealthArticle') }}"> -->
        Health
        </a>
        </button>
        <div class="col-2"></div>
    </div>

    <!-- 
        | The Modal 
        |----------
        | the form within will as
     -->
<div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="modal-type" class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">close</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form id="myForm" method="GET" class="form-group" action="{{ url('/editArticle') }}">
        @csrf
          <p style="font-size:13px;">The default would be all</p>
          <input type="text" name="count" class="form-control" placeholder="How many articles would you like to see?">
          <!-- <input type="text" name="year" class="form-control mt-1" placeholder="Which year was the article written?"> -->
          <input id="article-type" type="text" name="type">
          <button class="btn btn-dark mt-3" type="submit">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

</div>
<script type="text/javascript">
    // | get the modal 
    let modal = document.getElementById('myModal');
    // | collect the buttons into variables
    let babyBtn   = document.getElementById('baby');
    let kidBtn    = document.getElementById('kid');
    let guideBtn  = document.getElementById('guide');
    let healthBtn = document.getElementById('health');
    // | store buttons witin array
    const btns = [babyBtn,kidBtn,guideBtn,healthBtn];
    // | show modals on button click
    // |-----------
    // | if button clicked is x-article-button then run operations
    // |------------
    btns[0].onclick = () => {
      // | show modal 
      modal.style.display = 'block';
      // | write data to modal - change h5 value
      document.getElementById('modal-type').innerHTML = 'Edit Baby Articles'
      let x = document.getElementById('article-type');
      x.style.display = 'none';
      x.value = 'baby';
     }
    btns[1].onclick = () => {
      modal.style.display = 'block';
      document.getElementById('modal-type').innerHTML = 'Edit Kid Articles';
      let x = document.getElementById('article-type');
      x.style.display = 'none';
      x.value = 'kid';
    }
    btns[2].onclick = () => { 
      modal.style.display = 'block'; 
      document.getElementById('modal-type').innerHTML = 'Edit Guide Articles';
      let x = document.getElementById('article-type');
      x.style.display = 'none';
      x.value = 'guide';
    }
    btns[3].onclick = () => {
      modal.style.display = 'block'; 
      document.getElementById('modal-type').innerHTML = 'Edit Health Articles';
      let x = document.getElementById('article-type');
      x.style.display = 'none';
      x.value = 'health';
    }
    // console.log(btns);

    // | Get id of button
    // | use array indices to output 

    // | select first span with class of close
    let span = document.getElementsByClassName("close")[0];
    // hide modal on specified span click
    span.onclick = () => { modal.style.display = "none"; }
    /*
    |   if modal is active and we click anywhere 
    |   on window we close or hide modal
    */
    window.onclick = (event) => {
        if (event.target == modal){
            modal.style.display = "none";
        }
    }
   


</script>
@endsection
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yum Recipes - Online Recipes Management Application</title>
   <!-- App favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
  <script src="{{ asset('js/uikit.js') }}"></script>
</head>

<body>

<nav class="uk-navbar-container uk-letter-spacing-small">
  <div class="uk-container">
    <div class="uk-position-z-index" data-uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="/"><img style="height: 50px" src="{{asset('assets\images\logowelcome.png')}}" alt=""></a>
        {{-- <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
          <li class="uk-active"><a href="/">Home</a></li>
          <li ><a href="recipe.html">Recipe</a></li>
          <li ><a href="search.html">Search</a></li>
          <li ><a href="contact.html">Contact</a></li>
        </ul> --}}
      </div>
      <div class="uk-navbar-right">
        <div>
          
        </div>

        @if (Route::has('login'))
            
                    @auth
                    <div class="uk-navbar-item">
                        <div><a class="uk-button uk-button-primary" href="{{ url('/home') }}">Dashboard</a></div>
                      </div>
                    @else
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li ><a href="{{ route('login') }}">Sign In</a></li>
                      </ul>

                        @if (Route::has('register'))
                        <div class="uk-navbar-item">
                            <div><a class="uk-button uk-button-primary" href="{{ route('register') }}">Sign Up</a></div>
                          </div>  
                        @endif
                    @endauth
            
            @endif

            


        {{-- <ul class="uk-navbar-nav uk-visible@m">
          <li ><a href="sign-in.html">Sign In</a></li>
        </ul>
        <div class="uk-navbar-item">
          <div><a class="uk-button uk-button-primary" href="sign-up.html">Sign Up</a></div>
        </div>           --}}
        {{-- <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
          data-uk-navbar-toggle-icon></span></a> --}}
      </div>
    </div>
  </div>
</nav>


<div class="uk-container">
  <div data-uk-grid>
    <div class="uk-width-1-2@s">
      <div><img class="uk-border-rounded-large" src="{{asset($singlerecipes->recipeimage)}}" 
        alt="Image alt"></div>
    </div>
    <div class="uk-width-expand@s uk-flex uk-flex-middle">
      <div>
      <h1>{{$singlerecipes->recipename}}</h1>
       
        <hr>
        <div data-uk-grid>
          <div class="uk-width-auto@s uk-text-small">
            <p class="uk-margin-small-top uk-margin-remove-bottom">Created by <a >{{$singlerecipes->username}}</a></p>
            <span class="uk-text-muted">( {{$singlerecipes->categoryname}} )</span>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-default">
  <div class="uk-container uk-container-small">
    <div class="uk-grid-large" data-uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-article">
          <h3>How to Make It</h3>
          <div id="step-1" class="uk-grid-small uk-margin-medium-top" data-uk-grid>
            
            <div class="uk-width-expand">
              <div class="uk-step-content">{!!$singlerecipes->recipedescription!!}</div>
            </div>
          </div>
         
     
      
          <hr class="uk-margin-medium-top uk-margin-large-bottom">
        









     
        </div>
      </div>
      <div class="uk-width-1-3@m">
        <h3>Ingredients</h3>
        <ul class="uk-list uk-list-large uk-list-divider uk-margin-medium-top">
          <li>{{$singlerecipes->recipeingredients}}</li>
        </ul>
      
      
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-muted">
  <div class="uk-container">
    <h3>Latest Recipes You May Like</h3>
    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-margin-medium-top" data-uk-grid>


        @foreach($recipes as $recipe)
        <div class="uk-card">
          <div class="uk-card-media-top uk-inline uk-light">
            <img class="uk-border-rounded-medium" style="width: 300px;height: 160px" src="{{asset($recipe->recipeimage)}}" alt="Course Title">
            <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
         
          </div>
          <div>
            <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">{{$recipe->recipename}}</h3>
            <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
              <div class="uk-width-auto uk-flex uk-flex-middle">
                <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                <span class="uk-margin-xsmall-left">{{$recipe->recipeslikes}}</span>
                <span>( {{$recipe->categoryname}} )</span>
              </div>
              <div class="uk-width-expand uk-text-right">{{$recipe->username}}</div>
            </div>
          </div>
          <a href="{{url('singlerecipe/'.$recipe->id)}}" class="uk-position-cover"></a>
        </div>
     @endforeach
     




     
      
    </div>
  </div>
</div>





</body>

</html>
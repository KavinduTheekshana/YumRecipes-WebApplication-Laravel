<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yum Recipes - Online Recipes Management Application</title>
   <!-- App favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.ico">


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/uikit.js"></script>
</head>

<body>

<nav class="uk-navbar-container uk-letter-spacing-small">
  <div class="uk-container">
    <div class="uk-position-z-index" data-uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="/"><img style="height: 50px" src="assets\images\logowelcome.png" alt=""></a>
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
  <div class="uk-border-rounded-large uk-background-top-center uk-background-cover 
    uk-background-norepeat uk-light uk-inline uk-overflow-hidden uk-width-1-1">
    
    <div class="uk-position-cover uk-header-overlay">
        <img style="height: auto" src="assets\images\welcomecover.jpg" alt="">
    </div>
    <div class="uk-position-relative" data-uk-grid>
      <div class="uk-width-1-2@m uk-flex uk-flex-middle">
        <div class="uk-padding-large uk-padding-remove-right">
          <h1 class="uk-heading-small uk-margin-remove-top">Choose from thousands of recipes</h1>
          <p class="uk-text-secondary">Appropriately integrate technically sound value with scalable infomediaries
            negotiate sustainable strategic theme areas</p>
          <a class="uk-text-secondary uk-text-600 uk-text-small hvr-forward" href="{{ route('register') }}">Sign up today<span
            class="uk-margin-small-left" data-uk-icon="arrow-right"></span></a>
        </div>
      </div>
      <div class="uk-width-expand@m">
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div data-uk-grid>


     



      <div class="uk-width-expand@m">
      
        <div class="uk-child-width-1-2 uk-child-width-1-3@s" data-uk-grid>
  
            
            @foreach($recipes as $recipe)


            <div class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
              <img class="uk-border-rounded-medium" style="height: 220px; width: 380px;" src="{{$recipe->recipeimage}}" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">{!! substr(strip_tags($recipe->recipename), 0, 30) !!}
                    @if (strlen(strip_tags($recipe->recipename)) > 30)
                         ...
                       @endif</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">{{$recipe->recipeslikes}}</span>
                    <span>({{$recipe->categoryname}})</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">{{$recipe->username}}</div>
                </div>
              </div>
            <a href="singlerecipe/{{$recipe->id}}" class="uk-position-cover"></a>
            </div>

            @endforeach
    




          


        </div>

   


        <div class="uk-margin-large-top uk-text-small">
         
      </div>
    </div>
  </div>
</div>



{{-- <div class="uk-container">
  <div class="uk-background-primary uk-border-rounded-large uk-light">
    <div class="uk-width-3-4@m uk-margin-auto uk-padding-large">
      <div class="uk-text-center">
        <h2 class="uk-h2 uk-margin-remove">Be the first to know about the latest deals, receive new trending recipes &amp; more!</h2>
      </div>
      <div class="uk-margin-medium-top">
        <div data-uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
          <form>
            <div class="uk-grid-small" data-uk-grid>
              <div class="uk-width-1-1 uk-width-expand@s uk-first-column">
                <input type="email" placeholder="Email Address" class="uk-input uk-form-large uk-width-1-1 uk-border-pill">
              </div>
              <div class="uk-width-1-1 uk-width-auto@s">
                <input type="submit" value="Subscribe" class="uk-button uk-button-large uk-button-warning">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div> --}}





</body>

</html>
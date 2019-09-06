
   @include('layouts.header')

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
   
    <body>
        @include('layouts.nav')
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @include('layouts.posts')
                </div>
                <div class="col-md-4">
                    @include('layouts.search')
                    @include('layouts.categories')
                    @include('layouts.sidewidget')
                    
                </div>
            </div>
        </div>
        
    </body>
   @include('layouts.footer')

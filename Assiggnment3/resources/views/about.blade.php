
   @include('layouts.header')

      <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
  
  <link href="{{ asset('css/the-big-picture.css') }}" rel="stylesheet">
   
   
   
    <body>
        @include('layouts.nav')
        
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
               <h1 class="mt-5">The Big Picture</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt voluptates rerum eveniet sapiente repellat esse, doloremque quod recusandae deleniti nostrum assumenda vel beatae sed aut modi nesciunt porro quisquam voluptatem.</p> 
            </div>
            </div>
        </div>
        
    </body>



  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
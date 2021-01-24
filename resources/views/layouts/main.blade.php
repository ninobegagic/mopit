@include('includes.head')

<body>
        <div id="app">

            
        @include('includes.navbar')
         @yield('content')
        @include('includes.footer')
         </div>



<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
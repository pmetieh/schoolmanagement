<!-- Navigation-->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="frontend"><b>School Fees Payement</b></a>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a class="btn btn-primary" href="{{ url('/home') }}">HomeLink</a>
                <span><b>{{auth::user()->name}}</b></span>
            @endauth
            @guest
                {{--@php
                //return back();
                    echo "You are not authenticated. Please Log in"
                @endphp--}}

                    @verbatim
                        <script>
                            alert('You are not logged in');
                            location.replace("http://localhost/schoolmgmt/public/frontend");
                        </script>
                    @endverbatim


            @endguest
            {{--@else
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
                @endif
            @--}}
        </div>
    @endif
</nav>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include("includes.head")
    </head>
    <body>
        <div class="container">
        <!-- Navigation-->
        <div class="row">
            @include("includes.header")
        </div>
        <div class="row">
            @yield("content")
        </div>

        <!-- Call to Action-->

        @include("includes.footer")
        </div>
    </body>
</html>

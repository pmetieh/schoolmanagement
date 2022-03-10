<!DOCTYPE html>
<html lang="en">
    <head>
        @include("includes.admin_head")
    </head>
    <body>
        <div class="container">
        <!-- Navigation-->
        <div class="row">
            @include("includes.admin_header")
        </div>
        <div class="row">
            @yield("content")
        </div>

        <!-- Call to Action-->
        <div class="row">
        @include("includes.footer")
        </div>
        </div>
    </body>
</html>

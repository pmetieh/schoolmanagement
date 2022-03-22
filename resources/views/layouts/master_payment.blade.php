<!DOCTYPE html>
<html lang="en">
    <head>
        @include("includes.head")
    </head>
    <body>
        <div class="container">
        <!-- Navigation-->
        <div class="row">
            @include("includes.payment_header")
        </div>
        <div class="row">
            @yield("content")
        </div>

        <!-- Footer -->

        <div class="row">
            @include("includes.footer")
        </div>
        </div>
    </body>
</html>

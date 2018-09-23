<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TodoList</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body> 
    	@include('inc/navbar')
        <div class="container">
        	@include('inc/messages')
        	@yield('content')
        </div>
        
        <footer id="footer" class="text-center">
        	<p>Copyright &copy; 2018 Spasa Designs</p>
        </footer>
    </body>
</html>
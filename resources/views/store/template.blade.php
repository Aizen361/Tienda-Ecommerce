<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Mi Tienda Online')</title>
     <link rel="stylesheet" href="{{asset('template/css/fontello.css')}}">
          <link rel="stylesheet" href="{{asset('template/css/pinterest.css')}}">
          <link rel="stylesheet" href="{{asset('template/css/estilos.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('template/css-hamburgers/hamburgers.min.css')}}">

                  



   <link rel = "hoja de estilo" href = "http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		background-color:  rgba(245, 245, 245, 1);
	}
</style>

</head>
<body>
	
	@include('store.partials.nav')
    @yield('content')
    @include('store.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('template/js/pinterest_grid.js')}}"></script>
<script>
        $(document).ready(function() {

            $('#productos').pinterest_grid({
                no_columns: 4,
                padding_x: 10,
                padding_y: 10,
                margin_bottom: 50,
                single_column_breakpoint: 700
            });

        });
    </script>



</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
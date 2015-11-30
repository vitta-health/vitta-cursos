<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>VITTA | Agende sua consulta online!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

	</style>
  </head>
  <body>

	<div id="wrap">
		<div class="container">
			<div class="row text-right">
                @if (Auth::check())
                    <div class="col-md-12">
                        <span>Seja bem vindo, {{ Auth::user()->name }}&nbsp;&nbsp;</span>
                        <a href="{{ url('logout') }}" class="btn btn-primary">FAZER LOGOUT</a>
                    </div>
                @else
                    <div class="col-md-12">
                        <span>CLÍNICA OU PROFISSIONAL DE SAÚDE?&nbsp;&nbsp;</span>
                        <a href="#" class="btn btn-primary">VER BENEFÍCIOS</a>
                    </div>
                @endif
			</div>
		</div>

		<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="{{ url('/') }}">ITVAT</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#">AGENDAMENTO</a></li>
				<li><a href="#">COMO FUNCIONA</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="{{ url('login') }}">LOGIN</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="content">
			@yield("content")
		</div>

		<div id="push"></div>
	</div>
	<footer id="footer">
      <div class="container">
        <p class="text-muted">Copyright © 2015 Luiz Fernando Afra Brito</p>
      </div>
    </footer>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </body>
</html>

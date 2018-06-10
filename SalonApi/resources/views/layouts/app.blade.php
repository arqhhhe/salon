<!doctype html>

<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font-Owesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css"/>

    <!-- App custom CSS -->

    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <link rel="stylesheet" href="/css/themify-icons.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


    <title>App Name - @yield('title')</title>

</head>

<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <a class="logo" href="http://salon.venues.com.pk/">
                    <img src="/images/logo.png" alt="home" class="dark-logo">
                </a>
            </div>
        </div>

    </nav>
   <div id="page-wrapper">
      <div class="container-fluid">
		  <div class="top_menu row hidden-xs hidden-sm">

					<div class="col-md-2 pad5">
						<div class="menu home">
							<a href="http://salon.venues.com.pk/"><i class="icon-home"></i><br>Home</a>
						</div>
					</div>

				   <!-- <div class="col-md-1 pad5">
						<div class="menu    ">
							<a href="#"><i class="ti-shopping-cart-full"></i><br>Shop</a>
						</div>
					</div>-->

					<div class="col-md-2 pad5">
						<div class="menu customer">
							<a href="/customer"><i class="icon-user"></i><br>CUSTOMER</a>
						</div>
					</div>
					<div class="col-md-2 pad5">
						<div class="menu service">
							<a href="/service"><i class="icon-briefcase"></i><br>Services</a>
						</div>
					</div>
					

				   <!-- <div class="col-md-1 pad5">
						<div class="menu    ">
							<a href="#"><i class="icon-clock"></i><br>Appointment</a>
						</div>
					</div>

					<div class="col-md-1 pad5">
						<div class="menu    ">
							<a href="#"><i class="ti-server"></i><br>Inventory</a>
						</div>
					</div>-->

					<div class="col-md-2 pad5">
						<div class="menu employee">
							<a href="/employee"><i class="icon-briefcase"></i><br>Employee</a>
						</div>
					</div>

					
					
                    
                    <div class="col-md-2 pad5">
						<div class="menu Billing">
							<a href="/billing"><i class="icon-book-open"></i><br>Billing</a>
						</div>
					</div>
					<div class="col-md-2 pad5">
						<div class="menu Reports">
							<a href="#"><i class="icon-graph"></i><br>Reports</a>
						</div>
					</div> 


					<!--<div class="col-md-1 pad5">
						<div class="menu    ">
							<a href="#"><i class="ti-gift"></i><br>Packages</a>
						</div>
					</div>

					<div class="col-md-1 pad5">
						<div class="menu     ">
							<a href="#"><i class="ti-email"></i><br>Coupon</a>
						</div>
					</div>

					<div class="col-md-1 pad5">
						<div class="menu    ">
							<a href="#"><i class="ti-settings"></i><br>Settings</a>
						</div>
					</div>-->

				</div>
				<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Salon</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

			<span class="navbar-toggler-icon"></span>

		</button>

		<div class="collapse navbar-collapse" id="navbarCollapse">

			<ul class="navbar-nav mr-auto">

				<li class="nav-item">

					<a class="nav-link" href="#">Home</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="/service">Service</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="/employee">Employee</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="/customer">Customer</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="#">Billing</a>

				</li>

			</ul>

		</div>

	</nav>-->
			<main role="main" class="container bgwhite">
				@yield('content')
			</main>
		</div>
	</div>	
</div>


<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js" type="text/javascript"></script>

<script src="/js/app.custom.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
	    // jQuery is passed to the ready function as a parameter, so we alias it with $
    // This will work for you even with wikispaces
    jQuery(function($){
        var loc = window.location.pathname.match(/^\/?(\w+)\b/);
        if(loc) $(document.body).addClass(loc[1].toLowerCase());
    });
</script>

</body>

</html>
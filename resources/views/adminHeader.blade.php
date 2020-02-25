<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>G2G House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/header.css">
        <script src="js/jquery.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
    </head>
   
    <body>
            <div class="pc">
                <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top" style="border-bottom:2px solid orangered;" >
                    <a class="navbar-brand heade" style="text-decoration:none; outline: none; " href="{{ url('/') }}"> <img src="images/logo.jpg" alt=""  width="10%" class="rounded-circle img-fluid" > The Redeemed Christian Church of God <br> <h6 style="font-size:12px; margin-left:20%" >(Glory to Glory House)</h6 >  </a> 
                    <ul class="navbar-nav my-2 my-lg-0 ml-auto">                        
                           
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/register') }}">Register New User</a>
   
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/admin') }}">Services/Programme</a>
   
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/adminGallery') }}">Gallery/Thumbnails</a>
   
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
   
                            </li>
                            
                        </ul>
                </nav>
           
            </div>
            <div class="mobile" >
                    <nav class="navbar navbar-light bg-light navbar-1 scrolling">
                            <a class="navbar-brand heade" style="text-decoration:none; outline: none; " href="{{ url('/') }}"> <img src="images/logo.jpg" alt=""  width="30%" class="rounded-circle img-fluid" > </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <ul class="navbar-nav mr-auto scrollable-menu" role="menu" id="droppy" style="background-color: whitesmoke;" >
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                            
                                    <li class="nav-item ">
                                            <a class="nav-link" href="{{ url('/register') }}">Register New User</a>
        
                                    </li>
                                    <li class="nav-item ">
                                            <a class="nav-link" href="{{ url('/admin') }}">Services/Programme</a>
        
                                    </li>
                                    <li class="nav-item ">
                                            <a class="nav-link" href="{{ url('/admnGallery') }}">Gallery/Thumbnails</a>
        
                                    </li>
                                    <li class="nav-item ">
                                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
        
                                    </li>
                                    
                                </ul>                                
                        </div>
                    </nav>
            </div>
                
    </body>
</html>     
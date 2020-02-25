<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G2G Gallery</title>
    <link rel="stylesheet" href="../css/header.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/jquery.min.js"></script>        
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="../css/display.css">

  </head> 
  <style>
        .active{
            color: orangered !important;
        }
        body{
            font-family: 'Open Sans', ;            
            font-family: 'Roboto', ;

        }
        #footer {
            position:absolute;
            bottom:0;
            text-align:right;
            height:20px
        
        }
    </style>
   
    <body>
            <div class="pc">
                <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top" style="border-bottom:2px solid orangered;" >
                    <a class="navbar-brand heade" style="text-decoration:none; outline: none; " href="{{ url('/') }}"> <img src="../images/logo.jpg" alt=""  width="10%" class="rounded-circle img-fluid" > The Redeemed Christian Church of God <br> <h6 style="font-size:12px; margin-left:20%" >(Glory to Glory House)</h6 >  </a> 
                    <ul class="navbar-nav my-2 my-lg-0 ml-auto">                        
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>                            
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/') }}#services">Services</a>
   
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/') }}#attend">Attend</a>
   
                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/') }}#offerings">Offerings/Tithes</a>

                            </li>
                            <li class="nav-item active ">
                                    <a class="nav-link " href="{{ url('/gallery') }}">Gallery</a>

                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link " href="{{ url('/profile') }}">Profile</a>

                            </li>
                            <li class="nav-item ">
                                    <a class="nav-link " href="{{ url('/') }}#contact">Contact Us</a>

                            </li>
                            
                        </ul>
                </nav>
           
            </div>
            <div class="mobile" >
                    <nav class="navbar navbar-light bg-light navbar-1 scrolling">
                            <a class="navbar-brand heade" style="text-decoration:none; outline: none; " href="{{ url('/') }}"> <img src="../images/logo.jpg" alt=""  width="30%" class="rounded-circle img-fluid" > </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <ul class="navbar-nav mr-auto scrollable-menu" role="menu" id="droppy" style="background-color: whitesmoke;" >
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}#attend">Attend</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}#offerings">Offerings/Tithes</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                                    </li>                                
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                                    </li>                                
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}#contact">Contact Us</a>
                                    </li>
                                    
                                    
                                </ul>                                
                        </div>
                    </nav>
            </div>

            <div class="container page-top">
                <div class="row" id="disp">                    
                </div>
            </div>
            <div id="footer" class="mb-1 mr-3" style="color:brown; font-size:12px; text-align:right;" >@include('footer')</div>

<script type="text/javascript"> 

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(document).ready(function(){ 
        console.log('black');
        var id = '{{$id}}';

        $.ajax({

            type:'POST',

            url:"/displayers",

            data: {'id': id, _token:"{{csrf_token()}}" },

            success:function(data){
                var results = JSON.parse(data);
                console.log(results);
                var tb = new Array();

                for (j = 0; j < results.length; j++) { 
                    tbs = '<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="../images/'+results[j].galleryImage+'" class="fancybox" rel="ligthbox" target="_blank"><img  src="../images/'+results[j].galleryImage+'" class="zoom img-fluid "  alt=""></a></div>';    
                    
                    tb.push(tbs);
                } 
                console.log(tb);

                var l = tb;

                document.getElementById("disp").innerHTML = l; 

                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });
                
                $(".zoom").hover(function(){
                    
                    $(this).addClass('transition');
                }, function(){
                    
                    $(this).removeClass('transition');
                });           
                 
            }

            }); 
    });

</script> 
    </body>
</html>  


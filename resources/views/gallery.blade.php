@include('headerless')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G2G Gallery</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  </head> 

    <style>
    body { background-color: #fafafa; font-family: 'Lato', sans-serif; }
      img{
        border:1px solid black;
        margin:0.4rem;
      }
      .container{
        margin: 150px auto;
      }
      .disabled{
        color:grey !important;
      }
      .abled{
        color:orangered !important;
      }

      .hovereffect {
        width: 100%;
        /* height: 100%; */
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
      }

      .hovereffect .overlay {
        width: 100%;
        height: 88%;
        position: absolute;
        overflow: hidden;
        top: 0;
        /* left: 0; */
        background-color: rgba(75,75,75,0.7);
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
      }

      .hovereffect:hover .overlay {
        background-color: rgba(48, 152, 157, 0.4);
      }

      .hovereffect img {
        display: block;
        position: relative;
      }

      .hovereffect h2 {
        text-transform: uppercase;
        color: white;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: rgba(0, 0, 0, 0.6);
        -webkit-transform: translateY(45px);
        -ms-transform: translateY(45px);
        transform: translateY(45px);
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
      }

      .hovereffect:hover h2 {
        -webkit-transform: translateY(5px);
        -ms-transform: translateY(5px);
        transform: translateY(5px);
        font-weight:bold;
      }

      .hovereffect a.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        background-color: transparent;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        font-weight: normal;
        margin: -52px 0 0 0;
        padding: 62px 100px;
      }

      .hovereffect:hover a.info {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      .hovereffect a.info:hover {
        box-shadow: 0 0 5px #fff;
      }
    </style>

      <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto text-center">
                    <h4 class="" style="font-weight:bold">Gallery</h4>
                </div>
            </div>
              <!-- <img src="https://picsum.photos/200/300?image=0"/>
              <img src="https://picsum.photos/200/300?image=1"/>
              <img src="https://picsum.photos/200/300?image=239"/> -->
              <!-- <form action="/thumbnail" method="post"> -->
                <div class="row justify-content-center" id="wrapper" style="visibility:hidden;">
                  <div id="prac" class="row"></div>
                </div>

              <!-- </form> -->
              
             
           
            
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- senzill-pagination.js -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/yak0d3/senzill-pagination@1.1.3-beta/senzill-pagination.js"></script> -->

    <script src="js/senzill-pagination.js"></script>

    <script>
      
        $(document).ready(function(){
          var _elPerPage = 12;
          var number_of_pages = Math.ceil($('img').length / _elPerPage);
          function stats(){
            if($('#elPerPage').val() > 0)
             {
               _elPerPage = $('#elPerPage').val();
             }
             number_of_pages = Math.ceil($('img').length / _elPerPage);
             $('#number_of_pages').text(number_of_pages);
             $('#elements_per_page').text(_elPerPage);
          }
          var senzill =  $('#wrapper').senzill(
                {
                    elPerPage: _elPerPage
                }
            );
          stats();
          $('#set_elems_per_page').on('click',function(){
            if($('#elPerPage').val() > 0){
               _elPerPage = $('#elPerPage').val();
             }
             _elPerPage = $('#elPerPage').val();
             console.log(_elPerPage);
             senzill.destroy();
             senzill = undefined;
             senzill =  $('#wrapper').senzill(
               {
                  elPerPage: _elPerPage
               });
             stats();
          });

          $.ajax({
            type:'POST',

            url:"{{ route('getCategories') }}",

            data:{'_token':'{{ csrf_token() }}'},

            success:function(data){
                var results = JSON.parse(data);
                
                var th = new Array();

                for (j = 0; j < results.length; j++) {       
                    thbs = '<div class="col-lg-3 col-md-4 col-sm-3 col-6 view hovereffect"><a href="/display/'+results[j].id+'" class="d-block mb-4 h-100"><img class="img-fluid img-thumbnail" src=images/'+results[j].thumbs+' alt=""><div class="overlay"><h2>'+results[j].descMonthYear+'</h2></div></a></div>';
                    th.push(thbs);
                } 
                console.log(th);

                var l = th;

                document.getElementById("prac").innerHTML = l;           
                    
            }

            });
        });
    </script><script type="text/javascript">

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


    
@include('footer')
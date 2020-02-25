<!-- <script src="js/jquery.min.js"></script>    -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script type="text/javascript"> 

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(document).ready(function(){ 
        
        console.log('black');
        $.ajax({

            type:'POST',

            url:"{{ route('getCategories') }}",

            data:{'_token':'{{ csrf_token() }}'},

            success:function(data){
                var results = JSON.parse(data);
                var i;
                var logs = new Array();
                var th = new Array();

                for (i = 0; i < results.length; i++) {
                    //console.log('<option value="'+results[i].id+'">'+results[i].descMonthYear+'</option>');
                    log = '<option value="'+results[i].id+'">'+results[i].descMonthYear+'</option>';
                    logs.push(log);
                } 

                for (j = 0; j < results.length; j++) {
                    //console.log('<option value="'+results[i].id+'">'+results[i].descMonthYear+'</option>');
                    // thbs = '<div class="col-lg-3 col-md-4 col-6 view overlay"><div class="d-block mb-4 h-100"><input type="image" name="chosenimage" value="'+results[j].id+'" class="img-fluid img-thumbnail" src=images/'+results[j].thumbs+' alt=""></div></div>';
                    thbs = '<div class="col-lg-3 col-md-4 col-6 view overlay"><a href="?q='+results[j].id+'" class="d-block mb-4 h-100"><img class="img-fluid img-thumbnail" src=images/'+results[j].thumbs+' alt=""></a></div>';
                    th.push(thbs);
                } 
                console.log(th);
           
                var sect = '<select name="cat" id="cat" class="form-control">'+logs+'</select>'
                var l = th;

                document.getElementById("selected").innerHTML = sect;
                document.getElementById("prac").innerHTML = l;

                
                    
                      
                                      
                  
                                        
            }

            }); 
    });

</script>   
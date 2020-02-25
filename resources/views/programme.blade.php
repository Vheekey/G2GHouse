<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

<div class="modal " id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      

      <!-- Modal body -->
      <div class="modal-body">
      <button type="button" class="close " data-dismiss="modal">&times;</button>
        <div id="result" class="mt-3">
            <img id="im" src="" alt="" srcset="" width="100%" height="auto">
        </div> 
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>


<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(document).ready(function(){ 
        // e.preventDefault();  

        $.ajax({

           type:'POST',

           url:"{{ route('displayImage') }}",

           data:{'_token':'{{ csrf_token() }}'},

           success:function(data){
               var results = JSON.parse(data);
               

            //   console.log(results);
            //   $("#result").html(data);
            var sdate = results.sdate;
            var edate = results.edate;
            var imag = results.info;
            document.getElementById("im").src = 'images/'+imag;
            console.log(document.getElementById('im').src);
            console.log(sdate); 
            var d = new Date().toISOString().slice(0,10); ;
            var dateFrom = sdate;
            var dateTo = edate;
            var dateCheck = d;

            var d1 = dateFrom.split("-");
            var d2 = dateTo.split("-");
            var c = dateCheck.split("-");

            var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
            var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
            var check = new Date(c[2], parseInt(c[1])-1, c[0]);

            if((check >= from && check < to) == true){
                $("#myModal").modal("show");
            }

            console.log(check >= from && check < to)


              //get Videos
        $.ajax({

           type:'POST',

           url:"{{ route('getVideo') }}",

           data:{'_token':'{{ csrf_token() }}'},

           success:function(data){
               var links = JSON.parse(data);
               var last = links[0];
               var before = links[1];
               var latestUrl = last.url;
               var latestDate = last.service_date;
               var latestDesc = last.service_desc;
               var beforeUrl = before.url;
               var beforeDate = before.service_date;
               var beforeDesc = before.service_desc;
               var b = new Date(beforeDate);
               var l = new Date(latestDate);
           
            document.getElementById("befLink").src = beforeUrl;
            document.getElementById("lastLink").src = latestUrl;
            document.getElementById("befDate").innerHTML = "Date: "+ b.toDateString();
            document.getElementById("lastDate").innerHTML ="Date: "+ l.toDateString();
            document.getElementById("befDesc").innerHTML = beforeDesc;
            document.getElementById("lastDesc").innerHTML = latestDesc;
                        
           }

        });          
            
           }

        });

      

  

	});

</script>

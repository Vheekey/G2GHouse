@include('adminHeader')
<div class="container">

    <div class=" mb-1" style="margin-top:15%">
    @include('flashmessage')
    </div>
    <div class="row mb-5 mt-2" style="">
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body">                   
                    <h3 class="card-title" style="color:orangered;">New Service</h3>
                    <form action="/upload" method="post">
                        <input type = "hidden" name = "_token" value="{{csrf_token()}}">
                        <label for="">Enter Youtube URL</label>
                        <input type="url" name="utube" id="" class="form-control" required> <br>
                        <label for="">Service Date</label>
                        <input type="date" name="sdate" id="" class="form-control" required> <br>
                        <label for="">Service Description</label>
                        <input type="text" name="sdesc" id="" class="form-control" required>
                        <input type="submit" value="Upload" class="btn btn-md btn-default pull-right mt-3" style="background-color:orangered; color:white">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body">
                    <h3 class="card-title" style="color:orangered;">New Programme</h3>
                    <form action="/uploadProgramme" method="post" enctype="multipart/form-data">
                        <label for="">Upload Image/ Picture</label>
                        <input type="file" name="upJpg" id="" accept="image/*" pattern="([^\s]+(\.(?i)(jpg|png|gif|bmp))$)
                        " class="form-control" required> <br>
                        <label for="">Display Start Date</label>
                        <input type="date" name="sdate" id="" class="form-control" required> <br>
                        <label for="">Display End Date</label>
                        <input type="date" name="edate" id="" class="form-control" required> 
                        <input type = "hidden" name = "_token" value="{{csrf_token()}}">
                        <input type="submit" value="Upload" class="btn btn-md btn-default pull-right mt-3" style="background-color:orangered; color:white">
                    </form>
                    <!-- <form action="/setImage" method="post">
                        <input type="submit" value="Set Image" class="btn btn-md btn-success pull-right mt-3" >

                        <input type = "hidden" name = "_token" value="{{csrf_token()}}">
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

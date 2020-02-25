@include('adminHeader')
@include('getThumbnail')
<div class="container">

    <div class=" mb-1" style="margin-top:15%">
    @include('flashmessage')
    </div>
    <div class="row mb-5 mt-2" style="">
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body">
                    <h3 class="card-title" style="color:orangered;">Gallery Thumbnails</h3>
                    <form action="/uploadThumbnail" method="post" enctype="multipart/form-data">
                        <label for="">Upload Image/ Picture</label>
                        <input type="file" name="upJpg" id="" accept="image/*" pattern="([^\s]+(\.(?i)(jpg|png|gif|bmp))$)
                        " class="form-control" required> <br>
                        <label for="">Description</label>
                        <input type="text" name="desc" id="" class="form-control" placeholder="Image Value" required> <br>                        
                        <input type = "hidden" name = "_token" value="{{csrf_token()}}" class="mb-2">
                        <input type="submit" value="Upload" class="btn btn-md btn-default pull-right mt-3 mb-5" style="background-color:orangered; color:white">
                    </form>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body">
                    <h3 class="card-title" style="color:orangered;">Gallery Images</h3>
                    <form action="/uploadGallery" method="post" enctype="multipart/form-data">
                        <label for="">Upload Gallery Image/ Picture</label>
                        <input type="file" name="upImage" id="" accept="image/*" pattern="([^\s]+(\.(?i)(jpg|png|gif|bmp))$)
                        " class="form-control" required> <br>
                        <label for="">Description</label>
                        <input type="text" name="desc" id="" class="form-control" placeholder="Image Value" required> <br>                        
                        <label for="">Category</label>
                        <div id="selected"></div> 
                        <input type = "hidden" name = "_token" value="{{csrf_token()}}">
                        <input type="submit" value="Upload" class="btn btn-md btn-default pull-right " style="background-color:orangered; color:white">
                    </form>                    
                </div>
            </div>
        </div>
     
    </div>
    <div class="mb-5" style="padding-top: 2%;"></div>

</div>

@include('footer')

@extends ('layouts.dashboard')
@section('page_heading','Update Slider Image')

@section('section')
<div class="col-sm-6">
<div class="row">

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".edit-img").click(function(){
            jQuery('.old-img').css('display','none');
            jQuery(this).css('display','none');
            jQuery('.poster-img').css('display','block');
        });
    });
</script>
    <form role="form" action="{{ action('HomeController@updatesliderImg') }}" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <input type="hidden" value="<?php echo $data[0]->id; ?>" name="id">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <label>Image-Name</label>
                <input class="form-control" name="name" value="<?php echo $data[0]->imgname; ?>">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <div class="form-group">
                <label>Image</label>
                
                    <img class="old-img" style ="width:100px;" src="<?php echo $data[0]->imgpath; ?>"/>
                    <input type="file" name="posterImg" class="poster-img" style="display:none;">
                    <a class="btn btn-default edit-img">Edit Image</a>
                    
            </div>
            
            <button type="submit" class="btn btn-default">Update</button>
            <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
        </form>
        
    
</div>
</div>
@stop
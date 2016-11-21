@extends ('layouts.dashboard')
@section('page_heading','Update Rotten-Movie')

@section('section')

<div class="col-sm-12">
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
     <!-- <div class="col-lg-6"> -->
        <form role="form" action="{{ action('HomeController@updaterotenMovie') }}" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <input type="hidden" value="<?php echo $data[0]->id;?>" name="id">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <label>Title</label>
                <input class="form-control" name="title" value="<?php echo $data[0]->title; ?>">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <div class="form-group">
                <label>Image</label>
                <?php  if($data[0]->poster_image == 'N/A' && $data[0]->poster_image == 'None'){ ?>
                    <input type="file" name="posterImg">
                <?php }else{ ?>
                    <img class="old-img" style ="width:100px;" src = "<?php echo $data[0]->poster_image; ?>"/>
                    <input type="file" name="posterImg" class="poster-img" style="display:none;">
                    <a class="btn btn-default edit-img">Edit Image</a>
                    <?php }?>
            </div>
           
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="plot" rows="3" id="comment"><?php echo $data[0]->plot; ?></textarea>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Url</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->url; ?>" >
            </div>

            <div class="form-group">
                <label for="disabledSelect">Genre</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->other_values; ?>" >
            </div>
     
            <button type="submit" class="btn btn-default">Update</button>
          
        </form>
  
</div>
</div>
@stop
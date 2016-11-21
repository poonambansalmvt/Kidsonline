@extends('layouts.dashboard')
@section('page_heading','Add Slider Image')
@section('section')

<div class="col-sm-6">
<div class="row">

        <form role="form" action="{{ action('HomeController@Addsliderimg') }}" enctype="multipart/form-data" method="post">
        	<div class="alert alert-info">
        		<strong>Note!</strong>
        		<?php 
        			$limitimg = 10; $insert_img = $data;
        			$avail_img = $limitimg-$insert_img;
        			if($avail_img>0){
        			?>
        				You Can add only <?php echo $avail_img; ?> image more !
        			<?php
        			}else{
        				?>
        				Your Limit is Full.
        				<script>
        					jQuery(document).ready(function()
        					{
        						jQuery('#submit').attr('disabled','disabled');
        					});
        				</script>
        				<?php
        			}
        		?>
        	</div>
            <div class="form-group">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <label>Image Name</label>
                <input class="form-control" name="imgname" required="required">
            </div>
            <div class="form-group">
                <label>Image</label>
                    <input type="file" name="sliderimg">
            </div>
            <div class="alert alert-info">
                <strong>Note!</strong>Please upload image size of '1030 X 390'
                </div>
            <button type="submit" class="btn btn-default" id="submit">Add Image</button>
        </form>
</div>
</div> 
@stop

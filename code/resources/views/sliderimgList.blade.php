@extends('layouts.dashboard')
@section('page_heading','Slider-Images')

@section('section')

<div class="col-sm-12">
<div class="row">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Image Nmae</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1 ; foreach ($data as $key => $value) { ?>
      <tr>
        <td><?php echo $i ; ?></td>
        <td><?php echo $value->imgname;?></td>
        <td><img style = "width:150px;" src="<?php echo $value->imgpath; ?>"/></td>
        <td><a href="{{ url('/admin/editSliderimg')}}/<?php echo $value->id; ?>">Edit</a>/<a href="{{ url('/admin/sliderimgList')}}/<?php echo $value->id; ?>">Delete</a></td>
      </tr>
      <?php $i++;} ?>
    </tbody>
  </table>
  
	
</div>

</div>
@stop
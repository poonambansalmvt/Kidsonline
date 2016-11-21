@extends('layouts.dashboard')
@section('page_heading','Rotten-Tomatoes Movies')

@section('section')

<div class="col-sm-12">
<div class="row">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Image</th>
        <th style="width: 10%;">Destination Url</th>
        <th>Desciption</th>
        <th>Genre</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1 ; foreach ($data as $key => $value) { ?>
      <tr>
        <td><?php echo $i ; ?></td>
        <td><?php echo $value->title;?></td>
        <td><img style = "height:60px;width:60px;" src="<?php if($value->poster_image != 'N/A' && $value->poster_image != 'None'){echo $value->poster_image;}else{ echo "http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg";	}?>"/></td>
        <td><?php echo $value->url;?></td>
        <td>
        <?php 
          $des = $value->plot;
          $des = substr($des,0,180)." <b>. . . .</b>";
          echo $des;
        ?>
        </td>
        <td><?php echo $value->other_values;?></td>
        <td><a href="{{ url('/admin/editrottenMovie')}}/<?php echo $value->id; ?>">Edit</a>/Delete</td>
      </tr>
      <?php $i++;} ?>
    </tbody>
  </table>
   <div class="pagination" style="float:right;">{{ $data->links() }}</div>
	
</div>

</div>
@stop
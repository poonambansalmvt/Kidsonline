@extends('layouts.dashboard')
@section('page_heading','Imdb Movies')

@section('section')

<div class="col-sm-12">
<div class="row">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Image</th>
        <th style="width: 10%;">Imdb-rating</th>
        <th>Desciption</th>
        <th>Duration</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1 ; foreach ($data as $key => $value) { ?>
      <tr>
        <td><?php echo $i ; ?></td>
        <td><?php echo $value->title;?></td>
        <td><img style = "height:60px;width:60px;" src="<?php if($value->poster != 'N/A' && $value->poster != 'None'){echo $value->poster;}else{ echo "http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg";	}?>"/></td>
        <td><?php echo $value->imdb_rating;?></td>
        <td><?php echo $value->plot;?></td>
        <td><?php echo $value->runtime;?></td>
        <td><a href="{{ url('/admin/editimdbMovie')}}/<?php echo $value->omdb_id; ?>">Edit</a>/Delete</td>
      </tr>
      <?php $i++;} ?>
    </tbody>
  </table>
   <div class="pagination" style="float:right;">{{ $data->links() }}</div>
	
</div>

</div>
@stop
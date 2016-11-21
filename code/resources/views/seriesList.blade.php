@extends ('layouts.dashboard')
@section('page_heading','Series-list')
@section('section')
<div class="col-sm-12">
	<div class="row">
		<table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Id</th>
	        <th>Title</th>
	        <th>Image</th>
	        <th>Imdb-rating</th>
	        <th style="width: 14%;">Tomato-user-rating</th>
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
	        <td><img style = "height:60px;width:60px;" src="<?php if($value->poster != 'N/A'){echo $value->poster;}else{ echo "http://kidsonline.devserver.co.in/assets/images/default-slide-img.jpg";	}?>"/></td>
	        <td><?php echo $value->imdb_rating;?></td>
	        <td><?php echo $value->tomato_user_rating;?></td>
	        <td><?php echo $value->plot;?></td>
	        <td><?php echo $value->runtime;?></td>
	        <td><a href="{{ url('/admin/editSeries')}}/<?php echo $value->omdb_id; ?>">Edit</a>/Delete</td>
	      </tr>
	      <?php $i++;} ?>
	    </tbody>
	  </table>
	  <div class="pagination" style="float:right;">{{ $data->links() }}</div>
		<!-- <div class="col-sm-6">
			@section ('cchart1_panel_title','Line Chart')
			@section ('cchart1_panel_body')
			@include('widgets.charts.clinechart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))

			@section ('cchart3_panel_title','Donut Chart')
			@section ('cchart3_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cdonutchart')</div>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart3'))
		</div>
		<div class="col-sm-6">
			
			@section ('cchart2_panel_title','Pie Chart')
			@section ('cchart2_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cpiechart')</div>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart2'))

			@section ('cchart4_panel_title','Bar Chart')
			@section ('cchart4_panel_body')
			@include('widgets.charts.cbarchart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart4'))
		</div> --> 
	</div>
	
	
</div>
@stop

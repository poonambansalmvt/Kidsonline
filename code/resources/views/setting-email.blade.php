@extends ('layouts.dashboard')
@section('page_heading','Update-Email')

@section('section')

<div class="col-sm-6">
<div class="row">


     
        <form role="form" action="{{ action('HomeController@updatesettings') }}" method="post">
            <div class="form-group">
                <input type="hidden" value="<?php echo $data[0]->id; ?>" name="id">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <label>Contact-form Email</label>
                <input class="form-control" name="email" value="<?php echo $data[0]->email;?>">
                
            </div>
            
           
            
            <button type="submit" class="btn btn-default">Update</button>
            
        </form>

</div>
</div>
@stop
@extends ('layouts.dashboard')
@section('page_heading','Settings')

@section('section')
<div class="col-sm-6">
<div class="row">


     <!-- <div class="col-lg-6"> -->
        
            <div class="form-group">
                
                <label>Contact-form Email</label>
                <input class="form-control" name="contactemail" value="<?php echo $data[0]->email; ?>" disabled="disabled">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
           
            
          
            <a class="btn btn-default" href="{{ url('/admin/setting-email')}}/<?php echo $data[0]->id; ?>">Edit</a>
            
        
   
</div>
</div>
@stop
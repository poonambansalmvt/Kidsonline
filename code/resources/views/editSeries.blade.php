@extends ('layouts.dashboard')
@section('page_heading','Update-Series')

@section('section')
<div class="col-sm-12">
<div class="row">
<?php
/*echo "<pre>";
print_r($data);
echo "</pre>";*/
?>
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
        <form role="form" action="{{ action('HomeController@updateSeries') }}" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <input type="hidden" value="<?php echo $data[0]->omdb_id;?>" name="id">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <label>Title</label>
                <input class="form-control" name="title" value="<?php echo $data[0]->title; ?>">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <div class="form-group">
                <label>Image</label>
                <?php  if($data[0]->poster == 'N/A'){ ?>
                    <input type="file" name="posterImg">
                <?php }else{ ?>
                    <img class="old-img" style ="width:100px;" src = "<?php echo $data[0]->poster; ?>"/>
                    <input type="file" name="posterImg" class="poster-img" style="display:none;">
                    <a class="btn btn-default edit-img">Edit Image</a>
                    <?php }?>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Imdb Rating</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->imdb_rating; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Tomato User Rating</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->tomato_user_rating; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Rated</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->rated; ?>" disabled>
            </div>
            <!-- <div class="form-group">
                <label for="disabledSelect">Type</label>
                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Genre</label>
                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
            </div> -->
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="plot" rows="3" id="comment"><?php echo $data[0]->plot; ?></textarea>
            </div>
            <div class="form-group">
                <label for="disabledSelect">Run-time</label>
                <input class="form-control" id="disabledInput" type="text" value="<?php echo $data[0]->runtime; ?>" disabled>
            </div>
            <!-- <div class="form-group">
                <label>Static Control</label>
                <p class="form-control-static">email@example.com</p>
            </div>
            <div class="form-group">
                <label>File input</label>
                <input type="file">
            </div>
            <div class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Checkboxes</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Checkbox 1
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Checkbox 2
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">Checkbox 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Inline Checkboxes</label>
                <label class="checkbox-inline">
                    <input type="checkbox">1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox">2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox">3
                </label>
            </div>
            <div class="form-group">
                <label>Radio Buttons</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Inline Radio Buttons</label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                </label>
            </div>
            <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Multiple Selects</label>
                <select multiple class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-default">Update</button>
            <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
        </form>
    <!-- </div> -->
    <!-- <div class="col-lg-6">
        <h2>Disabled Form States</h2>
        <form role="form">
            <fieldset disabled>
                <div class="form-group">
                    <label for="disabledSelect">Disabled input</label>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Disabled Checkbox
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Disabled Button</button>
            </fieldset>
        </form>
        <h2>Form Validation</h2>
        <form role="form">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">Input with success</label>
                <input type="text" class="form-control" id="inputSuccess">
            </div>
            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning">Input with warning</label>
                <input type="text" class="form-control" id="inputWarning">
            </div>
            <div class="form-group has-error">
                <label class="control-label" for="inputError">Input with error</label>
                <input type="text" class="form-control" id="inputError">
            </div>
        </form>
        <h2>Input Groups</h2>
        <form role="form">
            <div class="form-group input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                <input type="text" class="form-control" placeholder="Font Awesome Icon">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
            </div>
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
            </div>
        </form>
        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>
    </div>  -->
</div>
</div>
@stop

<div class="form-group">
  <label class="col-md-3 control-label">Type:</label>
  <div class="col-md-4">
    <select name="post_type" id="post_type" class="form-control">
      <option value="0">Post</option>
      <option value="1">Page</option>
    </select>
    @if ($errors->any())
      <p class="errors">{{$errors->first('post_type')}}</p>
    @endif
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label">Title:</label>
  <div class="col-md-8">
    {!! Form::text('post_title', null, array('id'=>'post_title','placeholder' => 'Post Title','class' => 'form-control')) !!}
    @if ($errors->any())
      <p class="errors">{{$errors->first('post_title')}}</p>
    @endif
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label">Content:</label>
  <div class="col-md-8">
    {!! Form::textarea('post_content', null, array('id'=>'post_content','placeholder' => 'Post Content','class' => 'form-control summernote','rows'=>'10')) !!}
    @if ($errors->any())
      <p class="errors">{{$errors->first('post_content')}}</p>
    @endif
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label"></label>
  <div class="col-md-8">
    <input type="submit" class="btn btn-primary" name="submit" value="Save Changes">
    <span></span>
    <input type="button" class="btn btn-default" onclick="window.history.back();" value="Cancel">
  </div>
</div>
                      
<!-- Video Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_class', 'Video Class:') !!}
    {!! Form::text('video_class', null, ['class' => 'form-control']) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('publish', 0) !!}
        {!! Form::checkbox('publish', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('videoClasses.index') }}" class="btn btn-default">Cancel</a>
</div>

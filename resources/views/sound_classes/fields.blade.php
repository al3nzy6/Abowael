<!-- Page Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page_id', 'Page Id:') !!}
    {!! Form::number('page_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_name', 'Class Name:') !!}
    {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    {!! Form::number('publish', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('soundClasses.index') }}" class="btn btn-default">Cancel</a>
</div>

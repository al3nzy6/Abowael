<!-- Pages Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pages_id', 'Pages Id:') !!}
    {!! Form::number('pages_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class N Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_n', 'Class N:') !!}
    {!! Form::text('class_n', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    {!! Form::number('publish', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raClasses.index') }}" class="btn btn-default">Cancel</a>
</div>

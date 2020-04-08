<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content_id', 'Content Id:') !!}
    {!! Form::number('content_id', null, ['class' => 'form-control']) !!}
</div>

<!-- R Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_id', 'R Id:') !!}
    {!! Form::number('r_id', null, ['class' => 'form-control']) !!}
</div>

<!-- R Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_name', 'R Name:') !!}
    {!! Form::text('r_name', null, ['class' => 'form-control']) !!}
</div>

<!-- R Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_email', 'R Email:') !!}
    {!! Form::text('r_email', null, ['class' => 'form-control']) !!}
</div>

<!-- R Answer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('r_answer', 'R Answer:') !!}
    {!! Form::textarea('r_answer', null, ['class' => 'form-control']) !!}
</div>

<!-- R Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_datetime', 'R Datetime:') !!}
    {!! Form::text('r_datetime', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    {!! Form::text('publish', null, ['class' => 'form-control']) !!}
</div>

<!-- Readable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('readable', 'Readable:') !!}
    {!! Form::number('readable', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raReplies.index') }}" class="btn btn-default">Cancel</a>
</div>

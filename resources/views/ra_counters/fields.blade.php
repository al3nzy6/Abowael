<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID', 'Id:') !!}
    {!! Form::text('ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Count', 'Count:') !!}
    {!! Form::text('Count', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raCounters.index') }}" class="btn btn-default">Cancel</a>
</div>

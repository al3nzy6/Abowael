<!-- Ips Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ips', 'Ips:') !!}
    {!! Form::number('ips', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ips.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Page Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page_id', 'Page Id:') !!}
    {!! Form::number('page_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::number('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Snd Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('snd_name', 'Snd Name:') !!}
    {!! Form::text('snd_name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_name', 'File Name:') !!}
    {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::number('size', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Visit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit', 'Visit:') !!}
    {!! Form::text('visit', null, ['class' => 'form-control']) !!}
</div>

<!-- Download Field -->
<div class="form-group col-sm-6">
    {!! Form::label('download', 'Download:') !!}
    {!! Form::text('download', null, ['class' => 'form-control']) !!}
</div>

<!-- Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sent', 'Sent:') !!}
    {!! Form::text('sent', null, ['class' => 'form-control']) !!}
</div>

<!-- Soundtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('soundtype', 'Soundtype:') !!}
    {!! Form::number('soundtype', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sounds.index') }}" class="btn btn-default">Cancel</a>
</div>

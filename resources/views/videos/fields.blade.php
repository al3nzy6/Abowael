<!-- Video Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_class', 'Video Class:') !!}
    {!! Form::number('video_class', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_name', 'Video Name:') !!}
    {!! Form::text('video_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_link', 'Video Link:') !!}
    {!! Form::text('video_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Pic Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pic_link', 'Pic Link:') !!}
    {!! Form::text('pic_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Visit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit', 'Visit:') !!}
    {!! Form::number('visit', null, ['class' => 'form-control']) !!}
</div>

<!-- Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sent', 'Sent:') !!}
    {!! Form::number('sent', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('videos.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Pages Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pages_id', 'Pages Id:') !!}
    {!! Form::text('pages_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::text('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', 'Picture:') !!}
    {!! Form::text('picture', null, ['class' => 'form-control']) !!}
</div>

<!-- Created Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created', 'Created:') !!}
    {!! Form::text('created', null, ['class' => 'form-control']) !!}
</div>

<!-- Modified Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modified', 'Modified:') !!}
    {!! Form::text('modified', null, ['class' => 'form-control']) !!}
</div>

<!-- View Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view', 'View:') !!}
    {!! Form::number('view', null, ['class' => 'form-control']) !!}
</div>

<!-- Reply Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reply', 'Reply:') !!}
    {!! Form::number('reply', null, ['class' => 'form-control']) !!}
</div>

<!-- Writer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('writer', 'Writer:') !!}
    {!! Form::text('writer', null, ['class' => 'form-control']) !!}
</div>

<!-- Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sent', 'Sent:') !!}
    {!! Form::number('sent', null, ['class' => 'form-control']) !!}
</div>

<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::number('userid', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    {!! Form::number('publish', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raContents.index') }}" class="btn btn-default">Cancel</a>
</div>

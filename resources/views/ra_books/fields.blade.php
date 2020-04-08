<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Puplish Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puplish_date', 'Puplish Date:') !!}
    {!! Form::text('puplish_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Puplish House Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puplish_house', 'Puplish House:') !!}
    {!! Form::text('puplish_house', null, ['class' => 'form-control']) !!}
</div>

<!-- About Book Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_book', 'About Book:') !!}
    {!! Form::textarea('about_book', null, ['class' => 'form-control']) !!}
</div>

<!-- Book Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book_link', 'Book Link:') !!}
    {!! Form::text('book_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Cover Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cover_link', 'Cover Link:') !!}
    {!! Form::text('cover_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Hegoog Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hegoog', 'Hegoog:') !!}
    {!! Form::number('hegoog', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raBooks.index') }}" class="btn btn-default">Cancel</a>
</div>

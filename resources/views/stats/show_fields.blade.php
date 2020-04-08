<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $stats->ip }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $stats->date }}</p>
</div>

<!-- Hits Field -->
<div class="form-group">
    {!! Form::label('hits', 'Hits:') !!}
    <p>{{ $stats->hits }}</p>
</div>


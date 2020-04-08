<div class="table-responsive">
    <table class="table" id="raUseronlines-table">
        <thead>
            <tr>
                <th>Ip</th>
        <th>File</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raUseronlines as $raUseronline)
            <tr>
                <td>{{ $raUseronline->ip }}</td>
            <td>{{ $raUseronline->file }}</td>
                <td>
                    {!! Form::open(['route' => ['raUseronlines.destroy', $raUseronline->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raUseronlines.show', [$raUseronline->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raUseronlines.edit', [$raUseronline->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

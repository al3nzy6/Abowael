<div class="table-responsive">
    <table class="table" id="stats-table">
        <thead>
            <tr>
                <th>Ip</th>
        <th>Date</th>
        <th>Hits</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stats as $stats)
            <tr>
                <td>{{ $stats->ip }}</td>
            <td>{{ $stats->date }}</td>
            <td>{{ $stats->hits }}</td>
                <td>
                    {!! Form::open(['route' => ['stats.destroy', $stats->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stats.show', [$stats->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('stats.edit', [$stats->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

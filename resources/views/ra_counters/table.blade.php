<div class="table-responsive">
    <table class="table" id="raCounters-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Count</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raCounters as $raCounter)
            <tr>
                <td>{{ $raCounter->ID }}</td>
            <td>{{ $raCounter->Count }}</td>
                <td>
                    {!! Form::open(['route' => ['raCounters.destroy', $raCounter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raCounters.show', [$raCounter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raCounters.edit', [$raCounter->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

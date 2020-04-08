<div class="table-responsive">
    <table class="table" id="hegoogs-table">
        <thead>
            <tr>
                <th>Hegoog</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hegoogs as $hegoog)
            <tr>
                <td>{{ $hegoog->hegoog }}</td>
                <td>
                    {!! Form::open(['route' => ['hegoogs.destroy', $hegoog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hegoogs.show', [$hegoog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('hegoogs.edit', [$hegoog->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

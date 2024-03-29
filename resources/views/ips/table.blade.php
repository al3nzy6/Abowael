<div class="table-responsive">
    <table class="table" id="ips-table">
        <thead>
            <tr>
                <th>Ips</th>
        <th>Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ips as $ips)
            <tr>
                <td>{{ $ips->ips }}</td>
            <td>{{ $ips->code }}</td>
                <td>
                    {!! Form::open(['route' => ['ips.destroy', $ips->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ips.show', [$ips->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ips.edit', [$ips->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

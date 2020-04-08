<div class="table-responsive">
    <table class="table" id="smsGroups-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($smsGroups as $smsGroups)
            <tr>
                <td>{{ $smsGroups->name }}</td>
            <td>{{ $smsGroups->description }}</td>
            <td>{{ $smsGroups->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['smsGroups.destroy', $smsGroups->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('smsGroups.show', [$smsGroups->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('smsGroups.edit', [$smsGroups->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

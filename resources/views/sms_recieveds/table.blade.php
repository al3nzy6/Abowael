<div class="table-responsive">
    <table class="table" id="smsRecieveds-table">
        <thead>
            <tr>
                <th>Number</th>
        <th>Name</th>
        <th>Sms Groups Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($smsRecieveds as $smsRecieved)
            <tr>
                <td>{{ $smsRecieved->number }}</td>
            <td>{{ $smsRecieved->name }}</td>
            <td>{{ $smsRecieved->sms_groups_id }}</td>
                <td>
                    {!! Form::open(['route' => ['smsRecieveds.destroy', $smsRecieved->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('smsRecieveds.show', [$smsRecieved->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('smsRecieveds.edit', [$smsRecieved->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

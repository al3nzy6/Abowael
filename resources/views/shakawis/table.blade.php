<div class="table-responsive">
    <table class="table" id="shakawis-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Mail</th>
        <th>Date</th>
        <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shakawis as $shakawi)
            <tr>
                <td>{{ $shakawi->name }}</td>
            <td>{{ $shakawi->mail }}</td>
            <td>{{ $shakawi->date }}</td>
            <td>{{ $shakawi->message }}</td>
                <td>
                    {!! Form::open(['route' => ['shakawis.destroy', $shakawi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shakawis.show', [$shakawi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('shakawis.edit', [$shakawi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

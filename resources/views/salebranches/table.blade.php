<div class="table-responsive">
    <table class="table" id="salebranches-table">
        <thead>
            <tr>
                <th>Mobile</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Date</th>
        <th>Price1</th>
        <th>Type1</th>
        <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($salebranches as $salebranches)
            <tr>
                <td>{{ $salebranches->mobile }}</td>
            <td>{{ $salebranches->name }}</td>
            <td>{{ $salebranches->mail }}</td>
            <td>{{ $salebranches->date }}</td>
            <td>{{ $salebranches->price1 }}</td>
            <td>{{ $salebranches->type1 }}</td>
            <td>{{ $salebranches->message }}</td>
                <td>
                    {!! Form::open(['route' => ['salebranches.destroy', $salebranches->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salebranches.show', [$salebranches->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('salebranches.edit', [$salebranches->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

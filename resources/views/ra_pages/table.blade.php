<div class="table-responsive">
    <table class="table" id="raPages-table">
        <thead>
            <tr>
                <th>Pages</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raPages as $raPages)
            <tr>
                <td>{{ $raPages->pages }}</td>
            <td>{{ $raPages->description }}</td>
            <td>{{ $raPages->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['raPages.destroy', $raPages->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raPages.show', [$raPages->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raPages.edit', [$raPages->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

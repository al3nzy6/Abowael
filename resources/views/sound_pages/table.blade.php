<div class="table-responsive">
    <table class="table" id="soundPages-table">
        <thead>
            <tr>
                <th>Pages</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($soundPages as $soundPages)
            <tr>
                <td>{{ $soundPages->pages }}</td>
            <td>{{ $soundPages->description }}</td>
            <td>{{ $soundPages->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['soundPages.destroy', $soundPages->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('soundPages.show', [$soundPages->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('soundPages.edit', [$soundPages->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

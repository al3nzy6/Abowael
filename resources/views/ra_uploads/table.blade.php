<div class="table-responsive">
    <table class="table" id="raUploads-table">
        <thead>
            <tr>
                <th>Userid</th>
        <th>File Name</th>
        <th>Upload Date</th>
        <th>Size</th>
        <th>Type</th>
        <th>Caption</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raUploads as $raUpload)
            <tr>
                <td>{{ $raUpload->userid }}</td>
            <td>{{ $raUpload->file_name }}</td>
            <td>{{ $raUpload->upload_date }}</td>
            <td>{{ $raUpload->size }}</td>
            <td>{{ $raUpload->type }}</td>
            <td>{{ $raUpload->caption }}</td>
                <td>
                    {!! Form::open(['route' => ['raUploads.destroy', $raUpload->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raUploads.show', [$raUpload->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raUploads.edit', [$raUpload->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

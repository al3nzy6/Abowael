<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>Video Class</th>
        <th>Date</th>
        <th>Video Name</th>
        <th>Video Link</th>
        <th>Pic Link</th>
        <th>Visit</th>
        <th>Sent</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ $video->video_class }}</td>
            <td>{{ $video->date }}</td>
            <td>{{ $video->video_name }}</td>
            <td>{{ $video->video_link }}</td>
            <td>{{ $video->pic_link }}</td>
            <td>{{ $video->visit }}</td>
            <td>{{ $video->sent }}</td>
                <td>
                    {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('videos.show', [$video->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('videos.edit', [$video->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

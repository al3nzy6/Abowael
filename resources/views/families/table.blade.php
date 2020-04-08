<div class="table-responsive">
    <table class="table" id="families-table">
        <thead>
            <tr>
                <th>Date</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Third Name</th>
        <th>Family</th>
        <th>Id Num</th>
        <th>Mobile</th>
        <th>Reg Day</th>
        <th>Reg Month</th>
        <th>Reg Year</th>
        <th>Area</th>
        <th>Job</th>
        <th>Sharing</th>
        <th>Id Pic</th>
        <th>Profile Pc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($families as $family)
            <tr>
                <td>{{ $family->date }}</td>
            <td>{{ $family->first_name }}</td>
            <td>{{ $family->second_name }}</td>
            <td>{{ $family->third_name }}</td>
            <td>{{ $family->family }}</td>
            <td>{{ $family->id_num }}</td>
            <td>{{ $family->mobile }}</td>
            <td>{{ $family->reg_day }}</td>
            <td>{{ $family->reg_month }}</td>
            <td>{{ $family->reg_year }}</td>
            <td>{{ $family->area }}</td>
            <td>{{ $family->job }}</td>
            <td>{{ $family->sharing }}</td>
            <td>{{ $family->id_pic }}</td>
            <td>{{ $family->profile_pc }}</td>
                <td>
                    {!! Form::open(['route' => ['families.destroy', $family->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('families.show', [$family->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('families.edit', [$family->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

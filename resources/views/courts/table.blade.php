<div class="table-responsive">
    <table class="table" id="courts-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Membertype</th>
        <th>Dateofbirth</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courts as $court)
            <tr>
                <td>{{ $court->firstname }}</td>
            <td>{{ $court->surname }}</td>
            <td>{{ $court->membertype }}</td>
            <td>{{ $court->dateofbirth }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['courts.destroy', $court->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courts.show', [$court->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('courts.edit', [$court->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

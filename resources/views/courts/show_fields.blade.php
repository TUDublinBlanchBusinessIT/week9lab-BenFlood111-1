<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $court->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $court->surname }}</p>
</div>

<!-- Membertype Field -->
<div class="col-sm-12">
    {!! Form::label('membertype', 'Membertype:') !!}
    <p>{{ $court->membertype }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $court->dateofbirth }}</p>
</div>


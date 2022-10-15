@extends ('layout')

@section ('content')
    <h1>Roxy and Luna</h1>
    <p>
        Roxy and Luna are my Cockapoos. Roxy is the bigger one and is     
    @php
    //Date format Y-m-d
$dateOfBirth = '2022-03-18';

$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
echo $age;
@endphp
. Luna is the smaller one and is 
    @php
    //Date format Y-m-d
$dateOfBirth = '2022-07-02';
$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
echo $age;
@endphp
.
</p>
    <img src="/images/roxy_and_luna.jpg alt="Roxy and Luna" width="50%" height="50%"><br/>
@endsection

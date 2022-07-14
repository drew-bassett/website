@extends ('layout')

@section ('content')
    <h1>Roxy</h1>
    <p>
        Roxy is my Cockapoo. She is     
    @php
    //Date format Y-m-d
$dateOfBirth = '2022-03-18';

$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
echo $age;
@endphp
.
</p>
    <div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'kGOzzqFPgdihG5l4l4sP'});Pixlee.addSimpleWidget({widgetId:'36725'});};</script><script src="//instafeed.assets.pxlecdn.com/assets/pixlee_widget_1_0_0.js"></script>
@endsection

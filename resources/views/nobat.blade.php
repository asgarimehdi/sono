

@foreach($reception as $receptions)

{{$receptions->patient->name}}
{{$receptions->patient->family}}
<hr>

@endforeach
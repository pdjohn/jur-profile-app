@php
    $resultData = stringToJSON($item);
/*if($loop->index ==3){ dd($resultData);}*/
@endphp

<ul class="list-unstyled">
@foreach($resultData["field_capacity"] as $data)
    <li>
    <ul style="list-style-type:circle">
        <li>UTC: {{ convertUNIXToDatatime($data["utc"]) }}</li>
        <li>Average data: {{ $data["average_moisture_data"] }}</li>
    </ul>
    </li>
@endforeach
</ul>

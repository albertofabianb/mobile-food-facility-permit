@include ('partials.header')
<div class="container">

    <div class="form-group col-2 mb-3">
        <a href="{{ route('food_truck') }}"><button class="btn btn-success"><< Back</button></a>
    </div>
    <div class="form-group">
        <table data-toggle="table" class="panel panel-default">
            <tr>
                <td><label>locationid</label></td>
                <td>{{ $food_truck->locationid }}</td>
            </tr>
            <tr>
                <td><label>Applicant</label></td>
                <td>{{ $food_truck->Applicant }}</td>
            </tr>
            <tr>
                <td><label>FacilityType</label></td>
                <td>{{ $food_truck->FacilityType }}</td>
            </tr>
            <tr>
                <td><label>cnn</label></td>
                <td>{{ $food_truck->cnn }}</td>
            </tr>
            <tr>
                <td><label>LocationDescription</label></td>
                <td>{{ $food_truck->LocationDescription }}</td>
            </tr>
            <tr>
                <td><label>Address</label></td>
                <td>{{ $food_truck->Address }}</td>
            </tr>
            <tr>
                <td><label>blocklot</label></td>
                <td>{{ $food_truck->blocklot }}</td>
            </tr>
            <tr>
                <td><label>block</label></td>
                <td>{{ $food_truck->block }}</td>
            </tr>
            <tr>
                <td><label>lot</label></td>
                <td>{{ $food_truck->lot }}</td>
            </tr>
            <tr>
                <td><label>permit</label></td>
                <td>{{ $food_truck->permit }}</td>
            </tr>
            <tr>
                <td><label>Status</label></td>
                <td>{{ $food_truck->Status }}</td>
            </tr>
            <tr>
                <td><label>FoodItems</label></td>
                <td>{{ $food_truck->FoodItems }}</td>
            </tr>
            <tr>
                <td><label>X</label></td>
                <td>{{ $food_truck->X }}</td>
            </tr>
            <tr>
                <td><label>Y</label></td>
                <td>{{ $food_truck->Y }}</td>
            </tr>
            <tr>
                <td><label>Latitude</label></td>
                <td>{{ $food_truck->Latitude }}</td>
            </tr>
            <tr>
                <td><label>Longitude</label></td>
                <td>{{ $food_truck->Longitude }}</td>
            </tr>
            <tr>
                <td><label>Schedule</label></td>
                <td>{{ $food_truck->Schedule }}</td>
            </tr>
            <tr>
                <td><label>dayshours</label></td>
                <td>{{ $food_truck->dayshours }}</td>
            </tr>
            <tr>
                <td><label>NOISent</label></td>
                <td>{{ $food_truck->NOISent }}</td>
            </tr>
            <tr>
                <td><label>Approved</label></td>
                <td>{{ $food_truck->Approved }}</td>
            </tr>
            <tr>
                <td><label>Received</label></td>
                <td>{{ $food_truck->Received }}</td>
            </tr>
            <tr>
                <td><label>PriorPermit</label></td>
                <td>{{ $food_truck->PriorPermit }}</td>
            </tr>
            <tr>
                <td><label>ExpirationDate</label></td>
                <td>{{ $food_truck->ExpirationDate }}</td>
            </tr>
            <tr>
                <td><label>Location</label></td>
                <td>{{ $food_truck->Location }}</td>
            </tr>
            <tr>
                <td><label>Fire Prevention Districts</label></td>
                <td>{{ $food_truck->{'Fire Prevention Districts'} }}</td>
            </tr>
            <tr>
                <td><label>Police Districts</label></td>
                <td>{{ $food_truck->{'Police Districts'} }}</td>
            </tr>
            <tr>
                <td><label>Supervisor Districts</label></td>
                <td>{{ $food_truck->{'Supervisor Districts'} }}</td>
            </tr>
            <tr>
                <td><label>Zip Codes</label></td>
                <td>{{ $food_truck->{'Zip Codes'} }}</td>
            </tr>
            <tr>
                <td><label>Neighborhoods (old)</label></td>
                <td>{{ $food_truck->{'Neighborhoods (old)'} }}</td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>


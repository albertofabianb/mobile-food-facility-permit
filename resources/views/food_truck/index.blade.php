@include ('partials.header')
<style>

    th {
        text-align: center;
    }

</style>

<div class="container">
    <form method="get" action="{{route('food_truck')}}">
        {{ csrf_field() }}
        <div class="row mb-3 centered">
            <div class="form-group col-2">
                <label for="">Applicant</label><input type="text" class="form-control" value="{{ $_GET['applicant_search'] ?? '' }}" id="applicant_search" name="applicant_search">
            </div>
            <div class="form-group col-2">
                <label for="">Location</label><input type="text" class="form-control" value="{{ $_GET['location_search'] ?? '' }}" id="location_search" name="location_search">
            </div>
            <div class="form-group col-2">
                <label for="">Address</label><input type="text" class="form-control" value="{{ $_GET['address_search'] ?? '' }}" id="address_search" name="address_search">
            </div>
            <div class="form-group col-2">
                <label for="">Foods Items</label><input type="text" class="form-control" value="{{ $_GET['food_items_search'] ?? '' }}" id="food_items_search" name="food_items_search">
            </div>
            <div class="form-group col-2">
                <label for="">Permit Status</label>
                <select class="form-control" id="status_search" name="status_search">
                    <option></option>
                    @foreach ($permit_statuses as $permit_status)
                        <option value="{{ $permit_status }}"
                        @if (@$_GET['status_search'] == $permit_status)
                            selected
                        @endif
                        >{{ $permit_status }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3 centered">
            <div class="form-group col-2">
                <button type="submit" class="btn btn-primary p-6 px-5">Search</button>
            </div>
            <div class="form-group col-2">
                <button class="btn btn-warning" onclick="cleanFilters()">Clean Filters</button>
            </div>
        </div>
    </form>
    <div>
        <table data-toggle="table" class="panel panel-default">
            <thead>
            <tr>
                <th>Applicant</th>
                <th>Location</th>
                <th>Address</th>
                <th>Google<br>Map</th>
                <th>Food Items</th>
                <th>Days Hours</th>
                <th>Permit<br>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($food_trucks as $food_truck)
                <tr>
                    <td>{{ $food_truck->Applicant }}</td>
                    <td>{{ $food_truck->LocationDescription }}</td>
                    <td>{{ $food_truck->Address }}</td>
                    <td class="text-center"><a href="https://www.google.com/maps/place/{{ $food_truck->Location }}" target="_blank">
                            <img src="images/google_map.png" height="40">
                        </a></td>
                    <td>{{ $food_truck->FoodItems }}</td>
                    <td>{{ $food_truck->dayshours }}</td>
                    <td>{{ $food_truck->Status }}</td>
                    <td>
                        <a href="{{route('food_truck_details',[$food_truck->locationid])}}">
                            <button type="button" class="btn btn-success">Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="container">
        <div class="mt-2 center col-12 centered">
            {{ $food_trucks->links() }}
        </div>

    </div>
</div>

</body>
</html>

<script>
    function cleanFilters() {
        $('#applicant_search').val('');
        $('#location_search').val('');
        $('#address_search').val('');
        $('#food_items_search').val('');
        $('#status_search').val('');
    }
</script>

@extends('layouts.app')

@section('content')
<html>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-5">
                <h1>List of devices</h1>
                <table border="2">
                    <tr>
                        <td>ID</td>
                        <td>Device ID name</td>
                        <td>Location on X axis</td>
                        <td>Location on Y axis</td>
                        <td>Device type</td>
                    </tr>
                    @foreach($Deviceslist as $Deviceunit)
                    <tr>
                        <td>{{$Deviceunit['id']}}</td>
                        <td>{{$Deviceunit['DeviceIdName']}}</td>
                        <td>{{$Deviceunit['LocationX']}}</td>
                        <td>{{$Deviceunit['LocationY']}}</td>
                        <td>{{$Deviceunit['DeviceType']}}</td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <h5>Distance between two furthest away devices</h5>
                <table border="1">
                <tr>
                <td>Device name 1</td>
                <td>Device name 2</td>
                <td>Longest distance</td>
                </tr>
                </table>
                <br><br>
                <form action="addDevice" method="POST">
                    @csrf
                    <input type="text" name="DeviceIdName" placeholder="Input Device ID name">
                    <br>
                    <span style="color:red">@error('DeviceIdName'){{$message}}@enderror</span>
                    <br>
                    <input type="text" name="LocationX" placeholder="Location X">
                    <br>
                    <span style="color:red">@error('LocationX'){{$message}}@enderror</span><br>
                    <input type="text" name="LocationY" placeholder="Location Y">
                    <br>
                    <span style="color:red">@error('LocationY'){{$message}}@enderror</span>
                    <br>
                    <select class="form-control" name="DeviceType">
                        <option value="Home">Home Device</option>
                        <option value="Work">Work Device</option>            
                    </select>
                    <br><br>
                    <button type="submit"> Add Device</button>
                </form>
                </div>
                <div class="col">
                @section('scripts')
                    @parent
                    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
                    <script src="/js/mapInput.js"></script>
                    @stop
                </div>
            </div>
        </div>
    </body>
</html>
@endsection

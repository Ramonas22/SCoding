@extends('layouts.app')


@section('content')
<html>

    <script>
        function text(x) {
            if(x==0) document.getElementById("AddNewDevice").style.display="block";
            else document.getElementById("AddNewDevice").style.display="none";
            return;
        }
    </script>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-5">
                <h1>List of devices</h1>
                <table border="2">
                    <tr>
                        <td>ID</td>
                        <td>Device ID name</td>
                        <td>Longitude</td>
                        <td>Latitude</td>
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
                <div class="radio-container m-r-45">
                    <button type="radio" name="fir" onclick="text(0)">Add New Device</button>
                </div>
                <br><br>
                    <div class="input-group" id="AddNewDevice" style="display:none">
                        <form action="addDevice" method="POST">
                            @csrf
                            <td>Device Name</td>
                            <input type="text" name="DeviceIdName" placeholder="Input Device ID name">
                            <br>
                            <span style="color:red">@error('DeviceIdName'){{$message}}@enderror</span>
                            <br>
                            <tr>Longitude</tr>
                            <input type="text" name="LocationX" placeholder="Insert longitude">
                            <br>
                            <span style="color:red">@error('LocationX'){{$message}}@enderror</span><br>
                            <tr>Latitude</tr>
                            <input type="text" name="LocationY" placeholder="Insert latitude">
                            <br>
                            <span style="color:red">@error('LocationY'){{$message}}@enderror</span>
                            <br>
                            <tr>Select whether device is home or work</tr>
                            <select class="form-control" name="DeviceType">
                                <option value="Home">Home Device</option>
                                <option value="Work">Work Device</option>            
                            </select>
                            <br>
                            <div class="radio-container m-r-45">
                                <button type="submit" onclick=""> Add Device</button>
                                <button type="radio" name="fir" onclick="text(1)" >Cancel</button>
                               
                            </div>    
                        </form>

                    </div>
                </div>


                <div class="col" >
                    <div align="center">Map Here</div>
                    <div id='map'></div>
            </div>
        </div>
    </body>
</html>
@endsection

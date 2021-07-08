@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
        <div>List of devices</div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Location on X axis</td>
                <td>Location on Y axis</td>
            </tr>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Location on X axis</td>
                <td>Location on Y axis</td>
            </tr>
        </table>
        <form action="submit" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Device name">
            <br><br>
            <input type="text" name="locationX" placeholder="Location X">
            <br><br>
            <input type="text" name="locationY" placeholder="Location Y">
            <br><br>
            <button type="submit"> Add Device</button>
        </form>
        </div>
        <div class="col">
            <div class="9">
        Googlemaps
            </div>
        </div>
    </div>
</div>
@endsection

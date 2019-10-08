@extends('layouts.admin_master')

@section('content')
    <h2>Menus</h2>
    <form action="{{route('admin.menu.index')}}" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">

    </form>

    <table id="datatable" class="table table-responsive" >
        <thead>
        <tr>
            <th>No</th>
            <th>Meal Rate Name</th>
            <th>Breakfast Menu</th>
            <th>Breakfast Rate</th>
            <th>Lunch Menu</th>
            <th>Lunch Rate</th>
            <th>Dinner Menu</th>
            <th>Dinner Rate</th>

        </tr>
        </thead>
        <tbody>
        @foreach($meal_rate as $key => $rate)
            <tr>
                <td>{!! $key + 1 !!}</td>
                <td>{{$rate->meal_rate_name}}</td>
                <td>{{$rate->breakfast_menu}}</td>
                <td>{{$rate->lunch_menu}}</td>
                <td>{{$rate->dinner_menu}}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


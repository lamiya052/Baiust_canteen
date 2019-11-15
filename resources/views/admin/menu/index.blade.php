@extends('layouts.admin_master')

@section('content')
    <a class="btn btn-info pull-right" href="{{ route('admin.menu.create') }}">Add Menus</a>

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
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <td>{!! $key + 1 !!}</td>
                <td>{{$menu->meal_rate_name}}</td>
                <td>{{$menu->breakfast_menu}}</td>
                <td>{{$menu->breakfast_rate}}</td>
                <td>{{$menu->lunch_menu}}</td>
                <td>{{$menu->lunch_rate}}</td>
                <td>{{$menu->dinner_menu}}</td>
                <td>{{$menu->dinner_rate}}</td>
                {{dd(Auth::user()->user_type_id)}}
                @if(Auth::user()->role_type->name == 'admin')


                <td>
                    <a class="btn btn-info pull-middle" href="{{ route('admin.menu.edit',$menu->id) }}">Edit</a>
                </td>

                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


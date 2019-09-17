@extends('layouts.admin_master')

@section('content')
    <h2>Meal Report</h2>
    <form action="{{route('admin.meal_report.index')}}" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
        From:
        <input size="16" type="text" name="from_date" value="{{ empty(request()->get('from_date'))? \Carbon\Carbon::now()->startOfMonth()->format('d-m-Y') : request()->get('from_date') }}" class="form_datetime">

        End:
        <input size="16" type="text" name="to_date" value="{{ empty(request()->get('to_date'))? \Carbon\Carbon::now()->endOfMonth()->format('d-m-Y') : request()->get('to_date') }}" class="form_datetime">
        <input type="submit" value="Submit">
    </form>

    <table id="datatable" class="table table-responsive" >
        <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Total Meal</th>
            <th>Total Cost</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user_details as $key => $user)
            <tr>
                <td>{!! $key + 1 !!}</td>
                <td>{!! $user['full_name'] !!}</td>
                <td>{!! $user['total_breakfast'] !!}</td>
                <td>{!! $user['total_lunch'] !!}</td>
                <td>{!! $user['total_dinner'] !!}</td>
                <td>{!! $user['total_meal'] !!}</td>
                <td>{!! $user['total_cost'] !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

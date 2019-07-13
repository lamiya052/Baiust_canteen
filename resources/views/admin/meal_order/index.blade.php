

@extends('layouts.admin_master')
@section('content')
    <h1>
        Meal Orders
    </h1>

    <form action="#" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
        From:
        <input size="16" type="text" name="from_date"  class="form_datetime">

        End:
        <input size="16" type="text" name="to_date"  class="form_datetime">
        <input type="submit" value="Submit">
    </form>

    <table id = "datatable" class="table table-responsive" id="users-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>


@endsection


@extends('layouts.admin_master')
@section('content')
    <a class="btn btn-info pull-right" href="{{ route('admin.bazar_cost.create') }}">Add Bazar Costs</a>
    <h1>
        Bazar Costs
    </h1>

    <table id = "datatable" class="table table-responsive">
        <thead>
        <tr>
            <th>No</th>
            <th>Created At</th>
            <th>Daily Costs</th>
            <th>Cost Details</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($bazar_costs as $key=>$bazar_cost)
            <tr>

                <td>{{ $key+1 }}</td>
                <td>{{ $bazar_cost->created_at->format('d/m/Y') }}</td>
                <td>{{ $bazar_cost->daily_cost }}</td>
                <td>{{ $bazar_cost->cost_details }}</td>
                <td>
                    <a class="btn btn-info pull-middle" href="{{ route('admin.bazar_cost.edit',$bazar_cost->id) }}">Edit</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>


@endsection

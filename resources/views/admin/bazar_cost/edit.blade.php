
@extends('layouts.admin_master')

@section('content')
    <form method="POST" action="{{route('admin.bazar_cost.update', $bazar_cost->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Daily Cost</label>
                    <input type="number" name="daily_cost" min="1" max="10000"  value="{{ $bazar_cost->daily_cost }}" class="form-control" placeholder="Daily cost" required="">
                </div>

                <div class="form-group">
                    <label>Cost Details</label>
                    <textarea type="text" name="cost_details" value="{{ $bazar_cost->cost_details }}" class="form-control" placeholder="Cost Details" required=""></textarea>
                </div>
                <button class="btn-nuploy" type="submit" value="Submit">Submit</button>
            </div>
        </div>

    </form>
@endsection

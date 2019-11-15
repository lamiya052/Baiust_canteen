@extends('layouts.admin_master')

@section('content')
    <form method="POST" action="{{route('admin.menu.store')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Meal Rate Name</label>
                    <input type="text" name="meal_rate_name" class="form-control" placeholder="Meal Rate Name" >
                </div>

                <div class="form-group">
                    <label>Breakfast Menu</label>
                    <input type="text" name="breakfast_menu"  class="form-control" placeholder="Breakfast Menu" >
                </div>

                <div class="form-group">
                    <label>Breakfast Rate</label>
                    <input type="number" name="breakfast_rate"  class="form-control" placeholder="Breakfast Rate">
                </div>

                <div class="form-group">
                    <label>Lunch Menu</label>
                    <input type="text" name="lunch_menu"  class="form-control" placeholder="Lunch Menu">
                </div>

                <div class="form-group">
                    <label>Lunch Rate</label>
                    <input type="number" name="lunch_rate" class="form-control" placeholder="Lunch Rate">
                </div>

                <div class="form-group">
                    <label>Dinner Menu</label>
                    <input type="text" name="dinner_menu"  class="form-control" placeholder="Dinner Menu">
                </div>

                <div class="form-group">
                    <label>Dinner Rate</label>
                    <input type="number" name="dinner_rate"   class="form-control" placeholder="Dinner Rate">
                </div>

                <button class="btn-nuploy" type="submit" value="Submit">Submit</button>
            </div>
        </div>
    </form>
@endsection

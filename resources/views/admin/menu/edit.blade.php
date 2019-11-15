

@extends('layouts.admin_master')

@section('content')
    <form method="POST" action="{{route('admin.menu.update', $menu->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Meal Rate Name</label>
                    <input type="text" name="meal_rate_name"   value="{{ $menu->meal_rate_name }}" class="form-control" placeholder="Meal Rate Name" required="">
                </div>
                <div class="form-group">
                    <label>breakfast menu</label>
                    <input type="text" name="breakfast_menu"  value="{{ $menu->breakfast_menu }}" class="form-control" placeholder="Breakfast Menu" required="">
                </div>

                <div class="form-group">
                    <label>breakfast rate</label>
                    <input type="number" name="breakfast_rate"   value="{{ $menu->breakfast_rate }}" class="form-control" placeholder="Breakfast Rate" required="">
                </div>

                <div class="form-group">
                    <label>lunch menu</label>
                    <input type="text" name="lunch_menu"  value="{{ $menu->lunch_menu}}" class="form-control" placeholder="Lunch Menu" required="">
                </div>

                <div class="form-group">
                    <label>lunch rate</label>
                    <input type="number" name="lunch_rate"   value="{{ $menu->lunch_rate }}" class="form-control" placeholder="Lunch Rate" required="">
                </div>

                <div class="form-group">
                    <label>dinner menu</label>
                    <input type="text" name="dinner_menu"  value="{{ $menu->dinner_menu }}" class="form-control" placeholder="Dinner Menu" required="">
                </div>


                <div class="form-group">
                    <label>dinner rate</label>
                    <input type="number" name="dinner_rate" value="{{ $menu->dinner_rate }}" class="form-control" placeholder="Dinner Rate" required="">
                </div>
                <button class="btn-nuploy" type="submit" value="Submit">Submit</button>
            </div>
        </div>

    </form>
@endsection




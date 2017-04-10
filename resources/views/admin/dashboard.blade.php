@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Smart Fish Feeding Machine Project
                </div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="active">
                                <th>Machine Details</th>
                                <th>Remaining Feed (KG)</th>
                                <th>Temperature (C)</th>
                                <th>Last Feeding Time & Feed (KG)</th>
                                <th>Feed Time & Feed Duration (Min)</th>
                                <th>Last Updated</th>
                                <th>Problem Info</th>
                                <th>On/Off</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST" role="form">
            {{ csrf_field() }}
            <legend>Add Feeding Time & Duration for Specific Machine</legend>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="code" placeholder="Machine ID">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="feeding_time" placeholder="Feeding Time">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="number" class="form-control" name="duration" placeholder="Feeding Duration">
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

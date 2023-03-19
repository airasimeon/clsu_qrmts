@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Requisition</h1>
                <hr>
                <form action="{{ route('requisitions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="entity_name">Entity Name:</label>
                        <input type="text" name="entity_name" id="entity_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fund_cluster">Fund Cluster:</label>
                        <input type="text" name="fund_cluster" id="fund_cluster" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program:</label>
                        <input type="text" name="program" id="program" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="office_responsibility_center_code">ORCC:</label>
                        <input type="text" name="office_responsibility_center_code" id="office_responsibility_center_code" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ris_number">RIS Number:</label>
                        <input type="text" name="ris_number" id="ris_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="requisitions">Requisitions:</label>
                        <input type="number" name="requisitions" id="requisitions" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="stock_available">Stock Available:</label>
                        <input type="number" name="stock_available" id="stock_available" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="issues">Issues:</label>
                        <input type="number" name="issues" id="issues" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
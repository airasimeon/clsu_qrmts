@extends('adminlte::page')
@section('content_header')
    <h1>Forms</h1>
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Requisitions</h1>
                <a href="{{ route('requisitions.create') }}" class="btn btn-primary mb-3">Create Requisition</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Entity Name</th>
                            <th>Fund Cluster</th>
                            <th>Program</th>
                            <th>ORCC</th>
                            <th>RIS Number</th>
                            <th>Requisitions</th>
                            <th>Stock Available</th>
                            <th>Issues</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requisitions as $requisition)
                            <tr>
                                <td>{{ $requisition->id }}</td>
                                <td>{{ $requisition->entity_name }}</td>
                                <td>{{ $requisition->fund_cluster }}</td>
                                <td>{{ $requisition->program }}</td>
                                <td>{{ $requisition->office_responsibility_center_code }}</td>
                                <td>{{ $requisition->ris_number }}</td>
                                <td>{{ $requisition->requisitions }}</td>
                                <td>{{ $requisition->stock_available }}</td>
                                <td>{{ $requisition->issues }}</td>
                                <td>{{ $requisition->created_at }}</td>
                                <td>{{ $requisition->updated_at }}</td>
                                <td>
                                    <a href="{{ route('requisitions.edit', $requisition->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('requisitions.destroy', $requisition->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('requisitions.pdf', ['download' => 'pdf']) }}" class="btn btn-sm btn-success">Download PDF</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

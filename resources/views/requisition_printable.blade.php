<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Requisition and Issue Slip</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Requisition and Issue Slip</h1>
    <table>
        <tr>
            <th>Date</th>
            <td>{{ date('Y-m-d') }}</td>
        </tr>
        <tr>
            <th>Entity</th>
            <td>{{ $requisition->entity_name }}</td>
        </tr>
        <tr>
            <th>Fund Cluster</th>
            <td>{{ $requisition->fund_cluster }}</td>
        </tr>
        <tr>
            <th>Program</th>
            <td>{{ $requisition->program }}</td>
        </tr>
        <tr>
            <th>Office</th>
            <td>{{ $requisition->office }}</td>
        </tr>
        <tr>
            <th>Responsibility Center Code</th>
            <td>{{ $requisition->responsibility_center_code }}</td>
        </tr>
        <tr>
            <th>RIS
    </tr>
    <tr>
        <th>Requisitions</th>
        <td>{{ $requisition->requisitions }}</td>
    </tr>
    <tr>
        <th>Stock Available</th>
        <td>{{ $requisition->stock_available }}</td>
    </tr>
    <tr>
        <th>Issues</th>
        <td>{{ $requisition->issues }}</td>
    </tr>
</table>
<br>
<br>
<img src="{{ asset('storage/requisition.pdf.jpg') }}" alt="Requisition and Issue Slip">
</body>
</html>

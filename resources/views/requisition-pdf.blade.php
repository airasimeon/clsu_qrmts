<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Requisition PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 28px;
            text-align: center;
            margin-top: 30px;
        }
        table {
            margin-top: 50px;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Requisition Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Entity Name</th>
                    <th>Fund Cluster</th>
                    <th>Program</th>
                    <th>ORCC</th>
                    <th>RIS Number</th>
                    <th>Requisitions</th>
                    <th>Stock Available</th>
                    <th>Issues</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $requisition->entity_name }}</td>
                    <td>{{ $requisition->fund_cluster }}</td>
                    <td>{{ $requisition->program }}</td>
                    <td>{{ $requisition->office_responsibility_center_code }}</td>
                    <td>{{ $requisition->ris_number }}</td>
                    <td>{{ $requisition->requisitions }}</td>
                    <td>{{ $requisition->stock_available }}</td>
                    <td>{{ $requisition->issues }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
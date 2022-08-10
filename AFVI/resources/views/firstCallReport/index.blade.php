<!DOCTYPE html>

<head>
    <title>First Call Reports</title>
</head>

<body>
    <a class="btn btn-primary" href="{{ route('firstCallReport.create') }}">New Report</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Customer DNI</th>
            <th>Date</th>
        </tr>
        @forelse($firstCallReports as $firstCallReport)
            <tr>
                <td>{{ $firstCallReport->id_first_call_report }}</td>
                <td>
                    <a href="{{ route('firstCallReport.show', $firstCallReport) }}">
                        {{ $firstCallReport->name_customer_first_call_report . ' ' . $firstCallReport->lastname_customer_first_call_report }}
                    </a>
                </td>
                <td>{{ $firstCallReport->dni_customer_first_call_report }}</td>
                <td>{{ $firstCallReport->date_first_call_report->format('d-m-Y') }}</td>
            </tr>
        @empty
            <li>Empty List of Reports</li>
        @endforelse

    </table>
</body>

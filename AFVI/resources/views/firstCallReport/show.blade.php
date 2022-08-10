<!DOCTYPE html>

<head>
    <title>First Call Report N#{{ $firstCallReport->id_first_call_report }}</title>
</head>

<body>
    <a href="">Edit Report</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            @if (isset($firstCallReport->company_name_first_call_report))
                <th>Company</th>
                <th>Product</th>
            @endif
            <th>Customer Name</th>
            <th>Customer DNI</th>
        </tr>
        <tr>
            <td>{{ $firstCallReport->id_first_call_report }}</td>
            <td>{{ $firstCallReport->date_first_call_report->format('d-m-Y') }}</td>
            <td>{{ $firstCallReport->date_first_call_report->format('H:i:s') }}</td>
            @if (isset($firstCallReport->company_name_first_call_report))
                <td>{{ $firstCallReport->company_name_first_call_report }}</td>
                <td>{{ $firstCallReport->product_first_call_report }}</td>
            @endif
            <td>{{ $firstCallReport->name_customer_first_call_report . ' ' . $firstCallReport->lastname_customer_first_call_report }}
            </td>
            <td>{{ $firstCallReport->dni_customer_first_call_report }}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Mail</th>
            <th>Phone number</th>
            <th>Policy Holder</th>
        </tr>
        <tr>
            <td>{{ $firstCallReport->mail_adress_first_call_report }}</td>
            <td>{{ $firstCallReport->phone_numbrer_first_call_report }}</td>
            <td>{{ $firstCallReport->policy_holder_first_call_report }}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Deceased's Name</th>
            <th>Deceased's DNI</th>
            <th>Cause of death</th>
            <th>Date of death</th>
            <th>Country of death</th>
            <th>City of death</th>
        </tr>
        <tr>
            <td>{{ $firstCallReport->name_deceased_first_call_report . ' ' . $firstCallReport->lastname_deceased_first_call_report }}
            </td>
            <td>{{ $firstCallReport->dni_deceased_first_call_report }}</td>
            <td>{{ $firstCallReport->cause_death_first_call_report }}</td>
            <td>{{ $firstCallReport->date_death_first_call_report->format('d-m-Y') }}</td>
            <td>{{ $firstCallReport->country_death_first_call_report }}</td>
            <td>{{ $firstCallReport->city_death_first_call_report }}</td>
        </tr>
    </table>
    <a href="{{ route('firstCallReport.index')}}">Regresar</a>
</body>

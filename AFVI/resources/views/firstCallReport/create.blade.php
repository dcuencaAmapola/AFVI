<!DOCTYPE html>

<head>
    <title>New Report</title>
</head>

<body>
    <div id="container">
        <form method="POST" action="{{ route('firstCallReport.store') }}">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @csrf
            <h1>New Report</h1>
            <hr>
            <label>Company</label>
            <input type="text" id="company_name_first_call_report" name="company_name_first_call_report"><br>
            <label>Product</label>
            <input type="text" id="product_first_call_report" name="product_first_call_report"><br>
            <label>Customer Name</label>
            <input type="text" id="name_customer_first_call_report" name="name_customer_first_call_report"><br>
            <label>Customer Last Name</label>
            <input type="text" id="lastname_customer_first_call_report"
                name="lastname_customer_first_call_report"><br>
            <label>Customer Mail</label>
            <input type="text" id="mail_adress_first_call_report" name="mail_adress_first_call_report"><br>
            <label>Customer Phone Number</label>
            <input type="text" id="phone_numbrer_first_call_report" name="phone_numbrer_first_call_report"><br>
            <label>Policy Holder</label>
            <input type="text" id="policy_holder_first_call_report" name="policy_holder_first_call_report"><br>
            <label>Customer DNI</label>
            <input type="text" id="dni_customer_first_call_report" name="dni_customer_first_call_report"><br>
            <label>Deceased's Name</label>
            <input type="text" id="name_deceased_first_call_report" name="name_deceased_first_call_report"><br>
            <label>Deceased's Last Name</label>
            <input type="text" id="lastname_deceased_first_call_report"
                name="lastname_deceased_first_call_report"><br>
            <label>Deceased's DNI</label>
            <input type="text" id="dni_deceased_first_call_report" name="dni_deceased_first_call_report"><br>
            <label>Cause of death</label>
            <input type="text" id="cause_death_first_call_report" name="cause_death_first_call_report"><br>
            <label>Date of death</label>
            <input type="datetime-local" id="date_death_first_call_report" name="date_death_first_call_report"><br>
            <label>Country of death</label>
            <input type="text" id="country_death_first_call_report" name="country_death_first_call_report"><br>
            <label>City of death</label>
            <input type="text" id="city_death_first_call_report" name="city_death_first_call_report"><br>

            <button type="submit">Send</button>
        </form>
        <a href="{{ route('firstCallReport.index')}}">Regresar</a>
    </div>
</body>

<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Form</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th> Name </th>
        <th> Email </th>
        <th> Mobile No </th>
        <th> Message </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $details['name'] }}</td>
        <td>{{ $details['email'] }}</td>
        <td>{{ $details['mobile_no'] }}</td>
        <td>{{ $details['message'] }}</td>
    </tr>
    </tbody>

</table>
<p>Thank you</p>
</body>
</html>

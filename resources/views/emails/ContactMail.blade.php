<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
</head>

<body>
  <h1>{{$details['subject']}}</h1>
  <p>First Name : {{$details['first']}}</p>
  <p>Last Name  : {{$details['last']}}</p>
  <p>Email      : {{$details['email']}}</p>
  <p>Message    : </p>
  <p>{{$details['message']}}</p>
</body>

</html>
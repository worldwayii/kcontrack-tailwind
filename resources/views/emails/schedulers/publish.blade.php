<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Kontrack</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
<div class="container mx-auto max-w-2xl p-6 bg-white shadow-md rounded-md mt-10">
    <h1 class="text-3xl font-bold text-blue-500 mb-4">You Have New Schedules</h1>

    <p class="mb-4">Dear {{ $employee->first_name }},</p>

    <p class="mb-4">{{$detail}}</p>

    <p class="mb-4">You can download the job app using the following link below:</p>

    <a href="" class="bg-blue-500 text-white py-2 px-4 rounded-md inline-block">Download</a>

    <p class="mt-4">If you have any questions or need assistance, feel free to reply to this email.</p>

    <p class="mt-4">Best regards,<br>Kontrack Team</p>
</div>
</body>
</html>

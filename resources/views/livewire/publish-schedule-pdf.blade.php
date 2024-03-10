<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduler</title>
    <style>
        /* Your existing CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* New styles for Blade code */
        .schedule {
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .schedule h2 {
            margin-top: 0;
        }

        .schedule th,
        .schedule td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }

        .schedule th {
            background-color: #f0f0f0;
            text-align: left;
        }

        .schedule td {
            text-align: left;
        }

        .schedule td:first-child {
            font-weight: bold;
        }

        .schedule td:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Employee Schedules</h1>
        <div class="schedule">
            <h2>Summary - Individual Schedule</h2>
            <table>
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Email Address</th>
                        <th>Job Role</th>
                        <th>Time Frame</th>
                        <th>Breaks</th>
                        <th>Days Assigned</th>
                        <th>Shift Note</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($employees as $employee)
                        @php
                            $schedule = $employee->schedulers->first();
                        @endphp
                        @if($schedule == null)
                            @continue
                        @else
                            @php
                                $days_assigned = $schedule->getUnpublishedSchedulersForEmployee($employee);
                            @endphp
                        @endif
                        <tr>
                            <td>{{ $employee->getFullNameAttribute() }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->role }}</td>
                            <td>{{$schedule->start_at->format('h a'). ' - '. $schedule->end_at->format('h a')}}</td>
                            <td>{{ $schedule->break }}</td>
                            <td>{{$schedule->frequency != 'daily' ? $schedule->frequency : $days_assigned}}</td>
                            <td>{{ $schedule->shift_note }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No employee schedules found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

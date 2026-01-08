<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="karb.css">
    <title>IT24 Schulkalender</title>
</head>
<body>
    <div class="container">
        <h1>IT24</h1>
        
        <div class="controls">
            <div class="week-navigation">
                <button class="btn" id="prevWeek">← Vorherige Woche</button>
                <button class="btn" id="currentWeek">Aktuelle Woche</button>
                <button class="btn" id="nextWeek">Nächste Woche →</button>
            </div>
        </div>

        <div class="week-display" id="weekDisplay">
            KW 2 | 06.01.2025 - 12.01.2025
        </div>

        <table class="calendar">
            <thead>
                <tr>
                    <th>Zeit</th>
                    <th>Montag</th>
                    <th>Dienstag</th>
                    <th>Mittwoch</th>
                    <th>Donnerstag</th>
                    <th>Freitag</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="time-cell">08:00 - 09:30</td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                </tr>
                <tr>
                    <td class="time-cell">09:45 - 11:15</td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                </tr>
                <tr>
                    <td class="time-cell">11:30 - 13:00</td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                </tr>
                <tr>
                    <td class="time-cell">14:00 - 15:30</td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                </tr>
                <tr>
                    <td class="time-cell">15:45 - 17:15</td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                    <td class="day-cell"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
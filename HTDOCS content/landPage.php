<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calendar.css">

</head>

<body>

    <div class="topbar">
        <button>MERCANTEC</button>
        <div class="notification">
            <div class="circle"></div>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <a href="landPage.php">LANDPAGE</a>
            <a href="calendarPage.php">CALENDAR</a>
            <a href="myTasks.php">MY TASKS</a>
            <div style="flex-grow: 0.985;"></div>
            <a href="groups.php">GROUPS</a>
            <a href="#">USERS</a>
        </div>
        <div class="main">
            <div class="section">
                <a href="myTasks.php">
                    <button>MY TASKS</button>
                </a>
            </div>

            <div class="section2">
                <a href="calendarPage.php">
                    <button>CALENDAR</button>
                </a>    
            </div>       
    </div>
    </div>

</body>
<script>
    function handleDayClick(date)
    {
        // Redirige a la página deseada
        window.location.href = "tasklist.php?date=" + date;
    }
</script>

</html>
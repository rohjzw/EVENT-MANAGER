<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./calendar.css">

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
            <a href="#">GROUPS</a>
            <a href="#">USERS</a>
        </div>

        <div class="mainCreateTask">
            <div class="parentDiv">
                <div class="dateCreateDiv">
                    <div class="dateButtonDiv"><button class="dateButton">DATE</button> </div>
                    <div class="createListDiv"><button class="createListButton">CREATE TASK LIST</button></div>
                </div>

                <div class="wideAndNarrowDiv">
                    <div class="whideDiv">
                        <div class="taskListParentDiv">
                            <div class="taskList">
                                <div class="singleTask">
                                    <div class="checkboxDiv">
                                        <input type="checkbox" class="checkboxClass"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="taskList"></div>
                        </div>
                    </div>
                    <div class="narrowDiv">
                        <div class="createSingleTask"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    function handleDayClick(date) {
        // Redirige a la página deseada
        window.location.href = "tasklist.php?date=" + date;
    }
</script>

</html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="topbar">
        <button>MERCANTEC</button>
        <div class="notification">
            <div class="circle">
                <a href="invitations.php" class="invitationsButton"></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <a href="landPage.php">LANDPAGE</a>
            <a href="calendarPage.php">CALENDAR</a>
            <a href="myTasks.php">MY TASKS</a>
            <div style="flex-grow: 0.985;"></div>
            <a href="groups.php">GROUPS</a>
            <a href="myProfile.php">MY PROFILE</a>
        </div>

        <div class="containerReset">
            <div class="correo_usuario-container" id="correo_usuario-container">
            </div>
            <form method="POST" action="registerUserDelMarc.php">
                <div class="resetPasswordDiv">
                    <label>New password:</label>
                    <input type="text" name="Name" size="50" class="passwordResetTextbox" required>

                    <label>Confirm password:</label>
                    <input type="text" name="Email" size="50" class="passwordResetTextbox" required>

                    <div class="resetButtonDiv">
                        <input type="submit" class="resetButton" value="SUBMIT">
                    </div>
                </div>
            </form>
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
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>CarShine</title>
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/4002938454.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu:wght@300;400;700&display=swap"
    rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
  <!-- JS for jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JS for full calendar -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  <script src="carscript.js" defer></script>

</head>
<style>
  #calendar {
    max-width: 1000px; /* Adjust the max-width as per your requirement */
    padding-top: 5%;

    margin: auto;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  body{
    padding-bottom: 5%;
  }
</style>
<body>
<?php
          // Get user ID from the URL parameter
          $userId = $_GET['userId'];
          ?>

<section class="colored-section" id="title">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href=""><a class="logo"><img src="images/SS.png" style="width: 150px;" alt="logo"></a></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index2.php?userId=<?php echo $userId; ?>">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.html">Logout</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Lessons.php?userId=<?php echo $userId; ?>">Lessons</a>
            <a class="dropdown-item" href="carquiz.php?userId=<?php echo $userId; ?>">Take Quiz</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </section>

<br><br><br><br><br><br><br><br>
  <h1> Training Dates</h1>
  <div id="calendar"></div>
  <script>
    $(document).ready(function () {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultView: 'month',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
        {
          title: 'Training Schedule',
          start: '2023-12-04',
          daysOfWeek: [1], // Monday
          dow: [1], // Also set dow to ensure it works
          color: 'darkred',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-06',
          daysOfWeek: [3], // Wednesday
          dow: [3], // Also set dow to ensure it works
          color: 'darkred',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-08',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-11',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-13',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-15',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-18',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-20',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-22',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },

        {
          title: 'Training Schedule',
          start: '2023-12-25',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue'
        },

        {
          title: 'Training Schedule',
          start: '2023-12-27',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue'
        },

        {
          title: 'Training Schedule',
          start: '2023-12-29',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue',
        },

        {
          title: 'Training Schedule',
          start: '2024-01-01',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-03',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-05',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-08',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-10',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-12',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'purple',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-15',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-17',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-19',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkgreen',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-22',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue'
        },
        {
          title: 'Training Schedule',
          start: '2024-01-24',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue'
        },
        {
          title: 'Training Schedule',
          start: '2024-01-26',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'pastelblue'
        },
        {
          title: 'Training Schedule',
          start: '2024-01-29',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },
        {
          title: 'Training Schedule',
          start: '2024-01-31',
          daysOfWeek: [5], // Friday
          dow: [5], // Also set dow to ensure it works
          color: 'darkred',
        },
      ],
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Google Calendar Appointment Scheduling begin -->
  <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
  <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script><br>
  <script>
    (function () {
      var target = document.currentScript;
      window.addEventListener('load', function () {
        calendar.schedulingButton.load({
          url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ2QBqzdyhSn6jYIVUVasw0HGX6eSqmOVeQBy3jPCPeJN4EhjPhwp7Ce1qhuYMH3BZ_l6Kk7HQEM?gv=true',
          color: '#6F9CDE',
          label: 'BOOK TRAINING',
          target,
        });
      });
    })();
  </script>
  <!-- end Google Calendar Appointment Scheduling -->

</body>

</html>

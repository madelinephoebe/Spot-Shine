var app = angular.module('calendarApp', []);

app.controller('CalendarController', function($scope) {
  $scope.months = [
    { name: 'January', days: 31 },
    { name: 'February', days: 28 },
    { name: 'March', days: 31 },
    { name: 'April', days: 30 },
    { name: 'May', days: 31 },
    { name: 'June', days: 30 },
    { name: 'July', days: 31 },
    { name: 'August', days: 31 },
    { name: 'September', days: 30 },
    { name: 'October', days: 31 },
    { name: 'November', days: 30 },
    { name: 'December', days: 31 }
  ];

  $scope.weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

  $scope.currentMonth = 0; // January by default
  $scope.currentYear = new Date().getFullYear();

  $scope.daysInMonth = function(month, year) {
    return new Date(year, month + 1, 0).getDate();
  };

  function updateCalendar() {
    var firstDay = new Date($scope.currentYear, $scope.currentMonth, 1).getDay();
    var daysInMonth = months[$scope.currentMonth].days;
    var days = [];
    var currentDay = 1;
  
    for (var i = 0; i < 6; i++) {
      var week = [];
  
      // Add empty days before the first day of the month in the first week
      if (i === 0) {
        for (var j = 0; j < firstDay; j++) {
          week.push({ day: null });
        }
      }
  
      // Add days of the month to the week
      for (var j = week.length; j < 7 && currentDay <= daysInMonth; j++) {
        week.push({ day: currentDay });
        currentDay++;
      }
  
      days.push(week);
    }
  
    $scope.calendar = days;
  }
  
  $scope.prevMonth = function() {
    if ($scope.currentMonth === 0) {
      $scope.currentMonth = 11;
      $scope.currentYear--;
    } else {
      $scope.currentMonth--;
    }
    $scope.updateCalendar();
  };

  $scope.nextMonth = function() {
    if ($scope.currentMonth === 11) {
      $scope.currentMonth = 0;
      $scope.currentYear++;
    } else {
      $scope.currentMonth++;
    }
    $scope.updateCalendar();
  };

  // Initial calendar setup
  $scope.updateCalendar();
});

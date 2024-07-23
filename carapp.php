<?php
require __DIR__ . '/vendor/autoload.php'; // Include the Composer autoloader

// Google API credentials
$client = new Google_Client();
$client->setAuthConfig('path/to/credentials.json');
$client->addScope(Google_Service_Calendar::CALENDAR);

// Check if the user is authenticated
if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);
}

// If the user is not authenticated, redirect to Google OAuth
if (!$client->getAccessToken()) {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
}

// Google Calendar service
$service = new Google_Service_Calendar($client);

// Schedule an event
$event = new Google_Service_Calendar_Event([
    'summary' => 'Meeting with Client',
    'description' => 'Discuss project details',
    'start' => ['dateTime' => '2023-12-01T10:00:00', 'timeZone' => 'UTC'],
    'end' => ['dateTime' => '2023-12-01T11:00:00', 'timeZone' => 'UTC'],
]);

$calendarId = 'primary'; // Use 'primary' for the user's primary calendar
$event = $service->events->insert($calendarId, $event);

echo 'Event created: ' . $event->htmlLink;
?>

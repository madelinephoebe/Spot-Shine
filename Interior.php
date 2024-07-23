<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Car Cleaning Lessons</title>
  <!--CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <!--Fontawsome  -->
  <script src="https://kit.fontawesome.com/4002938454.js" crossorigin="anonymous"></script>
  <!--Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!--Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="carscript.js" defer></script>
</head>
<style>
   .border-container3 {
        border: 30px solid #1f4f7e;
        border-radius: 30px;
        width: 47.3%;
        align-content: center;
        align-self: center;
        text-align: center;
        vertical-align: middle;
        margin: auto;
        height: 62.5vh; /* Set height to 50% of the viewport height */
    display: flex;
    justify-content: center;
        
    }

    .border-container4 {
        border: 20px solid #787d82;
        border-radius: 30px;
        width: 40%;
        align-content: center;
        align-self: center;
        text-align: center;
        vertical-align: middle;
        margin: auto;
        background-color: #787d82;
        
    }
    h2 {
        background-color: aliceblue;
        text-align: center;
    }

    body {
        margin-top: 70px;
        padding-top: 70px;
        background-color: aliceblue;
        background-image: url(bluebg.png);
    }
    form {
        margin-left: 40px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .border-container4:hover {
    background-color: #1f4f7e; 
    border: 20px solid #1f4f7e ;
    color: white;
    cursor: pointer;
    transition: 0.7s;
    }

    .togglebutton {
        font-family: Verdana, Geneva, Tahoma, sans-serif; 
        color: white; 
        background-color: #246fa4;
        border: #246fa4; 
        border-radius: 5px; 
        padding: 20px; 
        transition: 0.5s;
        font-size: 40px;
        padding-left: 350px;
        padding-right: 350px;
    }

    .buttonword {
        font-size: 30px;
        color: white;
        font-weight: 600;
    }

</style>

<script>
    function showhtmlContent() {
                var htmlContentDiv = document.getElementById("htmlContent");
                htmlContentDiv.style.display = "block";
            }

            var isContentVisible = false; // Flag to track the button state

    function toggleContent() {
    var htmlContentDiv = document.getElementById("htmlContent");
    var button = document.getElementById("border-container4");

// Toggle the visibility of the content
if (!isContentVisible) {
    htmlContentDiv.style.display = "block";
    button.style.fontSize = "15px";
    button.style.padding = "5px";
    button.style.paddingLeft = "15px";
    button.style.paddingRight = "15px";
    button.innerHTML = "Close";
} else {
    htmlContentDiv.style.display = "none";
    button.innerHTML = ""; // Clear the contents of the button

    // Create a flex container div
    var flexContainer = document.createElement("div");
    flexContainer.style.display = "flex";
    flexContainer.style.alignItems = "center";
    flexContainer.style.justifyContent = "center";

    // Create an image element
    var imageElement = document.createElement("img");
    imageElement.src = "images/1.png";
    imageElement.alt = "car1"; // Set alt text for accessibility

    // Set size of the image
    imageElement.style.width = "150px";
    imageElement.style.height = "150px";
    imageElement.style.borderRadius = "10px";

    // Create a span for the text
    var textSpan = document.createElement("span");
    textSpan.style.marginLeft = "10px"; // Add some space between image and text
    textSpan.innerHTML = "<p class='buttonword' id='buttonword' alt='buttonword'> &nbsp;The Basics</p>";
    textSpan.style.fontStyle = "italic";

    // Append the text span and image element to the flex container
    flexContainer.appendChild(imageElement);
    flexContainer.appendChild(textSpan);

    // Append the flex container to the button div
    button.appendChild(flexContainer);
}

// Toggle the flag
isContentVisible = !isContentVisible;

    }
</script>

<?php
          // Get user ID from the URL parameter
          $userId = $_GET['userId'];
          ?>

<body>

    
  <section class="colored-section" id="title">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href=""><a class="logo"><img src="images/SS.png" style="width: 150px;" alt="logo"></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="index2.php?userId=<?php echo $userId; ?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Lessons.php?userId=<?php echo $userId; ?>">Lessons</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carquiz.php?userId=<?php echo $userId; ?>">Take Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html?userId=<?php echo $userId; ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
  </section><br><br>
 
  
  <section id="interiorDetailingContent">
  <h2>The Art of Interior Detailing</h2><br>

  <p style="text-align: left; margin-left: 20px; margin-right: 20px;"><strong>Introduction:</strong> Interior detailing is an essential aspect of car maintenance, ensuring a clean and comfortable driving environment. Follow these steps to achieve a spotless and fresh interior. <br><br> To learn more about interior detailing, please watch the video below:</p><br>

      <form>
        <div class="border-container3" style="background-color: white;" alt="properway">
          <div id="player"></div>
          <script>
            var videoId = 'tGnf8G8A8qU';
    
            // Load the YouTube IFrame Player API asynchronously
            var tag = document.createElement('script');
            tag.src = 'https://www.youtube.com/iframe_api';
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    
            // This function creates an <iframe> (and YouTube player) after the API code downloads.
            function onYouTubeIframeAPIReady() {
              new YT.Player('player', {
                height: '360', // Set the height of the video player
                width: '640', // Set the width of the video player
                videoId: videoId,
                playerVars: {
                  // You can add additional parameters here, such as autoplay, controls, etc.
                  autoplay: 0, // 0 or 1 (autoplay off/on)
                  controls: 1, // 0 or 1 (show/hide controls)
                },
                events: {
                  // You can add event handlers here if needed
                }
              });
            }
          </script>
        </div>
        <!-- Add your form elements here -->
      </form>

      <ol><br><strong>Gather Your Supplies:</strong><br>
      <p style="text-align: center; margin-left: 0px; margin-right: 20px;">
      Vacuum cleaner<br>
        Interior cleaner<br>
        Glass cleaner<br>
        Upholstery cleaner<br>
        Soft-bristle brush<br>
        Microfiber towels<br>
        Air freshener<br><br>

    <p style="text-align: left; margin-left: 0px; margin-right: 20px;"><strong>Vacuuming:</strong> Start by thoroughly vacuuming the interior, including carpets, seats, and the trunk. Use appropriate attachments to reach tight spaces.<br>

    <strong>Cleaning Surfaces:</strong> Wipe down all interior surfaces using an interior cleaner. Pay attention to the dashboard, console, door panels, and any other hard surfaces.<br>

    <strong>Window and Mirror Cleaning:</strong> Use a glass cleaner to clean all windows and mirrors. Ensure a streak-free finish for optimal visibility.<br>

    <strong>Upholstery Cleaning:</strong> Apply upholstery cleaner to fabric or leather seats and use a soft-bristle brush to agitate the cleaner. Wipe away excess moisture with a clean microfiber towel.<br>

    <strong>Detailing Nooks and Crannies:</strong> Use a soft brush or detailing tool to clean hard-to-reach areas like air vents, buttons, and seams.<br>

    <strong>Floor Mat Cleaning:</strong> Remove floor mats and clean them separately. Hose off rubber mats and use an appropriate cleaner for carpeted mats.<br>

    <strong>Interior Deodorizing:</strong> Use an air freshener or odor neutralizer to leave your car smelling fresh and clean.<br>

    <strong>Regular Maintenance:</strong> Schedule regular interior detailing sessions to maintain a clean and inviting car interior.<br>
  </ol></p>

  <p style="text-align: left; margin-left: 30px; margin-right: 20px;"><strong>Conclusion:</strong> A well-detailed car interior not only enhances your driving experience but also contributes to the overall cleanliness and value of your vehicle. Follow these steps for a pristine and inviting interior.</p>
</section><br><br>

  <center>
    <div class="border-container4" onclick="navigateTo('Lessons.php?userId=<?php echo $userId; ?>')" id="border-container4">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword">&nbsp; Go Back</em>  
  </center>
</body>
<script>

function navigateTo(url) {
    // Change the window location to the specified URL
    window.location.href = url;
  }

</script>
</html>
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
 
  
  <section id="deepExteriorCleaningContent">
  <h2>Deep Exterior Cleaning with Paint Correction</h2><br>

  <p style="text-align: left; margin-left: 20px; margin-right: 20px;"><strong>Introduction:</strong> Taking your car's exterior cleaning to the next level involves paint correction and long-lasting protection. Follow these steps to achieve a deep, flawless shine while safeguarding your vehicle's paint. <br><br> To learn more about deep exterior cleaning, please watch the video below:</p><br>

      <form>
        <div class="border-container3" style="background-color: white;" alt="properway">
          <div id="player"></div>
          <script>
            var videoId = 'wUpVqbPeHK4';
    
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
       pH-neutral car shampoo<br>
        Clay bar kit<br>
        Dual-action polisher<br>
        Cutting and polishing compounds<br>
        Microfiber towels<br>
        Ceramic coating or Paint Protection Film (PPF)<br>
        Applicator pads<br><br>

    <p style="text-align: left; margin-left: 0px; margin-right: 20px;"><strong>Pre-Wash and Rinse:</strong> Start with a thorough pre-wash and rinse to remove loose dirt and contaminants. Use a pH-neutral car shampoo for a gentle but effective cleaning.<br>

    <strong>Clay Bar Treatment:</strong> Use a clay bar kit to remove embedded contaminants from the paint surface. Lubricate the surface with a detailing spray and gently glide the clay bar across the paint.<br>

    <strong>Paint Correction:</strong> Employ a dual-action polisher with cutting and polishing compounds to correct paint imperfections, swirls, and scratches. Follow the product instructions for optimal results.<br>

    <strong>Ceramic Coating or PPF Application:</strong> Apply a ceramic coating for long-lasting protection and enhanced gloss. Alternatively, consider installing Paint Protection Film (PPF) for a physical barrier against rock chips and road debris.<br>

    <strong>Final Touches:</strong> Wipe away any residue with clean microfiber towels. Pay attention to details such as door jambs, trim, and wheels.<br>

    <strong>Regular Maintenance:</strong> Maintain the deep clean and protection with regular washing and touch-ups. Follow the specific care instructions for ceramic coatings or PPF.<br>
  </ol></p>

  <p style="text-align: left; margin-left: 30px; margin-right: 20px;"><strong>Conclusion:</strong> Elevate your car's exterior cleaning routine with paint correction and advanced protection. Enjoy a deep shine and safeguard your vehicle's paint from the elements with these professional detailing steps.</p>
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
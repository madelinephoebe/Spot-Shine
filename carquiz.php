<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detailing Quiz</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
</head>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            padding-top: 30px;
           font-size: large;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        #quiz-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .question {
          align-items: center;
            margin-bottom: 30px;
            display: flex;
            flex-direction: row-reverse; /* Alternate layout */
        }

        .question:nth-child(even) {
            flex-direction: row; /* Change layout for even-numbered questions */
        }

        .photo {
            flex: 1;
            margin-right: 20px; /* Add margin for spacing between image and options */
        }

        .photo img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            border: 2px solid #3498db; /* Add border */
            margin-bottom: 20px;
        }

        .options {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php
          // Get user ID from the URL parameter
          $userId = $_GET['userId'];
          ?>
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
                        <a class="nav-link" href="javascript:void(0);" onclick="retakeQuiz()">Retake Quiz</a>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" href="index.html">Logout</a>
          </li>
                </ul>
            </div>
        </nav>
    </section>
    
    <script>
        function retakeQuiz() {
            // Reload the current page
            location.reload();
        }
    </script>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Car Detailing Quiz</h1>

<div id="quiz-container">
    <!-- Quiz questions with associated images will be displayed here -->
</div>

<button onclick="submitQuiz()">Submit Answers</button>
<br>

<script>
    const collectionId = 'uXfLOAm_2MM';
    const unsplashAccessKey = 'u02-We3hw_hROK_kLzOB4qOUDhG2UNOKoKARYb5FzYk';
    const quizData = [
        {
            question: "Which of the following is an important step before washing your car's exterior?",
            options: ["Applying wax directly", "Pre-rinsing the car", "Skipping the drying step"],
            correctAnswer: "Pre-rinsing the car"
        },
        {
            question: "What is the purpose of using a two-bucket wash method?",
            options: ["To save water", "To prevent scratches on the car's paint", "To speed up the washing process"],
            correctAnswer: "To prevent scratches on the car's paint"
        },
        {
            question: "Which cleaning tool is best for scrubbing off stubborn dirt or bird droppings?",
            options: ["Sponge", "Microfiber cloth", "Soft-bristle brush"],
            correctAnswer: "Soft-bristle brush"
        },
        {
            question: "What is the recommended method for drying a car after washing?",
            options: ["Air-drying", "Using a leaf blower", "Patting it dry with a microfiber towel"],
            correctAnswer: "Patting it dry with a microfiber towel"
        },
        {
            question: "Why is it important to use a dedicated car shampoo instead of household detergents?",
            options: ["Car shampoo is more expensive", "Household detergents may damage the car's paint", "They both work equally well"],
            correctAnswer: "Household detergents may damage the car's paint"
        },
        {
            question: "When should you consider using a clay bar during the car cleaning process?",
            options: ["After applying wax", "Instead of washing the car", "To remove contaminants before waxing"],
            correctAnswer: "To remove contaminants before waxing"
        },
        {
            question: "What is the purpose of applying wax to a car's exterior?",
            options: ["To make the car smell good", "To protect the paint and provide a glossy finish", "To remove scratches"],
            correctAnswer: "To protect the paint and provide a glossy finish"
        },
        {
            question: "How can you prevent water spots on the car's exterior?",
            options: ["Letting the car air dry", "Washing the car in direct sunlight", "Drying the car with a clean microfiber towel"],
            correctAnswer: "Drying the car with a clean microfiber towel"
        },
        {
            question: "What type of cleaning product is suitable for removing bug splatter from the car's front bumper?",
            options: ["Glass cleaner", "Wheel cleaner", "Bug and tar remover"],
            correctAnswer: "Bug and tar remover"
        },
        {
            question: "Why is it important to regularly clean and protect your car's exterior?",
            options: ["It's not necessary", "To maintain its resale value, prevent damage, and preserve its appearance", "Only for luxury cars"],
            correctAnswer: "To maintain its resale value, prevent damage, and preserve its appearance"
        }
    ];

    async function fetchCollectionPhotos() {
        try {
            const response = await fetch(`https://api.unsplash.com/collections/${collectionId}/photos?client_id=${unsplashAccessKey}`);
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error fetching collection photos:', error);
            // Display a message to the user
            alert('There was a problem fetching images for the quiz. Please try again later.');
            // Return an empty array to avoid errors in the loop
            return [];
        }
    }

    async function displayQuizQuestions() {
        const quizContainer = document.getElementById('quiz-container');
        const collectionPhotos = await fetchCollectionPhotos();

        for (let i = 0; i < quizData.length; i++) {
            const question = quizData[i];
            const photo = collectionPhotos[i % collectionPhotos.length];

            const questionDiv = document.createElement('div');
            questionDiv.className = 'question';

            const questionHtml = `
                <div class="photo">
                    <img src="${photo.urls.regular}" alt="Collection Photo">
                </div>
                <div class="options">
                    <p>${i + 1}. ${question.question}</p>
                    ${question.options.map((option, index) => `
                        <label>
                            <input type="radio" name="q${i}" value="${option}">
                            ${option}
                        </label>
                    `).join('')}
                </div>
            `;

            questionDiv.innerHTML = questionHtml;
            quizContainer.appendChild(questionDiv);
        }
    }

    function submitQuiz() {
        let score = 0;

        quizData.forEach((question, index) => {
            const selectedOption = document.querySelector(`input[name="q${index}"]:checked`);
            if (selectedOption) {
                const userAnswer = selectedOption.value;
                if (userAnswer === question.correctAnswer) {
                    score++;
                }
            }
        });

        alert(`Your score: ${score} out of ${quizData.length}`);
    }

    // Display quiz questions with associated images from the collection when the page loads
    displayQuizQuestions();
</script>

</body>
</html>

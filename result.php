<!DOCTYPE html>
<head>
    <title>Result</title>
</head>

<body>
    <?php

    $correctAnswers = ['q1' => 'c', 'q2' => 'b', 'q3' => 'd'];
    $score = 0;

    // Check each answer
    foreach ($correctAnswers as $question => $answer) {
        if (!empty($_POST[$question]) && $_POST[$question] == $answer) {
            $score++;
        }
    }

    // Display the score
    echo "Your score is: $score / " . count($correctAnswers);
    ?>
</body>

</html>
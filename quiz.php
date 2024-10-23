<!DOCTYPE html>
<head>
    <title>Quiz</title>
</head>
<body>
<h1>Simple Quiz</h1>
    <form action="result.php" method="POST">
        <!-- Question 1 -->
        <p>1. What is 3 + 5 ?</p>
        <input type="radio" name="q1" value="a"> A) 6<br>
        <input type="radio" name="q1" value="b"> B) 4<br>
        <input type="radio" name="q1" value="c"> C) 8<br>
        <input type="radio" name="q1" value="d"> D) 9<br>

        <!-- Question 2 -->
        <p>2. What is 2 + 2 ?</p>
        <input type="radio" name="q2" value="a"> A) 3<br>
        <input type="radio" name="q2" value="b"> B) 4<br>
        <input type="radio" name="q2" value="c"> C) 5<br>
        <input type="radio" name="q2" value="d"> D) 6<br>

        <!-- Question 3 -->
        <p>3. What is -5 + 5 ?</p>
        <input type="radio" name="q3" value="a"> A) 10<br>
        <input type="radio" name="q3" value="b"> B) -10<br>
        <input type="radio" name="q3" value="c"> C) 5<br>
        <input type="radio" name="q3" value="d"> D) 0<br>

        <br>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h2>Student Details</h2>
    <form action="process.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="task1">Task 1 Score:</label><br>
        <input type="number" id="task1" name="task1" required><br><br>
        
        <label for="task2">Task 2 Score:</label><br>
        <input type="number" id="task2" name="task2" required><br><br>
        
        <label for="exam">Exam Score:</label><br>
        <input type="number" id="exam" name="exam" required><br><br>
        
        <label for="attitude">Attitude Score:</label><br>
        <input type="number" id="attitude" name="attitude" required><br><br>
        
        <label for="skill">Skill Score:</label><br>
        <input type="number" id="skill" name="skill" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
```


<?php

class Student {
    public $name;
    public $task1;
    public $task2;
    public $exam;
    public $attitude;
    public $skill;

    public function __construct($name, $task1, $task2, $exam, $attitude, $skill) {
        $this->name = $name;
        $this->task1 = $task1;
        $this->task2 = $task2;
        $this->exam = $exam;
        $this->attitude = $attitude;
        $this->skill = $skill;
    }

    public function calculateTotalScore() {
        return $this->task1 + $this->task2 + $this->exam + $this->attitude + $this->skill;
    }
}

// Get form data
$name = $_POST['name'];
$task1 = $_POST['task1'];
$task2 = $_POST['task2'];
$exam = $_POST['exam'];
$attitude = $_POST['attitude'];
$skill = $_POST['skill'];

// Create student object
$student = new Student($name, $task1, $task2, $exam, $attitude, $skill);

$totalScore = $student->calculateTotalScore();

echo "Name: " . $student->name . "<br>";
echo "Total Score: " . $totalScore . "<br>";

// You can add your ranking logic here based on total score

?>

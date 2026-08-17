<!DOCTYPE html>
<html>
<head>
    <title>Student Lookup</title>
</head>
<body>

    <h1>Student Lookup</h1>

    <form method="GET" action="student_lookup.php">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id">

        <button type="submit">Search</button>
    </form>

    <?php

    $students = [
        '2023001' => ['name' => 'Tangol', 'status' => 'Enrolled'],
        '2023002' => ['name' => 'Maria Santos', 'status' => 'Pending'],
        '2023003' => ['name' => 'John Reyes', 'status' => 'Graduated'],
        '2023004' => ['name' => 'JP Divinaflor', 'status' => 'Enrolled']
    ];

    if (isset($_GET['student_id'])) {

        $student_id = $_GET['student_id'];

        if (isset($students[$student_id])) {

            echo "<h2>Student Found: " . $students[$student_id]['name'] . "</h2>";
            echo "<p>Status: " . $students[$student_id]['status'] . "</p>";

        } else {

            echo "<p>Student not found.</p>";

        }
    }

    ?>

</body>
</html>

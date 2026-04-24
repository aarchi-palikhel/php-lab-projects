<html>
<head>
    <title>Lab 8 Q.NO.6</title>
</head> 
<?php
session_start();

if (!isset($_SESSION["tasks"])) {
    $_SESSION["tasks"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["task"])) {
    // Add new task to the session array
    $_SESSION["tasks"][] = ["task" => $_POST["task"], "completed" => false];
}

// Mark task as complete
if (isset($_GET["complete"])) {
    $task_id = $_GET["complete"];
    $_SESSION["tasks"][$task_id]["completed"] = true;
}
?>

<form method="POST" action="">
    Add Task: <input type="text" name="task"><br>
    <button type="submit">Add</button>
</form>

<h3>Task List:</h3>
<ul>
    <?php
    foreach ($_SESSION["tasks"] as $index => $task) {
        echo "<li>" . ($task["completed"] ? "<s>" : "") . $task["task"] . ($task["completed"] ? "</s>" : "");
        if (!$task["completed"]) {
            echo " <a href='?complete=$index'>Mark as complete</a>";
        }
        echo "</li>";
    }
    ?>
</ul>
</html>
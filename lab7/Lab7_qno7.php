<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.7</title>
</head>
<body>
    <?php
    // Define the file name
    $filename = 'data.csv';

    // Function to display CSV contents as an HTML table
    function displayCsvAsTable($filename) {
        // Check if the file exists
        if (file_exists($filename)) {
            // Open the file for reading
            if (($handle = fopen($filename, 'r')) !== false) {
                echo '<table border="1">';
            
                // Loop through the file line by line
                while (($data = fgetcsv($handle)) !== false) {
                    echo '<tr>';
                    foreach ($data as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
            
                echo '</table>';
                fclose($handle);
            } else {
                echo 'Error: Unable to open the file for reading.';
            }
        } else {
            echo 'Error: The file does not exist.';
        }
    }

    // Display the CSV contents as an HTML table
    displayCsvAsTable($filename);

    // Function to add a new row to the CSV file
    function addRowToCsv($filename, $newRow) {
        // Open the file for appending
        if (($handle = fopen($filename, 'a')) !== false) {
            // Write the new row to the file
            if (fputcsv($handle, $newRow)) {
                echo 'New row added successfully.';
            } else {
                echo 'Error: Unable to add the new row.';
            }
            fclose($handle);
        } else {
            echo 'Error: Unable to open the file for appending.';
        }
    }

    // Example usage: Adding a new row to the CSV file
    $newRow = array('First Name', 'Last Name'); // Modify this array to add your data
    addRowToCsv($filename, $newRow);
    $newRow = array('Aarchi', 'Palikhel'); // Modify this array to add your data
    addRowToCsv($filename, $newRow);
    ?>
    </body>
</html>
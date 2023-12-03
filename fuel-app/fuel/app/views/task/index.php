<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Task List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php
                foreach ($tasks as $task) {
                    echo "<tr>";
                    echo "<td>" . $task['name'] . "</td>";
                    echo "<td>" . $task["date"] . "</td>";
                    echo "<td>" . $task["status"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лб3В1</title>
    <style>
        *{
            font-size: 22px;
        }
        body {
            background-color: #D9B8F0;
        }
    </style>
</head>
<body>
    <center>
        <h1>
        Роботу виконала Носова Поліна<br>
        Варіант 1<br>
        КІУКІ-19-9
    </h1>
        <form action="get_1.php" method="get">
            <label for="group">Оберіть групу:</label>
            <select name="group" id="group">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT ID_Groups, title FROM groups");
                        $res = $stmt->fetchAll();
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Get!">
        </form>
        <form action="get_2.php" method="get">
            <label for="teacher">Оберіть викладача:</label>
            <select name="teacher" id="teacher">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT ID_Teacher, name FROM teacher");
                        $res = $stmt->fetchAll();
        
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Get!">
        </form>
        <form action="get_3.php" method="get">
            <label for="auditorium">Оберіть аудиторію:</label>
            <select name="auditorium" id="auditorium">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT DISTINCT auditorium FROM lesson");
                        $res = $stmt->fetchAll();
        
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[0]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Get!">
        </form>
    </center>
</body>
</html>

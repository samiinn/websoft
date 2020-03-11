<!DOCTYPE html>

<?php
require "./src/config.php";
require "./src/service.php";


// Get incoming values
$search = $_GET["search"] ?? null;
$like = "%$search%";

if ($search) {
    // Connect to the database
    $db = connectToDB($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM tech
WHERE
    id = ?
    OR label LIKE ?
    OR type LIKE ?
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
} else if ($search == '') {
    // Connect to the database
    $db = connectToDB($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM tech
;
EOD;

$stmt = $db->prepare($sql);
$stmt->execute([$search, $like, $like]);

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll();
}
?>




<head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="./css/schools.css">
</head>


<body>
    <div class="topnav" id="myTopnav">
        <?php require "./view/header.php" ?>
    </div>
    <form>
    <p>
        <h1>Search for tech!</h1>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

<?php if ($search) : ?>
    <table class="main steelBlueCols">
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Type</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["label"] ?></td>
            <td><?= $row["type"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>

<div> <?php require "./view/footer.php" ?></div>

</body>
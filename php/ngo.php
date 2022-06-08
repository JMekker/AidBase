<?php
    include_once '../includes/php/search_header.php';
?>

<div class="list-container">

	<?php
        $search = mysqli_real_escape_string($conn, $_GET['t']);
        $sql = "SELECT * FROM NGO WHERE entry_id=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failure.";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $search);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='ngo-box'>
                    <h3>" . $row['ngo_name'] . "</h3>
                    <p>" . $row['ngo_description'] . "</p>
                    <a href=" . $row['website'] . ">" . $row['website'] . "</a>
                </div>";
            }
        }
    ?>
</div>

<?php
    include_once '../includes/php/footer.php';
?>
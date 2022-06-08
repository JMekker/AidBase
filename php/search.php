<?php
    include_once '../includes/php/search_header.php';
?>

<br><br>
<h5>Search Results:</h5>
<br><br>

<div class="page-content">
	<div class="list-container">
		<button onclick="history.go(-1);" class="back">Back</button>
		<?php
                if (isset($_POST['submit-search'])) {
                    if (isset($_POST['searchbox1'])) {
                        $search1 = mysqli_real_escape_string($conn, $_POST['searchbox1']);
                    } else {
                        $search1 = "";
                    }
                    if (isset($_POST['searchbox2'])) {
                        $search2 = mysqli_real_escape_string($conn, $_POST['searchbox2']);
                    } else {
                        $search2 = "";
                    }
                    if (isset($_POST['country'])) {
                        $country = $_POST['country'];
                    }
                    if (isset($_POST['sdg'])) {
                        $sdg = $_POST['sdg'];
                    }
                    $sdgsChosen = "";
                    if (!empty($sdg)) {
                        $N = count($sdg);
                        for ($i=0; $i < $N; $i++) {
                            $sdgsChosen = $sdgsChosen . $sdg[$i] . " ";
                        }
                        $sql = "SELECT * FROM NGO WHERE
						    ngo_name like '%$search2%' OR
						    ngo_description LIKE '%$search2%' OR
						    website LIKE '%$search2%' OR ";
                        if ($_POST['country'] != 0) {
                            $sql .= "country LIKE '%$country%' OR ";
                        }
                        $sql .= "tags LIKE '%$sdgsChosen%';";
                        echo $sql;
                    } else {
                        $sql = "SELECT * FROM NGO WHERE
                            ngo_name like '%$search1%' OR
                            ngo_description LIKE '%$search1%' OR
                            website LIKE '%$search1%' OR
                            tags LIKE '%$search1%';";
                    }
                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);
                    if ($queryResult == 1) {
                        echo "There is " . $queryResult . " result.";
                    } elseif ($queryResult == 0) {
                        echo "There are no results.";
                    } elseif ($queryResult > 1) {
                        echo "There are " . $queryResult . " results.";
                    }
                    if ($queryResult > 0) {
                        echo "<h4>" . $queryResult . "</h4>";
                        $row = mysqli_fetch_assoc($result);
                        while ($row) {
                            echo "<div class='ngo-box'><br>
						    <a href='ngo.php?t=" . $row['entry_id'] ."'>
						    <h4>" . $row['ngo_name'] . "</h4></a><br>
						    <p>" . $row['ngo_description'] . "</p><br>
						    <p>Tags:</p>
						    <p>" . $row['tags'] . "</p>
						    </div>";
                        }
                    }
                } else {
                    $sql = "SELECT * FROM NGO;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='ngo-box'><br>
						<a href='ngo.php?t=" . $row['entry_id'] ."'>
						<h4>" . $row['ngo_name'] . "</h4></a><br>
						<p>" . $row['ngo_description'] . "</p><br>
						<p>Tags:</p>
						<p>" . $row['tags'] . "</p>
						</div>";
                    }
                }
            ?>
	</div>
</div>

<?php
    include_once '../includes/php/footer.php';
?>
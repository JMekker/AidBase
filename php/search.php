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
            $sql = "SELECT * FROM NGO WHERE ";

            
                    // Setting the searchbox into the search query
                if (isset($_POST['submit-search'])) {
                    if (isset($_POST['searchbox1'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['searchbox1']);
                    }
                    if (isset($_POST['searchbox2'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['searchbox2']);
                    }
                    $sql .= "ngo_name like '%$search%' OR website LIKE '%$search%'";


                    // Setting country into the search query
                    if (isset($_POST['country'])) {
                        $country = $_POST['country'];
                        $sql .= " OR country LIKE '%$country%'";
                    }


                    // Setting SDGs into the search query
                    if (isset($_POST['sdg'])) {
                        $sdg = $_POST['sdg'];
                        $N = count($sdg);
                        $sdgsChosen = "";
                        for ($i = 0; $i < $N; $i++) {
                            $sdgsChosen = $sdgsChosen . $sdg[$i] . " ";
                        }
                        $sql .= " OR tags LIKE '%$sdgsChosen%'";
                    } else {
                        $sql .= " OR tags LIKE '%$search%'";
                    }


                    $sql .= " OR ngo_description like '%$search%' OR ngo_description LIKE '%$sdgsChosen%' OR ngo_description LIKE '%$country%';";
                    // $sql .= ";";
                    echo $sql;
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
                }
            ?>
	</div>
</div>

<?php
    include_once '../includes/php/footer.php';
?>
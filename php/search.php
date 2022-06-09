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
            $sql = "SELECT * FROM NGO WHERE ngo_name LIKE ''";

                    // Setting the searchbox into the search query
                if (isset($_POST['submit-search'])) {
                    if (isset($_POST['searchbox1'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['searchbox1']);
                    }
                    if (isset($_POST['searchbox2'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['searchbox2']);
                    }
                    if ($search != null) {
                        $sql .= " OR ngo_name LIKE '%$search%' OR website LIKE '%$search%'";
                    }

                    // Setting country into the search query
                    if (isset($_POST['country'])) {
                        $country = $_POST['country'];
                        if ($country != 0) {
                            // if selector is not on default, check for the name of the  country with countryID
                            $requestCountry = "SELECT * FROM countries WHERE countryID = '$country'";
                            $selectedCountry = mysqli_query($conn, $requestCountry);
                            $resultCountry = mysqli_fetch_assoc($selectedCountry);
                            // and add the country name to search query
                            $sql .= " OR country = '$resultCountry[countryName]'";
                        }
                    }

                    // Setting SDGs into the search query
                    if (isset($_POST['sdg'])) {
                        $sdg = $_POST['sdg'];
                        if ($sdg != null) {
                            $N = count($sdg);
                            $sdgsChosen = "";
                            for ($i = 0; $i < $N; $i++) {
                                $sdgsChosen = $sdgsChosen . $sdg[$i] . " ";
                            }
                            $sql .= " OR tags LIKE '%$sdgsChosen%' OR ngo_description LIKE '%$sdgsChosen%'";
                        } else {
                            if ($search != null) {
                                $sql .= " OR tags LIKE '%$search%'";
                            }
                        }
                    }

                    // fall-back search only shows active organizations
                    if ($sql == "SELECT * FROM NGO, countries WHERE ngo_name LIKE ''") {
                        $sql .= " OR active = '1'";
                    }
                    
                    // This is where you need to apply pearson-correlation
                    $sql .= " ORDER BY entry_id;";
                    
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
                        foreach ($result as $entry) {
                            echo "<div class='ngo-box'><br>
                            <a href='ngo.php?t=" . $entry['entry_id'] ."'>
                            <h4>" . $entry['ngo_name'] . "</h4></a><br>
                            <p>" . $entry['ngo_description'] . "</p><br>
                            <p>Tags:</p>
                            <p>" . $entry['tags'] . "</p>
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
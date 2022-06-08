<?php
    include_once '../includes/php/search_header.php';
?>

<br><br>
<h5>NGO Database: </h5>
<br><br>
<div class="page-content">
	<div class="list-container">
		<form action="search.php" method="POST" class="clearfix">
			<input class="searchbox" type="text" name="searchbox1" placeholder="Search" value="">
			<button class="searchbox" type="submit" name="submit-search">Search</button>
			<br><br>
		</form>
		<div class="advanced-dropdown">
			<hr class="advanced" onclick="advDropdown()">
			<div class="searchDropdown">
				<br>
				<h4>Sustainable Development Goals</h4>
				<br>
				<form action="search.php" method="POST">
					<div class="sdgs">
						<section id="section1">
							<input type="checkbox" id="sdg1" name="sdg[]" value="No Poverty ">
							<label for="sdg1">No Poverty</label> <br>
							<input type="checkbox" id="sdg2" name="sdg[]" value="Zero Hunger ">
							<label for="sdg2">Zero Hunger</label> <br>
							<input type="checkbox" id="sdg3" name="sdg[]" value="Good Health and Well-being ">
							<label for="sdg3">Good Health and Well-being</label> <br>
							<input type="checkbox" id="sdg4" name="sdg[]" value="Quality Education ">
							<label for="sdg4">Quality Education</label> <br>
							<input type="checkbox" id="sdg5" name="sdg[]" value="Gender Equality ">
							<label for="sdg5">Gender Equality</label> <br>
							<input type="checkbox" id="sdg6" name="sdg[]" value="Clean Water and Sanitation ">
							<label for="sdg6">Clean Water and Sanitation</label>
						</section>
						<section id="section2">
							<input type="checkbox" id="sdg7" name="sdg[]" value="Affordable and Clean Energy ">
							<label for="sdg7">Affordable and Clean Energy</label> <br>
							<input type="checkbox" id="sdg8" name="sdg[]" value="Decent Work and Economic Growth ">
							<label for="sdg8">Decent Work and Economic Growth</label> <br>
							<input type="checkbox" id="sdg9" name="sdg[]"
								value="Industry, Innovation, and Infrastructure ">
							<label for="sdg9">Industry, Innovation, and Infrastructure</label> <br>
							<input type="checkbox" id="sdg10" name="sdg[]" value="Reduced Inequalities ">
							<label for="sdg10">Reduced Inequalities</label> <br>
							<input type="checkbox" id="sdg11" name="sdg[]" value="Sustainable Cities and Communities ">
							<label for="sdg11">Sustainable Cities and Communities</label> <br>
							<input type="checkbox" id="sdg12" name="sdg[]"
								value="Responsible Consumption and Production ">
							<label for="sdg12">Responsible Consumption and Production</label>
						</section>
						<section id="section3">
							<input type="checkbox" id="sdg13" name="sdg[]" value="Climate Action ">
							<label for="sdg13">Climate Action</label> <br>
							<input type="checkbox" id="sdg14" name="sdg[]" value="Life Below Water ">
							<label for="sdg14">Life Below Water</label> <br>
							<input type="checkbox" id="sdg15" name="sdg[]" value="Life on Land ">
							<label for="sdg15">Life on Land</label> <br>
							<input type="checkbox" id="sdg16" name="sdg[]"
								value="Peace, Justice, and Strong Institution ">
							<label for="sdg16">Peace, Justice, and Strong Institution</label> <br>
							<input type="checkbox" id="sdg17" name="sdg[]" value="Partnerships for the Goals ">
							<label for="sdg17">Partnerships for the Goals</label>
						</section>
					</div>
					<br>
					<div>
						<section id="section4">
							<h4>Country</h4>
							<select id="country" name="country" class="form-control">
								<option value="0">Any</option>
								<option value="1">Afghanistan</option>
								<option value="2">Albania</option>
								<option value="3">Algeria</option>
								<option value="4">Andorra</option>
								<option value="5">Angola</option>
								<option value="6">Antigua and Barbuda</option>
								<option value="7">Argentina</option>
								<option value="8">Armenia</option>
								<option value="9">Australia</option>
								<option value="10">Austria</option>
								<option value="11">Azerbaijan</option>
								<option value="12">Bahamas</option>
								<option value="13">Bahrain</option>
								<option value="14">Bangladesh</option>
								<option value="15">Barbados</option>
								<option value="16">Belarus</option>
								<option value="17">Belgium</option>
								<option value="18">Belize</option>
								<option value="19">Benin</option>
								<option value="20">Bhutan</option>
								<option value="21">Bolivia</option>
								<option value="22">Bosnia and Herzegovina</option>
								<option value="23">Botswana</option>
								<option value="24">Brazil</option>
								<option value="25">Brunei</option>
								<option value="26">Bulgaria</option>
								<option value="27">Burkina Faso</option>
								<option value="28">Burundi</option>
								<option value="29">Cambodia</option>
								<option value="30">Cameroon</option>
								<option value="31">Canada</option>
								<option value="32">Cape Verde</option>
								<option value="33">Central African Republic</option>
								<option value="34">Chad</option>
								<option value="35">Chile</option>
								<option value="36">China</option>
								<option value="37">Colombia</option>
								<option value="38">Comoros</option>
								<option value="39">Congo, The Democratic Republic of The</option>
								<option value="40">Congo, Republic of The</option>
								<option value="41">Costa Rica</option>
								<option value="42">Cote D'ivoire</option>
								<option value="43">Croatia</option>
								<option value="44">Cuba</option>
								<option value="45">Cyprus</option>
								<option value="46">Czech Republic</option>
								<option value="47">Denmark</option>
								<option value="48">Djibouti</option>
								<option value="49">Dominica</option>
								<option value="50">Dominican Republic</option>
								<option value="51">Ecuador</option>
								<option value="52">East Timor</option>
								<option value="53">Egypt</option>
								<option value="54">El Salvador</option>
								<option value="55">England</option>
								<option value="56">Equatorial Guinea</option>
								<option value="57">Eritrea</option>
								<option value="58">Estonia</option>
								<option value="59">Eswatini</option>
								<option value="60">Ethiopia</option>
								<option value="61">Federated States of Micronesia</option>
								<option value="62">Fiji</option>
								<option value="63">Finland</option>
								<option value="64">France</option>
								<option value="65">Gabon</option>
								<option value="66">Gambia</option>
								<option value="67">Georgia</option>
								<option value="68">Germany</option>
								<option value="69">Ghana</option>
								<option value="70">Greece</option>
								<option value="71">Grenada</option>
								<option value="72">Guatemala</option>
								<option value="73">Guinea</option>
								<option value="74">Guinea-bissau</option>
								<option value="75">Guyana</option>
								<option value="76">Haiti</option>
								<option value="77">Honduras</option>
								<option value="78">Hungary</option>
								<option value="79">Iceland</option>
								<option value="80">India</option>
								<option value="81">Indonesia</option>
								<option value="82">Iran</option>
								<option value="83">Iraq</option>
								<option value="84">Ireland</option>
								<option value="85">Israel</option>
								<option value="86">Italy</option>
								<option value="87">Jamaica</option>
								<option value="88">Japan</option>
								<option value="89">Jordan</option>
								<option value="90">Kazakhstan</option>
								<option value="91">Kenya</option>
								<option value="92">Kiribati</option>
								<option value="93">Kuwait</option>
								<option value="94">Kyrgyzstan</option>
								<option value="95">Laos</option>
								<option value="96">Latvia</option>
								<option value="97">Lebanon</option>
								<option value="98">Lesotho</option>
								<option value="99">Liberia</option>
								<option value="100">Libya</option>
								<option value="101">Liechtenstein</option>
								<option value="102">Lithuania</option>
								<option value="103">Luxembourg</option>
								<option value="104">Macao</option>
								<option value="105">Madagascar</option>
								<option value="106">Malawi</option>
								<option value="107">Malaysia</option>
								<option value="108">Maldives</option>
								<option value="109">Mali</option>
								<option value="110">Malta</option>
								<option value="111">Marshall Islands</option>
								<option value="112">Mauritania</option>
								<option value="113">Mauritius</option>
								<option value="114">Mexico</option>
								<option value="115">Moldova</option>
								<option value="116">Monaco</option>
								<option value="117">Mongolia</option>
								<option value="118">Montenegro</option>
								<option value="119">Morocco</option>
								<option value="120">Mozambique</option>
								<option value="121">Myanmar</option>
								<option value="122">Namibia</option>
								<option value="123">Nauru</option>
								<option value="124">Nepal</option>
								<option value="125">Netherlands</option>
								<option value="126">New Zealand</option>
								<option value="127">Nicaragua</option>
								<option value="128">Niger</option>
								<option value="129">Nigeria</option>
								<option value="130">North Korea</option>
								<option value="131">North Macedonia</option>
								<option value="132">Northern Ireland</option>
								<option value="133">Norway</option>
								<option value="134">Oman</option>
								<option value="135">Pakistan</option>
								<option value="136">Palau</option>
								<option value="137">Panama</option>
								<option value="138">Papua New Guinea</option>
								<option value="139">Paraguay</option>
								<option value="140">Peru</option>
								<option value="141">Philippines</option>
								<option value="142">Poland</option>
								<option value="143">Portugal</option>
								<option value="144">Qatar</option>
								<option value="145">Romania</option>
								<option value="146">Russia</option>
								<option value="147">Rwanda</option>
								<option value="148">Saint Kitts and Nevis</option>
								<option value="149">Saint Lucia</option>
								<option value="150">Saint Vincent and The Grenadines</option>
								<option value="151">Samoa</option>
								<option value="152">San Marino</option>
								<option value="153">Sao Tome and Principe</option>
								<option value="154">Saudi Arabia</option>
								<option value="155">Scotland</option>
								<option value="156">Senegal</option>
								<option value="157">Serbia</option>
								<option value="158">Seychelles</option>
								<option value="159">Sierra Leone</option>
								<option value="160">Singapore</option>
								<option value="161">Slovakia</option>
								<option value="162">Slovenia</option>
								<option value="163">Solomon Islands</option>
								<option value="164">Somalia</option>
								<option value="165">South Africa</option>
								<option value="166">South Korea</option>
								<option value="167">South Sudan</option>
								<option value="168">Spain</option>
								<option value="169">Sri Lanka</option>
								<option value="170">Sudan</option>
								<option value="171">Suriname</option>
								<option value="172">Sweden</option>
								<option value="173">Switzerland</option>
								<option value="174">Syria</option>
								<option value="175">Taiwan</option>
								<option value="176">Tajikistan</option>
								<option value="177">Tanzania</option>
								<option value="178">Thailand</option>
								<option value="179">Togo</option>
								<option value="180">Tonga</option>
								<option value="181">Trinidad and Tobago</option>
								<option value="182">Tunisia</option>
								<option value="183">Turkey</option>
								<option value="184">Turkmenistan</option>
								<option value="185">Tuvalu</option>
								<option value="186">Uganda</option>
								<option value="187">Ukraine</option>
								<option value="188">United Arab Emirates</option>
								<option value="189">United Kingdom</option>
								<option value="190">United States</option>
								<option value="191">Uruguay</option>
								<option value="192">Uzbekistan</option>
								<option value="193">Vanuatu</option>
								<option value="194">Vatican City</option>
								<option value="195">Venezuela</option>
								<option value="196">Vietnam</option>
								<option value="197">Wales</option>
								<option value="198">Yemen</option>
								<option value="199">Zambia</option>
								<option value="200">Zimbabwe</option>
							</select>
						</section>
					</div>
					<br>
					<br>
					<input class="searchbox" type="text" name="searchbox2" placeholder="Search" value="">
					<button class="searchbox" type="submit" name="submit-search">Search</button>
				</form>

				<hr class="advanced2">
			</div>
		</div>
		<?php
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
                ?>
	</div>
	<br>
</div>
<br>

<?php
    include_once '../includes/php/footer.php';
?>
+<?php require "connect.php"; ?>
+<!DOCTYPE html>
+<html lang="en">
+<head>
+	<meta charset="UTF-8">
+	<title>MovieBataBhai</title>
+	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
+	<link rel="stylesheet" href="css/style.css">
+	<link rel="stylesheet" href="css/style_login.css">
+	<link rel="stylesheet" href="css/style_dropdown.css">
+	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
+</head>
+
+<body>
+	<h1>
+		<span class="blue">&lt;</span>
+		MovieBata
+		<span class="blue">&gt;</span> 
+		<span class="yellow">Bhai</span>
+	</h1>
+	<h2>A Big Data Movie Recommendation Engine on dataset from 1920 to 2016
+	</h2>
+	<div class="flexy">
+		<div class="flexchild" style="padding: 80px;margin-left: 10px;">
+			<div class="login">
+				<div class="login-triangle"></div>
+				<h2 class="login-header">Please Fill Details</h2>
+				<form class="login-container" method="post" action="">
+				<div style="margin-left: 20px;" name="age" class="dropdown dropdown-dark">
+					<select name="two" class="dropdown-select">
+						<option value="1">Select Age</option>
+						<option value="1">Less than 18</option>
+						<option value="2">18-30</option>
+						<option value="3">30+</option>
+					</select>
+				</div>
+				<div style="margin-left: 20px;" age="occupation" class="dropdown dropdown-dark">
+					<select name="two" class="dropdown-select">
+						<option value="1">Select Occupation</option>
+						<option value="1">Student</option>
+						<option value="2">Doctor</option>
+						<option value="3">Teacher</option>
+						<option value="3">Lawer</option>
+						<option value="3">Programmer</option>
+						<option value="3">Agriculture</option>
+						<option value="3">Engineer</option>
+						<option value="3">Teacher</option>
+						<option value="3">Sakht Launda</option>
+						<option value="3">Unemployed</option>
+						<option value="3">Others</option>
+					</select>
+				</div>
+				<div  style=" margin-top:25px;display: flex;" >
+					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Min Rating :&nbsp;&nbsp;&nbsp;
+					<select name="minrating" id="minrating">
+						<option value="1">1</option>
+						<option value="2">2</option>
+						<option value="3">3</option>
+						<option value="4">4</option>
+					</select>
+				</div>
+				<div style="margin-top: 25px;display: flex;">
+					&nbsp;&nbsp;&nbsp;&nbsp;Year Span ex(2015-2016): &nbsp;&nbsp;&nbsp;&nbsp;
+					<select name="beginyear">
+						<option value=1920>1920</option>
+						<option value=1921>1921</option>
+						<option value=1922>1922</option>
+						<option value=1923>1923</option>
+						<option value=1924>1924</option>
+						<option value=1925>1925</option>
+						<option value=1926>1926</option>
+						<option value=1927>1927</option>
+						<option value=1928>1928</option>
+						<option value=1929>1929</option>
+						<option value=1930>1930</option>
+						<option value=1931>1931</option>
+						<option value=1932>1932</option>
+						<option value=1933>1933</option>
+						<option value=1934>1934</option>
+						<option value=1935>1935</option>
+						<option value=1936>1936</option>
+						<option value=1937>1937</option>
+						<option value=1938>1938</option>
+						<option value=1939>1939</option>
+						<option value="1940">1940</option>
+						<option value="1941">1941</option>
+						<option value="1942">1942</option>
+						<option value="1943">1943</option>
+						<option value="1944">1944</option>
+						<option value="1945">1945</option>
+						<option value="1946">1946</option>
+						<option value="1947">1947</option>
+						<option value="1948">1948</option>
+						<option value="1949">1949</option>
+						<option value="1950">1950</option>
+						<option value="1951">1951</option>
+						<option value="1952">1952</option>
+						<option value="1953">1953</option>
+						<option value="1954">1954</option>
+						<option value="1955">1955</option>
+						<option value="1956">1956</option>
+						<option value="1957">1957</option>
+						<option value="1958">1958</option>
+						<option value="1959">1959</option>
+						<option value="1960">1960</option>
+						<option value="1961">1961</option>
+						<option value="1962">1962</option>
+						<option value="1963">1963</option>
+						<option value="1964">1964</option>
+						<option value="1965">1965</option>
+						<option value="1966">1966</option>
+						<option value="1967">1967</option>
+						<option value="1968">1968</option>
+						<option value="1969">1969</option>
+						<option value="1970">1970</option>
+						<option value="1971">1971</option>
+						<option value="1972">1972</option>
+						<option value="1973">1973</option>
+						<option value="1974">1974</option>
+						<option value="1975">1975</option>
+						<option value="1976">1976</option>
+						<option value="1977">1977</option>
+						<option value="1978">1978</option>
+						<option value="1979">1979</option>
+						<option value="1980">1980</option>
+						<option value="1981">1981</option>
+						<option value="1982">1982</option>
+						<option value="1983">1983</option>
+						<option value="1984">1984</option>
+						<option value="1985">1985</option>
+						<option value="1986">1986</option>
+						<option value="1987">1987</option>
+						<option value="1988">1988</option>
+						<option value="1989">1989</option>
+						<option value="1990">1990</option>
+						<option value="1991">1991</option>
+						<option value="1992">1992</option>
+						<option value="1993">1993</option>
+						<option value="1994">1994</option>
+						<option value="1995">1995</option>
+						<option value="1996">1996</option>
+						<option value="1997">1997</option>
+						<option value="1998">1998</option>
+						<option value="1999">1999</option>
+						<option value="2000">2000</option>
+						<option value="2001">2001</option>
+						<option value="2002">2002</option>
+						<option value="2003">2003</option>
+						<option value="2004">2004</option>
+						<option value="2005">2005</option>
+						<option value="2006">2006</option>
+						<option value="2007">2007</option>
+						<option value="2008">2008</option>
+						<option value="2009">2009</option>
+						<option value="2010">2010</option>
+						<option value="2011">2011</option>
+						<option value="2012">2012</option>
+						<option value="2013">2013</option>
+						<option value="2014">2014</option>
+						<option value="2015">2015</option>
+						<option value="2016">2016</option>
+					</select>
+					&nbsp;&nbsp;-&nbsp;&nbsp;
+					<select name="endyear">
+						<option value=1920>1920</option>
+						<option value=1921>1921</option>
+						<option value=1922>1922</option>
+						<option value=1923>1923</option>
+						<option value=1924>1924</option>
+						<option value=1925>1925</option>
+						<option value=1926>1926</option>
+						<option value=1927>1927</option>
+						<option value=1928>1928</option>
+						<option value=1929>1929</option>
+						<option value=1930>1930</option>
+						<option value=1931>1931</option>
+						<option value=1932>1932</option>
+						<option value=1933>1933</option>
+						<option value=1934>1934</option>
+						<option value=1935>1935</option>
+						<option value=1936>1936</option>
+						<option value=1937>1937</option>
+						<option value=1938>1938</option>
+						<option value=1939>1939</option>
+						<option value=1940>1940</option>
+						<option value="1941">1941</option>
+						<option value="1942">1942</option>
+						<option value="1943">1943</option>
+						<option value="1944">1944</option>
+						<option value="1945">1945</option>
+						<option value="1946">1946</option>
+						<option value="1947">1947</option>
+						<option value="1948">1948</option>
+						<option value="1949">1949</option>
+						<option value="1950">1950</option>
+						<option value="1951">1951</option>
+						<option value="1952">1952</option>
+						<option value="1953">1953</option>
+						<option value="1954">1954</option>
+						<option value="1955">1955</option>
+						<option value="1956">1956</option>
+						<option value="1957">1957</option>
+						<option value="1958">1958</option>
+						<option value="1959">1959</option>
+						<option value="1960">1960</option>
+						<option value="1961">1961</option>
+						<option value="1962">1962</option>
+						<option value="1963">1963</option>
+						<option value="1964">1964</option>
+						<option value="1965">1965</option>
+						<option value="1966">1966</option>
+						<option value="1967">1967</option>
+						<option value="1968">1968</option>
+						<option value="1969">1969</option>
+						<option value="1970">1970</option>
+						<option value="1971">1971</option>
+						<option value="1972">1972</option>
+						<option value="1973">1973</option>
+						<option value="1974">1974</option>
+						<option value="1975">1975</option>
+						<option value="1976">1976</option>
+						<option value="1977">1977</option>
+						<option value="1978">1978</option>
+						<option value="1979">1979</option>
+						<option value="1980">1980</option>
+						<option value="1981">1981</option>
+						<option value="1982">1982</option>
+						<option value="1983">1983</option>
+						<option value="1984">1984</option>
+						<option value="1985">1985</option>
+						<option value="1986">1986</option>
+						<option value="1987">1987</option>
+						<option value="1988">1988</option>
+						<option value="1989">1989</option>
+						<option value="1990">1990</option>
+						<option value="1991">1991</option>
+						<option value="1992">1992</option>
+						<option value="1993">1993</option>
+						<option value="1994">1994</option>
+						<option value="1995">1995</option>
+						<option value="1996">1996</option>
+						<option value="1997">1997</option>
+						<option value="1998">1998</option>
+						<option value="1999">1999</option>
+						<option value="2000">2000</option>
+						<option value="2001">2001</option>
+						<option value="2002">2002</option>
+						<option value="2003">2003</option>
+						<option value="2004">2004</option>
+						<option value="2005">2005</option>
+						<option value="2006">2006</option>
+						<option value="2007">2007</option>
+						<option value="2008">2008</option>
+						<option value="2009">2009</option>
+						<option value="2010">2010</option>
+						<option value="2011">2011</option>
+						<option value="2012">2012</option>
+						<option value="2013">2013</option>
+						<option value="2014">2014</option>
+						<option value="2015">2015</option>
+						<option value="2016">2016</option>
+					</select>
+				</div>
+				<div style="margin-top: 20px; margin-bottom: 20px; margin-left: 15px; display: flex;">
+					Use Votercount:
+					<input type="checkbox" name="voter" value="">
+				</div>
+
+				&nbsp;&nbsp;2 genres you like:&nbsp;
+				<select name="genrea">
+					<option value="Drama">Drama</option>
+					<option value="Fantasy">Fantasy</option>
+					<option value="Romance">Romance</option>
+					<option value="Sci-Fi">Sci-Fi</option>
+					<option value="Adventure">Adventure</option>
+					<option value="Animation">Animation</option>
+					<option value="Children">Children</option>
+					<option value="Comedy">Comedy</option>
+					<option value="Musical">Musical</option>
+					<option value="Thriller">Thriller</option>
+					<option value="War">War</option>
+					<option value="Documentary">Documentary</option>
+					<option value="Action">Action</option>
+					<option value="Mystery">Mystery</option>
+					<option value="IMAX">IMAX</option>
+					<option value="Crime">Crime</option>
+					<option value="Western">Western</option>
+					<option value="Horror">Horror</option>
+				</select>&nbsp;
+				<select name="genreb">
+
+					<option value="Sci-Fi">Sci-Fi</option>
+					<option value="Drama">Drama</option>
+					<option value="Fantasy">Fantasy</option>
+					<option value="Romance">Romance</option>
+					<option value="Adventure">Adventure</option>
+					<option value="Animation">Animation</option>
+					<option value="Children">Children</option>
+					<option value="Comedy">Comedy</option>
+					<option value="Musical">Musical</option>
+					<option value="Thriller">Thriller</option>
+					<option value="War">War</option>
+					<option value="Documentary">Documentary</option>
+					<option value="Action">Action</option>
+					<option value="Mystery">Mystery</option>
+					<option value="IMAX">IMAX</option>
+					<option value="Crime">Crime</option>
+					<option value="Western">Western</option>
+					<option value="Horror">Horror</option>
+				</select>
+				<div style="margin-top: 20px; margin-left: 15px; display: flex;">
+					<div class="tooltip">Srict genre nesting
+						<span class="tooltiptext">Recommended movies should be of both genres strictly</span>
+					</div>
+					<input type="checkbox" name="strictflag" value="">
+				</div>
+				<div style="margin-top: 25px;">
+					&nbsp;&nbsp;&nbsp;&nbsp;Enter Tag(Optional):
+					<input style="border: 0px; height: 20px; margin-left: 20px; width: 250px; " type="type" name="tag">
+				</div>
+				<p><input type="submit" style="margin-top: 10px;" value="Show Recommendations"></p>
+			</form>
+			</div>
+		</div>
+		<div class="flexchild" style="padding: 20px;margin-left: 10px">
+			<table class="container">
+				<thead>
+					<tr>
+						<th><h1>Title</h1></th>
+						<th><h1>Rating</h1></th>
+						<th><h1>Genres</h1></th>
+						<th><h1>Tags</h1></th>
+					</tr>
+				</thead>
+				<tbody>	
+						<?php 
+						if(isset($_POST['minrating']))
+						{
+							$bgyr=$_POST['beginyear'];
+							$endyr=$_POST['endyear'];
+							$genreone=$_POST['genrea'];
+							$genresec=$_POST['genreb'];
+							$minrat=$_POST['minrating'];
+							$tg=$_POST['tag']; 
+							if(isset($_POST['strictflag']))
+							{
+								$sql_query="SELECT title,rating,genre,tags from final_data WHERE (year BETWEEN '$bgyr' AND '$endyr') AND (rating>='$minrat') AND (tags LIKE '%".$tg."%' OR tags IS NULL) AND (genre LIKE '%".$genreone."%' AND genre LIKE '%".$genresec."%');";
+		// $sql_query="SELECT * from final_data limit 20;";
+								$res=mysqli_query($link,$sql_query);
+								while ($row=mysqli_fetch_assoc($res)) {
+									?>
+									<tr>
+										<td><?php echo $row['title']; ?></td>
+										<td><?php echo $row['rating']; ?></td>
+										<td><?php echo $row['genre']; ?></td>
+										<td><?php echo $row['tags']; ?></td>
+									</tr>
+
+									<?php }
+								}
+								else
+								{
+									$sql_query="SELECT title,rating,genre,tags from final_data WHERE (year BETWEEN '$bgyr' AND '$endyr') AND (rating>='$minrat') AND (tags LIKE '%".$tg."%' OR tags IS NULL) AND (genre LIKE '%".$genreone."%' OR genre LIKE '%".$genresec."%');";
+		// $sql_query="SELECT * from final_data limit 20;";
+									$res=mysqli_query($link,$sql_query);
+									while ($row=mysqli_fetch_assoc($res)) {
+										?>
+									<tr>
+										<td><?php echo $row['title']; ?></td>
+										<td><?php echo $row['rating']; ?></td>
+										<td><?php echo $row['genre']; ?></td>
+										<td><?php echo $row['tags']; ?></td>
+									</tr>
+
+									<?php
+									}
+								}
+							}
+							?>
+											
+				</tbody>
+			</table>
+		</div>
+	</div>
+</div>
+</body>
+</html>
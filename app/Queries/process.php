<?php
$conn = mysqli_connect('localhost', 'root', '', 'chowis') or die(mysql_error($conn));
$conn->set_charset("utf8");


// BRAND
if (isset($_POST['save_brand'])) {
	$bname = $_POST['brand'];
	$sql = mysqli_query($conn, "INSERT INTO `brand`( `brandName`, `active`) VALUES ('$bname', '1')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['getbrand'])) {
	$sql = mysqli_query($conn, "SELECT `brandName` as bname FROM `brand` ");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['bname']."</th>
		<td><span class='actionTitle'>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

// FAMILY
if (isset($_POST['save_family'])) {
	$fname = $_POST['familyname'];
	$sql = mysqli_query($conn, "INSERT INTO `productfamilies`(`productname`) VALUES ('$fname')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['getfamily'])) {
	$sql = mysqli_query($conn, "SELECT `productname` FROM `productfamilies`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['productname']."</th>
		<td><span class='actionTitle'>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

// FREQUENCIES
if (isset($_POST['save_freq'])) {
	$freqname = $_POST['freqname'];
	$sql = mysqli_query($conn, "INSERT INTO `frequencies`(`freqname`) VALUES ('$freqname')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['getfreq'])) {
	$sql = mysqli_query($conn, "SELECT `freqname` FROM `frequencies`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['freqname']."</th>
		<td><span class='actionTitle'>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

// TREATMENT DURATION
if (isset($_POST['save_duration'])) {
	$durname = $_POST['durationname'];
	$sql = mysqli_query($conn, "INSERT INTO `treatmentduration`(`durationname`) VALUES ('$durname')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['getduration'])) {
	$sql = mysqli_query($conn, "SELECT `durationname` FROM `treatmentduration`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['durationname']."</th>
		<td><span class='actionTitle'>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

// TREATMENT NEW
if (isset($_POST['gettreatduration'])) {
	$sql = mysqli_query($conn, "SELECT `durationname` FROM `treatmentduration`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<option>".$rows['durationname']."</option>";
	}
	}
}

if (isset($_POST['gettreatfreq'])) {
	$sql = mysqli_query($conn, "SELECT `freqname` FROM `frequencies`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<option>".$rows['freqname']."</option>";
	}
	}
}

if (isset($_POST['gettreatproduct'])) {
	$sql = mysqli_query($conn, "SELECT `name` FROM `product`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<option>".$rows['name']."</option>";
	}
	}
}

if (isset($_POST['gettreatbrands'])) {
	$sql = mysqli_query($conn, "SELECT id, `brandName` as bname FROM `brand` ");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<tr>
			<th scope='row'>".$rows['id']."</th>
			<td>".$rows['bname']."</td>
			<td><input class='form-check-input tblcheckbox' type='checkbox'/></td>
		</tr>
		";
	}
	}
}


// PRODUCT
if (isset($_POST['savenewproduct'])) {
	$productname = $_POST['productname'];
    $brand = $_POST['brand'];
    $family = $_POST['family'];
    $price = $_POST['price'];
    $barcode = $_POST['barcode'];
    $description = $_POST['description'];
    $customFile = $_POST['customFile'];
    $properties = $_POST['properties'];

	$sql = mysqli_query($conn, "INSERT INTO `product`(`name`,`brand`, `family`, `description`, `properties`, `price`, `barcode`, `img`) VALUES ('$productname','$brand','$family','$description','$properties','$price','$barcode','$customFile')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['getbrandlist'])) {
	$sql = mysqli_query($conn, "SELECT `brandName` as bname FROM `brand` ");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<option>".$rows['bname']."</option>";
	}
	}
}

if (isset($_POST['getfamilylist'])) {
	$sql = mysqli_query($conn, "SELECT `productname` FROM `productfamilies`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "
		<option>".$rows['productname']."</option>";
	}
	}
}

// Productlist
if (isset($_POST['productlist'])) {
	$sql = mysqli_query($conn, "SELECT `id`,`name`, `brand`, `family` FROM `product` ");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th scope='row'>".$rows['id']."</th>
		<td>".$rows['name']."</td>
		<td>".$rows['family']."</td>
		<td>".$rows['brand']."</td>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

//Treatment SAVE
if (isset($_POST['save_moisture'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `moisture`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['save_keratin'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `keratin`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['save_spots'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `spots`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['save_pores'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `pores`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['save_wrinkles'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `wrinkles`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

if (isset($_POST['save_impurities'])) {
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$productlist = $_POST['productlist'];
	$diag = $_POST['diag'];
	$freqlist = $_POST['freqlist'];
	$durationlist = $_POST['durationlist'];
	$sql = mysqli_query($conn, "INSERT INTO `impurities`(`age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES ('$age','$gender','$productlist','$diag','$freqlist','$durationlist')");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		echo "Success";
	}
}

// Tables
if (isset($_POST['get_pores'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `pores`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

if (isset($_POST['get_spots'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `spots`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

if (isset($_POST['get_wrinkles'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `wrinkles`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

if (isset($_POST['get_moisture'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `moisture`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

if (isset($_POST['get_keratin'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `keratin`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}

if (isset($_POST['get_impurities'])) {
	$sql = mysqli_query($conn, "SELECT `gender`, `product`, `diagnosis`, `frequency`, `duration` FROM `impurities`");
	if (!$sql)
	{
		echo "Error!";
	}
	else{
		while ($rows = mysqli_fetch_array($sql))
	{	
		echo "<tr>
		<th>".$rows['diagnosis']."</th>
		<th>".$rows['product']."</th>
		<th>".$rows['frequency']."</th>
		<th>".$rows['duration']."</th>
		<th>".$rows['gender']."</th>
		<td><span>
            <button type='button' class='btn btn-info btn-sm mr-2 buttonTable'>Edit</button>
            <button type='button' class='btn btn-danger btn-sm mr-2 buttonTable'>Delete</button>
            </span>
         </td>
		</tr>";
	}
	}
}
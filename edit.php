<?php session_id();
session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['kode_barang'];
	
	$name = $_POST['nama_barang'];
	$qty = $_POST['jumlah'];
	$price = $_POST['harga'];	
	
	// checking empty fields
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE barang SET nama_barang='$name', jumlah='$qty', harga='$price' WHERE kode_barang=$id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE kode_barang='$id'");

while($res = mysqli_fetch_array($result))
{
	$name = $res['nama_barang'];
	$qty = $res['jumlah'];
	$price = $res['harga'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama_barang" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="jumlah" value="<?php echo $qty;?>"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="harga" value="<?php echo $price;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kode_barang" value=<?php echo $id;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
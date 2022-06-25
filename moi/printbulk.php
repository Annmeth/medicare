<?php
//session_start();
include 'includes/functions.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

require '../dompdf/dompdf/autoload.inc.php';
$dompdf = new Dompdf();

$is_general = $_POST['is_general'];

ob_start();

$count = 0;
$tbody = "";
if ($is_general == 1) {
	$sql = "SELECT * FROM department";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$dep_id = $row['dep_id'];
			$sql_item = "SELECT * FROM dep_items WHERE dep_id='$dep_id'";
			$items = $db->query($sql_item);
			while ($row = $items->fetch_assoc()) {
				$count = $count + 1;
				$nsname = $row['nsname'];
				$ittype = $row['ittype'];
				$itname = $row['ittype'];
				$qty = $row['qty'];
				$impdate = $row['impdate'];
				$btcno = $row['btcno'];
				$cdtn = $row['cdtn'];

				$tbody .= "<tr>
					<td>$count</td>
					<td>D-000$dep_id</td>
					<td>$nsname</td><td>$ittype</td>
					<td>$itname</td>
					<td>$qty</td><td>$impdate</td>
					<td>$cdtn</td><td>$btcno</td>

		  		</tr>";
			}
		}
	}
} else {
	$dep_id = $_POST['dep_id'];
	$sql_item = "SELECT * FROM dep_items WHERE dep_id='$dep_id'";
	$items = $db->query($sql_item);
	while ($row = $items->fetch_assoc()) {
		$count = $count + 1;
		$nsname = $row['nsname'];
		$ittype = $row['ittype'];
		$itname = $row['ittype'];
		$qty = $row['qty'];
		$impdate = $row['impdate'];
		$btcno = $row['btcno'];
		$cdtn = $row['cdtn'];
	
		$tbody .= "<tr>
					<td>$count</td>
					<td>D-000$dep_id</td>
					<td>$nsname</td><td>$ittype</td>
					<td>$itname</td>
					<td>$qty</td><td>$impdate</td>
					<td>$cdtn</td><td>$btcno</td>

		  		</tr>";
	}
}

require '../pdf-extract/department_report.php';
$html = ob_get_clean();

//$html1 = file_get_contents("C:\xampp\htdocs\testing\testprint.php");

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('userprinted.pdf', array("Attachment" => 0));


?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>card</title>
	<style>
		body {
			background: #FFFFFF;
		}

		#bg {

			height: 450px;

			margin: 60px;
			float: left;

		}

		#id {
			width: 250px;
			height: 450px;
			position: absolute;
			opacity: 0.88;
			font-family: sans-serif;

			transition: 0.4s;
			background-color: #FFFFFF;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
			transition: 0.4s;
		}

		#id::before {
			content: "";
			position: absolute;
			width: 100%;
			height: 100%;
			background: url('images/malawi.png');
			background-repeat: repeat-x;
			background-size: 250px 450px;
			opacity: 0.2;
			z-index: -1;
			text-align: center;


		}

		.container {
			font-size: 12px;
			font-family: sans-serif;

		}

		.id-1 {
			transition: 0.4s;
			width: 250px;
			height: 450px;
			background: #FFFFFF;
			text-align: center;
			font-size: 16px;
			font-family: sans-serif;
			float: left;
			margin: auto;
			margin-left: 270px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
			transition: 0.4s;
		}
	</style>
</head>

<body>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>

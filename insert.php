
<!DOCTYPE html>
<html>
<head>
<title> Submition</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container text-center my-auto" >
<?php
//DO NOT ADD ANYTHING ABOVE THIS LINE, AS YOUR PHP SCRIPT WILL NOT WORK

$servername = "sql309.epizy.com";
$username = "epiz_24307324";
$password = "dwM1vgJC0yK0";
$dbname = "epiz_24307324_OilCake";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "<div class='row'><div class='col-12'>Connection Error </div></div> ";
}

$sql = "INSERT INTO deals values (
  '".$_REQUEST["Date"]."',
  '".$_REQUEST["Broker_Name"]."',
  '".$_REQUEST["Party_Name"]."',
  '".$_REQUEST["Party_Mobile_Number"]."',
  '".$_REQUEST["GST_Number"]."',
  '".$_REQUEST["Location"]."',
  '".$_REQUEST["Quantity"]."',
  '".$_REQUEST["Rate"]."',
  '".$_REQUEST["Condition"]."',
  '".$_REQUEST["Brand"]."'
)";
if ($conn->query($sql) === TRUE) {
    echo "<div class='row'><div class='col-12'> New record created successfully </div></div>";
    echo "<div id='content'>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Date</div>";
    echo "<div class='col-6'> ".$_REQUEST['Date']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Broker Name</div>";
    echo "<div class='col-6'> ".$_REQUEST['Broker_Name']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Party Name</div>";
    echo "<div class='col-6'> ".$_REQUEST['Party_Name']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Party Mobile Number</div>";
    echo "<div class='col-6'> ".$_REQUEST['Party_Mobile_Number']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>GST Number</div>";
    echo "<div class='col-6'> ".$_REQUEST['GST_Number']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Location</div>";
    echo "<div class='col-6'> ".$_REQUEST['Location']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Quantity</div>";
    echo "<div class='col-6'> ".$_REQUEST['Quantity']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Rate</div>";
    echo "<div class='col-6'> ".$_REQUEST['Rate']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Condition</div>";
    echo "<div class='col-6'> ".$_REQUEST['Condition']."</div>";
    echo "</div>";
    echo "<div class='row'>";
    echo "<div class='col-6'>Brand</div>";
    echo "<div class='col-6'> ".$_REQUEST['Brand']."</div>";
    echo "</div>";
    echo "</div>";
   // echo "<div class='row'><div class='col-12'><button class='btn btn-primary rounded-pill p-3' onclick='convert_HTML_To_PDF();'>PDF Download</button></div></div>";
    echo "<div class='row'><div class='col-12'>For Other Entry </div></div>";
}
 else {
    echo "<div class='row'><div class='col-12'> Error: </div></div>" ;
    echo "<div class='row'><div class='col-12'> Try again  </div></div>";
}
    echo "<div class='row'><div class='col-12'> <a role='button' class='btn btn-primary rounded-pill p-3' href='http://deals.my-style.in/'>Back to Form </a> </div></div>";

$conn->close();
?>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>	
<script type="text/javascript">
function convert_HTML_To_PDF() {
	var doc = new jsPDF();
	var elementHTML = $('#contnet').html();
	var specialElementHandlers = {
		'#elementH': function (element, renderer) {
			return true;
		}
	};
	doc.fromHTML(elementHTML, 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
	
	// Save the PDF
    var datenow = new Date();
    var datenow = datenow.toString();
    var filename = "deals_";
    filename = filename.concat(datenow,".pdf");
	doc.save(filename);
}

</script>
</body>
</html>
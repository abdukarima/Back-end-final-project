
<!DOCTYPE html>
<html>
<head>
<title> LIST</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<link rel = "icon" href = "sbb logo 1.jpg" type = "image/x-icon">
</head>
<body>
<?php
    session_start();
    if($_SESSION['sid'] == session_id())
    {
        echo '<div class="container">';


$servername = "sql309.epizy.com";
$username = "epiz_24307324";
$password = "dwM1vgJC0yK0";
$dbname = "epiz_24307324_OilCake";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "<div class='row p-5'><div class='col-12'> <h3>List of deals </h3> </div></div>";

$sql = "SELECT * FROM deals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover pt-5"><thead><tr><th scope="col">Date</th><th scope="col">Broker Name</th><th scope="col">Party</th><th scope="col">Party Mobile Number</th><th scope="col">GST No.</th><th scope="col">Location</th><th scope="col">Quantity</th><th scope="col">Rate</th><th scope="col">Payment Condition</th><th scope="col">Brand</th></tr></thead><tbody>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Date"]."</td><td>".$row["Broker"]."</td><td>".$row["Party_Name"]."</td><td>".$row["Party_Mobile_Number"]."</td><td> ".$row["GST_Number"]."</td><td> ".$row["Location"]."</td><td> ".$row["Quantity"]."</td><td> ".$row["Rate"]."</td><td> ".$row["Payment_Condition"]."</td><td> ".$row["Brand"]."</td></tr>";
    }
    echo "</tbody></table>";
    
} else {
    echo "0 results";
}
$conn->close();
    }
    else
    {
        header('location:index.php');
    }
    echo "<div class='row'><div class='col-6'> <a role='button' class='btn btn-primary rounded-pill p-3' href='logout.php'>Logout </a> </div>";
    echo "<div class='col-6'> <button class='btn btn-primary rounded-pill p-3' onclick='exportTableToCSV()'>Download CSV File</button> </div></div>";

echo '</div>';

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;
    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}

function exportTableToCSV() {
    var datenow = new Date();
    var datenow = datenow.toString();
    var filename = "deals_";
    filename = filename.concat(datenow,".csv");
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}</script>
</body>
</html>
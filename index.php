<html>
<head>
<title>
Salesforce PHP
</title>
</head>
<body>
<?php
define("USERNAME", "anaser@dimensions.ps");
define("PASSWORD", "sterio2003");
define("SECURITY_TOKEN", "nrFCSEqLuTbK5Nd428uSsoi1i");

require_once ('soapclient/SforceEnterpriseClient.php');

$mySforceConnection = new SforceEnterpriseClient();
$mySforceConnection->createConnection("soapclient/enterprise.wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);


$query = "SELECT Id, FirstName, LastName, Phone from Contact";
$response = $mySforceConnection->query($query);

echo "Results of query '$query'<br/><br/>\n";
foreach ($response->records as $record) {
    echo $record->Id . ": "  . " "
        . $record->LastName . " " ."<br/>\n";
}
?>
</body>
</html>

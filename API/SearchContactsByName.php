<?php

    // Search by contact name. 
	$inData = getRequestInfo();
    
    $userid = 0;
    $username = "";
    $firstname = "";
    $lastname = "";

	$searchResults = "";
	$searchCount = 0;

    $conn = new mysqli('localhost', 'root', '8C@UnIoOwUK2k7gZl%N9Mi', 'cookiebook');
      
	if ($conn->connect_error) 
	{
		returnWithError( $conn->connect_error );
	} 
	else
	{
        // Cross-reference searched name with firstnames and lastnames in contacts.
        $sql = "SELECT userid,firstname,lastname FROM contacts where firstname LIKE '%" . $inData["search"] . "%' OR lastname LIKE '%" . $inData["search"];
        $result = $conn->query($sql);
        
        // Number of contacts we must search.
        $searchCount = $result->num_rows;

        // Contacts left to search.
        if ($searchcount > 0)
        {
            $searchResults = array();

            while ($searchCount > 0)
            {
                $row = $result->fetch_assoc();
                $thisJsonObject = '{"username":"' . $row["username"] . '","firstname":' . $row["firstname"] . '","lastname":' . $row["lastname"] . '","userid":' . $row["userid"] . '"}';

                // Push json object onto array for matching contact
                array_push($searchResults, $thisJsonObject);
                //$searchResults .= $thisJsonObject;
                returnWithInfo($searchResults);
    
                if ($searchCount != 1)
                {
                    //$searchResults .= ",";
                    array_push($searchResults, ",");
                }

                $searchCount--; // decrement search
            }
            returnWithInfo($searchResults);
        }
        else
        {
            returnWithError("No Records Found.");
        }
        $conn->close();
    }

	function getRequestInfo()
	{
		return json_decode(file_get_contents('php://input'), true);
	}

	function sendResultInfoAsJson($obj)
	{
		header('Content-type: application/json');
		echo $obj;
	}
	
	function returnWithError($err)
	{
		$retValue = '{"id":0,"firstName":"","lastName":"","error":"' . $err . '"}';
		sendResultInfoAsJson($retValue);
	}
	
	function returnWithInfo($searchResult)
	{
		$retValue = '{"results":[' . $searchResults . '],"error":""}';
		sendResultInfoAsJson($retValue);
	}
	
?>
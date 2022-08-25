<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
</html>

<?php


function getConnection() {
try {
    /* connects to the SQL DB */
    $dbconn = new PDO("mysql:host=localhost;dbname=unn_w17016822","unn_w17016822", "yogscast7");
	$dbconn->setAttribute(PDO::ATTR_ERRMODE, 
	PDO::ERRMODE_EXCEPTION);

   return $dbconn;
} catch (Exception $e) {
/* displays an error if unable to connect */
throw new Exception("Connection error ". $e->getMessage(), 0, $e);
		}
	}


class DBFunctions {


    public static function connect()
    {
        try {
            /* connects to the SQL DB */
            $dbconn = new PDO("mysql:host=localhost;dbname=unn_w17016822","unn_w17016822", "yogscast7");
            $dbconn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

            return $dbconn;
        } catch (Exception $e) {
            /* displays an error if unable to connect */
            throw new Exception("Connection error ". $e->getMessage(), 0, $e);
        }
    }

}
?>



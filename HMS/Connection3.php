<?php 
       // require_once "connection2.php"
       // global $connection;
       $Patient_ID = $_POST['Patient_ID'];


   /* $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'assignment';*/ 

	$connection = mysqli_connect('localhost', 'root', '', 'assignment');
    
	/// Checking the connection
	if ($connection -> connect_error) {
		die('Database connection failed : ' .$connection->connect_error);
	}
    else
    {
    
      // if(isset($_POST['Delete']))
      // {
        $query = "DELETE FROM patient WHERE Patient_ID =' $Patient_ID' ";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            echo 'Record Deleted Successfully';
        }
        else
        {
            echo 'Error: unable to delete record';
        }
    //  }

        
       // $s=mysqli_query($connection, $dq);

       /* if($s)
        {
            echo "Record Deleted Successfully";
        }
        else
        {
            echo "Error: Unable to delete Record";
        }*/


    }



        
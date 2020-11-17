    <?php
include 'config.php';

class Calculator
{

	
	// public function totalSurvey()
	// {
	// 	$object = new Db();
 //        $object=$object->getConnection();
	// 	$sql = "SELECT* from survey ";
	// 	$stmt = $object->prepare($sql);
	// 	$stmt->execute();  
	// 	$total_rows = $stmt->rowCount(); 
		
	// 	return $total_rows;
	// }
	// public function avaregeAge()
	// {
	// 	$object = new Db();
 //        $object=$object->getConnection();
	// 	$sql = "SELECT AVG(age) from survey ";
	// 	$stmt = $object->prepare($sql);
	// 	$stmt->execute();  
	// 	$total_rows=$stmt->fetchColumn();
		
	// 	return $total_rows;
	// }
	// public function maxAge()
	// {
	// 	$object = new Db();
 //        $object=$object->getConnection();
	// 	$sql = "SELECT MAX(age) from survey ";
	// 	$stmt = $object->prepare($sql);
	// 	$stmt->execute();  
	// 	$total_rows=$stmt->fetchColumn();
		
	// 	return $total_rows;
	// }
	// public function minAge()
	// {
	// 	$object = new Db();
 //        $object=$object->getConnection();
	// 	$sql = "SELECT MIN(age) from survey ";
	// 	$stmt = $object->prepare($sql);
	// 	$stmt->execute();  
	// 	$total_rows=$stmt->fetchColumn();
		
	// 	return $total_rows;
	// }

	public function average_for_food($value)
	{
		$object = new Db();
        $object=$object->getConnection();
		$sql = "SELECT food from person ";
		$stmt = $object->prepare($sql);
		$stmt->execute();  
		$result = $stmt->fetchAll();
	

		$var ="";
	    foreach($result as $row) {
		    $var=$var.$row['food'].",";
		}
		
        $tot =substr_count($var,",");

        $occur=substr_count($var,$value);
		
		return ($occur/$tot)*100;
		
	}

 


}


?>
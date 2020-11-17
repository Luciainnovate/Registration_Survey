
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body border="1 ">
        <?php
        $con = mysqli_connect("localhost", "root", "", "survey");
        //getting the total number of surveys
        $s = "select* from person ";
        $result = mysqli_query($con, $s);
        $num = mysqli_num_rows($result);

        //Getting the oldest person in the database
        $maxquery = "SELECT MAX(age) AS age FROM person";
        $query_result = mysqli_query($con, $maxquery);

        while ($row = mysqli_fetch_assoc($query_result)) {
            $maximum = $row['age'];
        }
        //Getting the youngest person in the database
        $minquery = "SELECT MIN(age) AS age FROM person";
        $query_results = mysqli_query($con, $minquery);

        while ($row = mysqli_fetch_assoc($query_results)) {
            $minimum = $row['age'];
        }
        //Calculating the average
        $resultavg = "SELECT AVG(age) AS average FROM person";
        $query_resultavg = mysqli_query($con, $resultavg);
        while ($row = mysqli_fetch_assoc($query_resultavg)) {
            $average = $row['average'];
            $average=round($average,2);
        }
        //Percentage of people who like pizza
      $var1="";
        $pizzaquery="Select * from person";
        if($resultpizza=  mysqli_query($con, $pizzaquery)){
            while($row=  mysqli_fetch_assoc($resultpizza)){
                $food=explode(",",$row['food']);
                foreach($food as $foods){
                   //echo ;
                   
                   $var1=$var1.",".$foods;
                   
                }
            }
        }
       echo $var1."<br>";
       $array_count=array("pizza","pasta","pap and wors");
        foreach($array_count as $word){
            echo substr_count($word,$var1)."<br>";
        }
        
        //Percentage of people who like pasta
        //Percentage of people who like pap and wors
        //People who like to eat out
        $eat='SELECT * FROM `person` WHERE eat="Strongly Agree(1)" OR eat="Agree(2)"';
        $resultEat = mysqli_query($con, $eat);
        $numEat = mysqli_num_rows($resultEat);
        $eatave=round($numEat/$num,2);
         $resultavge = 'SELECT AVG(age) AS average FROM person WHERE eat="Strongly Agree(1)" OR eat="Agree(2)"';
        $query_resultavge = mysqli_query($con, $resultavge);
        while ($row = mysqli_fetch_assoc($query_resultavge)) {
            $averagee = $row['average'];
            $averagee=round($averagee,2);
        }
        //People who like to watch movies
        $movies='SELECT * FROM `person` WHERE movies="Strongly Agree(1)" OR movies="Agree(2)"';
        $resultMovies = mysqli_query($con, $movies);
        $numMovies = mysqli_num_rows($resultMovies);
        //People who like to watch TV
        $TV='SELECT * FROM `person` WHERE TV="Strongly Agree(1)" OR TV="Agree(2)"';
        $resultTV = mysqli_query($con, $TV);
        $numTV = mysqli_num_rows($resultTV);
        //People who like to listen to radio
        $radio='SELECT * FROM `person` WHERE radio="Strongly Agree(1)" OR radio="Agree(2)"';
        $resultradio = mysqli_query($con, $radio);
        $numradio = mysqli_num_rows($resultradio);
        ?>
        <div class="back">
            <div class="page-title">SURVEY</div>
        </div>
       
       <div class="header">
		<h2>View Results in survey taken</h2>
	</div>
        <form border="1"> 
            <div>
                <p><?php echo "Total number of surveys:                      $num" ?></br>
                    <?php echo "average age: $average" ?></br>
                    <?php echo "Oldest person who participated in survey:$maximum" ?></br>
                    <?php echo "Youngest person who participated in survey: $minimum" ?></br>


                </p>


                <div>
                    <p>
                        <?php echo "Percentage of people who like Pizza:" ?></br>
                        <?php echo "Percentage of people who like Pasta:" ?></br>
                        <?php echo "Percentage of people who like Pap and Wors:" ?></br>

                    </p>

                </div>
                <div>
                    <p>
                        <?php echo "People like to eat out:$averagee " ?></br>
                        <?php echo "People like to watch movies:$numMovies" ?></br>
                        <?php echo "People like to watch TV:$numTV" ?></br>
                        <?php echo "People like to listen to the radio:$numradio" ?></br>
                        </br>
                    </p>

                </div></br>
                <p>      <a href="index.php">OK</a></p>



                </body>
                </html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body border="1 ">
        <?php
        include 'Funcions.php';
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
        $numMovies=
        
        
        $object = new Calculator();
        $pizza= $object->average_for_food("Pizza");
        $pasta= $object->average_for_food("Pasta");
        $papandwors= $object->average_for_food("Pap and wors");
        ?>
        <div class="back">
            <div class="page-title">SURVEY</div>
        </div>
       
       <div class="header">
		<h2>View Results in survey taken</h2>
	</div>
        <form border="1"> 
            <div>
                <h3><?php echo "Total number of surveys                          :$num" ?></br>
                    <?php echo "average age                                      : $average" ?></br>
                    <?php echo "Oldest person who participated in survey         :$maximum" ?></br>
                    <?php echo "Youngest person who participated in survey       : $minimum" ?></br>


                </h3>


                <div>
                    <h3>

                        <?php echo "Percentage of people who like Pizza          :".round($pizza,2)."%" ?></br>
                        <?php echo "Percentage of people who like Pasta          :".round($pasta,2)."%" ?></br>
                        <?php echo "Percentage of people who like Pap and Wors   :".round($papandwors,2)."%" ?></br>

                    </h3>

                </div>
                <div>
                    <h3>
                        <?php echo "People like to eat out                       :$averagee " ?></br>
                        <?php echo "People like to watch movies                  :$numMovies" ?></br>
                        <?php echo "People like to watch TV                      :$numTV" ?></br>
                        <?php echo "People like to listen to the radio           :$numradio" ?></br>
                      
                    </h3>

                </div>
                <center><h1> <a href="index.php">OK</a></h1></center>



                </body>
                </html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        
        
        // put your code here
        ?>
        <div class="back">
            <div class="page-title">SURVEY</div>
        </div>
       
       <div class="header">
		<h2>Take Our Survey</h2>
	</div>
        <form method="Post" action="insert.php">
            
            <label>Personal Details:</label></br>
            <div>
                <label>Surname     </label>
                <input type="text" name="surname" class="form-control" required>

            </div></br>
            <div>
                <label>First Names</label>
                <input type="text" name="name" class="form-control" required>

            </div></br>
            <div>
                <label>Contact Number</label>
                <input type="text" name="contact" class="form-control" required>

            </div></br>
            <div>
                <label>Date</label>
                <input type="text" name="date" class="form-control" required>

            </div></br>
            <div>
                <label>Age</label>
                <input type="text" name="age" class="form-control" required>

            </div></br>
            <div>
                <input type="checkbox" name="food[]" value="Pizza">Pizza
                <br>
                <input type="checkbox" name="food[]" value="Pasta">Pasta
                <br>
                <input type="checkbox" name="food[]" value="Pap and wors">Pap and wors 
                <br>
                <input type="checkbox" name="food[]" value="Chicken stir fry">Chicken stir fry 
                <br>
                <input type="checkbox" name="food[]" value="beef stir fry"> beef stir fry
                <br><br>
            </div>
            
            <table class="table">
    <thead class="head">
        <tr>
            <th></th>
            <th>Strongly Agree(1)</th>
            <th>Agree(2)</th>
            <th>Neutral(3)</th>
            <th>Disagree(4)</th>
            <th>Strongly Disagree(5)</th>
        </tr>
     </thead>
     <tbody>
        
        <tr border="1">
            <td>
                 <div class="radio">
                      <label>I like to eat out</label>
                 </div>
            </td>
            <td>
                  <input type="radio" name="eat" value="Strongly Agree(1)">
            </td>
            <td>
                  <input type="radio" name="eat" value="Agree(2)">
            </td>
            <td>
                  <input type="radio" name="eat" value="Neutral(3)">
            </td>
            <td>
                  <input type="radio" name="eat" value="Disagree(4)">
            </td>
            <td>
                <input type="radio" name="eat" value="Strongly Disagree(5)">
            </td>
         </tr>
         <tr >
             <td>
                 <div class="radio">
                      <label>I like to watch movies</label>
                 </div>
             </td>
             <td>
                  <input type="radio" name="movies" value="Strongly Agree(1)">
            </td>
            <td>
                  <input type="radio" name="movies" value="Agree(2)">
            </td>
            <td>
                  <input type="radio" name="movies" value="Neutral(3)">
            </td>
            <td>
                  <input type="radio" name="movies" value="Disagree(4)">
            </td>
            <td>
                  <input type="radio" name="movies" value="Strongly Disagree(5)">
            </td>
         </tr>
         <tr border="1">
             <td>
                 <div class="radio">
                      <label>I like to watch TV</label>
                 </div>
             </td>
             <td>
                  <input type="radio" name="tv" value="Strongly Agree(1)">
            </td>
            <td>
                  <input type="radio" name="tv" value="Agree(2)">
            </td>
            <td>
                  <input type="radio" name="tv" value="Neutral(3)">
            </td>
            <td>
                  <input type="radio" name="tv" value="Disagree(4)">
            </td>
            <td>
                  <input type="radio" name="tv" value="Strongly Disagree(5)">
            </td>
         </tr>
         <tr border="1">
             <td>
                 <div class="radio">
                      <label>I like to listen to the radio</label>
                 </div>
             </td>
             <td>
                  <input type="radio" name="radio" value="Strongly Agree(1)">
            </td>
            <td>
                  <input type="radio" name="radio" value="Agree(2)">
            </td>
            <td>
                  <input type="radio" name="radio" value="Neutral(3)">
            </td>
            <td>
                  <input type="radio" name="radio" value="Disagree(4)">
            </td>
            <td>
                  <input type="radio" name="radio" value="Strongly Disagree(5)" >
            </td>
         </tr>
        
     </tbody>
 </table>
            <center><button btn btn-primary><input type="submit" name="submit" value="SUBMIT"  ></button></center>
        </form>
        
    </body>
</html>

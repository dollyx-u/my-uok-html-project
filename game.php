<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game </title>
</head>
<body>
    <?php 
     <h1>Poem Generator Game</h1>
     <form action="game.php" method="post">
         <label for="color">Enter a color:</label>
         <input type="text" id="color" name="color"><br><br>
 
         <label for="celebrity">Enter a celebrity:</label>
         <input type="text" id="celebrity" name="celebrity"><br><br>
 
         <label for="pronoun">Enter a pronoun (e.g., he, drinks, microwave):</label>
         <input type="text" id="pronoun" name="pronoun"><br><br>
 
         <button type="submit">Generate Poem</button>
     </form>
 
</body>
</html>

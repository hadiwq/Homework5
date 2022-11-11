<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>




<h2>My First JavaScript</h2>

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>

<a href="randomnumber.php">Random Number</a>
    
    <h2>JavaScript Booleans</h2>
<p>Display the value of Boolean of two random numbers:</p>

<p id="umm"></p>

<script>
document.getElementById("umm").innerHTML = Boolean(Math.random() > Math.random());
</script>
    
    <h1>JavaScript Arithmetic</h1>
<h2>The + Operator</h2>

<p id="ber"></p>

<script>
let x = Math.random();
let y = Math.random();
let z = x + y;
document.getElementById("ber").innerHTML = z;
</script>

<h2>JavaScript Strings</h2>

<p id="ieie"></p>

<script>
let text = "John Doe";  // String written inside quotes
document.getElementById("ieie").innerHTML = text;
</script>
  
</body>
</html> 

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Speed</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">

<body>
<video autoplay muted loop id="myVideo">
  <source src="video.mp4" type="video/mp4">
</video>

<div class="converter-wrapper">
    
  <div class="page-title1"><h1>ENERGY CONVERTER ⚛️</h1></div>

 

  <div class="converter-side-a">
    <form name="form_A" onSubmit="return false">
    <input id="joules" type="number" placeholder="Joules" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
      
        <p>Joules</p>
      
    </form>
  </div> 
  
 <div class="converter-equals">
   <p>=</p>
 </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="kilocalories" type="number" placeholder="Kilocalories" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Kilocalories</p>
    </form>
  </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="watthour" type="number" placeholder="Watthour" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Watthour</p>
    </form>
  </div> 
  <div class="converter-equals">
   <p>=</p>
 </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="horsepower" type="number" placeholder="Horsepower" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Horsepower</p>
    </form>
  </div>
<br><br><br>
</div>
<div class="row">
<div class="but">
  <a class="btns" href="index.php">Return Home</a>
</div>
</div> 
<br><br><br><br>

  <div class="footer">Made with ❤️<br>© 2021 Copyright: Zahid Shaikh
  </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="index.js"></script>
</body>
</html>
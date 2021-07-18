<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Time</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">

<body>
<video autoplay muted loop id="myVideo">
  <source src="video.mp4" type="video/mp4">
</video>

<div class="converter-wrapper">
    
  <div class="page-title1"><h1>TIME CONVERTER 🕒</h1></div>

 

  <div class="converter-side-a">
    <form name="form_A" onSubmit="return false">
    <input id="second" type="number" placeholder="Second" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
      
        <p>Second</p>
      
    </form>
  </div> 
  
 <div class="converter-equals">
   <p>=</p>
 </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="minutes" type="number" placeholder="Minutes" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Minutes</p>
    </form>
  </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="hours" type="number" placeholder="Hours" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Hours</p>
    </form>
  </div> 
  <div class="converter-equals">
   <p>=</p>
 </div> 

  <div class="converter-side-b">
    <form name="form_B" onSubmit="return false">
    <input id="day" type="number" placeholder="Days" oninput="converter(this.id, this.value)" onchange="converter(this.id, this.value)">
    <p>Days</p>
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
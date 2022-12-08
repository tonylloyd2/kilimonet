<!DOCTYPE html>
<html>
    <head>
        <title>survey</title>
    </head>
    <body>


<h3>fill in the questionnaire</h3>
<br>
<form action="../actions/questionnaire.php" method="post">
<label for="first_name">firstname</label>
<input type="text" name="first_name" required placeholder=" enter first name">
<br>
<br>
<label for="surname">surname</label>
<input type="text" name="surname" required placeholder=" enter first surname">
<br>
<br>
<label for="mobile">mobile number</label>
<input type="text" name="mobile" required placeholder=" enter phone number">
<br>
<br>
<label for="market">market : </label>
<select name="market" id="market">
    <option value="emali">Emali</option>
    <option value="kimana">kimana</option>
    <option value="Sultan_hamud">Sulatan hamud</option>
    <option value="Ewuaso_Kedong">Ewuaso Kedong</option>
    <option value="illibilis">ILLIBILIS</option>
</select>
<br>
<label for="species">species  : </label><br>
Cow
<input type="radio" name="species" required value="cattle">
Sheep / Goat
<input type="radio" name="species" required value="sheep/Goat">
<br>
<br>
<label for="weight">weight</label>
<select  name="weight" required placeholder=" enter weight">
  <option value="1-10kg">upto 10kg </option>
  <option value="11-20kg">11 to 20kg </option>
  <option value="21-30kg">21 to 30kg </option>
  <option value="31-40kg">31 to 40kg </option>
  <option value="41-50">41 to 50 </option>
  <option value="51-60">51 to 60 </option>
  <option value="61-70">61 to 70 </option>
  <option value="71-80">71 to 80 </option>
  <option value="81-90">81 to 90 </option>
  <option value="1-50">upto 50 </option>
  <option value="51-100">51 to 100 </option>
  <option value="101-150">101 to 150 </option>
  <option value="151-200">151 to 200 </option>
  <option value="201-250">201 to 250 </option>
  <ption value="251-300">251 to 300 </option>
  <option value="301-350">301 to 350 </option>
  <option value="351-400">351 to 400 </option>
  <option value="401-450">401 to 450 </option>
  <option value="451-500">451 to 500 </option>
  <option value="501-550">501 to 550 </option>
  <option value="551-600">551 to 600 </option>
  <option value="601-650">601 to 650 </option>
  <option value="651-700">651 to 700 </option>
  <option value="701-750">701 to 750 </option>
  <option value="751-800">751 to 800 </option>
  <option value="801-850">801 to 850 </option>
  <option value="851-900">851 to 900 </option>
</SElect>
<br>
<label for="price">price</label>
<input type="text" name="price" required placeholder=" enter PRICE">
<br>
<label for="performance">performance : </label><br>
poor
<input type="radio" name="performance" required value=" poor">
<br>
good
<input type="radio" name="performance" required value="good">
<br>
average
<input type="radio" name="performance" required value=" average">

<br>
<button type="submit" style="background: green;" name="submit"> submit  .</button>

</form>
<br>
<br>

<article class="download">
    <!-- Auto width -->
    <button class="btn"><a href="OND 2022 Seasonal Forecast_Detailed" download="OND 2022 Seasonal Forecast_Detailed" class="fa fa-download"></a>OND 2022 seasonal forecast </button>
    <button class="btn"><a href="Monthly weather Forecast for November 2022" class="fa fa-download"></a>September 2022 Monthly Forecast</button>
    <button class="btn"><a href="SEVEN-DAY FORECAST valid 15th to 21st November 2022" class="fa fa-download"></a>SEVEN-DAY FORECAST</button>
    
</article>
<article class="last-container">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="https://web.facebook.com/profile.php?id=100072257630546" class="fa fa-facebook"></a>
        <p></p>
        <article class="contact">email us:deyasaitabau@gmail.com<br>
            <p></p>
        direct-helpline:+254729533373</article>
        <article class="about">
            <h1 style="color:blue;">about kilimonet</h1>
            <p style="width:100%;">kilimonet is a solo proprietorship that is committed to provide timely market prices,meteorological and climatological information and best livestock rearing practices  to all herders and livestock dealers</p>
                <h1 style="color:blue;">useful links:</h1><a href="https://meteo.go.ke/">Kenya Meteorological Department</a>
                <p></p>
                <a href="https://www.kalro.org/">Kenya Agricultural and Livestock Research Organization</a>
        </article>
</article> 
    </body>
    <style>
        .download{
right:0;
display: flex;
width: 100%;
height: 8%;
background-color: #34495e;
}
.forecast{
width: 100%;
height: 8%;
display: block;
color: white;
padding-top: 35px;
}
.forecast :hover{
background-color:blue
}
.last-container{
width: 100%;;
height: 30%;
background-color: #34495e;
}
.fa {
padding-right: 0px;
padding-bottom: 0px;
font-size: 2rem;
width: 50px;
text-align: center;
text-decoration: none;
}
.fa:hover {
opacity: 0.7;
}
/* Facebook */
.fa-facebook {
background: #3B5998;
color: white;
}
.contact{
font-size: 1.5rem;
}
.right{
padding-right: 0px;
justify-content: center;

}
.links{
display: block;
margin: 20px;
justify-content: center;
height: 20px;
}
    </style>
</html>
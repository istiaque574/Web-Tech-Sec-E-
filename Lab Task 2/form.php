<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>


<!-- name -->
<form action="#" method="post">

  <fieldset>
    <legend>Name:</legend>
    <div>

<input type="text" name="name" id="name" >

    </div>
    <hr>
    <input type="submit" name="submit5" value="submit"> <br>


  </fieldset>

</form>

<br>
<br>


<!-- email -->

<form action="#" method="post">

  <fieldset>
    <legend>Email:</legend>
    <div>

<input type="email" name="email" id="email" >



    </div>
    <hr>
    <input type="submit" name="submit4" value="submit"> <br>


  </fieldset>

</form>

<br>
<br>

<!-- gender -->
<form action="#" method="post">

  <fieldset>
    <legend>Gender:</legend>

<span style="color:red"></span>
    <div>

<input type="radio" name="gender" id="male" value="male">
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female">
<label for="female">Female</label>
<input type="radio" name="gender" id="others" value="others">
<label for="others">Others</label>


    </div>
    <hr>
    <input type="submit" name="submit3" value="submit"> <br>


  </fieldset>

</form>


<br>
<br>
<!-- degree -->
<form action="#" method="post">
        <fieldset>
            <legend>Degree</legend>

            <div>
                <input type="radio" name="mulradio[0]" id="ssc" value="1">
                <label for="degree">SSC</label>
                <input type="radio" name="mulradio[1]" id="hsc" value="2">
                <label for="degree">HSC</label>
                <input type="radio" name="mulradio[2]" id="bsc" value="3">
                <label for="degree">BSc</label>
                <input type="radio" name="mulradio[3]" id="msc" value="4">
                <label for="degree">MSc</label>
            </div>
            <div>
                <input type="submit" name="submit2" value="submit">
            </div>
        </fieldset>
    </form>


    <br>
<br>
    <!-- bloodgroup -->
    <form action="#" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="blood">
<option value="">Choose</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
</select>
<input type="submit" name="submit1" value="submit" />



        </fieldset>
    </form>



</body>
</html>

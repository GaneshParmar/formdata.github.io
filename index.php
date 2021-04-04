<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee_Data</title>
</head>
<body>
<div id="colordesign"></div>
<div id="colordesign1"></div>
<div id="colordesign2"></div>
    <div class="form-container">
        <strong>Employee_Data</strong>
        <form action="employeedataconnection.php" method="POST">
            <div class="data">
                
              <label for="fname">First Name: </label>
              <input type="text" placeholder="eg.John" name="firstname" id="fname" required><br><br>
              <label for="lname">Last Name: </label>
              <input type="text" placeholder="eg.Cena" name="lastname" id="lname" required><br><br>
              <label for="lname">Employee ID: </label>
              <input type="text" name="eid" id="EID" required><div id="req1"><!--EID=Employee ID-->
                            <!-- GenderSECTION -->
              <label for="lname">Gender: </label>
                            <!-- MALE -->
              <label for="Male" id="genselec">MALE</label> <input type="radio" name="gender" id="Male"  value="Male" required>
                            <!-- FEMALE -->
              <label for="Male" id="genselec">FEMALE</label> <input type="radio"  name="gender" id="Male" value="Female"  required ><br><br>
                            <!-- SALARY -->
              <label for="lname">Salary: </label>
              <input type="number"  name="salary" id="lname" required></div><br><br>
              <label for="Email">Email ID: </label>
              <input type="email" placeholder="xyz@gmail.com"  name="email" id="lname" required><br><br>
              <label for="slider" >Age :</label>
              <b id="age"></b>
              <input type="range" name="slider" id="slider" min="18" max="100" value="50"><br><br>
              <input type="submit"  value="SUBMIT" id="btn" name="submit">
              

            </div>
            
        </form>
        
    </div>
    <script>
        var AGE = document.getElementById("age");
        var slider = document.getElementById("slider")
        age.innerHTML=slider.value
        slider.oninput = function(){
            AGE.innerHTML = slider.value;
        }
    </script>
 <!-- STUDENT DATA HERE -->

        
        <div class="form-container1">
        <strong>Student_Data</strong>
        <form action="studentdataconnection.php" method="POST">
            <div class="data">
                
              <label for="fname">Student Name: </label>
              <input type="text" placeholder="eg.John" name="stuname" id="fname" required><br><br>
              <label for="rollno">RollNo : </label>
              <input type="text" name="rollno" id="RollNo" required><br><br><!--Roll no.--><br><br>
                            <!-- GenderSECTION -->
              <label>Gender: </label>
                            <!-- MALE -->
              <label for="Male" id="genselec">MALE</label> <input type="radio" name="genders" id="Male"  value="Male" required>
                            <!-- FEMALE -->
              <label for="Male" id="genselec">FEMALE</label> <input type="radio"  name="genders" id="Male" value="Female"  required ><br><br>
                            <!-- SALARY -->
              <label for="lname">Marks Obtained: </label>
              <input type="number"  name="marks" id="marks" max="300" required>/300<br><br>
              <label for="Email">Percentage: </label>
              <b><input id="percentage" name="percentage" step="0.01"/></b><br><br>
              <input type="submit" id="btn" name="submit"/>
             
            </div>
            
        </form>
        
       
    </div>
    
  
    <script>
        var marks = document.getElementById("marks");
        var percentage = document.getElementById("percentage")
        
        marks.oninput = function(){
            var x = (marks.value/300)*100;
            var x = parseFloat(x).toFixed(2);
            y = "%";
            percentage.value = x+y;


        
        }
      

    </script>
</body>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCfpAdR_JP1YpYEShwuFHZWgdzhWzdOAbk",
    authDomain: "expanded-theory-309709.firebaseapp.com",
    projectId: "expanded-theory-309709",
    storageBucket: "expanded-theory-309709.appspot.com",
    messagingSenderId: "1038273515673",
    appId: "1:1038273515673:web:2ea416c6bab16466666808",
    measurementId: "G-E38D69F9L3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
</html>

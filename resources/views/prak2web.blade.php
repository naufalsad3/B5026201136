<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- CSS -->
    <style>
      #body {
        padding-top: 2rem;
        padding-bottom: 600px;
      }

      h1 {
        margin-left: 70px;
      }
      form li {
        list-style: none;
        margin-bottom: 5px;
      }

      form ul li label {
        float: left;
        clear: left;
        width: 100px;
        text-align: right;
        margin-right: 10px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 14px;
      }

      form ul li input,
      select,
      span {
        float: left;
        margin-bottom: 10px;
      }

      form textarea {
        float: left;
        width: 350px;
        height: 150px;
      }

      [type="submit"] {
        clear: left;
        margin: 20px 0 0 230px;
        font-size: 18px;
      }

      p {
        margin-left: 70px;
        font-weight: bold;
      }
    </style>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function formValidation() {
        var uid = document.registration.userid;
        var passid = document.registration.pwd;
        var uname = document.registration.name;
        var uadd = document.registration.address;
        var ucountry = document.registration.country;
        var uzip = document.registration.zip;
        var uemail = document.registration.email;
        var umsex = document.registration.sex;
        var ufsex = document.registration.sex;
        if (userid_validation(uid, 5, 12)) {
          if (passid_validation(passid, 7, 12)) {
            if (allLetter(uname)) {
              if (alphanumeric(uadd)) {
                if (countryselect(ucountry)) {
                  if (allnumeric(uzip)) {
                    if (ValidateEmail(uemail)) {
                      if (validsex(umsex, ufsex)) {
                      }
                    }
                  }
                }
              }
            }
          }
        }
        return false;
      }
      function userid_validation(uid, mx, my) {
        var uid_len = uid.value.length;
        if (uid_len == 0 || uid_len > my || uid_len < mx) {
          alert("User Id should not be empty / length be between " + mx + " to " + my);
          uid.focus();
          return false;
        }
        return true;
      }
      function passid_validation(passid, mx, my) {
        var passid_len = passid.value.length;
        if (passid_len == 0 || passid_len >= my || passid_len < mx) {
          alert("Password should not be empty / length be between " + mx + " to " + my);
          passid.focus();
          return false;
        }
        return true;
      }
      function allLetter(uname) {
        var letters = /^[A-Za-z," "]+$/;
        if (uname.value.match(letters)) {
          return true;
        } else {
          alert("Username must have alphabet characters only");
          uname.focus();
          return false;
        }
      }
      function alphanumeric(uadd) {
        var letters = /^[0-9a-zA-Z," "]+$/;
        if (uadd.value.match(letters)) {
          return true;
        } else {
          alert("User address must have alphanumeric characters only");
          uadd.focus();
          return false;
        }
      }
      function countryselect(ucountry) {
        if (ucountry.value == "Default") {
          alert("Select your country from the list");
          ucountry.focus();
          return false;
        } else {
          return true;
        }
      }
      function allnumeric(uzip) {
        var numbers = /^[0-9]+$/;
        if (uzip.value.match(numbers)) {
          return true;
        } else {
          alert("ZIP code must have numeric characters only");
          uzip.focus();
          return false;
        }
      }
      function ValidateEmail(uemail) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (uemail.value.match(mailformat)) {
          return true;
        } else {
          alert("You have entered an invalid email address!");
          uemail.focus();
          return false;
        }
      }
      function validsex(umsex, ufsex) {
        x = 0;

        if (umsex.checked) {
          x++;
        }
        if (ufsex.checked) {
          x++;
        }
        if (x == 0) {
          alert("Select Male/Female");
          umsex.focus();
          return false;
        } else {
          alert("Form Succesfully Submitted");
          window.location.reload();
          return true;
        }
      }
    </script>

    <title>Registration Form | 5026201136</title>
  </head>

  <div class="container">
    <body id="body" onload="document.registration.userid.focus();">
      <h1>Registration Form</h1>
      <form name="registration" onSubmit="return formValidation();" action="https://open.spotify.com/playlist/20604uQBB3W5vMdQmOtcHE?si=faf1fa51c6e34c05" target="blank">
        <ul>
          <div>
            <li><label for="userid">User ID:</label></li>
            <li><input type="text" name="userid" size="12" /></li>
          </div>

          <div>
            <li><label for="pwd">Password:</label></li>
            <li><input type="password" name="pwd" size="12" /></li>
          </div>

          <div>
            <li><label for="name">Name:</label></li>
            <li><input type="text" name="name" size="50" /></li>
          </div>

          <div>
            <li><label for="address">Address:</label></li>
            <li><input type="text" name="address" size="50" /></li>
          </div>

          <div>
            <li><label for="country">Country:</label></li>
            <li>
              <select name="country">
                <option selected="" value="Default">(Please select a country)</option>
                <option value="AF">Australia</option>
                <option value="AL">Canada</option>
                <option value="DZ">Indonesia</option>
                <option value="AS">Russia</option>
                <option value="AD">USA</option>
              </select>
            </li>
          </div>

          <div>
            <li><label for="zip">ZIP Code:</label></li>
            <li><input type="text" name="zip" /></li>
          </div>

          <div>
            <li><label for="email">Email:</label></li>
            <li><input type="text" name="email" size="50" /></li>
          </div>

          <div>
            <li><label id="gender">Sex:</label></li>
            <li><input type="radio" name="sex" value="Male" style="margin-top: 6px" /><span style="margin-right: 10px">Male</span></li>
            <li><input type="radio" name="sex" value="Female" style="margin-top: 6px" /><span>Female</span></li>
          </div>

          <div>
            <li><label>Language:</label></li>
            <li><input type="checkbox" name="en" value="en" checked style="margin-top: 6px" /><span style="margin-right: 10px">English</span></li>
            <li><input type="checkbox" name="nonen" value="noen" style="margin-top: 6px" /><span>Non English</span></li>
          </div>

          <div>
            <li><label for="abt">About:</label></li>
            <li><textarea name="abt" id="abt"></textarea></li>
          </div>

          <div>
            <li><input type="submit" name="submit" value="Submit" /></li>
          </div>
        </ul>
      </form>
    </body>
  </div>
</html>

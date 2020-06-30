<!DOCTYPE html>
<html>
  <head>
    <meta>
    <title>SanberBook</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
    @csrf
      <label for="f_name">First Name:</label></br>
        <input type="text" name="f_name" id="f_name" value=""></br></br>
        <label for="l_name">First Name:</label></br>
        <input type="text" name="l_name" id="l_name" value=""></br></br>

      <label>Gender:</label></br>
        <input type="radio" name="gender" value="0">Male </br>
        <input type="radio" name="gender" value="1">Female </br>
        <input type="radio" name="gender" value="2">Other </br></br>

      <label for="nation">Nationality:</label></br>
        <select name="nationality" id="nation">
          <optgroup label="Select Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Brunei">Brunei Darussalam</option>
          </optgroup>
        </select></br></br>

      <label>Language Spoken</label></br>
        <input type="checkbox" id="lang1" name="lang1" value="Bahasa Indonesia">
        <label for="lang1">Bahasa Indonesia</label></br>
        <input type="checkbox" id="lang2" name="lang2" value="English">
        <label for="lang2">English</label></br>
        <input type="checkbox" id="lang3" name="lang3" value="English">
        <label for="lang3">Other</label></br></br>

      <label for="bio">Bio:</label></br>
        <textarea name="bio" id="bio" rows="8" cols="35"></textarea>
        </br>
        <input type="submit" value="Sign Up">
    </form>
  </body>
</html>

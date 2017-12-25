<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Name</span> <input type="text" name="name[]" class="form-control" placeholder="Your first/last name" aria-describedby="sizing-addon1"> </div> <br>

<div class="form-group"> <label for="advisortype[]">Advisor Type:</label> <select class="form-control" id="advisortype[]"> <option selected>Please select an option</option> <option value="Rotarian Advisor">Rotarian Advisor</option> <option value="Faculty Advisor">Faculty Advisor</option> </select> </div> <br>

<div class="form-group"> <label for="gender[]">Gender:</label> <select class="form-control" id="gender[]" onchange="showOtherField(this.options[this.selectedIndex].value)"> <option selected>Please select an option</option> <option value="Male">Male</option> <option value="Female">Female</option> <option value="Prefer not to say">Prefer not to say</option> <option value="Other">Other:</option> </select> </div> <div id="otherField"></div> <br>

<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Rotary Club/School Name</span> <input type="text" name="rotaryClubName[]" class="form-control" placeholder="I.e. Phoenix Squaw Peak Rotary Club, Centennial High School, etc." aria-describedby="sizing-addon1"> </div> <br>

<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">E-mail</span> <input type="text" name="email[]" class="form-control" placeholder="In proper user@example.com format" aria-describedby="sizing-addon1"> </div><br>

<div class="input-group input-group-lg"> <span class="input-group-addon" id="sizing-addon1">Phone Number</span> <input type="text" name="phone[]" class="form-control" placeholder="In proper 123-456-7890 format" aria-describedby="sizing-addon1"> </div> <br>

<div class="form-group"> <label for="diet[]">Dietary Restrictions:</label> <select class="form-control" id="diet[]" onchange="showOtherDietField(this.options[this.selectedIndex].value)"> <option selected>Please select an option</option> <option value="Vegetarian">Vegetarian</option> <option value="Vegan">Vegan</option> <option value="Kosher">Kosher</option> <option value="Halal">Halal</option> <option value="Gluten-Free">Gluten-Free</option> <option value="Daily-Free">Dairy-Free</option> <option value="None">None</option> <option value="Other">Other</option> </select> </div> <div id="otherDietField"></div> <br>

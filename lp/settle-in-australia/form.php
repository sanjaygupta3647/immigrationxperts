<em id="closePopup" class="icon-close"></em>
<form action="newmail/sendmail.php" method="POST">
  <span>Eligible to apply</span>
  <h2>Check Your Eligibility</h2>
  <div class="form-group">
    <input type="text"name='name' required class="form-control" placeholder=" Enter Full Name*">
  </div>
  <div class="form-group">
    <input type="text" name='phone'required class="form-control" placeholder="Enter 10 Digits Mobile Number*">
  </div>
  <div class="form-group">
    <input type="text" name='email'required class="form-control" placeholder="Enter Email Id*">
  </div>
  <div class="inputGroup">
    <div class="form-group">
      <input type="text"name='city' required class="form-control" placeholder="Enter Your City*">
    </div>
    <div class="form-group">
      <select class="form-control" name='age' required>
        <option value=""selected="" disabled="">Select Age</option>
        <?php
        for ( $i = 26; $i < 45; $i++ ) {
          ?>
        <option><?php echo $i; ?></option>
        <?php } ?>
        <option>45+</option>
      </select>
    </div>
  </div>
  <!--<div class="inputGroup">--> 
  <!--  <div class="form-group">--> 
  <!--    <input type="text"name='Enter Your City*' required class="form-control" placeholder="City">--> 
  <!--  </div>--> 
  <!--  <div class="form-group">--> 
  <!--<input type="text"name='age' required class="form-control" placeholder="Age">--> 
  <!--     <select class="form-control" name='age' required>--> 
  <!--    <option>Select Age</option>--> 
  <!--   
    <!--    <option>45+</option>--> 
  <!--  </select>--> 
  <!--  </div>--> 
  <!--</div>-->
  <div class="inputGroup">
    <div class="form-group"> 
      <!--<input type="text" name='education' required class="form-control" placeholder="Education">-->
      <select name="education" class="form-control" required="">
        <option selected="" value="" disabled="">Select Education </option>
        <option value=" Phd Doctorate "> Phd Doctorate </option>
        <option value=" Masters"> Masters</option>
        <option value="Post Graduation">Post Graduation</option>
        <option value="Two or More Certificates ">Two or More Certificates </option>
        <option value=" Graduation"> Graduation</option>
        <option value="Diploma 3 Years">Diploma 3 Years</option>
      </select>
    </div>
    <div class="form-group"> 
      <!--<input type="text" name='experience' required class="form-control" placeholder="Experience">-->
      <select class="form-control" name='experience' required>
        <option value="" disabled="" selected="" > Select Experience</option>
        <?php
        for ( $i = 2; $i < 5; $i++ ) {
          ?>
        <option><?php echo $i; ?> Years</option>
        <?php } ?>
        <option>5+</option>
      </select>
    </div>
  </div>
  <div class="form-group"> 
    <!--<select class="form-control" name='visaType' required>--> 
    <!--  <option>PR Visa Types</option>--> 
    <!--  <option>1</option>--> 
    <!--  <option>2</option>--> 
    <!--</select>-->
    
    <select name="visaType" class="form-control" required="">
      <option selected="" value="" disabled=""> Select Visa Type </option>
      <option value="PR Visa"> PR Visa </option>
      <option value="Business Investor"> Business Investor </option>
      <option value="Express Entry"> Express Entry </option>
    </select>
  </div>
  <p>
    <input type="checkbox" required>
    I agree to the <a href="javascript:void(0)">terms and conditions</a></p>
  <button class="btn btn-primary">Submit</button>
</form>

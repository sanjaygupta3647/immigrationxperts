<?php 
/*
Template Name: Free Visa Assessment
*/
session_start();
 
get_header(); ?>
<script type='text/javascript'>
function refreshCaptcha(){
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<div class="free-visa"> 
<div class="container">
<div class="row">
<div class="blog-bg-title">FREE VISA ASSESSMENT</div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
</div>
</div>
</div></div>
<!--  Form Code Start  here -->
  
<div class="free-visa-assessment">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="visa-banner">
<img src="<?php echo get_bloginfo('template_url');?>/images/visa-top-banner3.png" class="img-responsive">
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="visa-box">

<form name="form1" method="post" action="<?php echo get_bloginfo('url');?>/assessment-results/"  enctype="multipart/form-data" class="form-horizontal">
 
<input type="hidden" name="todo" value="post">
<input type="hidden" name="live-country" id="live-country" value="<?php echo $_POST["country"]; ?>" />
<input type="hidden" name="go-country" id="go-country" value="<?php echo $_POST["capital"]; ?>" /> 



<div class="form-group">
<label for="name" class="col-sm-5 control-label-visa">Given Name / First Name</label>
<div class="col-sm-7">
<input type="text" value="<?php echo $_POST['firstname'];?>" class="form-control-visa" required=""  maxlength="25" name="firstname" id="firstname" class="" tabindex="4" placeholder="First Name">
</div> 
</div>


  
  <div class="form-group">
  <label for="Last-Name" class="col-sm-5 control-label-visa">Family Name / Last Name</label>
  <div class="col-sm-7">
  <input type="text" value="<?php echo $_POST['surname'];?>" class="form-control-visa" required="" maxlength="25" name="surname" id="surname" class="" tabindex="5" placeholder="Last Name">
  </div>
  </div>  


  <div class="form-group">
  <label for="email" class="col-sm-5 control-label-visa">Email Address</label>
  <div class="col-sm-7">
  <input type="email" value="<?php echo $_POST['email'];?>" required="" maxlength="50" name="email" id="email" class="form-control-visa" tabindex="6" placeholder="Email">
  </div>
  </div> 





<div class="form-group">
    <label for="contact" class="col-sm-5 control-label-visa">Day Time Contact No.</label>
    <div class="col-sm-7">
    <input type="text" required="" size="20" maxlength="20" value="<?php echo $_POST['phone_number'];?>" id="phone_number" tabindex="8" name="phone_number" class="contact-visa" placeholder="Contact No"> 
</div>    
</div>  

 

  <div class="form-group">
  <label for="Convenient Time To Talk" class="col-sm-5 control-label-visa">Convenient Time To Talk</label>
  <div class="col-sm-7">
  <select class="form-control-visa" required="" id="member_title" name="password" tabindex="3">
  <option value="" selected="selected">Select Title</option>
  <option value="08:00-10:00 AM">08:00-10:00 AM</option>
  <option value="10:00 Am-12:00 Noon">10:00 Am-12:00 Noon</option>
  <option value="12:00-02:00 PM">12:00-02:00 PM</option>
  <option value="02:00-04:00 PM">02:00-04:00 PM</option>
  <option value="04:00-06:00 PM">04:00-06:00 PM</option>
  <option value="06:00-08:00 PM">06:00-08:00 PM</option>
  <option value="08:00-10:00 PM">08:00-10:00 PM</option>
  </select>
  </div>    
  </div> 




          
    <div class="form-group">
    <label for="Date of Birth" class="col-sm-5 control-label-visa">Date of Birth ?</label>
    <div class="col-sm-7">

     
           
            <select required="" name="dob_day" class="date-visa">
            <option  value="">DD</option><option value="01">&nbsp;01&nbsp;</option><option value="02">&nbsp;02&nbsp;</option><option value="03">&nbsp;03&nbsp;</option><option value="04">&nbsp;04&nbsp;</option><option value="05">&nbsp;05&nbsp;</option><option value="06">&nbsp;06&nbsp;</option><option value="07">&nbsp;07&nbsp;</option><option value="08">&nbsp;08&nbsp;</option><option value="09">&nbsp;09&nbsp;</option><option value="10">&nbsp;10&nbsp;</option><option value="11">&nbsp;11&nbsp;</option><option value="12">&nbsp;12&nbsp;</option><option value="13">&nbsp;13&nbsp;</option><option value="14">&nbsp;14&nbsp;</option><option value="15">&nbsp;15&nbsp;</option><option value="16">&nbsp;16&nbsp;</option><option value="17">&nbsp;17&nbsp;</option><option value="18">&nbsp;18&nbsp;</option><option value="19">&nbsp;19&nbsp;</option><option value="20">&nbsp;20&nbsp;</option><option value="21">&nbsp;21&nbsp;</option><option value="22">&nbsp;22&nbsp;</option><option value="23">&nbsp;23&nbsp;</option><option value="24">&nbsp;24&nbsp;</option><option value="25">&nbsp;25&nbsp;</option><option value="26">&nbsp;26&nbsp;</option><option value="27">&nbsp;27&nbsp;</option><option value="28">&nbsp;28&nbsp;</option><option value="29">&nbsp;29&nbsp;</option><option value="30">&nbsp;30&nbsp;</option><option value="31">&nbsp;31&nbsp;</option>
          </select>

          <select class="date-visa" required="" onchange="javascript:validateDOB(document.pt_form.dob_day, document.pt_form.dob_month, document.pt_form.dob_year);" class="form_sel" name="dob_month" style="width: 80px;">
            <option value="">MM</option><option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option> <option value="12">Dec</option>
          </select>

          <select class="date-visa" required="" onchange="javascript:validateDOB(document.pt_form.dob_day, document.pt_form.dob_month, document.pt_form.dob_year);" class="form_sel" name="dob_year" style="width: 80px;">
            <option value="">YYYY</option><option value="1996">&nbsp;2000&nbsp;</option><option value="1996">&nbsp;1999&nbsp;</option><option value="1996">&nbsp;1998&nbsp;</option><option value="1996">&nbsp;1997&nbsp;</option><option value="1996">&nbsp;1996&nbsp;</option><option value="1995">&nbsp;1995&nbsp;</option><option value="1994">&nbsp;1994&nbsp;</option><option value="1993">&nbsp;1993&nbsp;</option><option value="1992">&nbsp;1992&nbsp;</option><option value="1991">&nbsp;1991&nbsp;</option><option value="1990">&nbsp;1990&nbsp;</option><option value="1989">&nbsp;1989&nbsp;</option><option value="1988">&nbsp;1988&nbsp;</option><option value="1987">&nbsp;1987&nbsp;</option><option value="1986">&nbsp;1986&nbsp;</option><option value="1985">&nbsp;1985&nbsp;</option><option value="1984">&nbsp;1984&nbsp;</option><option value="1983">&nbsp;1983&nbsp;</option><option value="1982">&nbsp;1982&nbsp;</option><option value="1981">&nbsp;1981&nbsp;</option><option value="1980">&nbsp;1980&nbsp;</option><option value="1979">&nbsp;1979&nbsp;</option><option value="1978">&nbsp;1978&nbsp;</option><option value="1977">&nbsp;1977&nbsp;</option><option value="1976">&nbsp;1976&nbsp;</option><option value="1975">&nbsp;1975&nbsp;</option><option value="1974">&nbsp;1974&nbsp;</option><option value="1973">&nbsp;1973&nbsp;</option><option value="1972">&nbsp;1972&nbsp;</option><option value="1971">&nbsp;1971&nbsp;</option><option value="1970">&nbsp;1970&nbsp;</option><option value="1969">&nbsp;1969&nbsp;</option><option value="1968">&nbsp;1968&nbsp;</option><option value="1967">&nbsp;1967&nbsp;</option><option value="1966">&nbsp;1966&nbsp;</option><option value="1965">&nbsp;1965&nbsp;</option><option value="1964">&nbsp;1964&nbsp;</option><option value="1963">&nbsp;1963&nbsp;</option><option value="1962">&nbsp;1962&nbsp;</option><option value="1961">&nbsp;1961&nbsp;</option><option value="1960">&nbsp;1960&nbsp;</option><option value="1959">&nbsp;1959&nbsp;</option><option value="1958">&nbsp;1958&nbsp;</option><option value="1957">&nbsp;1957&nbsp;</option><option value="1956">&nbsp;1956&nbsp;</option><option value="1955">&nbsp;1955&nbsp;</option><option value="1954">&nbsp;1954&nbsp;</option><option value="1953">&nbsp;1953&nbsp;</option><option value="1952">&nbsp;1952&nbsp;</option><option value="1951">&nbsp;1951&nbsp;</option><option value="1950">&nbsp;1950&nbsp;</option><option value="1949">&nbsp;1949&nbsp;</option><option value="1948">&nbsp;1948&nbsp;</option><option value="1947">&nbsp;1947&nbsp;</option><option value="1946">&nbsp;1946&nbsp;</option><option value="1945">&nbsp;1945&nbsp;</option><option value="1944">&nbsp;1944&nbsp;</option><option value="1943">&nbsp;1943&nbsp;</option><option value="1942">&nbsp;1942&nbsp;</option><option value="1941">&nbsp;1941&nbsp;</option><option value="1940">&nbsp;1940&nbsp;</option><option value="1939">&nbsp;1939&nbsp;</option><option value="1938">&nbsp;1938&nbsp;</option><option value="1937">&nbsp;1937&nbsp;</option><option value="1936">&nbsp;1936&nbsp;</option><option value="1935">&nbsp;1935&nbsp;</option><option value="1934">&nbsp;1934&nbsp;</option><option value="1933">&nbsp;1933&nbsp;</option><option value="1932">&nbsp;1932&nbsp;</option><option value="1931">&nbsp;1931&nbsp;</option><option value="1930">&nbsp;1930&nbsp;</option><option value="1929">&nbsp;1929&nbsp;</option><option value="1928">&nbsp;1928&nbsp;</option><option value="1927">&nbsp;1927&nbsp;</option><option value="1926">&nbsp;1926&nbsp;</option><option value="1925">&nbsp;1925&nbsp;</option><option value="1924">&nbsp;1924&nbsp;</option><option value="1923">&nbsp;1923&nbsp;</option><option value="1922">&nbsp;1922&nbsp;</option><option value="1921">&nbsp;1921&nbsp;</option><option value="1920">&nbsp;1920&nbsp;</option><option value="1919">&nbsp;1919&nbsp;</option><option value="1918">&nbsp;1918&nbsp;</option><option value="1917">&nbsp;1917&nbsp;</option><option value="1916">&nbsp;1916&nbsp;</option><option value="1915">&nbsp;1915&nbsp;</option><option value="1914">&nbsp;1914&nbsp;</option><option value="1913">&nbsp;1913&nbsp;</option>
          </select>

</div>  
</div> 


      
<div class="form-group">
<label for="English Proficiency" class="col-sm-5 control-label-visa">English Proficiency ?</label>
<div class="col-sm-7">
<select required="" name="english" id="english" class="form-control-visa">
<option value="">Please Select Here:</option>
<option value="20,Superior (IELTS 8)">Superior (IELTS 8) </option>
<option value="10,Proficient (IELTS 7)">Proficient (IELTS 7) </option>
<option value="0,Competent (IELTS 6)">Competent (IELTS 6)</option>
<!--<option value="1">&nbsp;Poor</option>-->
</select>
</div>    
</div>




                        
<div class="form-group">
    <label for="Choose Your Industry" class="col-sm-5 control-label-visa">Choose Your Industry</label>
    <div class="col-sm-7">
   <select id="selectField" class="form-control-visa">
  <option value="option0">Select employment category</option>
  <option value="option1">Accounting &amp; Finance</option>
  <option value="option2">Administration</option>
  <option value="option3">Agriculture/Forestry/Fishing</option>
  <option value="option4">Air Land &amp; Sea Transport</option>
  <option value="option5">Architecture</option>
  <option value="option6">Art &amp; Design</option>
  <option value="option7">Arts &amp; Entertainment</option>
  <option value="option8">Building &amp; Construction</option>
  <option value="option9">Consulting &amp; Business Analysis</option>
  <option value="option10">Drivers</option>
  <option value="option11">Education &amp; Teaching</option>
  <option value="option12">Engineering &amp; Mining</option>
  <option value="option13">Environment</option>
  <option value="option14">Government</option>
  <option value="option15">Health &amp; Medical Services</option>
  <option value="option16">Hospitality &amp; Tourism</option>
  <option value="option17">Human Resources/Personnel</option>
  <option value="option18">Information Services</option>
  <option value="option19">Information Technology/Computing</option>
  <option value="option20">Legal &amp; Compliance</option>
  <option value="option21">Machine Operators</option>
  <option value="option21">Management/Planning/Policy</option>
  <option value="option22">Manufacturing/Production/Logistics</option>
  <option value="option23">Media</option>
  <option value="option24">Other</option>
  <option value="option24">Property &amp; Real Estate</option>
  <option value="option26">Sales/Marketing/Advertising</option>
  <option value="option27">Science &amp; Research</option>
  <option value="option28">Social &amp; Community Services</option>
  <option value="option29">Sports &amp; Recreation</option>
  <option value="option30">Surveying &amp; Valuing</option>
  <option value="option31">Trades (Skilled / Services)</option>
  <option value="option32">Translating/Interpreting</option>
  <option value="option33">Unknown</option>

</select>
 </div>    
</div>
       


<div class="form-group">
<label for="Choose Your Industry" class="col-sm-5 control-label-visa">
Select Your Nominated Occupation:</label>
<div class="col-sm-7"> 

                    
                <div id="option0" class="box">
                 <select><option>Please select Nominated Occupation </option></select></div>
                <div id="option1" class="box">
                  <select id="ddOccupation" name="ddOccupation">
                    <option value="-1">** Select occupation **</option>
                    <option value="221111">Accountant (General)</option>
                    <option value="224111">Actuary</option>
                    <option value="222111">Commodities Trader</option>
                    <option value="224311">Economist</option>
                    <option value="221213">External Auditor</option>
                    <option value="222112">Finance Broker</option>
                    <option value="132211">Finance Manager</option>
                    <option value="222199">Financial Brokers nec</option>
                    <option value="149914">Financial Institution Branch Manager</option>
                    <option value="222311">Financial Investment Adviser</option>
                    <option value="222312">Financial Investment Manager</option>
                    <option value="222211">Financial Market Dealer</option>
                    <option value="222212">Futures Trader</option>
                    <option value="222113">Insurance Broker</option>
                    <option value="221214">Internal Auditor</option>
                    <option value="221112">Management Accountant</option>
                    <option value="224112">Mathematician</option>
                    <option value="222213">Stockbroking Dealer</option>
                    <option value="221113">Taxation Accountant</option>
                    </select>
                </div>
                <div id="option2" class="box">
                  <select id="ddOccupation" name="ddOccupation">
                    <option value="-1">** Select occupation **</option>
                    <option value="141999">Accommodation and Hospitality Managers nec</option>
                    <option value="149211">Call or Contact Centre Manager</option>
                    <option value="135111">Chief Information Officer</option>
                    <option value="134111">Child Care Centre Manager</option>
                    <option value="411711">Community Worker</option>
                    <option value="149311">Conference and Event Organiser</option>
                    <option value="132111">Corporate Services Manager</option>
                    <option value="149212">Customer Service Manager</option>
                    <option value="411712">Disabilities Services Officer</option>
                    <option value="249111">Education Adviser</option>
                    <option value="134499">Education Managers nec</option>
                    <option value="251311">Environmental Health Officer</option>
                    <option value="139912">Environmental Manager</option>
                    <option value="221213">External Auditor</option>
                    <option value="149913">Facilities Manager</option>
                    <option value="132211">Finance Manager</option>
                    <option value="149112">Fitness Centre Manager</option>
                    <option value="224999">Information and Organisation Professionals nec</option>
                    <option value="221214">Internal Auditor</option>
                    <option value="139913">Laboratory Manager</option>
                    <option value="224611">Librarian</option>
                    <option value="224711">Management Consultant</option>
                    <option value="134212">Nursing Clinical Director</option>
                    <option value="251312">Occupational Health and Safety Adviser</option>
                    <option value="224712">Organisation and Methods Analyst</option>
                    <option value="134213">Primary Health Organisation Manager</option>
                    <option value="442111">Prison Officer</option>
                    <option value="511112">Program or Project Administrator</option>
                    <option value="134412">Regional Education Manager</option>
                    <option value="139915">Sports Administrator</option>
                    <option value="149113">Sports Centre Manager</option>
                    <option value="134214">Welfare Centre Manager</option>
                    <option value="223113">Workplace Relations Adviser</option>
                  </select>
                </div>
                 <div id="option3" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="234111">Agricultural Consultant</option>
                    <option value="233912">Agricultural Engineer</option>
                    <option value="234112">Agricultural Scientist</option>
                    <option value="234113">Forester (Aus) / Forest Scientist (NZ)</option>
                    <option value="232112">Landscape Architect</option>
                    <option value="121411">Mixed Crop and Livestock Farmer</option>
                    <option value="362411">Nurseryperson</option>
                    <option value="133511">Production Manager (Forestry)</option>
                    <option value="399917">Wool Classer</option>
                  </select>
                </div>
                  <div id="option4" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="233911">Aeronautical Engineer</option>
                    <option value="231111">Aeroplane Pilot</option>
                    <option value="231112">Air Traffic Controller</option>
                    <option value="231199">Air Transport Professionals nec</option>
                    <option value="323111">Aircraft Maintenance Engineer (Avionics)</option>
                    <option value="323112">Aircraft Maintenance Engineer (Mechanical)</option>
                    <option value="323113">Aircraft Maintenance Engineer (Structures)</option>
                    <option value="231113">Flying Instructor</option>
                    <option value="231114">Helicopter Pilot</option>
                    <option value="233916">Naval Architect (Aus) / Marine Designer (NZ)</option>
                    <option value="231212">Ship's Engineer</option>
                    <option value="231213">Ship's Master</option>
                    <option value="231214">Ship's Officer</option>
                    <option value="399112">Shipwright</option>
                  </select>
                </div>
                 <div id="option5" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="232111">Architect</option>
                    <option value="312111">Architectural Draftsperson</option>
                    <option value="312112">Building Associate</option>
                    <option value="232112">Landscape Architect</option>
                  </select>
                </div>
                <div id="option6" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="312111">Architectural Draftsperson</option>
                    <option value="249211">Art Teacher (Private Tuition)</option>
                    <option value="232311">Fashion Designer</option>
                    <option value="224212">Gallery or Museum Curator</option>
                    <option value="232411">Graphic Designer</option>
                    <option value="392211">Graphic Pre-press Trades Worker</option>
                    <option value="232412">Illustrator</option>
                    <option value="399912">Interior Decorator</option>
                    <option value="232511">Interior Designer</option>
                    <option value="232413">Multimedia Designer</option>
                    <option value="211411">Painter (Visual Arts)</option>
                    <option value="211412">Potter or Ceramic Artist</option>
                    <option value="211413">Sculptor</option>
                    <option value="211499">Visual Arts and Crafts Professionals nec</option>
                  </select>
                </div>
                <div id="option7" class="box">
                <select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="211111">Actor</option><option value="211199">Actors, Dancers and Other Entertainers nec</option><option value="212111">Artistic Director</option><option value="212211">Author</option><option value="342312">Communications Operator</option><option value="211211">Composer</option><option value="249212">Dance Teacher (Private Tuition)</option><option value="211112">Dancer or Choreographer</option><option value="211113">Entertainer or Variety Artist</option><option value="211212">Music Director</option><option value="211299">Music Professionals nec</option><option value="249214">Music Teacher (Private Tuition)</option><option value="211213">Musician (Instrumental)</option><option value="211214">Singer</option>
</select>
</div>
                <div id="option8" class="box">
                <select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="334112">Airconditioning and Mechanical Services Plumber</option><option value="312111">Architectural Draftsperson</option><option value="331111">Bricklayer</option><option value="312999">Building and Engineering Technicians nec</option><option value="312112">Building Associate</option><option value="331212">Carpenter</option><option value="331211">Carpenter and Joiner</option><option value="312211">Civil Engineering Draftsperson</option><option value="312212">Civil Engineering Technician</option><option value="133111">Construction Project Manager</option><option value="312311">Electrical Engineering Draftsperson</option><option value="312312">Electrical Engineering Technician</option><option value="341111">Electrician (General)</option><option value="341112">Electrician (Special Class)</option><option value="312411">Electronic Engineering Draftsperson</option><option value="312412">Electronic Engineering Technician</option><option value="333211">Fibrous Plasterer</option><option value="332111">Floor Finisher</option><option value="334114">Gasfitter</option><option value="333111">Glazier</option><option value="232312">Industrial Designer</option><option value="331213">Joiner</option><option value="232112">Landscape Architect</option><option value="312511">Mechanical Engineering Draftsperson</option><option value="312512">Mechanical Engineering Technician</option><option value="312912">Metallurgical or Materials Technician</option><option value="332211">Painting Trades Worker</option><option value="334111">Plumber (General)</option><option value="133112">Project Builder</option><option value="233213">Quantity Surveyor</option><option value="334115">Roof Plumber</option><option value="333311">Roof Tiler</option><option value="333212">Solid Plasterer</option><option value="232611">Urban and Regional Planner</option><option value="224512">Valuer</option><option value="333411">Wall and Floor Tiler</option></select></div>

                <div id="option9" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="234111">Agricultural Consultant</option><option value="261311">Analyst Programmer</option><option value="312999">Building and Engineering Technicians nec</option><option value="135111">Chief Information Officer</option><option value="312211">Civil Engineering Draftsperson</option><option value="263111">Computer Network and Systems Engineer</option><option value="511111">Contract Administrator</option><option value="262111">Database Administrator</option><option value="261312">Developer Programmer</option><option value="312311">Electrical Engineering Draftsperson</option><option value="261111">ICT Business Analyst</option><option value="313112">ICT Customer Support Officer</option><option value="262112">ICT Security Specialist</option><option value="611211">Insurance Agent</option><option value="599611">Insurance Investigator</option><option value="599612">Insurance Loss Adjuster</option><option value="599613">Insurance Risk Surveyor</option><option value="225112">Market Research Analyst</option><option value="312511">Mechanical Engineering Draftsperson</option><option value="263113">Network Analyst</option><option value="223112">Recruitment Consultant</option><option value="261313">Software Engineer</option><option value="262113">Systems Administrator</option><option value="261112">Systems Analyst</option><option value="225499">Technical Sales Representatives nec</option><option value="232611">Urban and Regional Planner</option></select></div>
                <div id="option10" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="451211">Driving Instructor</option></select></div>
                <div id="option11" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="134111">Child Care Centre Manager</option><option value="249213">Drama Teacher (Private Tuition)</option><option value="241111">Early Childhood (Pre-primary School) Teacher</option><option value="249111">Education Adviser</option><option value="134499">Education Managers nec</option><option value="272312">Educational Psychologist</option><option value="254211">Nurse Educator</option><option value="241213">Primary School Teacher</option><option value="249299">Private Tutors and Teachers nec</option><option value="272399">Psychologists nec</option><option value="134412">Regional Education Manager</option><option value="241411">Secondary School Teacher</option><option value="241599">Special Education Teachers nec</option><option value="241511">Special Needs Teacher</option><option value="252712">Speech Pathologist (Aus) / Speech Language Therapist (NZ)</option><option value="241512">Teacher of the Hearing Impaired</option><option value="241513">Teacher of the Sight Impaired</option><option value="242111">University Lecturer</option><option value="242211">Vocational Education Teacher (Aus) / Polytechnic Teacher (NZ)</option></select></div>
                <div id="option12" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="233911">Aeronautical Engineer</option><option value="233912">Agricultural Engineer</option><option value="323111">Aircraft Maintenance Engineer (Avionics)</option><option value="233913">Biomedical Engineer</option><option value="233111">Chemical Engineer</option><option value="233211">Civil Engineer</option><option value="312211">Civil Engineering Draftsperson</option><option value="312212">Civil Engineering Technician</option><option value="133111">Construction Project Manager</option><option value="233311">Electrical Engineer</option><option value="312311">Electrical Engineering Draftsperson</option><option value="312312">Electrical Engineering Technician</option><option value="342211">Electrical Linesworker (Aus) / Electrical Line Mechanic (NZ)</option><option value="312411">Electronic Engineering Draftsperson</option><option value="312412">Electronic Engineering Technician</option><option value="342313">Electronic Equipment Trades Worker</option><option value="342314">Electronic Instrument Trades Worker (General)</option><option value="342315">Electronic Instrument Trades Worker (Special Class)</option><option value="233411">Electronics Engineer</option><option value="133211">Engineering Manager</option><option value="233999">Engineering Professionals nec</option><option value="233914">Engineering Technologist</option><option value="233915">Environmental Engineer</option><option value="323211">Fitter (General)</option><option value="323212">Fitter and Turner</option><option value="323213">Fitter-Welder</option><option value="233212">Geotechnical Engineer</option><option value="233511">Industrial Engineer</option><option value="312911">Maintenance Planner</option><option value="233112">Materials Engineer</option><option value="233512">Mechanical Engineer</option><option value="312511">Mechanical Engineering Draftsperson</option><option value="312512">Mechanical Engineering Technician</option><option value="323299">Metal Fitters and Machinists nec</option><option value="312912">Metallurgical or Materials Technician</option><option value="312913">Mine Deputy</option><option value="233611">Mining Engineer (excluding Petroleum)</option><option value="233916">Naval Architect (Aus) / Marine Designer (NZ)</option><option value="233612">Petroleum Engineer</option><option value="133512">Production Manager (Manufacturing)</option><option value="133513">Production Manager (Mining)</option><option value="233513">Production or Plant Engineer</option><option value="133112">Project Builder</option><option value="233214">Structural Engineer</option><option value="399999">Technicians and Trades Workers nec</option><option value="263311">Telecommunications Engineer</option><option value="313212">Telecommunications Field Engineer</option><option value="263312">Telecommunications Network Engineer</option><option value="313213">Telecommunications Network Planner</option><option value="233215">Transport Engineer</option></select></div>
                <div id="option13" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="233913">Biomedical Engineer</option><option value="233211">Civil Engineer</option><option value="234311">Conservation Officer</option><option value="251311">Environmental Health Officer</option><option value="224999">Information and Organisation Professionals nec</option></select></div>
                <div id="option14" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="139999">Specialist Managers nec</option><option value="232611">Urban and Regional Planner</option></select></div>
                <div id="option15" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="411511">Aboriginal and Torres Strait Islander Health Worker</option><option value="252211">Acupuncturist</option><option value="411111">Ambulance Officer</option><option value="311211">Anaesthetic Technician</option><option value="253211">Anaesthetist</option><option value="252711">Audiologist</option><option value="311212">Cardiac Technician</option><option value="253312">Cardiologist</option><option value="253512">Cardiothoracic Surgeon</option><option value="272111">Careers Counsellor</option><option value="252111">Chiropractor</option><option value="253313">Clinical Haematologist</option><option value="272311">Clinical Psychologist</option><option value="411711">Community Worker</option><option value="252299">Complementary Health Therapists nec</option><option value="272199">Counsellors nec</option><option value="411211">Dental Hygienist</option><option value="411212">Dental Prosthetist</option><option value="252311">Dental Specialist</option><option value="411213">Dental Technician</option><option value="411214">Dental Therapist</option><option value="252312">Dentist</option><option value="253911">Dermatologist</option><option value="253917">Diagnostic and Interventional Radiologist</option><option value="251111">Dietitian</option><option value="411712">Disabilities Services Officer</option><option value="272112">Drug and Alcohol Counsellor</option><option value="272312">Educational Psychologist</option><option value="253912">Emergency Medicine Specialist</option><option value="253315">Endocrinologist</option><option value="411411">Enrolled Nurse</option><option value="272113">Family and Marriage Counsellor</option><option value="253316">Gastroenterologist</option><option value="253111">General Medical Practitioner</option><option value="251999">Health Diagnostic and Promotion Professionals nec</option><option value="251511">Hospital Pharmacist</option><option value="411112">Intensive Care Ambulance Paramedic <br />(Aus) / Ambulance Paramedic (NZ)</option><option value="253317">Intensive Care Specialist</option><option value="139913">Laboratory Manager</option><option value="234599">Life Scientists nec</option><option value="251211">Medical Diagnostic Radiographer</option><option value="234611">Medical Laboratory Scientist</option><option value="253314">Medical Oncologist</option><option value="253999">Medical Practitioners nec</option><option value="251212">Medical Radiation Therapist</option><option value="254111">Midwife</option><option value="411412">Mothercraft Nurse</option><option value="252213">Naturopath</option><option value="253318">Neurologist</option><option value="253513">Neurosurgeon</option><option value="251213">Nuclear Medicine Technologist</option><option value="254311">Nurse Manager</option><option value="254411">Nurse Practitioner</option><option value="254212">Nurse Researcher</option><option value="134212">Nursing Clinical Director</option><option value="253913">Obstetrician and Gynaecologist</option><option value="252411">Occupational Therapist</option><option value="311214">Operating Theatre Technician</option><option value="253914">Ophthalmologist</option><option value="399913">Optical Dispenser (Aus) / Dispensing Optician (NZ)</option><option value="251411">Optometrist</option><option value="272313">Organisational Psychologist</option><option value="253514">Orthopaedic Surgeon</option><option value="251412">Orthoptist</option><option value="251912">Orthotist or Prosthetist</option><option value="252112">Osteopath</option><option value="253515">Otorhinolaryngologist</option><option value="253516">Paediatric Surgeon</option><option value="253321">Paediatrician</option><option value="253915">Pathologist</option><option value="311215">Pharmacy Technician</option><option value="234914">Physicist</option><option value="252511">Physiotherapist</option><option value="253517">Plastic and Reconstructive Surgeon</option><option value="252611">Podiatrist</option><option value="132411">Policy and Planning Manager</option><option value="134213">Primary Health Organisation Manager</option><option value="253411">Psychiatrist</option><option value="272399">Psychologists nec</option><option value="272314">Psychotherapist</option><option value="253918">Radiation Oncologist</option><option value="254412">Registered Nurse (Aged Care)</option><option value="254413">Registered Nurse (Child and Family Health)</option><option value="254414">Registered Nurse (Community Health)</option><option value="254415">Registered Nurse (Critical Care and Emergency)</option><option value="254416">Registered Nurse (Developmental Disability)</option><option value="254417">Registered Nurse (Disability and Rehabilitation)</option><option value="254421">Registered Nurse (Medical Practice)</option><option value="254418">Registered Nurse (Medical)</option><option value="254422">Registered Nurse (Mental Health)</option><option value="254423">Registered Nurse (Perioperative)</option><option value="254424">Registered Nurse (Surgical)</option><option value="254499">Registered Nurses nec</option><option value="272114">Rehabilitation Counsellor</option><option value="253322">Renal Medicine Specialist</option><option value="132511">Research and Development Manager</option><option value="253112">Resident Medical Officer</option><option value="251513">Retail Pharmacist</option><option value="253323">Rheumatologist</option><option value="393114">Shoemaker</option><option value="272511">Social Worker</option><option value="251214">Sonographer</option><option value="253311">Specialist Physician (General Medicine)</option><option value="253399">Specialist Physicians nec</option><option value="252712">Speech Pathologist (Aus) / Speech Language Therapist (NZ)</option><option value="272115">Student Counsellor</option><option value="253511">Surgeon (General)</option><option value="253324">Thoracic Medicine Specialist</option><option value="252214">Traditional Chinese Medicine Practitioner</option><option value="253518">Urologist</option><option value="253521">Vascular Surgeon</option><option value="234711">Veterinarian</option><option value="361311">Veterinary Nurse</option><option value="134214">Welfare Centre Manager</option><option value="272613">Welfare Worker</option></select></div>
                <div id="option16" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="141111">Cafe or Restaurant Manager</option><option value="351311">Chef</option><option value="351411">Cook</option><option value="141311">Hotel or Motel Manager</option><option value="351112">Pastrycook</option></select></div>
                <div id="option17" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="223111">Human Resource Adviser</option><option value="223211">ICT Trainer</option><option value="224912">Liaison Officer</option><option value="251312">Occupational Health and Safety Adviser</option><option value="272313">Organisational Psychologist</option></select></div>
                <div id="option18" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="224213">Health Information Manager</option><option value="224999">Information and Organisation Professionals nec</option><option value="313211">Radiocommunications Technician</option><option value="224214">Records Manager</option><option value="313212">Telecommunications Field Engineer</option><option value="313213">Telecommunications Network Planner</option><option value="313214">Telecommunications Technical Officer or Technologist</option></select></div>
                <div id="option19" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="261311">Analyst Programmer</option><option value="135111">Chief Information Officer</option><option value="263111">Computer Network and Systems Engineer</option><option value="262111">Database Administrator</option><option value="261312">Developer Programmer</option><option value="313111">Hardware Technician</option><option value="261111">ICT Business Analyst</option><option value="225212">ICT Business Development Manager</option><option value="313112">ICT Customer Support Officer</option><option value="135199">ICT Managers nec</option><option value="135112">ICT Project Manager</option><option value="262112">ICT Security Specialist</option><option value="313199">ICT Support Technicians nec</option><option value="261211">Multimedia Specialist</option><option value="263112">Network Administrator</option><option value="263113">Network Analyst</option><option value="261399">Software and Applications Programmers nec</option><option value="261313">Software Engineer</option><option value="262113">Systems Administrator</option><option value="261112">Systems Analyst</option><option value="263311">Telecommunications Engineer</option><option value="342413">Telecommunications Linesworker (Aus) / Telecommunications Line Mechanic (NZ)</option><option value="263312">Telecommunications Network Engineer</option><option value="342414">Telecommunications Technician</option><option value="223311">Training and Development Professional</option><option value="313113">Web Administrator</option><option value="261212">Web Developer</option></select></div>
                <div id="option20" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="224211">Archivist</option><option value="599111">Conveyancer</option><option value="599212">Court Bailiff or Sheriff (Aus) / Court Collections Officer (NZ)</option><option value="599112">Legal Executive</option></select></div>
                <div id="option21" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="399211">Chemical Plant Operator</option><option value="321212">Diesel Motor Mechanic</option><option value="342313">Electronic Equipment Trades Worker</option><option value="323299">Metal Fitters and Machinists nec</option><option value="323214">Metal Machinist (First Class)</option><option value="321211">Motor Mechanic (General)</option><option value="392311">Printing Machinist</option><option value="392312">Small Offset Printer</option><option value="394213">Wood Machinist</option><option value="394214">Wood Turner</option></select></div>
                <div id="option22" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="132211">Finance Manager</option><option value="149411">Fleet Manager</option><option value="132411">Policy and Planning Manager</option><option value="139914">Quality Assurance Manager</option><option value="132511">Research and Development Manager</option><option value="149413">Transport Company Manager</option></select></div>
                <div id="option23" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="312999">Building and Engineering Technicians nec</option><option value="133211">Engineering Manager</option><option value="323211">Fitter (General)</option><option value="323213">Fitter-Welder</option><option value="312512">Mechanical Engineering Technician</option><option value="312912">Metallurgical or Materials Technician</option><option value="233611">Mining Engineer (excluding Petroleum)</option><option value="133512">Production Manager (Manufacturing)</option><option value="133513">Production Manager (Mining)</option><option value="233513">Production or Plant Engineer</option></select></div>
                <div id="option24" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="139911">Arts Administrator or Manager</option><option value="212212">Book or Script Editor</option><option value="212112">Media Producer (excluding Video)</option><option value="211311">Photographer</option><option value="212113">Radio Presenter</option><option value="212114">Television Presenter</option></select></div> 
                <div id="option25" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="312113">Building Inspector</option><option value="232213">Cartographer</option><option value="253917">Diagnostic and Interventional Radiologist</option><option value="334113">Drainer (Aus) / Drainlayer (NZ)</option><option value="251311">Environmental Health Officer</option><option value="451815">First Aid Trainer</option><option value="451311">Funeral Director</option><option value="451399">Funeral Workers nec</option><option value="251911">Health Promotion Officer</option><option value="311312">Meat Inspector</option><option value="251312">Occupational Health and Safety Adviser</option><option value="232214">Other Spatial Scientist</option><option value="311216">Pathology Collector (Aus) / Phlebotomist (NZ)</option><option value="253918">Radiation Oncologist</option><option value="261314">Software Tester</option></select></div>
                <div id="option26" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="611111">Auctioneer</option><option value="224511">Land Economist</option><option value="233213">Quantity Surveyor</option><option value="612115">Real Estate Representative</option><option value="224512">Valuer</option></select></div>
                <div id="option27" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="149111">Amusement Centre Manager</option><option value="142112">Antique Dealer</option><option value="142113">Betting Agency Manager</option><option value="222299">Financial Dealers nec</option><option value="362111">Florist</option><option value="142114">Hair or Beauty Salon Manager</option><option value="225211">ICT Account Manager</option><option value="313112">ICT Customer Support Officer</option><option value="225213">ICT Sales Representative</option><option value="142115">Post Office Manager</option><option value="639211">Retail Buyer</option><option value="225411">Sales Representative (Industrial Products)</option><option value="225412">Sales Representative (Medical and Pharmaceutical Products)</option><option value="611112">Stock and Station Agent</option><option value="142116">Travel Agency Manager</option></select></div>
                <div id="option28" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="224111">Actuary</option>
                    <option value="234112">Agricultural Scientist</option>
                    <option value="311111">Agricultural Technician</option>
                    <option value="234512">Anatomist or Physiologist</option>
                    <option value="234513">Biochemist</option>
                    <option value="234211">Chemist</option>
                    <option value="311411">Chemistry Technician</option>
                    <option value="312212">Civil Engineering Technician</option>
                    <option value="253313">Clinical Haematologist</option>
                    <option value="311412">Earth Science Technician</option>
                    <option value="224311">Economist</option>
                    <option value="234312">Environmental Consultant</option>
                    <option value="233915">Environmental Engineer</option>
                    <option value="234313">Environmental Research Scientist</option>
                    <option value="234399">Environmental Scientists nec</option>
                    <option value="399311">Gallery or Museum Technician</option>
                    <option value="234411">Geologist</option>
                    <option value="234412">Geophysicist</option>
                    <option value="251512">Industrial Pharmacist</option>
                    <option value="139913">Laboratory Manager</option>
                    <option value="399312">Library Technician</option>
                    <option value="234599">Life Scientists nec</option>
                    <option value="234516">Marine Biologist</option>
                    <option value="224112">Mathematician</option>
                    <option value="251211">Medical Diagnostic Radiographer</option>
                    <option value="234611">Medical Laboratory Scientist</option>
                    <option value="311213">Medical Laboratory Technician</option>
                    <option value="251212">Medical Radiation Therapist</option>
                    <option value="234912">Metallurgist</option>
                    <option value="234913">Meteorologist</option>
                    <option value="234517">Microbiologist</option>
                    <option value="234999">Natural and Physical Science Professionals nec</option>
                    <option value="251213">Nuclear Medicine Technologist</option>
                    <option value="134212">Nursing Clinical Director</option>
                    <option value="253915">Pathologist</option>
                    <option value="234914">Physicist</option>
                    <option value="224412">Policy Analyst</option>
                    <option value="134213">Primary Health Organisation Manager</option>
                    <option value="132511">Research and Development Manager</option>
                    <option value="251214">Sonographer</option>
                    <option value="224113">Statistician</option>
                    <option value="312116">Surveying or Spatial Science Technician</option>
                    <option value="234518">Zoologist</option>
                  </select>
                </div>
       <div id="option29" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="272311">Clinical Psychologist</option>
                    <option value="411711">Community Worker</option>
                    <option value="411712">Disabilities Services Officer</option>
                    <option value="411713">Family Support Worker</option>
                    <option value="272399">Psychologists nec</option>
                    <option value="411715">Residential Care Officer</option>
                    <option value="272511">Social Worker</option>
                    <option value="272613">Welfare Worker</option>
                    <option value="411716">Youth Worker</option>
                  </select>
                </div>
                <div id="option30" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="234314">Park Ranger</option></select></div>
                <div id="option31" class="box"><select id="ddOccupation" name="ddOccupation">
  

<option value="-1">** Select occupation **</option><option value="232213">Cartographer</option><option value="312114">Construction Estimator</option><option value="133111">Construction Project Manager</option><option value="232214">Other Spatial Scientist</option><option value="133112">Project Builder</option><option value="233213">Quantity Surveyor</option><option value="312116">Surveying or Spatial Science Technician</option><option value="232212">Surveyor</option><option value="224512">Valuer</option></select></div>
                <div id="option32" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="334112">Airconditioning and Mechanical Services Plumber</option>
                    <option value="342111">Airconditioning and Refrigeration Mechanic</option>
                    <option value="323111">Aircraft Maintenance Engineer (Avionics)</option>
                    <option value="323112">Aircraft Maintenance Engineer (Mechanical)</option>
                    <option value="323113">Aircraft Maintenance Engineer (Structures)</option>
                    <option value="393211">Apparel Cutter</option>
                    <option value="321111">Automotive Electrician</option>
                    <option value="351111">Baker</option>
                    <option value="399111">Boat Builder and Repairer</option>
                    <option value="331111">Bricklayer</option>
                    <option value="342311">Business Machine Mechanic</option>
                    <option value="351211">Butcher or Smallgoods Maker</option>
                    <option value="394111">Cabinetmaker</option>
                    <option value="342411">Cabler (Data and Telecommunications)</option>
                    <option value="393111">Canvas Goods Maker</option>
                    <option value="331212">Carpenter</option>
                    <option value="331211">Carpenter and Joiner</option>
                    <option value="351311">Chef</option>
                    <option value="393212">Clothing Patternmaker</option>
                    <option value="393299">Clothing Trades Workers nec</option>
                    <option value="351411">Cook</option>
                    <option value="321212">Diesel Motor Mechanic</option>
                    <option value="334113">Drainer (Aus) / Drainlayer (NZ)</option>
                    <option value="393213">Dressmaker or Tailor</option>
                    <option value="233311">Electrical Engineer</option>
                    <option value="312312">Electrical Engineering Technician</option>
                    <option value="342211">Electrical Linesworker (Aus) / Electrical Line Mechanic (NZ)</option>
                    <option value="341111">Electrician (General)</option>
                    <option value="341112">Electrician (Special Class)</option>
                    <option value="312411">Electronic Engineering Draftsperson</option>
                    <option value="312412">Electronic Engineering Technician</option>
                    <option value="342313">Electronic Equipment Trades Worker</option>
                    <option value="342314">Electronic Instrument Trades Worker (General)</option>
                    <option value="342315">Electronic Instrument Trades Worker (Special Class)</option>
                    <option value="233411">Electronics Engineer</option>
                    <option value="323411">Engineering Patternmaker</option>
                    <option value="322113">Farrier</option>
                    <option value="333211">Fibrous Plasterer</option>
                    <option value="323211">Fitter (General)</option>
                    <option value="323212">Fitter and Turner</option>
                    <option value="323213">Fitter-Welder</option>
                    <option value="332111">Floor Finisher</option>
                    <option value="394211">Furniture Finisher</option>
                    <option value="334114">Gasfitter</option>
                    <option value="333111">Glazier</option>
                    <option value="392211">Graphic Pre-press Trades Worker</option>
                    <option value="391111">Hairdresser</option>
                    <option value="399411">Jeweller</option>
                    <option value="331213">Joiner</option>
                    <option value="393112">Leather Goods Maker</option>
                    <option value="341113">Lift Mechanic</option>
                    <option value="323313">Locksmith</option>
                    <option value="411611">Massage Therapist</option>
                    <option value="233512">Mechanical Engineer</option>
                    <option value="322311">Metal Fabricator</option>
                    <option value="323299">Metal Fitters and Machinists nec</option>
                    <option value="321211">Motor Mechanic (General)</option>
                    <option value="321213">Motorcycle Mechanic</option>
                    <option value="399914">Optical Mechanic</option>
                    <option value="332211">Painting Trades Worker</option>
                    <option value="324111">Panelbeater</option>
                    <option value="351112">Pastrycook</option>
                    <option value="394212">Picture Framer</option>
                    <option value="334111">Plumber (General)</option>
                    <option value="323314">Precision Instrument Maker and Repairer</option>
                    <option value="322312">Pressure Welder</option>
                    <option value="392111">Print Finisher</option>
                    <option value="313211">Radiocommunications Technician</option>
                    <option value="334115">Roof Plumber</option>
                    <option value="333311">Roof Tiler</option>
                    <option value="393113">Sail Maker</option>
                    <option value="392112">Screen Printer</option>
                    <option value="322211">Sheetmetal Trades Worker</option>
                    <option value="399112">Shipwright</option>
                    <option value="399611">Signwriter</option>
                    <option value="321214">Small Engine Mechanic</option>
                    <option value="333212">Solid Plasterer</option>
                    <option value="331112">Stonemason</option>
                    <option value="342212">Technical Cable Jointer</option>
                    <option value="263311">Telecommunications Engineer</option>
                    <option value="313212">Telecommunications Field Engineer</option>
                    <option value="342413">Telecommunications Linesworker (Aus) / Telecommunications Line Mechanic (NZ)</option>
                    <option value="263312">Telecommunications Network Engineer</option>
                    <option value="313213">Telecommunications Network Planner</option>
                    <option value="313214">Telecommunications Technical Officer or Technologist</option>
                    <option value="342414">Telecommunications Technician</option>
                    <option value="323412">Toolmaker</option>
                    <option value="393311">Upholsterer</option>
                    <option value="324211">Vehicle Body Builder</option>
                    <option value="324311">Vehicle Painter</option>
                    <option value="324212">Vehicle Trimmer</option>
                    <option value="333411">Wall and Floor Tiler</option>
                    <option value="323316">Watch and Clock Maker and Repairer</option>
                    <option value="322313">Welder (First Class) (Aus) / Welder (NZ)</option>
                    <option value="394299">Wood Machinists and Other Wood Trades Workers nec</option>
                  </select>
                </div>
       <div id="option33" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="342211">Electrical Linesworker (Aus) / Electrical Line Mechanic (NZ)</option>
                    <option value="342212">Technical Cable Jointer</option>
                    <option value="342412">Telecommunications Cable Jointer</option>
                    <option value="342413">Telecommunications Linesworker (Aus) / Telecommunications Line Mechanic (NZ)</option>
                  </select>
                </div>

    <div id="option34" class="box">
                  <select id="ddOccupation" name="ddOccupation">

                    <option value="-1">** Select occupation **</option>
                    <option value="342211">Electrical Linesworker (Aus) / Electrical Line Mechanic (NZ)</option>
                    <option value="342212">Technical Cable Jointer</option>
                    <option value="342412">Telecommunications Cable Jointer</option>
                    <option value="342413">Telecommunications Linesworker (Aus) / Telecommunications Line Mechanic (NZ)</option>
                  </select>
                </div>
               
                </div>    
            </div>
     
              
        

            
  
    <div id="div1w" class="tab">
      <div class="form-group">
    <label for="overseas_skilled_employment" class="col-sm-5 control-label-visa">How many years have you been employed outside of Australia in your selected (or closely related) occupation?</label>
    <div class="col-sm-7">
                       
        <select class="form-control-visa" required="" id="overseas_skilled_employment" name="overseas_skilled_employment">
            <option value="">Select Here</option>
            <option value="20,At least 8 years">At least eight (8) years overseas</option>
            <option value="15,At least 5 years">At least five (5) years overseas</option>
            <option value="10,At least 3 years">At least three (3) years overseas</option>
            <option value="5,Less than 3 years">Less than three (3) years overseas</option>
          </select>
  
    
    </div>
    </div>
  </div>
      
                
             
    <div class="form-group">
    <label for="qualification" class="col-sm-5 control-label-visa">Qualification ?</label>
    <div class="col-sm-7">
            <select required="" id="qualification" name="qualification">
            <option value="">Please Select Here:</option>
            <option value="Doctorate Degree,20">Doctorate Degree </option>
            <option value="Masters Degree,15">Masters Degree </option>
            <option value="Bachelors Degree ,15">Bachelors Degree </option>
            <option value="Australian Diploma or trade qualification,10">Australian Diploma or trade qualification</option>
           </select>
    </div>
    </div>
    
 
           
         <div class="form-group">
         <label for="partner" class="col-sm-5 control-label-visa">Do you, or your partner (if applicable), have a close relative who is an Australian citizen or permanent resident who is willing to sponsor you?</label>
         <div class="col-sm-7">
         
          <label for="" class="inline label-visa"><input type="radio" selected="selected" value="Y" id="relative_sponsorY" name="relative_sponsor">&nbsp;Yes</label>
          <label for="" class="inline label-visa"><input type="radio" value="N" id="relative_sponsorN" name="relative_sponsor">&nbsp;No</label>
         </div>
         </div> 



     
          <div class="form-group">
          <label for="apply" class="col-sm-5 control-label-visa">Would you consider applying for state/territory government sponsorship in order to qualify for skilled migration?</label>
          <div class="col-sm-7">
          <label for="" class="inline label-visa"><input type="radio" selected="selected"  value="5,Yes" id="employer_sponsoredY" name="employer_sponsored">&nbsp;Yes</label>
          <label for="" class="inline label-visa"><input type="radio" value="0,No" id="employer_sponsoredN" name="employer_sponsored">&nbsp;No</label>
          </div>
          </div>
       




        
        
      <div class="form-group">
      <label for="main_applicant_resume" class="col-sm-5 control-label-visa">Main Applicant Resume</label>
      <div class="col-sm-7">
      <input type="file" name="main_applicant_resume" id="main_applicant_resume">
      </div>
      </div>


       
        
       <div class="form-group">
       <label for="spouse_resume" class="col-sm-5 control-label-visa">Spouse Resume</label>
       <div class="col-sm-7">
        <input type="file" name="spouse_resume" id="spouse_resume" value="english">
        </div>
        </div>
        
     
        <div class="form-group">
        <label for="agree" class="col-sm-5 control-label-visa">I have reviewed and agree to the <a target="_blank" href="http://www.immigrationxperts.com/terms-conditions/">Terms and Conditions</a> of Immigration Xperts®</label>
        <div class="col-sm-7">
        <input type="checkbox" name="click_1" id="click_1" value="english" checked="checked"> 
        </div>
        </div> 

      <div class="form-group">
      <label for="agree" class="col-sm-5 control-label-visa">Validation code</label>
      <div class="col-sm-7"> 
      <img src="<?php echo get_bloginfo('template_url');?>/phpcaptcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br/>
      <input id="captcha_code" name="captcha_code" type="text"> <br/>
      Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.<br/>
       <?php  if($_REQUEST['error'] == "cwc")
          {
           echo  $msg = "<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
          }
         
          ?>
      </div>
      </div>

        
          
            <div class="form-group">
            <div class="col-sm-7 col-sm-offset-5">
            <input type="submit" value="Submit" name="submit" id="send_visa_assessment_form" class="visa-btn btn-primary"> 
            </div> 
            </div>

          </form> 
            
 
<style type="text/css" media="screen">
  .hide{
    display:none;
  }
  
</style>


  
  
  
  <script type="text/javascript" charset="utf-8">
    (function(){
      var tabs =document.getElementById('tabs');
      var nav = tabs.getElementsByTagName('input');
      
      /* 
      * Hide all tabs
      */
      function hideTabs(){
        var tab = tabs.getElementsByTagName('div');
        for(var i=0;i<=nav.length;i++){
          if(tab[i].className == 'tab'){
            tab[i].className = tab[i].className + ' hide';
          }
        }
      }
      
      /*
      * Show the clicked tab
      */
      function showTab(tab){
        document.getElementById(tab).className = 'tab'
      }
      
      hideTabs(); /* hide tabs on load */
      
      /* 
      * Add click events
      */
      for(var i=0;i<nav.length;i++){
        nav[i].onclick = function(){
          hideTabs();
          showTab(this.className);
        }
      }
    })();
  </script>

               
                
<script type="text/JavaScript" language="JavaScript">
<!--
function wimpyPopPlayer(theFile,id,stuff) {
  window.open(theFile,id,stuff);
}
//-->
</script>

<script type="text/javascript">
function onFormSubmit(form_element)
{
   if ((form_element.click_1.checked == false ))
    {
      alert("You need to agree to the terms and conditions in order to submit the details and to know your Status.");
      return false;
    }
    return true;
}
</script>

<script type="text/JavaScript">

$(document).ready(function () { 
  $('.box').hide();
  $('#option0').show();
  $('#selectField').change(function () {
      $('.box').hide();
      $('#'+$(this).val()).show();
  });

 
 
 $("#send_visa_assessment_form").click(function(){
    if(($('#main_applicant_resume').val() == "")  && ($('#spouse_resume').val() == ""))
    {
      alert('Please upload resume'); 
      return false;
    }

    if($('#main_applicant_resume').val() != "")
    {
      var main_applicant_resume = $("#main_applicant_resume").val();
      var main_applicant_resume_ext = main_applicant_resume .replace(/^.*\./, '');
      if( (main_applicant_resume_ext == "doc") || (main_applicant_resume_ext == "docx") || (main_applicant_resume_ext == "pdf"))
      {
        
      }
      else
      {
                  alert('Only doc, docx and pdf format allowed.');
        return false;
      }
    }
    
    if($('#spouse_resume').val() != "")
    {
      var spouse_resume = $("#spouse_resume").val();
      var spouse_resume_ext = spouse_resume .replace(/^.*\./, '');
      if( (spouse_resume_ext == 'doc') || (spouse_resume_ext == 'docx') || (spouse_resume_ext == 'pdf'))
      {}  
       else
       {
         alert('Only doc, docx and pdf format allowed.');
        return false;
       }
    }
    
    if ($('#click_1').is(':checked')){}
    else
    {
      alert("You need to agree to the terms and conditions in order to submit the details and to know your Status.");
      return false;
    }
    if(!$('#captcha_code').val() != "")
    {
      alert('Please fill captcha code.')
      return false;
    }
   
    
  });
});
</script>

   </div> </div>  </div> </div> </div><!-- #content -->



      <!--  Form Code End Here -->


<style type="text/css">
  #main{
    display: none;
  }
</style>

<?php get_footer();
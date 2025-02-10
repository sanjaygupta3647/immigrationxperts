var total;
var spouse_point; // Initialize spouse_point


    function myFunctionScore() {
        var education = document.getElementById("education").value;
        var experience = document.getElementById("experience").value;
        var age = document.getElementById("age").value;
        var spouse_language = document.querySelector('input[name="spouse_language"]:checked').value;
        var past_study_canada = document.querySelector('input[name="past_study_canada"]:checked').value;
        var spouse_past_study_canada = document.querySelector('input[name="spouse_past_study_canada"]:checked').value;
        var past_work = document.querySelector('input[name="past_work"]:checked').value;
        var spouse_past_work = document.querySelector('input[name="spouse_past_work"]:checked').value;
        var arranged_emp = document.querySelector('input[name="arranged_emp"]:checked').value;
        var relative_canada = document.querySelector('input[name="relative_canada"]:checked').value;
        var listening = document.getElementById("listening").value;
        var speaking = document.getElementById("speaking").value;
        var speaking_point;
        var reading = document.getElementById("reading").value;
        var writing = document.getElementById("writing").value;
        var writing_point;
        var age2;
        var age3;
        var age4;
        var past_study_canada_point;
        var reading_point;
        var listening_point;
        var relative_canada_point;
        var arranged_emp_point;
        var spouse_past_work_point;
        var past_work_point;
        var spouse_past_study_canada_point;
        if (age >= 18 && age <= 35) {
            age2 = 12;
        } else if (age == 36) {
            age2 = 11;
        } else if (age == 37) {
            age2 = 10;
        } else if (age == 38) {
            age2 = 9;
        } else if (age == 39) {
            age2 = 8;
        } else if (age == 40) {
            age2 = 7;
        } else if (age == 41) {
            age2 = 6;
        } else if (age == 42) {
            age2 = 5;
        } else if (age == 43) {
            age2 = 4;
        } else if (age == 44) {
            age2 = 3;
        } else if (age == 45) {
            age2 = 2;
        } else if (age == 46) {
            age2 = 1;
        } else if (age >= 47) {
            age2 = 0;
        }
        if (education == "A") {
            age3 = 25;
            education = "University degree at the Doctoral (Phd) level or equal";
        } else if (education == "B") {
            age3 = 23;
            education = "Masters degree";
        } else if (education == "C") {
            age3 = 22;
            education =
                "Two or more Canadian post-secondary degrees or diplomas or equal (at least one must be for a program of at least three years)";
        } else if (education == "D") {
            age3 = 21;
            education = "Canadian post-secondary degree or diploma for a program of three years or longer, or equal";
        } else if (education == "E") {
            age3 = 19;
            education = "Canadian post-secondary degree or diploma for a two years, or equal";
        } else if (education == "F") {
            age3 = 15;
            education = "Canadian post-secondary degree or diploma for a one years, or equal";
        } else if (education == "G") {
            age3 = 5;
            education = "Canadian high school diploma, or equal";
        } else {
            age = 0;
        }
         if (experience == 1) {
			age4 = 9;
		} else if (experience == 2 || experience == 3) {
			age4 = 11;
		} else if (experience == 4 || experience == 5) {
			age4 = 13;
		} else if (experience >= 6 && experience <= 10) { // Use && for the correct range comparison
			age4 = 15;
		} else if (experience == 11) {
			age4 = 15;
			experience = "10+";
		}
        if (spouse_language == "Yes") {
            spouse_point = 5;
        } else if (spouse_language == "No") {
            spouse_point = 0;
        }
        if (past_study_canada == "Yes") {
            past_study_canada_point = 5;
        } else if (past_study_canada == "No") {
            past_study_canada_point = 0;
        }
        if (spouse_past_study_canada == "Yes") {
            spouse_past_study_canada_point = 5;
        } else if (spouse_past_study_canada == "No") {
            spouse_past_study_canada_point = 0;
        }
        if (past_work == "Yes") {
            past_work_point = 10;
        } else if (past_work == "No") {
            past_work_point = 0;
        }
        if (spouse_past_work == "Yes") {
            spouse_past_work_point = 5;
        } else if (spouse_past_work == "No") {
            spouse_past_work_point = 0;
        }
        if (arranged_emp == "Yes") {
            arranged_emp_point = 10;
        } else if (arranged_emp == "No") {
            arranged_emp_point = 0;
        }
        if (relative_canada == "Yes") {
            relative_canada_point = 5;
        } else if (relative_canada == "No") {
            relative_canada_point = 0;
        }
        if (listening == 8.5 || listening == 8.0) {
            listening_point = 6;
        } else if (listening == 7.5) {
            listening_point = 5;
        } else if (listening == 6.0) {
            listening_point = 4;
        } else if (listening == 5.5 || listening == 5.0 || listening == 4.5) {
            listening_point = 0;
        }
        if (speaking == 7.5 || speaking == 7.0) {
            speaking_point = 6;
        } else if (speaking == 6.5) {
            speaking_point = 5;
        } else if (speaking == 6.0) {
            speaking_point = 4;
        } else if (speaking == 5.5 || speaking == 5.0 || speaking == 4.5) {
            speaking_point = 0;
        }
        if (reading == 8.0 || reading == 7.0) {
            reading_point = 6;
        } else if (reading == 6.5) {
            reading_point = 5;
        } else if (reading == 6.0) {
            reading_point = 4;
        } else if (reading == 5.0 || reading == 4.0 || reading == 3.5) {
            reading_point = 0;
        }
        if (writing == 7.5 || writing == 7.0) {
            writing_point = 6;
        } else if (writing == 6.5) {
            writing_point = 5;
        } else if (writing == 6.0) {
            writing_point = 4;
        } else if (writing == 5.5 || writing == 5.0 || writing == 4.0) {
            writing_point = 0;
        }
       total = listening_point + speaking_point + reading_point + writing_point + age2 + age3 + age4 +
        past_study_canada_point + spouse_past_study_canada_point + past_work_point + spouse_past_work_point +
        arranged_emp_point + relative_canada_point + spouse_point;

		// Function to update the total score, display it, and check eligibility
		function updateTotalScoreAndCheckEligibility(total) {
    // Update the hidden input field value
    document.getElementById('totalScoreInput').value = total;

    // Update the displayed total for the user
    document.getElementById('67points').textContent = total;

    // Get the element to display the message
    var demoElement = document.getElementById('demo');

    

		}


// Example usage:
var initialTotalScore = parseInt(document.getElementById('totalScoreInput').value); // Get initial score from the hidden input field
updateTotalScoreAndCheckEligibility(initialTotalScore); // Update score and check eligibility initially

// Assuming there's a function or event handler that updates the score, call the function here and pass the new score to the updateTotalScoreAndCheckEligibility function
// For example:
//myFunctionScore(); // Call the function that updates the score
 //var newTotalScore = parseInt(document.getElementById('totalScoreInput').value); // Get the updated score from the hidden input field
 //updateTotalScoreAndCheckEligibility(newTotalScore); // Update the score and check eligibility



    }
  
    $(document).ready(function() {
        $("select.displayage").change(function() {
            var selectedAge = $(this).children("option:selected").val();
            if (selectedAge >= 18 && selectedAge <= 35) {
                document.getElementById("ageScore").innerHTML = "Score 12";
            } else if (selectedAge == 36) {
                document.getElementById("ageScore").innerHTML = "Score 11";
            } else if (selectedAge == 37) {
                document.getElementById("ageScore").innerHTML = "Score 10";
            } else if (selectedAge == 38) {
                document.getElementById("ageScore").innerHTML = "Score 9";
            } else if (selectedAge == 39) {
                document.getElementById("ageScore").innerHTML = "Score 8";
            } else if (selectedAge == 40) {
                document.getElementById("ageScore").innerHTML = "Score 7";
            } else if (selectedAge == 41) {
                document.getElementById("ageScore").innerHTML = "Score 6";
            } else if (selectedAge == 42) {
                document.getElementById("ageScore").innerHTML = "Score 5";
            } else if (selectedAge == 43) {
                document.getElementById("ageScore").innerHTML = "Score 4";
            } else if (selectedAge == 44) {
                document.getElementById("ageScore").innerHTML = "Score 3";
            } else if (selectedAge == 45) {
                document.getElementById("ageScore").innerHTML = "Score 2";
            } else if (selectedAge == 46) {
                document.getElementById("ageScore").innerHTML = "Score 1";
            } else if (selectedAge >= 47) {
                document.getElementById("ageScore").innerHTML = "Score 0";
            }
        });
        $("select.displayeducation").change(function() {
            var selectedEducation = $(this).children("option:selected").val();
            if (selectedEducation == "A") {
                document.getElementById("EducationScore").innerHTML = "Score 25";
            } else if (selectedEducation == "B") {
                document.getElementById("EducationScore").innerHTML = "Score 23";
            } else if (selectedEducation == "C") {
                document.getElementById("EducationScore").innerHTML = "Score 22";
            } else if (selectedEducation == "D") {
                document.getElementById("EducationScore").innerHTML = "Score 21";
            } else if (selectedEducation == "E") {
                document.getElementById("EducationScore").innerHTML = "Score 19";
            } else if (selectedEducation == "F") {
                document.getElementById("EducationScore").innerHTML = "Score 15";
            } else if (selectedEducation == "G") {
                document.getElementById("EducationScore").innerHTML = "Score 5";
            } else {
                age = 0;
            }
        });
        $("select.displayexperience").change(function() {
            var selectedExperience = $(this).children("option:selected").val();
            if (selectedExperience == 1) {
                document.getElementById("ExperienceScore").innerHTML = "Score 9";
            } else if (selectedExperience == 2 || selectedExperience == 3) {
                document.getElementById("ExperienceScore").innerHTML = "Score 11";
            } else if (selectedExperience == 4 || selectedExperience == 5) {
                document.getElementById("ExperienceScore").innerHTML = "Score 13";
            } else if (selectedExperience >= 6 || selectedExperience <= 10) {
                document.getElementById("ExperienceScore").innerHTML = "Score 15";
            } else if ((selectedExperience = 11)) {
                document.getElementById("ExperienceScore").innerHTML = "Score 15";
            }
        });
        $("input[type=radio]").on("change", function() {
            var selectedSpouse1 = $("[name=spouse_language]:checked").val();
            if (selectedSpouse1 == "Yes") {
                document.getElementById("SpouseScore").innerHTML = "Score 5";
            } else if (selectedSpouse1 == "No") {
                document.getElementById("SpouseScore").innerHTML = "Score 0";
            }
            var selectedSpouse2 = $("[name=past_study_canada]:checked").val();
            if (selectedSpouse2 == "Yes") {
                document.getElementById("PastStudyScore").innerHTML = "Score 5";
            } else if (selectedSpouse2 == "No") {
                document.getElementById("PastStudyScore").innerHTML = "Score 0";
            }
            var selectedSpouse3 = $("[name=spouse_past_study_canada]:checked").val();
            if (selectedSpouse3 == "Yes") {
                document.getElementById("SpousePastStudyScore").innerHTML = "Score 5";
            } else if (selectedSpouse3 == "No") {
                document.getElementById("SpousePastStudyScore").innerHTML = "Score 0";
            }
            var selectedSpouse4 = $("[name=past_work]:checked").val();
            if (selectedSpouse4 == "Yes") {
                document.getElementById("PastWorkScore").innerHTML = "Score 10";
            } else if (selectedSpouse4 == "No") {
                document.getElementById("PastWorkScore").innerHTML = "Score 0";
            }
            var selectedSpouse5 = $("[name=spouse_past_work]:checked").val();
            if (selectedSpouse5 == "Yes") {
                document.getElementById("SpousePastWorkScore").innerHTML = "Score 5";
            } else if (selectedSpouse5 == "No") {
                document.getElementById("SpousePastWorkScore").innerHTML = "Score 0";
            }
            var selectedSpouse6 = $("[name=arranged_emp]:checked").val();
            if (selectedSpouse6 == "Yes") {
                document.getElementById("ArrangedScore").innerHTML = "Score 10";
            } else if (selectedSpouse6 == "No") {
                document.getElementById("ArrangedScore").innerHTML = "Score 0";
            }
            var selectedSpouse7 = $("[name=relative_canada]:checked").val();
            if (selectedSpouse7 == "Yes") {
                document.getElementById("RelativeScore").innerHTML = "Score 5";
            } else if (selectedSpouse7 == "No") {
                document.getElementById("RelativeScore").innerHTML = "Score 0";
            }
        });
        $("select.displaylistening").change(function() {
            var selectedListening = $(this).children("option:selected").val();
            if (selectedListening == 8.5 || selectedListening == 8.0) {
                document.getElementById("ListeningScore").innerHTML = "Score 6";
            } else if (selectedListening == 7.5) {
                document.getElementById("ListeningScore").innerHTML = "Score 5";
            } else if (selectedListening == 6.0) {
                document.getElementById("ListeningScore").innerHTML = "Score 4";
            } else if (selectedListening == 5.5 || selectedListening == 5.0 || selectedListening ==
                4.5) {
                document.getElementById("ListeningScore").innerHTML = "Score 0";
            }
        });
        $("select.displayspeaking").change(function() {
            var selectedSpeaking = $(this).children("option:selected").val();
            if (selectedSpeaking == 7.5 || selectedSpeaking == 7.0) {
                document.getElementById("SpeakingScore").innerHTML = "Score 6";
            } else if (selectedSpeaking == 6.5) {
                document.getElementById("SpeakingScore").innerHTML = "Score 5";
            } else if (selectedSpeaking == 6.0) {
                document.getElementById("SpeakingScore").innerHTML = "Score 4";
            } else if (selectedSpeaking == 5.5 || selectedSpeaking == 5.0 || selectedSpeaking == 4.5) {
                document.getElementById("SpeakingScore").innerHTML = "Score 0";
            }
        });
        $("select.displayreading").change(function() {
            var selectedReading = $(this).children("option:selected").val();
            if (selectedReading == 8.0 || selectedReading == 7.0) {
                document.getElementById("ReadingScore").innerHTML = "Score 6";
            } else if (selectedReading == 6.5) {
                document.getElementById("ReadingScore").innerHTML = "Score 5";
            } else if (selectedReading == 6.0) {
                document.getElementById("ReadingScore").innerHTML = "Score 4";
            } else if (selectedReading == 5.0 || selectedReading == 4.0 || selectedReading == 3.5) {
                document.getElementById("ReadingScore").innerHTML = "Score 0";
            }
        });
        $("select.displaywriting").change(function() {
            var selectedWriting = $(this).children("option:selected").val();
            if (selectedWriting == 7.5 || selectedWriting == 7.0) {
                document.getElementById("WritingScore").innerHTML = "Score 6";
            } else if (selectedWriting == 6.5) {
                document.getElementById("WritingScore").innerHTML = "Score 5";
            } else if (selectedWriting == 6.0) {
                document.getElementById("WritingScore").innerHTML = "Score 4";
            } else if (selectedWriting == 5.5 || selectedWriting == 5.0 || selectedWriting == 4.0) {
                document.getElementById("WritingScore").innerHTML = "Score 0";
            }
        });
		
		$("select.displayage, select.displayeducation, select.displayexperience, input[type=radio], select.displaylistening, select.displayspeaking, select.displayreading, select.displaywriting").change(function() {
			myFunctionScore(); // Call myFunctionScore whenever there's a change in any input field
		});

		// Calculate total points initially
		calculateTotalPoints();
    });

   
   
    var myData = localStorage['objectToPass'];
    localStorage.removeItem('objectToPass');
    var firstData = myData;
    if (firstData) {
        document.getElementById("calc").innerHTML = firstData;
    } else {
        document.getElementById("calc").innerHTML = "";
    }
	 function calculateTotalPoints() {
    // Example: Assume you have scores in different elements, replace these with your actual score elements.
    var ageScore = parseFloat(document.getElementById('ageScore').innerHTML.split(' ')[1]);
    var experienceScore = parseFloat(document.getElementById('ExperienceScore').innerHTML.split(' ')[1]);
    var educationScore = parseFloat(document.getElementById('EducationScore').innerHTML.split(' ')[1]);
    var listeningScore = parseFloat(document.getElementById('ListeningScore').innerHTML.split(' ')[1]);
    var speakingScore = parseFloat(document.getElementById('SpeakingScore').innerHTML.split(' ')[1]);
    var readingScore = parseFloat(document.getElementById('ReadingScore').innerHTML.split(' ')[1]);
    var writingScore = parseFloat(document.getElementById('WritingScore').innerHTML.split(' ')[1]);

    var totalPoints = ageScore + experienceScore + educationScore + listeningScore + speakingScore + readingScore + writingScore;

    // Update the label
    document.getElementById('67points').textContent = totalPoints.toFixed(2); // Assuming you want two decimal places
    document.getElementById('67points').value = totalPoints.toFixed(2); // Also update hidden input if needed
	}
	
	var myData = localStorage['objectToPass'];
	localStorage.removeItem('objectToPass');
	var firstData = myData;
	if (firstData) {
		document.getElementById("calc").innerHTML = firstData;
	} else {
		document.getElementById("calc").innerHTML = "";
	}

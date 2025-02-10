var gvjson = [];
$("#nominationid").hide();
$("#nomsponid").hide();
$("#specialistid").hide();
$("#regionalid").hide();
var valid=false;
function changegsmvisa() {
	searchlead();
    gvjson = [];
    var total = 0;
    var gq1value = $('input[name=vgs]:checked').val() == undefined ? "00" : $('input[name=vgs]:checked').val();
    $("#gvscount").text(gq1value);
    var geq1 = {
        helpnote:$("#hvgs").text(),id: 1, qname: $("#lvgs").text(), ansvalue: gq1value,
        ansname: $("input[name=vgs]:checked").next('label').text(), maxvalue: "00"
    };
    gvjson.push(geq1);

    $("#nominationid").hide();
    $("#nomsponid").hide();
	// Store selected visa type label text in hidden input field
    var selectedVisaType = $("input[name=vgs]:checked + label").text().trim();
    $("#selectedVisaType").val(selectedVisaType);
	
	var subClass190 = $("input[name=gn]:checked + label").text().trim();
    $("#subClass190").val(subClass190);
	
	var subClass491 = $("input[name=gns]:checked + label").text().trim();
    $("#subClass491").val(subClass491);
	
	var ageGroup = $("input[name=ga]:checked").closest('.form-check-label').find('.w-100').text().trim();
	$("#ageGroup").val(ageGroup);
	
	var qualificationGroup = $("input[name=gq]:checked").closest('.form-check-label').find('.w-100').text().trim();
	$("#qualificationGroup").val(qualificationGroup);
	
	// When the radio button changes, update the hidden input value australiaEdu
	$('input[name=gaeq]').change(function() {
		var selectedText = $(this).next('label').text().trim();
		$('#australiaEdu').val(selectedText);
	});
	
	// When the radio button changes, update the hidden input value australiaStay
	$('input[name=grs]').change(function() {
		var selectedText = $(this).next('label').text().trim();
		$('#australiaStay').val(selectedText);
	});
	
	// When the radio button changes, update the hidden input value Specialist Education Qualification
	$('input[name=gseq]').change(function() {
		var selectedText = $(this).next('label').text().trim();
		$('#australiaSpeEdu').val(selectedText);
	});
	
	// When the radio button changes, update the hidden input value Work Experience - Outside Australia
	$('input[name=gweo]').change(function() {
		var selectedText = $(this).parent().next('span').text().trim();
		$('#australiaWorkOut').val(selectedText);
	});
	

	
	// Update the hidden input value on radio button change  Work Experience Within Australia
	$('input[name=gwew]').change(function() {
		var selectedText = $(this).parent().next('span').text().trim();
		$('#australiaWorkIn').val(selectedText);
	});
	
	// Update the hidden input value on radio button change English Language Ability
	$(document).ready(function() {
		$('input[name=gela]').change(function() {
			var selectedText = $(this).closest('.form-check-inline').find('span').text().trim();
			$('#australiaEngLang').val(selectedText);
		});
	});
	
	// Update the hidden input value on radio button change  Partner Skills
	$('input[name=gpsp]').change(function() {
		var selectedText = $(this).parent().next('span').text().trim();
		$('#partnerSkill').val(selectedText);
	});
	
	// Update the hidden input value on radio button change  Accredited Community Language	
	var accComm = $("input[name=gacl]:checked + label").text().trim();
    $("#accComm").val(accComm);
	
	// Update the hidden input value on radio button change  Accredited Community Language	
	var proYear = $("input[name=gpyp]:checked + label").text().trim();
    $("#proYear").val(proYear);


	
    var hideval = $("input[name=vgs]:checked").attr("id");
    var gq2value = 0;
    var gq3value = 0;

    if (hideval == "vgs2") {
		$('#gns1').prop('checked', false);
        $('#gns2').prop('checked', false);
        $('#gns3').prop('checked', false);
        $("#nominationid").show();
        $("#nomsponid").hide();
        $('input[name=gns]:checked').val("");
        $("#gnscount").text("00");
        gq2value = $('input[name=gn]:checked').val() == undefined ? "00" : $('input[name=gn]:checked').val();
        $("#gncount").text(gq2value);
        var geq2 = {
            helpnote:$("#hn").text(),id: 1, qname: $("#lgn").text(), ansvalue: gq2value,
            ansname: $("input[name=gn]:checked").next('label').text(), maxvalue: "05"
        };
        if(geq2!=undefined && geq2!=null){
        gvjson.push(geq2);
        }
    }
    else if (hideval == "vgs3") {
		$('#gn1').prop('checked', false);
        $('#gn2').prop('checked', false);
        $("#nominationid").hide();
        $("#nomsponid").show();
        $('input[name=gn]:checked').val("");
        $("#gncount").text("00");
        gq3value = $('input[name=gns]:checked').val() == undefined ? "00" : $('input[name=gns]:checked').val();
        $("#gnscount").text(gq3value);
        var geq3 = {
            helpnote:$("#hns").text(),id: 1, qname: $("#lgns").text(), ansvalue: gq3value,
            ansname: $("input[name=gns]:checked").next('label').text(), maxvalue: "15"
        };
       
        if(geq3!=undefined && geq3!=null){
            gvjson.push(geq3);
            }
    }

    var gq4value = $('input[name=ga]:checked').val() == undefined ? "00" : $('input[name=ga]:checked').val();
    $("#gacount").text(gq4value);
    var q4ansid = $("input[name=ga]:checked").attr("id");
    var q4ans = $("#" + q4ansid + "1").text();
    var geq4 = {
        helpnote:$("#ha").text(),id: 1, qname: $("#lga").text(), ansvalue: gq4value,
        ansname: q4ans, maxvalue: "30"
    };
    gvjson.push(geq4);


    var gq5value = $('input[name=gq]:checked').val() == undefined ? "00" : $('input[name=gq]:checked').val();
    $("#gqcount").text(gq5value);
    var q5ansid = $("input[name=gq]:checked").attr("id");
    var q5ans = $("#" + q5ansid + "1").text();
    var geq5 = {
        helpnote:$("#hq").text(),id: 1, qname: $("#lgq").text(), ansvalue: gq5value,
        ansname: q5ans, maxvalue: "20"
    };
    gvjson.push(geq5);



    var gq6value = $('input[name=gaeq]:checked').val() == undefined ? "00" : $('input[name=gaeq]:checked').val();
    $("#gaeqcount").text(gq6value);
    var geq6 = {
        helpnote:$("#haeq").text(),id: 1, qname: $("#lgaeq").text(), ansvalue: gq6value,
        ansname: $("input[name=gaeq]:checked").next('label').text(), maxvalue: "05"
    };
    gvjson.push(geq6);

    var hideval1 = $("input[name=gaeq]:checked").attr("id");
    $("#specialistid").hide();
    $("#regionalid").hide();
    var gq13value = 0;
    var gq14value = 0;
    if (hideval1 == "gaeq1") {
        $("#specialistid").show();
        $("#regionalid").show();
        gq13value = $('input[name=grs]:checked').val() == undefined ? "00" : $('input[name=grs]:checked').val();
        $("#grscount").text(gq13value);
        var geq13 = {
            helpnote:$("#hrss").text(), id: 1, qname: $("#lgrs").text(), ansvalue: gq13value,
            ansname: $("input[name=grs]:checked").next('label').text(), maxvalue: "05"
        };
        if(geq13!=undefined && geq13!=null){
        gvjson.push(geq13);
        }


        gq14value = $('input[name=gseq]:checked').val() == undefined ? "00" : $('input[name=gseq]:checked').val();
        $("#gseqcount").text(gq14value);
        var geq14 = {
            helpnote:$("#hseq").text(),id: 1, qname: $("#lgseq").text(), ansvalue: gq14value,
            ansname: $("input[name=gseq]:checked").next('label').text(), maxvalue: "10"
        };
        if(geq14!=undefined && geq14!=null){
            gvjson.push(geq14);
        }
    

    }


    
    var gq7value = $('input[name=gweo]:checked').val() == undefined ? "00" : $('input[name=gweo]:checked').val();
    $("#gweocount").text(gq7value);
    var q7ansid = $("input[name=gweo]:checked").attr("id");
    var q7ans = $("#" + q7ansid + "1").text();
    var geq7 = {
        helpnote:$("#hweo").text(),id: 1, qname: $("#lgweo").text(), ansvalue: gq7value,
        ansname: q7ans, maxvalue: "15"
    };
    gvjson.push(geq7);


    
    var gq8value = $('input[name=gwew]:checked').val() == undefined ? "00" : $('input[name=gwew]:checked').val();
    $("#gwewcount").text(gq8value);
    var q8ansid = $("input[name=gwew]:checked").attr("id");
    var q8ans = $("#" + q8ansid + "1").text();
    var geq8 = {
        helpnote:$("#hwew").text(),id: 1, qname: $("#lgwew").text(), ansvalue: gq8value,
        ansname: q8ans, maxvalue: "20"
    };
    gvjson.push(geq8);


    var gq9value = $('input[name=gela]:checked').val() == undefined ? "00" : $('input[name=gela]:checked').val();
    $("#gelacount").text(gq9value);
    var q9ansid = $("input[name=gela]:checked").attr("id");
    var q9ans = $("#" + q9ansid + "1").text();
    var geq9 = {
        helpnote:$("#hela").text(),id: 1, qname: $("#lgela").text(), ansvalue: gq9value,
        ansname: q9ans, maxvalue: "20"
    };
    gvjson.push(geq9);


    var gq10value = $('input[name=gpsp]:checked').val() == undefined ? "00" : $('input[name=gpsp]:checked').val();
    $("#gpspcount").text(gq10value);
    var q10ansid = $("input[name=gpsp]:checked").attr("id");
    var q10ans = $("#" + q10ansid + "1").text();
    var geq10 = {
        helpnote:$("#hpsp").text(),id: 1, qname: $("#lgpsp").text(), ansvalue: gq10value,
        ansname: q10ans, maxvalue: "10"
    };
    gvjson.push(geq10);


    var gq11value = $('input[name=gacl]:checked').val() == undefined ? "00" : $('input[name=gacl]:checked').val();
    $("#gaclcount").text(gq11value);
    var geq11 = {
        helpnote:$("#hacl").text(),id: 1, qname: $("#lgacl").text(), ansvalue: gq11value,
        ansname: $("input[name=gacl]:checked").next('label').text(), maxvalue: "05"
    };
    gvjson.push(geq11);



    var gq12value = $('input[name=gpyp]:checked').val() == undefined ? "00" : $('input[name=gpyp]:checked').val();
    $("#gpypcount").text(gq12value);
    var geq12 = {
        helpnote:$("#hpyp").text(), id: 1, qname: $("#lgpyp").text(), ansvalue: gq12value,
        ansname: $("input[name=gpyp]:checked").next('label').text(), maxvalue: "05"
    };
    gvjson.push(geq12);




 var workexp=   parseInt(gq7value) + parseInt(gq8value);
if(workexp>20){
    workexp=20;
}

    // Calculate the total
		var total = parseInt(gq1value) + parseInt(gq2value) + parseInt(gq3value) + parseInt(gq4value) +
			parseInt(gq5value) + parseInt(gq6value) + parseInt(workexp) + parseInt(gq9value) +
			parseInt(gq10value) + parseInt(gq11value) + parseInt(gq12value) +
			parseInt(gq13value) + parseInt(gq14value);

		// Update the displayed total for the user
		document.getElementById('finalTotalDisplay').textContent = total;

		// Update the hidden input field value for form submission
		document.getElementById('finaltotalInput').value = total;

}

function validgsmvisa(){
var valid=true;
if($('input[name=vgs]:checked').val()==undefined){
return    valid=false;
}
var hideval = $("input[name=vgs]:checked").attr("id");
if (hideval == "vgs2") {
  if($('input[name=gn]:checked').val() == undefined)
    {
        return  valid=false;
    }
}
else if (hideval == "vgs3") {
if($('input[name=gns]:checked').val() == undefined){
    return valid=false;
}
    }

    if( $('input[name=ga]:checked').val() == undefined){
        return valid=false;
    }

    
    if(  $('input[name=gq]:checked').val() == undefined){
        return  valid=false;
    }
   
    if( $('input[name=gaeq]:checked').val() == undefined){
        return  valid=false;
    }

    


    var hideval1 = $("input[name=gaeq]:checked").attr("id");
    if (hideval1 == "gaeq1") {
        if($('input[name=grs]:checked').val() == undefined ){
            return valid=false;
        }

       if($('input[name=gseq]:checked').val() == undefined){
 return  valid=false;
       }
    }
    
if( $('input[name=gweo]:checked').val() == undefined){
return valid=false;
}


    
if($('input[name=gwew]:checked').val() == undefined){
return valid=false;
}
if($('input[name=gela]:checked').val() == undefined){
return valid=false;
}

if($('input[name=gpsp]:checked').val() == undefined)
{
return valid=false;
}


if($('input[name=gacl]:checked').val() == undefined){
return valid=false;
}

if( $('input[name=gpyp]:checked').val() == undefined){
return valid=false;
}

return valid;
}

function abc(callfrom, logFrom, companyid, userid) {
    
    if (callfrom == 2 && logFrom == 5) { 
        var valid = validgsmvisa();
        if (valid == true) {
            pointgeneratepdf("GSM Point Calculator", callfrom, logFrom, companyid, "GSM-Point-test-summary.pdf", gvjson, userid, 27);
        } else {
            Bmessage('danger', 'right', 'top', "fill all question!", 10);
        }
    }
    
    else {
        pointgeneratepdf("GSM Point Calculator", callfrom, logFrom, companyid, "GSM-Point-test-summary.pdf", gvjson, userid, 27);
    }
}

function generatepdf(callfrom,dwnldid,url) {
    var valid = validgsmvisa();
	if (valid == true) {
        BusinessCalc_ShowDownloadPdfModel(callfrom,dwnldid,url);
    } else {
      Bmessage('danger', 'right', 'top', "fill all question!", 10);
    }
}



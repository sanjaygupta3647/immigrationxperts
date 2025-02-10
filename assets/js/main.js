
// DOwnload Point test in EMail
// function BusinessCalc_ShowDownloadPdfModel(callfrom,dwnldid) {
//     console.log("hello1");
	
//     var popup_id = "#downloadmodal"+dwnldid;
//     $("#download-pdf-modal-gsm").html("");
//     var URL = "/pointcalc_download_pdf_modal/" + callfrom;
//     $("#download-pdf-modal-gsm").load(URL);
//     console.log('URL1');
//     $("#div_download_gsm").css("display", "block");
//     $("#downloadmodalgsm").modal('toggle');
// }

var CallFrom = "";
function BusinessCalc_ShowDownloadPdfModel(callfrom, dwnldid, url) {
  CallFrom = callfrom;
  var popup_id = "#downloadmodal" + dwnldid;
  $("#download-pdf-modal-gsm").html("");
  var URL = "/pointcalc_download_pdf_modal/" + callfrom +"/"+url;
  $("#download-pdf-modal-gsm").load(URL);
  $("#div_download_gsm").css("display", "block");
  $("#downloadmodalgsm").modal('toggle');
}



function modalclose(){
	  $("#downloadmodalgsm").css("display", "none");
	  $("#downloadmodalgsm").removeClass("show");
	  $("body").find(".modal-backdrop").css("display", "none");
	  
}

function Bmessage(type, Align, From, msg, timer, Delay) {
    var animate_enter = 'animated fadeInDown';
    var animate_exit = 'animated fadeOutUp';

    if (From == 'bottom') {
      animate_enter = 'animated fadeInUp';
      animate_exit = 'animated fadeOutDown';
    } else {
      animate_enter = 'animated fadeInDown';
      animate_exit = 'animated fadeOutUp';
    }

    if (Delay == undefined)
      Delay = 3000;

    var MyNotify = function () {
      var ShowMessage = function () {
        $('[data-switch=true]').bootstrapSwitch();
        var content = {};
        content.message = msg;
        var notify = $.notify(content, {
          type: type,
          allow_dismiss: true,
          newest_on_top: true,
          mouse_over: true,
          showProgressbar: false,
          spacing: 10,
          timer: timer,
          placement: {
            from: From,
            align: Align
          },
          offset: {
            x: 30,
            y: 30
          },
          delay: Delay,
          z_index: 10000,
          animate: {
            enter: animate_enter,
            exit: animate_exit
          }
        });
      }
      return {
        init: function () {
          ShowMessage();
        }
      };

    }();
    MyNotify.init();
  }

// Initialize WOW library
wow = new WOW({
  boxClass: 'wow', // Default class name for triggering the animation
  animateClass: 'animated', // Default class applied on animation
  offset: 100, // Change this value as needed
  mobile: true, // Enable animations on mobile devices
  live: true // Apply the WOW.js library to dynamically added elements
});

wow.init(); // Start the WOW animations

/* tooltip */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
/* tooltip end*/


/* popover */
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})
/* popover end*/


/* Back To Top Button */
$(document).ready(function () {
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".backtop").addClass("backtopActive");
        } else {
            $(".backtop").removeClass("backtopActive");
        }
    });
    $('.backtop').click(function () {
        $('.backtop').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $('.backtop').tooltip('show');
});

// Added function for Point Test cal search lead
//Added by Nikunjkumar Patel
var temp = 0;
var IPAddressMain = "";
function searchlead() {
  if (temp == 0) {
    try {
      IPAddressMain = AgentUrl[1];
      var IPAddress1 = "";
      //Universal.WriteFile("IPAddressMain1 : " +  IPAddressMain);
      // if (IPAddressMain != "" && IPAddressMain != undefined) {
      //   IPAddress1 = IPAddressMain;
      // } else if (
      //   req.cookies["IpAddress"] != null &&
      //   req.cookies["IpAddress"] != undefined
      // ) {
      //   IPAddress1 = req.cookies["IpAddress"];
      // } else {
      //   IPAddress1 = req.cookies["IpAd"];
      // }
      var logFrom = "";
      //var DeviceName = req.cookies['DeviceType'];
      var DeviceName = "Web";
      var ref = AgentUrl;
      // console.log()
      if (ref.includes(".searchmyanzsco.com.au/mobile")) {
        DeviceName = "Mobile";
      }
      if (AgentUrl.indexOf("btoken") == -1) {
        if (AgentUrl.includes(".searchmyanzsco.com.au")) {
          logFrom = DeviceName + "WhiteLabel";
        } else {
          logFrom = "Widgets";
        }
      } else {
        logFrom = "WebCRM";
      }
      // if (req.cookies[refUrl] == undefined) {
      //   req.cookies[refUrl] = "";
      // }
      AnalyticsLog("", IPAddress1, calc_name, calc_name, logFrom, "PointTestCalculator", "", "", AgentUrl, CompanyID, CompanyDomain, "", calc_name, "", "");
    } catch (err) {
      console.log("Point Test Calc Main JS searchlead() ---> : " + err);
    }
    temp = 1;
  }
}

function AnalyticsLog(Token, IPAddress, Pagetitle, PageName, CallFrom, SearchInto, WhatSearch, ReportDownload,
  AgentURL, AgentID, RequestDomain, OccupationCode, OccupationName, LeadID, Device) {
  var data = {
    "IPAddress": IPAddress,
    "Pagetitle": Pagetitle,
    "PageName": PageName,
    "CallFrom": CallFrom,
    "SearchInto": SearchInto,
    "WhatSearch": WhatSearch,
    "ReportDownload": ReportDownload,
    "AgentURL": AgentURL,
    "AgentID": AgentID,
    "RequestDomain": RequestDomain,
    "OccupationCode": OccupationCode,
    "OccupationName": OccupationName,
    "LeadID": LeadID,
    "Device": Device
  };
  //var gfg1 = JSON.stringify(data); 
  //alert("res1" + gfg1);
  try {
    return new Promise(function (resolve, reject) {
      $.ajax({
        url: '/api/AnalyticsLogAjax',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',

        data: JSON.stringify(data),
        success: function (response) {
          resolve(response);
          console.log("res" + JSON.stringify(response));
        },
        error: function (error) {
          resolve(error);
          console.log("ErrorNew1" + JSON.stringify(error));
        }
      });
    });
  } catch (error) {
    console.log("Error2" + error);
  }
}
/* /Back To Top Button */



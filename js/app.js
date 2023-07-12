// var currentTab = 0; // Current tab is set to be the first tab (0)
// showTab(currentTab); // Display the current tab

// function showTab(n) {
//     // This function will display the specified tab of the form ...
//     var x = document.getElementsByClassName("tab");
//     x[n].style.display = "block";
//     // ... and fix the Previous/Next buttons:
//     if (n == 0) {
//         document.getElementById("prevBtn").style.display = "none";
//     } else {
//         document.getElementById("prevBtn").style.display = "inline";
//     }
//     if (n == (x.length - 1)) {
//         document.getElementById("nextBtn").innerHTML = "Submit";
//     } else {
//         document.getElementById("nextBtn").innerHTML = "Next";
//     }
//     // ... and run a function that displays the correct step indicator:
//     fixStepIndicator(n)
// }

// function nextPrev(n) {
//     // This function will figure out which tab to display
//     var x = document.getElementsByClassName("tab");
//     // Exit the function if any field in the current tab is invalid:
//     if (n == 1 && !validateForm()) return false;
//     // Hide the current tab:
//     x[currentTab].style.display = "none";
//     // Increase or decrease the current tab by 1:
//     currentTab = currentTab + n;
//     // if you have reached the end of the form... :
//     if (currentTab >= x.length) {
//         //...the form gets submitted:
//         document.getElementById("regForm").submit();
//         return false;
//     }
//     // Otherwise, display the correct tab:
//     showTab(currentTab);
// }

// function validateForm() {
//     // This function deals with validation of the form fields
//     var x, y, i, valid = true;
//     x = document.getElementsByClassName("tab");
//     y = x[currentTab].getElementsByTagName("input");
//     // A loop that checks every input field in the current tab:
//     for (i = 0; i < y.length; i++) {
//         // If a field is empty...
//         if (y[i].value == "") {
//             // add an "invalid" classList.contains("hide") to the field:
//             y[i].className += " invalid";
//             // and set the current valid status to false:
//             valid = false;
//         }
//     }
//     // If the valid status is true, mark the step as finished and valid:
//     if (valid) {
//         document.getElementsByClassName("step")[currentTab].className += " finish";
//     }
//     return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//     // This function removes the "active" classList.contains("hide") of all steps...
//     var i, x = document.getElementsByClassName("step");
//     for (i = 0; i < x.length; i++) {
//         x[i].className = x[i].className.replace(" active", "");
//     }
//     //... and adds the "active" classList.contains("hide") to the current step:
//     x[n].className += " active";
// }

$(document).ready(function () {
  const w = $(".passenger-accordion-btn").parent().parent().siblings();
  $(".passenger-accordion-btn").click(function () {
    if (!w.hasClass("show")) {
      $(this)
        .removeClass("passenger-accordion-plus-btn")
        .addClass("passenger-accordion-minus-btn");
    } else {
      $(this)
        .removeClass("passenger-accordion-minus-btn")
        .addClass("passenger-accordion-plus-btn");
    }
  });

  var loc = window.location.pathname;

  $("#navbarSupportedContent")
    .find("a")
    .each(function () {
      $(this).toggleClass("active", $(this).attr("href") == loc);
    });

  var path = loc.split("/").pop();
  if (path == "") {
    path = "index.php";
  }

  var target = $('nav-item a[href="' + path + '"]');
  target.addClass("active");

  // $('.special-service-dropdown').hover(function () {
  //     // alert("Hello world!")
  //     // this.parent().css({ 'background-color': 'red' })
  //     this.parent().css('background-color', 'red')
  // })

  // $(".dropdownToggler").hover(function () {
  //     alert("Hello world!")
  //     $(this).children(".dropDownItem").toggle();
  // })

  // #### Payment section PART B
  function showbankDetails(arg1, arg2) {
    if (arg1) {
      if (arg2.hasClass("d-none")) {
        arg2.removeClass("d-none");
      } else {
        return;
      }
    }
  }
  //
  function hidebankDetails(arg1, arg2) {
    if (arg1) {
      if (!arg2.hasClass("d-none")) {
        arg2.addClass("d-none");
      } else {
        return;
      }
    }
  }

  var bankTransfer = $("#bankTransfer");
  var bankTransferChecked = $("#bankTransfer:checked");
  var seller_account_details = $("#seller_account_details");
  //
  var gtPay = $("#gtPay");
  var gtPayChecked = $("#gtPay:checked");

  bankTransfer.on("click", function () {
    showbankDetails(bankTransferChecked, seller_account_details);
  });

  gtPay.on("click", function () {
    hidebankDetails(gtPayChecked, seller_account_details);
  });
});

// #### Payment section PART A
//
var agreeTerms = document.querySelector("#agreeTerms");
var agreeTermsLabel = document.querySelector("#agreeTermsLabel");
var paymentOption = document.querySelector("#paymentOption");
var paymentContinueBtn = document.querySelector("#paymentContinueBtn");

function checktoggle(arg1, arg2) {
  if (!arg1.checked) {
    arg2.classList.remove("d-none");
    paymentContinueBtn.classList.remove("grey-btn");
    paymentContinueBtn.classList.add("custom-form-btn");
    paymentContinueBtn.removeAttribute("disabled");
  } else {
    arg2.classList.add("d-none");
    paymentContinueBtn.classList.add("grey-btn");
    paymentContinueBtn.classList.remove("custom-form-btn");
    paymentContinueBtn.setAttribute("disabled", true);
  }
}

var checkTermsandCondition = () => {
  checktoggle(agreeTerms, paymentOption);
};

/* back function */
function goBack() {
  window.history.back();
}

/* handle sidenave toggle */

const sidenavToggler = document.querySelector(".sidenav-toggler");
const sidenavClose = document.querySelector(".sidenav-close");
const handleSideNavToggle = () => {
  const sidenavContainer = document.querySelector(".sidenav-container");
  if (sidenavContainer.classList.contains("hide")) {
    sidenavContainer.classList.remove("hide");
  }
};
const handleSideNavClose = () => {
  const sidenavContainer = document.querySelector(".sidenav-container");
  if (!sidenavContainer.classList.contains("hide")) {
    sidenavContainer.classList.add("hide");
  }
};

if (sidenavToggler) {
  sidenavToggler.addEventListener("click", handleSideNavToggle);
}
if (sidenavClose) {
  sidenavClose.addEventListener("click", handleSideNavClose);
}

// switching between daily and hourly vehicle hire to view and hide corresponding form-control
var dailyRadio = document.getElementById("dailyRadio");
var hourlyRadio = document.getElementById("hourlyRadio");
var switchTwo = document.getElementById("switchTwo");

function performSwitch() {
  if (hourlyRadio.checked) {
    if (switchOne.classList.contains("d-none")) {
      switchOne.classList.remove("d-none");
    }
    if (!switchTwo.classList.contains("d-none")) {
      switchTwo.classList.add("d-none");
    }
  }
  if (dailyRadio.checked) {
    if (switchTwo.classList.contains("d-none")) {
      switchTwo.classList.remove("d-none");
    }
    if (!switchOne.classList.contains("d-none")) {
      switchOne.classList.add("d-none");
    }
  }
}

/**Booking Timer */
function bookingTimer(date) {
  var countDownDate = new Date(date).getTime();
  var isStarted = true;
  var isPending = false;
  var isCompleted = true;
  var tag = document.querySelector(".booking-status .tag");

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var daysToHours = days * 24;
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var bookingStatus = document.querySelector(".booking-status");

    if (isStarted) {
      if (bookingStatus) {
        if (bookingStatus?.classList.contains("pending")) {
          bookingStatus?.classList.remove("pending");
        }
        if (bookingStatus?.classList.contains("completed")) {
          bookingStatus?.classList.remove("completed");
        }

        if (!bookingStatus?.classList.contains("started")) {
          bookingStatus?.classList.add("started");

          if (!bookingStatus?.classList.contains("started")) {
            bookingStatus?.classList.add("started");
            tag ? (tag.innerHTML = "Started") : "Pending";
          }
        }
      }
    }

    if (!isStarted && isPending) {
      if (bookingStatus?.classList.contains("completed")) {
        bookingStatus?.classList.remove("completed");
      }
      if (bookingStatus?.classList.contains("started")) {
        bookingStatus?.classList.remove("started");
      }

      if (!bookingStatus?.classList.contains("pending")) {
        bookingStatus?.classList.add("pending");
        tag ? (tag.innerHTML = "Pending") : "Pending";
      }
    }

    if (!isStarted && isCompleted) {
      if (bookingStatus?.classList.contains("pending")) {
        bookingStatus?.classList.remove("pending");
      }
      if (bookingStatus?.classList.contains("started")) {
        bookingStatus?.classList.remove("started");
      }

      if (!bookingStatus?.classList.contains("completed")) {
        bookingStatus?.classList.add("completed");
        tag ? (tag.innerHTML = "Completed") : "Pending";
      }
    }

    let content = `  <div class='countdown-timer-container mb-3'><div class='book-timer-wrapper'>`;
    content += `<div class='time-item'><span>${hours < 10 ? "0" : ""}${
      isStarted && hours + daysToHours ? hours + daysToHours : ""
    }</span><span>hr</span></div>`;
    content += "<div>:</div>";
    content += `<div class='time-item'><span>${
      isStarted && minutes < 10 ? "0" : ""
    }${isStarted && minutes ? minutes : ""}</span><span>min</span></div>`;
    content += "<div>:</div>";
    content += `<div class='time-item'><span>${
      isStarted && seconds < 10 ? "0" : ""
    }${isStarted && minutes ? seconds : ""}</span><span>s</span></div>`;
    content += `      </div></div>`;
    document.getElementById("bookingTimer").innerHTML = content;

    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
}

// bookingTimer("Jan 5, 2024 15:37:25");
bookingTimer("2024/01/01");

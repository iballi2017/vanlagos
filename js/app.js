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



$(document).ready(function() {
    const w = $(".passenger-accordion-btn").parent().parent().siblings()
    $(".passenger-accordion-btn").click(function() {
        if (!w.hasClass("show")) {
            $(this).removeClass("passenger-accordion-plus-btn").addClass("passenger-accordion-minus-btn")
        } else {
            $(this).removeClass("passenger-accordion-minus-btn").addClass("passenger-accordion-plus-btn")
        }
    })

    var loc = window.location.pathname;

    $('#navbarSupportedContent').find('a').each(function() {
        $(this).toggleClass('active', $(this).attr('href') == loc);
    });

    var path = loc.split("/").pop();
    if (path == "") {
        path = 'index.php';
    }


    var target = $('nav-item a[href="' + path + '"]');
    target.addClass('active');




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
                arg2.removeClass("d-none")
            } else {
                return
            }
        }
    }
    // 
    function hidebankDetails(arg1, arg2) {
        if (arg1) {
            if (!arg2.hasClass("d-none")) {
                arg2.addClass("d-none")
            } else {
                return
            }
        }
    }

    var bankTransfer = $("#bankTransfer");
    var bankTransferChecked = $("#bankTransfer:checked");
    var seller_account_details = $("#seller_account_details");
    // 
    var gtPay = $("#gtPay");
    var gtPayChecked = $("#gtPay:checked");

    bankTransfer.on("click", function() {
        showbankDetails(bankTransferChecked, seller_account_details)
    })

    gtPay.on("click", function() {
        hidebankDetails(gtPayChecked, seller_account_details)
    })

})


// #### Payment section PART A
// 
var agreeTerms = document.querySelector("#agreeTerms");
var agreeTermsLabel = document.querySelector("#agreeTermsLabel");
var paymentOption = document.querySelector("#paymentOption");
var paymentContinueBtn = document.querySelector("#paymentContinueBtn");

function checktoggle(arg1, arg2) {
    if (!arg1.checked) {
        arg2.classList.remove("d-none")
        paymentContinueBtn.classList.remove("grey-btn")
        paymentContinueBtn.classList.add("custom-form-btn");
        paymentContinueBtn.removeAttribute("disabled")
    } else {
        arg2.classList.add("d-none")
        paymentContinueBtn.classList.add("grey-btn")
        paymentContinueBtn.classList.remove("custom-form-btn")
        paymentContinueBtn.setAttribute("disabled", true)
    }
}


var checkTermsandCondition = () => {
    checktoggle(agreeTerms, paymentOption)
}



/* back function */
function goBack() {
    window.history.back();
}

/* handle sidenave toggle */
const sidenavToggler = document.querySelector(".sidenav-toggler");
const handleSideNavToggle = () =>{
    console.log("hey!")
    const sidenavContainer = document.querySelector(".sidenav-container");
    if(sidenavContainer.classList.contains("hide")){
        sidenavContainer.classList.remove("hide");
    }
}
sidenavToggler.addEventListener("click", handleSideNavToggle)


// switching between daily and hourly vehicle hire to view and hide corresponding form-control
var dailyRadio = document.getElementById("dailyRadio");
var hourlyRadio = document.getElementById("hourlyRadio");
var switchTwo = document.getElementById("switchTwo");

function performSwitch() {
    if (hourlyRadio.checked) {
        if (switchOne.classList.contains("d-none")) {
            switchOne.classList.remove("d-none")
        }
        if (!switchTwo.classList.contains("d-none")) {
            switchTwo.classList.add("d-none")
        }
    }
    if (dailyRadio.checked) {
        if (switchTwo.classList.contains("d-none")) {
            switchTwo.classList.remove("d-none")
        }
        if (!switchOne.classList.contains("d-none")) {
            switchOne.classList.add("d-none")
        }
    }
}
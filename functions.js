// Enhanced validation for Reservations Form

function validateReservations() {

    let name = $("#inputName");
    let surname = $("#inputSurname");
    let email = $("#emailInput");
    let date = $("#dateInput");
    let options = $('[name="radioOptions"'); 
    let optionChecked = false;
    let submit = true;

    // Restart all border colors
    name.css("border-color", "#dee2e6");
    surname.css("border-color", "#dee2e6");
    email.css("border-color", "#dee2e6");
    date.css("border-color", "#dee2e6");

    if (name.val() == "") {
        name.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    if (surname.val() == "") {
        surname.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    if (email.val() == "") {
        email.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    if (date.val() == "") {
        date.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    for (let i = 0; i<options.length; i++) {
        if (options[i].checked){
            optionChecked = true;
        }
    }

    if (!optionChecked) {
        $("#inlineRadio3").css("border-color", "red");
        $("#inlineRadio4").css("border-color", "red");
        if (submit){ 
            alert("Please select a time frame");
        }
        submit = false;
    }

    return submit;

}

// Enhanced validation for Contact Form

function validateContact() {

    let name = $("#inputName");
    let email = $("#emailInput");
    let subject = $("#subjectInput");
    let submit = true;

    name.css("border-color", "#dee2e6");
    email.css("border-color", "#dee2e6");

    if (name.val() == "") {
        name.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    if (email.val() == "") {
        email.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    if (subject.val() == "") {
        subject.css("border-color", "red");
        submit = false;
    } else {
        submit = true;
    }

    return submit;
}

// Shift image every few seconds
alt_images = ["media/main_image.jpg", "media/main_image_alt1.jpg", "media/main_image_alt2.jpg", "media/main_image_alt3.jpeg"];
let index = 0;

setInterval(() => {
index = (index + 1) % alt_images.length;
$('.main-image').fadeOut(500, function() {
    $(this).attr('src', alt_images[index]).fadeIn(500);
});
}, 3000);

// Only execute when all HTML elements are loaded
$(document).ready(function() {
    
    // Filtering cats by age
    selectedFilter = "";

    $(".filter").click(function(){
        console.log("Clicked");
        selectedFilter = $(this).attr("id");
        $(this).addClass("selected").siblings().removeClass("selected");
        $(".cat-card").addClass("d-none").filter("." + selectedFilter).removeClass("d-none");
    });

});



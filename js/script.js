// Bottom To top btn start ==================================================
function scrollTop() {
    if ($(window).scrollTop() > 500) {
        $(".backToTopBtn").addClass("active");
    } else {
        $(".backToTopBtn").removeClass("active");
    }
}
$(function () {
    // show and hide btn
    scrollTop();
    $(window).on("scroll", scrollTop);

    // body scroll on btn click
    $(".backToTopBtn").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1);
        return false;
    });
});


// Type Animation script start ==================================================
let textLength = 0;
let text = 'We are professional to make any kind of web application software.';

function type() {
    let textChar = text.charAt(textLength++);
    let paragraph = document.getElementById("typed");
    let charElement = document.createTextNode(textChar);
    paragraph.appendChild(charElement);
    if (textLength < text.length + 1) {
        setTimeout(type, 50);
    } else {
        setTimeout(resetAndType, 1000); // Delay before restarting the animation
    }
}

function resetAndType() {
    let paragraph = document.getElementById("typed");
    paragraph.textContent = ''; // Clear the paragraph
    textLength = 0; // Reset textLength
    type(); // Restart the typing animation
}

document.addEventListener("DOMContentLoaded", function () {
    type();
});

// Sticky Navbar start ==================================================
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#menu').css("background-color", "rgba(0, 0, 0, 0.7)");
    } else {
        $('#menu').css("background-color", "transparent");
    }
});


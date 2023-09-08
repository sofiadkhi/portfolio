let menu = document.querySelector('#menu-bars');
let header = document.querySelector('header');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    header.classList.remove('active');
}

let cursor1 = document.querySelector('.cursor-1');
let cursor2 = document.querySelector('.cursor-2');



document.querySelectorAll('a').forEach(links =>{

    links.onmouseenter = () =>{
        cursor1.classList.add('active');
        cursor2.classList.add('active');
    }

    links.onmouseleave = () =>{
        cursor1.classList.remove('active');
        cursor2.classList.remove('active');
    }

});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const confirmationMessage = document.querySelector(".confirmation-message");

    form.addEventListener("submit", function (event) {
        // event.preventDefault(); // Prevent default form submission

        // You can perform form validation and submission logic here
        // Simulate a successful submission (remove this in the real implementation)
        setTimeout(function () {
            // Show the confirmation message
            confirmationMessage.style.display = "block";

            // Reset the form after a brief delay (e.g., 3 seconds)
            setTimeout(function () { 
                confirmationMessage.style.display = "none"; // Hide the message after some time
                form.reset(); // Reset the form
            }, 3000); // Hide and reset after 3 seconds (3000 ms)
        }, 1000); // Simulate successful submission after 1 second (1000 ms)
    });
});
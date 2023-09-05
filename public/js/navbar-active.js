document.addEventListener("DOMContentLoaded", function () {
    const curURL = window.location.href;
    console.log(curURL);

    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(navLink => {
        const linkURL = navLink.href;
        console.log(linkURL);
        if (curURL === linkURL) {
            console.log("added" + navLink);
            navLink.classList.add("active");
        }
    });
});

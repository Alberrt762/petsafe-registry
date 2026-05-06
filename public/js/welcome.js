function scrollToSection(sectionId, event) {
    event.preventDefault();

    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });

    history.pushState("", document.title, window.location.pathname);
}
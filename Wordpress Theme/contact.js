let Titles = document.querySelectorAll("[field-title");

Titles.forEach(title => {
    if (title.classList.contains('active')) {
        title.classList.remove('active');
    }
    title.classList.add('inactive');
})



const form_inputs = document.querySelectorAll
    ("input.wpcf7-form-control.wpcf7-text , textarea.wpcf7-form-control.wpcf7-textarea");

    

form_inputs.forEach((input) => {
    input.addEventListener('focus', (e) => {
        let title = e.target.closest("[data-wrapper]").querySelector("[field-title]");

       

        if (title.classList.contains('inactive')) {
            title.classList.remove('inactive');
        }
        if (!title.classList.contains('active')) {
            title.classList.add('active');
        }
    });
})


form_inputs.forEach((input) => {
    input.addEventListener('focusout', (e) => {
        let title = e.target.closest("[data-wrapper]").querySelector("[field-title]");
        if (title.classList.contains('active') && (e.target.value == "")) {
            title.classList.remove('active');
            if (!title.classList.contains('inactive')) {
                title.classList.add('inactive');
            }
        }
    });
});




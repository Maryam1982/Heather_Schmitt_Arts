const pop_ups = document.getElementsByClassName("pop-up");



// [...pop_ups].forEach(pop_up => {
//     pop_up.style.display = "none";
// });

function showPopup(element){
    element.querySelector(".pop-up").style.display="block";
    // console.log(element);
}

function hidePopup(element){
    element.querySelector(".pop-up").style.display="none";
}


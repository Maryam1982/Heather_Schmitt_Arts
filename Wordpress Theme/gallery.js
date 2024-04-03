const pop_ups = document.getElementsByClassName("pop-up");



window.onclick = function(event){
    let modal = document.getElementById("modalBox");
    if (event.target == modal) {
        modal.style.display = "none";
      }
}

function showPopup(element){
    element.querySelector(".pop-up").style.display="block";
    // console.log(element);
}

function hidePopup(element){
    element.querySelector(".pop-up").style.display="none";
}

function showModal(element){
    let modal = document.getElementById("modalBox");
    let modal_content = document.querySelector("#container>.modal>.modal-content");
    // let spec = document.querySelector("#container>.item>#modalBox>.modal-content>.spec");
    // let specVal = element.querySelector(".pop-up>.spec>.spec-item>p");

    // let modalSpec = modal.querySelector("#spes");
    // modalSpec.innerHTML = specVal.innerHTML;
    
    let imgUrl = element.dataset.img;
    let img_title = element.dataset.img_title;
    let img_type = element.dataset.img_type;
    let img_dimension = element.dataset.img_dimension;
    
    modal.querySelector(".modal-content #main_img").src = imgUrl;
    
    modal.querySelector(".modal-content .spec>.title>p").innerHTML = img_title;
    modal.querySelector(".modal-content .spec #dimension p").innerHTML
     = img_dimension;
    modal.querySelector(".modal-content .spec #type p").innerHTML
     = img_type;

    modal.style.display = "block";
    modal_content.style.display = "block";
    // spec.style.display ="block";
    // console.log(element);
}

function closeModal(element){
    let modal = document.querySelector("#modalBox");
    modal.style.display = "none";
    
}


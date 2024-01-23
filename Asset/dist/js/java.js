let createbutton = document.querySelector('.btn');
let NotesContainer = document.querySelector('.notes-container');
let notes = document.querySelectorAll('.input-box');
// p tag notes rahay ga yani hamari html ka class input-box

createbutton.addEventListener("click", ()=>{
    let inputbox = document.createElement("p");
    let img = document.createElement("img");
    inputbox.className = "input-box";
    inputbox.setAttribute("contenteditable","true");
    img.src="/Images/delete.png";
    NotesContainer.appendChild(inputbox).appendChild(img);
})


NotesContainer.addEventListener("click",(e)=>{
    if(e.target.tagName === "IMG"){
        e.target.parentElement.remove();
    }
    else if(e.target.tagName === "p"){
        let notes = document.querySelectorAll("input-box");
        notes.forEach(nt =>{
        })
    }
})


// For Registration Form Validations
// Example starter JavaScript for disabling form submissions if there are invalid fields



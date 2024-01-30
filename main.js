// change nav bar styles when scrolled 

// window.addEventListener("scroll",()=> {
//     document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
// })

// show hide faq answer

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', ()=> {
        faq.classList.toggle('open');

        //Change icon
        const icon = faq.querySelector('.faq_icon i');
        if(icon.className === 'uil uil-plus'){
            icon.className = "uil uil-minus"
        }
        else{
            icon.className = "uil uil-plus";
        }
    })
})

// About.php Animated Counter
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    let count = 0;

    const animation = setInterval(() => {
        count++;        
        element.textContent = count;
        if (count === target) {
            clearInterval(animation);
        }
    }, 8); // Adjust the interval to control the animation speed
}

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        animateCounter(counter);
    });
});






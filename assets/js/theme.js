function toggleTheme(){
    document.querySelector("body").classList.toggle("light-theme");
}

function toggleChat(){
    document.querySelector(".chat_bot").classList.toggle("d-none");
    document.querySelector(".chat-box").classList.toggle("chat-visible");
}

const slider = document.getElementById("carouselExampleIndicators");
const observer = new IntersectionObserver(entries => {
console.log(entries[0].isIntersecting)
if(entries[0].isIntersecting){
    slider.setAttribute("data-bs-ride", "carousel");
    slider.setAttribute("data-bs-interval", "3000"); 
    setTimeout(function() { 
        $("#carouselExampleIndicators").carousel("next");
    }, 3000);
}
},
{
    threshold:1
})
//observer.observe(slider)

const sliderm = document.getElementById("carouselMobileIndicators");
const observerm = new IntersectionObserver(entries => {
console.log(entries[0].isIntersecting)
if(entries[0].isIntersecting){
    sliderm.setAttribute("data-bs-ride", "carousel");
    sliderm.setAttribute("data-bs-interval", "3000"); 
    setTimeout(function() { 
        $("#carouselMobileIndicators").carousel("next");
    }, 3000);
}
},
{
    threshold:0.5,
    root:null
})
//observerm.observe(slider)
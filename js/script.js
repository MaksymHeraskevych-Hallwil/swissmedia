

document.addEventListener("DOMContentLoaded", function () {
    const infoTextElements = document.querySelectorAll(".info__text");
    console.log(infoTextElements)
    infoTextElements.forEach(function (element) {
        const maxLength = 70;
        const originalText = element.textContent;

        if (originalText.length > maxLength) {
            const truncatedText = originalText.substring(0, maxLength) + "...";
            element.textContent = truncatedText;
        }
    });

});
// dropdowns
const dropbtns = document.querySelectorAll('.filters__drop');

dropbtns.forEach(dropbtn => {
    const dropdownContent = dropbtn.nextElementSibling.querySelector('.filters__content_wrapp');
    const arrowDrop = dropbtn.querySelector('.arrow__drop');
    const links = dropdownContent.querySelectorAll('a'); 


    dropbtn.addEventListener('click', function(event) {
        event.stopPropagation(); 
        dropdownContent.classList.toggle('show'); 
        arrowDrop.classList.toggle('show', dropdownContent.classList.contains('show')); 
    });

  
    links.forEach(link => {
        link.addEventListener('click', function(event) {
           
            links.forEach(link => link.classList.remove('active'));
       
            this.classList.add('active');

          
            dropdownContent.classList.remove('show');
            arrowDrop.classList.remove('show');
        });
    });
});


window.onclick = function(event) {
    dropbtns.forEach(dropbtn => {
        const dropdownContent = dropbtn.nextElementSibling.querySelector('.filters__content_wrapp');
        const arrowDrop = dropbtn.querySelector('.arrow__drop'); 


        if (!dropbtn.contains(event.target) && !dropdownContent.contains(event.target)) {
            dropdownContent.classList.remove('show');
            arrowDrop.classList.remove('show'); 
        }
    });
};


//slick slider
document.addEventListener('DOMContentLoaded', function() {
$('.success__slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>'
});
$('.slider__video').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: true,
    prevArrow: '<button class="slider-arrow left-arrow"></button>',
    nextArrow: '<button class="slider-arrow right-arrow"></button>'
});
});
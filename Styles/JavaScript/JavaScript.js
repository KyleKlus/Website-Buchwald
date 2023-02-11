var carousel = document.querySelector('.carousel');
var cellCount = 4;
var selectedIndex = 0;

function rotateCarousel()
{
 var angle = selectedIndex / cellCount * -360;
 carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
}

var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('click', function()
{
  selectedIndex--;
  rotateCarousel();
});

var nextButton = document.querySelector('.next-button');
nextButton.addEventListener('click', function()
{
 selectedIndex++;
 rotateCarousel();
});
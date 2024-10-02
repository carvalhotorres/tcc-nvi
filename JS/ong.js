const goTopBtn = document.querySelector('.go-top-btn');
const dropdownMenu = document.getElementById('dropdownMenu');


window.addEventListener('scroll', checkHeight)

function checkHeight(){
  if(window.scrollY > 200) {
    goTopBtn.style.display = "flex"
  } else {
    goTopBtn.style.display = "none"
  }
}

goTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  })
})
let lastScrollY = 0;
let navbar = document.querySelector('.navbar');
let isScrollingDown = false;

window.addEventListener('scroll', function () {
let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

if (scrollTop > lastScrollY) {

navbar.style.transform = 'translateY(-100%)';
isScrollingDown = true;
dropdownMenu.classList.remove('show');
} else if (scrollTop < lastScrollY) {

navbar.style.transform = 'translateY(0)';
isScrollingDown = false;
}

lastScrollY = scrollTop;
});

document.addEventListener('DOMContentLoaded', function() {
  const profileImg = document.getElementById('profileImg');
  

  profileImg.addEventListener('click', function(event) {
    event.stopPropagation();
    dropdownMenu.classList.toggle('show');
  });

  document.addEventListener('click', function(event) {
    if (!dropdownMenu.contains(event.target) && event.target !== profileImg) {
      dropdownMenu.classList.remove('show');
    }
  });        
});

const overlay = document.querySelector('.overlay');
const modalBox = document.querySelector('.modal-box');
const logoutBtn = document.getElementById('logoutBtn');
const closeModalBtn = document.getElementById('close-modal');


function showModal() {
overlay.classList.add('active');
modalBox.classList.add('active');
}


function hideModal() {
overlay.classList.remove('active');
modalBox.classList.remove('active');
}


logoutBtn.addEventListener('click', showModal);
closeModalBtn.addEventListener('click', hideModal);


overlay.addEventListener('click', function(event) {
if (event.target === overlay) {
hideModal();
}
});
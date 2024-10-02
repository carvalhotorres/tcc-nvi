const goTopBtn = document.querySelector('.go-top-btn');
const dropdownMenu = document.getElementById('dropdownMenu');

window.addEventListener('scroll', checkHeight)

function checkHeight() {
  if (window.scrollY > 200) {
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


let detailsElements = document.querySelectorAll(".duvidas details");
detailsElements.forEach((details) => {
  details.addEventListener("click", function() {
    detailsElements.forEach((item) => {
      if (item !== details) {
        item.removeAttribute("open");
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function() {

  function aplicarEstilosResponsivos() {
    var sobreNosSection = document.querySelector('.Sobre');
    var nossaEquipeSection = document.querySelector('.NossaEquipe');
    var logo = document.querySelector('.logo');


    if (window.matchMedia("(max-width: 768px)").matches) {

      if (sobreNosSection) {
        sobreNosSection.style.marginBottom = "30px";
        sobreNosSection.style.fontSize = "14px";
      }

      if (nossaEquipeSection) {
        nossaEquipeSection.style.padding = "20px";
        nossaEquipeSection.style.fontSize = "14px";
      }

      if (logo) {
        logo.style.width = "50px";
        logo.style.height = "50px";
      }
    } else if (window.matchMedia("(min-width: 769px) and (max-width: 1024px)").matches) {
      if (sobreNosSection) {
        sobreNosSection.style.marginBottom = "40px";
        sobreNosSection.style.fontSize = "16px";
      }

      if (nossaEquipeSection) {
        nossaEquipeSection.style.padding = "30px";
        nossaEquipeSection.style.fontSize = "16px";
      }

      if (logo) {
        logo.style.width = "70px";
        logo.style.height = "70px";
      }
    } else {
      if (sobreNosSection) {
        sobreNosSection.style.marginBottom = "50px";
        sobreNosSection.style.fontSize = "19px";
      }

      if (nossaEquipeSection) {
        nossaEquipeSection.style.padding = "40px";
        nossaEquipeSection.style.fontSize = "18px";
      }

      if (logo) {
        logo.style.width = "100px";
        logo.style.height = "100px";
      }
    }
  }
  aplicarEstilosResponsivos();
  window.addEventListener('resize', aplicarEstilosResponsivos);
});


const teamMembers = document.querySelectorAll('.team-mem');
const membersContainer = document.querySelector('.members');


function adjustTeamLayout() {
  const screenWidth = window.innerWidth;

  if (screenWidth <= 600) {
    membersContainer.style.display = 'grid';
    membersContainer.style.gridTemplateColumns = '1fr';
  } else if (screenWidth <= 900) {
    membersContainer.style.display = 'grid';
    membersContainer.style.gridTemplateColumns = '1fr 1fr';
  } else {
    membersContainer.style.display = 'grid';
    membersContainer.style.gridTemplateColumns = '1fr 1fr 1fr 1fr';
  }
}
window.addEventListener('resize', adjustTeamLayout);

window.addEventListener('load', adjustTeamLayout);


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

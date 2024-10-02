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

document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.navbar');
  const profileImg = document.getElementById('profileImg');
  const dropdownMenu = document.getElementById('dropdownMenu');
  let lastScrollY = window.pageYOffset; 

  
  navbar.style.transition = 'transform 0.6s ease-in-out';
  dropdownMenu.style.transition = 'opacity 0.3s ease, transform 0.3s ease';

  window.addEventListener('scroll', function () {
    let currentScrollY = window.pageYOffset;

    
    if (currentScrollY > lastScrollY) {
      navbar.style.transform = 'translateY(-100%)'; 
      dropdownMenu.classList.add('hide'); 
      dropdownMenu.classList.remove('show'); 
    } 
   
    else if (currentScrollY < lastScrollY) {
      navbar.style.transform = 'translateY(0)';

     
      if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('hide'); 
      }
    }

    lastScrollY = currentScrollY; 
  });

 
  profileImg.addEventListener('click', function(event) {
    event.stopPropagation();
    dropdownMenu.classList.toggle('show'); 

   
    if (dropdownMenu.classList.contains('show')) {
      dropdownMenu.classList.remove('hide');
    } else {
      dropdownMenu.classList.add('hide'); 
    }
  });

  document.addEventListener('click', function(event) {
    if (!dropdownMenu.contains(event.target) && event.target !== profileImg) {
      dropdownMenu.classList.remove('show');
      dropdownMenu.classList.add('hide'); 
    }
  });
});

const botaoLerMais = document.querySelector(".botao-ler-mais");
const conteudoOculto = document.querySelector(".conteudo-oculto");

botaoLerMais.addEventListener("click", () => {
    if (conteudoOculto.style.display === "none" || conteudoOculto.style.display === "") {
        conteudoOculto.style.display = "block";
        botaoLerMais.style.display = "none"; // Esconde o botão
    } else {
        conteudoOculto.style.display = "none";
        botaoLerMais.style.display = "block"; // Mostra o botão
    }
});



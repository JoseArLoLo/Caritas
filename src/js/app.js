document.addEventListener('DOMContentLoaded', function () {
    var menuToggle = document.querySelector('.menu-toggle');
    var menu = document.querySelector('.menu');

    menuToggle.addEventListener('click', function () {
        menu.classList.toggle('open');
    });

    var submenuToggles = document.querySelectorAll('.menu ul li > a');

    submenuToggles.forEach(function (item) {
        item.addEventListener('click', toggleSubmenu);
    });

    function toggleSubmenu(event) {
        var submenu = event.target.nextElementSibling;
        var allSubmenus = document.querySelectorAll('.menu ul > ul');

        allSubmenus.forEach(function (item) {
            if (item !== submenu && !isDescendant(submenu, item)) {
                hideSubmenu(item);
            }
        });

        if (submenu.style.display == 'block') {
            submenu.style.display = 'none';
            submenu.style = "";
        } else {
            if (window.innerWidth > 768) return;
            submenu.style.display = 'block';
        }
    }

    function hideSubmenu(submenu) {
        submenu.style.display = 'none';
        submenu.style = "";
        var submenus = submenu.querySelectorAll('ul');
        submenus.forEach(function (sub) {
            sub.style.display = 'none';
            sub.style = "";
        });
    }

    function isDescendant(parent, child) {
        var node = child.parentNode;
        while (node !== null) {
            if (node === parent) {
                return true;
            }
            node = node.parentNode;
        }
        return false;
    }

    darkMode();
});
function darkMode(){
    
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)')
    
    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    }else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
        }   
    });
}
let slideIndex = 0;
const slides = document.querySelectorAll('.testimonios');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    slideIndex = (n + slides.length) % slides.length;
    slides[slideIndex].classList.add('active');
}

function moveSlide(n) {
    showSlide(slideIndex += n);
}
if (slides.length > 0) {
    showSlide(slideIndex);
}
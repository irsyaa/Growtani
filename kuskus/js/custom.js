const typedOptions = {
  strings: ['Nice to Meet You ', 'Have a Great Day'],
  typeSpeed: 50,
  backSpeed: 20,
  loop: false,
  startDelay: 85,
};

const typed = new Typed('.typed-here', typedOptions);

let isToggle = false;
let isToggle2 = false;
let isSideBar = false;

const menuToggleButton = document.querySelector('.dropdown-toggle.toggle-custom-menu');
menuToggleButton.addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('.dropdown-menu').style.display = isToggle ? 'none' : 'block';
  isToggle = !isToggle;
});

document.getElementsByTagName('html')[0].addEventListener('click', function(e) {
  if (!e.target.classList.contains('toggle-custom-menu') && !e.target.classList.contains('profile-name')) {
    if (isToggle) {
      document.querySelector('.dropdown-menu').style.display = 'none';
      isToggle = false;
    }
  }
});

const menutambahToggleButton = document.querySelector('.dropdown-toggle.toggle-menu');
menutambahToggleButton.addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('.dropdown-menu-tambah').style.display = isToggle2 ? 'none' : 'block';
  isToggle2 = !isToggle2;
});

document.getElementsByTagName('html')[0].addEventListener('click', function(e) {
  if (!e.target.classList.contains('toggle-menu') && !e.target.classList.contains('profile-name')) {
    if (isToggle2) {
      document.querySelector('.dropdown-menu-tambah').style.display = 'none';
      isToggle2 = false;
    }
  }
});

const MenuSidebar = document.querySelector('.img');

 MenuSidebar.addEventListener('click', function(e){
   alert("Hello world")
   e.preventDefault();
   document.querySelector('.sidebar').style.display = isToggle2 ? 'none' : 'block';
   isSideBar = !isSideBar;
   /* $('.sidebar').toggleClass('active');
   $(this).toggleClass('active'); */
 });


 

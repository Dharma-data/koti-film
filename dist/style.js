document.addEventListener("contextmenu", function(e) {
  e.preventDefault();
}, false);

const navBar = document.getElementById("navbar");
const navCont = document.getElementById("navCont");

function scroll() {
  let calc = window.scrollY; // mendapatkan posisi scroll dari atas ke bawah
  if (calc > 0) { // jika posisi scroll lebih dari 0 pixel
    navBar.classList.replace("bg-transparent", "bg-dark"); // ganti background navbar
    navBar.classList.replace("navbar-light", "navbar-dark"); // ganti tampilan navbar
    navCont.classList.replace("container", "container"); // ubah margin pada navbar
  } else if (calc <= 0) { // jika posisi scroll sama dengan 0 pixel
    navBar.classList.replace("bg-dark", "bg-transparent");
    navBar.classList.replace("navbar-dark", "navbar-light");
    navCont.classList.replace("container", "container");
  }
} //panggil saat inisialisasi
scroll();

// panggil saat discroll
window.onscroll = () => { // jika tidak work untuk arrow function, coba pakai function biasa
  scroll();
};
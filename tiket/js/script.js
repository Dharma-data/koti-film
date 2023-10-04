const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('watch').innerHTML =
    h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 1000);

}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i
  };
  return i;
}



// const searchForm = document.getElementById("search-form");
// searchForm.addEventListener("submit", function (event) {
//   event.preventDefault();

//   const searchBox = document.getElementById("search-box");
//   const searchTerm = searchBox.value.toLowerCase();

//   if (searchTerm === "jus alpukat" || searchTerm === "alpukat" || searchTerm === "jus") {
//     document.getElementById("jus-alpukat").scrollIntoView();
//   } else if (searchTerm === "jus apel" || searchTerm === "apel" || searchTerm === "jus") {
//     document.getElementById("jus-apel").scrollIntoView();
//   } else if (searchTerm === "jus jambu" || searchTerm === "jambu" || searchTerm === "jus") {
//     document.getElementById("jus-jambu").scrollIntoView();
//   } else if (searchTerm === "jus jeruk" || searchTerm === "jeruk" || searchTerm === "jus") {
//     document.getElementById("jus-jeruk").scrollIntoView();
//   } else if (searchTerm === "jus nanas" || searchTerm === "nanas" || searchTerm === "jus") {
//     document.getElementById("jus-nanas").scrollIntoView();
//   } else if (searchTerm === "jus semangka" || searchTerm === "semangka" || searchTerm === "jus") {
//     document.getElementById("jus-semangka").scrollIntoView();
//   } else if (searchTerm === "jus stroberi" || searchTerm === "stroberi" || searchTerm === "jus") {
//     document.getElementById("jus-stroberi").scrollIntoView();
//   } else if (searchTerm === "rujak buah" || searchTerm === "rujak" || searchTerm === "buah") {
//     document.getElementById("rujak-buah").scrollIntoView();
//   } else if (searchTerm === "salad buah" || searchTerm === "salad" || searchTerm === "buah") {
//     document.getElementById("salad-buah").scrollIntoView();
//   } else if (searchTerm === "sop buah" || searchTerm === "sop" || searchTerm === "buah") {
//     document.getElementById("sop-buah").scrollIntoView();
//   } else {
//     alert(`"${searchTerm}" tidak ditemukan pada UTech Store`);
//   }
// });
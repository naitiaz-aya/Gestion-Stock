/* ====================Nav-bar=================== */
const menuIconEl = document.querySelector('.menu-icon');
const sidenavEl = document.querySelector('.sidenav');
const sidenavCloseEl = document.querySelector('.sidenav__close-icon');

// Open the side nav on click
menuIconEl.addEventListener('click', function () {
  sidenavEl.classList.add('active');

});
sidenavCloseEl.addEventListener('click', function () {
  sidenavEl.classList.remove('active');
});

/* ==================sweet alert=================== */
// document.querySelector("body > div > main > div.main-cards > div > table > tbody > tr:nth-child(2) > td.edit > div > a:nth-child(2)").addEventListener("click", myFunction);
// function myFunction(){
//   swal({
//     title: "Are you sure?",
//     text: "Once deleted, you will not be able to recover this imaginary file!",
//     icon: "warning",
//     buttons: true,
//     dangerMode: true,
//   })
//   .then((willDelete) => {
//     if (willDelete) {
//       swal("Poof! Your imaginary file has been deleted!", {
//         icon: "success",
//       });
//     } else {
//       swal("Your imaginary file is safe!");
//     }
//   });
// }

// NavBar
const headerBars = document.querySelector('.header--bars')
const navbarList = document.querySelector('.navbar--list')

headerBars.addEventListener('click', function () {
  headerBars.classList.toggle('active')
  navbarList.classList.toggle('navbar--active')
})

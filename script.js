const firstNavbar = document.getElementById('first-navbar')

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    firstNavbar.classList.add('hide')
  } else {
    firstNavbar.classList.remove('hide')
  }
})

//

//dark et light mod:
function toggleDarkLight() {
    var body = document.getElementById("body");
    var currentClass = body.className;
    body.className = currentClass == "light-mode" ? "dark-mode" : "light-mode";
};
//change icon dark light:
let changeIcon = function(icon) {
    icon.classList.toggle("fa-sun");
};
//swiper:
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
//tanbihat za2ir klicki 3la plus  :
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
    toastTrigger.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
    })
}; //hada landing dyal thmil page :
const b = document.querySelector('body')
setTimeout(() => b.classList.remove('loading'), 3000);
//ikhtisarat menu navbar et footer:
const navbar = `
      <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>M</b>oringa</a>
          <div class="balo"><!--dark mod!!-->
            <button type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode"><i id="light" class="fa-solid fa-moon" onclick="changeIcon(this)"></i></button>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <ion-icon class="navicon" name="list-outline"></ion-icon>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><b>O'</b>lsmani</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-center">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
                  <span><ion-icon name="home-outline"></ion-icon></span>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">الزيوت</a>
                  <span><ion-icon name="flask-outline"></ion-icon></span>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="they.html">اعشاب الشاي</a>
                  <span><ion-icon name="cafe-outline"></ion-icon></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="overweight.html">زيادة الوزن </a>
                    <span><ion-icon name="scale-outline"></ion-icon></span>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pices.php"> منتجات توابل </a>
                  <span><ion-icon name="phone-portrait-outline"></ion-icon></span>
              </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <span><input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search"><div class="serh"><ion-icon name="search-outline"></ion-icon></div></span>
                <!-- <button class="btn btn-outline-success" type="submit">بحث</button> -->
              </form>
            </div>
          </div>
        </div>
      </nav>`;
document.querySelector("header").insertAdjacentHTML("afterbegin", navbar);

//const icon = ``;
//document.getElementById("moi").insertAdjacentHTML("append", icon);
<div class="right">
          <div class="top">
            <button id="menu-btn">
              <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode </span>
                <span class="material-icons-sharp">dark_mode </span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Organaisation name</p>
                    <small Class="">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="./assets/img/img/" alt="">
                </div>
            </div>
          </div>
          <script>
            const sideMenu = document.querySelector("aside");
const menuBtn =document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeTaggler = document.querySelector(".theme-toggler");

// show menu
menuBtn.addEventListener('click', () =>{
    
    sideMenu.style.display ='block';

},{passive:true});

//close sidebar
closeBtn.addEventListener('click', ()=>{
    sideMenu.style.display ='none';
});

// change theme
themeTaggler.addEventListener('click', () =>{
    document.body.classList.toggle('dark-theme-variables');
    themeTaggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeTaggler.querySelector('span:nth-child(2)').classList.toggle('active');
});
          </script>
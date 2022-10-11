const sideMenu = document.querySelectorAll("#sidebar .side-menu li a");
sideMenu.forEach(item=>{
    const li = item.parentElement;

    item.addEventListener('click',()=>{
        sideMenu.forEach(i=>{
            i.parentElement.classList.remove('active');
        });
        li.classList.add('active');
    })
});

const toggleMenu = document.querySelector(".btn-toolbars");
const sidebar = document.getElementById("sidebar");
toggleMenu.addEventListener("click",()=>{
    sidebar.classList.toggle('hide');
})
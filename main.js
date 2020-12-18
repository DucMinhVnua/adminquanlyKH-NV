var iconClose = document.querySelector('i');
var contentTableAdd = document.querySelector('.add-information');
var add = document.querySelector('#add');

add.addEventListener('click', function () {
    contentTableAdd.style.transform = "translateX(0)";
}); 
    
iconClose.addEventListener('click', function () {
    contentTableAdd.removeAttribute("style");
});

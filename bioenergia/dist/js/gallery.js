document.addEventListener("DOMContentLoaded", function () {
    let first = document.querySelector('.offer_item_galleries_item.first'),
        arrow = document.querySelector('.offer_item_galleries_item.first img'),
        x = 20,
        y = 80;

        arrow.addEventListener('dragstart',function(){
            console.log('test');
        })
});
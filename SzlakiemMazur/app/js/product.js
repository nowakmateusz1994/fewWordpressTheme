document.addEventListener("DOMContentLoaded", function () {
    let inputQuant = document.querySelector('.quantity .qty'),
        amount = document.querySelector('.woocommerce-Price-amount bdi'),
        prices = document.querySelectorAll('.single_product_price_item.discount'),
        startPrice = parseInt(amount.innerHTML);
    amount.innerText = startPrice + '.00 zł/osoba';

    let changePrice = function () {
        let flag = true;
        prices.forEach(e => {

            if (this.value >= parseInt(e.querySelector('.single_product_price_item_people.discount').innerHTML)) {
                flag = false;
                amount.innerText = e.querySelector('.single_product_price_item_price.discount span').innerHTML;
                amount.innerText += '.00 zł/osoba';
                return;
            } else if (flag) {
                amount.innerText = startPrice + '.00 zł/osoba';
            }
        });
    }

    if (inputQuant) {
        inputQuant.addEventListener('input', changePrice);
    }

})
document.addEventListener("DOMContentLoaded", function () {
    let adds = document.querySelectorAll('.add_container'),
        addsArr = [];

    adds.forEach(add => {
        obj = {};
        obj.id = add.dataset.add;
        obj.isDisplayed = false;
        obj.top = add.offsetTop;
        obj.height = add.offsetHeight
        addsArr.push(obj);

    });

    window.addEventListener('scroll', function () {
        addsArr.forEach(elemnt => {
            let bottomScreen = window.scrollY * 1 + window.innerHeight * 1;

            if ((elemnt.top + elemnt.height) <= bottomScreen && !elemnt.isDisplayed) {
                elemnt.isDisplayed = true;
                let data = {
                    action: "adds",
                    addID: elemnt.id,
                }
                let fetchBody = new URLSearchParams(data).toString();

                fetch(Theme_Variables.ajax_url,
                    {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: fetchBody
                    }
                )
            }
        });
    });
});
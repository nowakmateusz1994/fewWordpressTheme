document.addEventListener("DOMContentLoaded", function () {
    let selectVoivodship = document.querySelector('#voivodship'),
        selectConunties = document.querySelector('#conunties'),
        optgroupOfConunties = selectConunties.querySelectorAll('optgroup');

    selectVoivodship.addEventListener('change', function () {
        if (selectVoivodship.value != '') {
            selectConunties.disabled = false;
            optgroupOfConunties.forEach((element) => {
                if (element.id == selectVoivodship.value) {
                    element.style.display = "block";
                }else{
                    element.style.display = "none";
                }
            });
        }
    });
});
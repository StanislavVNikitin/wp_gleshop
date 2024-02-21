fetch('/assets/js/countries.json')
    .then((res) => res.json())
    .then((json) => {
        let html = "";
        let selected = "";
        json['countries'].forEach((el) => {
            if (el.code == "RU") {
                selected = "selected"
            } else {
                selected = "";
            }
            html += `<option value="${el.code}" ${selected}>${el.name}</option>`
        })
        document.getElementById('country').innerHTML = html;
    });
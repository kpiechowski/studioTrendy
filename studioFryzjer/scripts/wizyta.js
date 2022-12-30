function show_form(hours, id){
    hours = JSON.parse(hours);
    // console.log(hours);

    var container = document.querySelector('.umow_form');
    container.querySelector('.form_date').innerHTML = id;

    var select = document.createElement('select');
    select.id="hours";
    select.setAttribute('name', 'hours');

    var options = '';
    hours.forEach(hour=>{
        let hour_display = hour.slice(0,-3);
        options += `<option value="${hour}" >${hour_display}</option>`;
    });

    select.innerHTML = options;
    container.querySelector('#hours_container').innerHTML= `<label for="hours">Godzina wizyty:</label>`;
    container.querySelector('#hours_container').appendChild(select);
    container.querySelector('#day_value').value = id;
    container.style.display = "block";

}

document.addEventListener('DOMContentLoaded', ()=>{
    // console.log('js');
    document.querySelectorAll('.umow_panel .panel_day_box').forEach(box=>{
        box.addEventListener('click', ()=>{
            var id = box.getAttribute('data-day');
            fetch('getFreeHours.php?day_id='+id,{
                method: 'POST',
                headers: {
                'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    day_id:id
                })
            }).then(function (response) {
                return response.text();
            }).then(function (body) {
                show_form(body, id);
            });
        });
    });

});
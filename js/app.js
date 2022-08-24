$(document).ready(function () {
    const d = new Date()
    let date = new Date(d.getTime() - 10800000).toJSON().slice(0,16)
    $('#form_date').val(date)
})

$('#form-button-1').click(() => {
    let inputs = [$('#form_name').val(), $('#form_surname').val(), $('#form_email').val(), $('#form_tel').val()]
    let filled = filledForm(...inputs)
    changeDisplay(filled, 'passear', 'passear2', 'form-alerta')
})

$('#form-button-2').click(() => {
    let inputs = [$('#form_adress').val(), $('#form_district').val(), $('#form_city').val()]
    let filled = filledForm(...inputs)
    changeDisplay(filled, 'passear2', 'passear3', 'form-alerta2')
})

$('#form-button-3').click(() => {
    let inputs = [$('#form_date').val()]
    let filled = filledForm(...inputs)
    let date = $('#form_date').val()
    if (checkDate(date) && checkTime(date)) {changeDisplay(filled, 'passear3', 'passear4', 'form-alerta3')}
})

function filledForm(...inputs) {
    return inputs
        .map(input => Boolean(input))
        .reduce((a, b) => a && b)
}

function changeDisplay(filled, before, after, alert) {
    if (filled) {
        $(`#${before}`).css('display', 'none')
        $(`#${after}`).css('display', 'inline')
    } else {
        $(`#${alert}`).css('display', 'inline')
    }
}

$('#btn-newsletter').click(() => {
    if ($('#newsletter').val() == '') {
        $(`#newsletter-alerta`).css('display', 'inline')
        setTimeout(() => {
            $(`#newsletter-alerta`).css('display', 'none')
        }, 4000);
    }
})

function checkDate(date) {
    const d = new Date()
    let dateNow = new Date(d.getTime() - 10800000).toJSON().slice(0,16)
    console.log(date)
    console.log(dateNow)
    if (date >= dateNow) {
        return true
    } else {
        let alertMsg = `Não é possível selecionar uma data passada.`
        $('#form-date-alert-msg').text(alertMsg)
        $('#form-alerta3').css('display', 'inline')
        return false
    }
}

function checkTime(date) {
    let min = Number(date.slice(-2))
    if (min == 0 || min == 30) {
        return true
    } else {
        let hour = Number(date.slice(-5,-3))
        let alertMsg = `Selecione um horário que termine em 00 ou 30 minutos. Exemplo: ${hour + 1}:00 ou ${hour}:30`
        $('#form-date-alert-msg').text(alertMsg)
        $('#form-alerta3').css('display', 'inline')
        return false
    }
}
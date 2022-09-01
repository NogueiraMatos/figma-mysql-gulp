$(document).ready(function () {
    setTimeout(function () { $('#newsletter-alerta').css('display', 'none') }, 3000)
    const d = new Date()
    const timeZone = 10800000
    let date = new Date(d.getTime() - timeZone).toJSON().slice(0, 16)
    $('#form_date').val(date)
    $('#mobile-form_date').val(date)
})

$('#form-button-1').click(() => {
    let inputs = [$('#form_name').val(), $('#form_surname').val(), $('#form_email').val(), $('#form_tel').val()]
    let filled = isFormFilled(...inputs)
    changeDisplay(filled, 'passear', 'passear2', 'form-alerta')
})

$('#form-button-2').click(() => {
    let inputs = [$('#form_adress').val(), $('#form_district').val(), $('#form_city').val()]
    let filled = isFormFilled(...inputs)
    changeDisplay(filled, 'passear2', 'passear3', 'form-alerta2')
})

$('#form-button-3').click(() => {
    let inputs = [$('#form_date').val()]
    let filled = isFormFilled(...inputs)
    let date = $('#form_date').val()
    if (checkDate(date) && checkTime(date)) {
        changeDisplay(filled, 'passear3', 'passear4', 'form-alerta3')
        $('#passear-form').submit()
    }
})

$('#mobile-form-button-1').click(() => {
    let inputs = ['name', 'surname', 'email', 'tel']
    fillForm(...inputs)
    $("#form-button-1").trigger('click')
})

$('#mobile-form-button-2').click(() => {
    $("#form-button-2").trigger('click')
})

function fillForm(...inputs) {
    return inputs
        .map(input => $(`#form_${input}`).val($(`#mobile-form_${input}`).val()))
}

function isFormFilled(...inputs) {
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

function checkDate(date) {
    const d = new Date()
    let dateNow = new Date(d.getTime() - 10800000).toJSON().slice(0, 16)
    if (date >= dateNow) {
        return true
    } else {
        let msg = `Não é possível selecionar uma data passada.`
        alertMSg(msg)
        return false
    }
}

function checkTime(date) {
    let min = Number(date.slice(-2))
    let hour = Number(date.slice(-5, -3))
    if (min == 0 || min == 30) {
        if (hour >= 8 && hour < 18) {
            return true
        } else {
            let msg = 'Selecione uma opção dentro do nosso horário de funcionamento (8h às 17:30).'
            alertMSg(msg)
            return false
        }
    } else {
        let msg = `Selecione um horário que termine em 00 ou 30 minutos. Exemplo: ${hour + 1}:00 ou ${hour}:30`
        alertMSg(msg)
        return false
    }
}

function alertMSg(msg) {
    $('#form-date-alert-msg').text(msg)
    $('#form-alerta3').css('display', 'inline')
}
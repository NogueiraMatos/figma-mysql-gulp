$('#form-button-1').click(() => {
    // let inputs = [$('#form_name').val(), $('#form_surname').val(), $('#form_email').val(), $('#form_tel').val()]
    let inputs = [4, 9, 16, 25]
    console.log(filledForm(...inputs))
    // let filled = filledForm(inputs)
    // console.log(filled)
    //if (filled) {changeDisplay('passear', 'passear2') }
})

$('#form-button-2').click(() => {
    changeDisplay('passear2', 'passear3')
})

$('#form-button-3').click(() => {
    changeDisplay('passear3', 'passear4')
})

function changeDisplay(before, after) {
    $(`#${before}`).css('display', 'none')
    $(`#${after}`).css('display', 'inline')
}

function filledForm(...inputs) {
    console.log(...inputs)
    return inputs.map(Math.sqrt)
    // let resultado
    // inputs.map(funcaoteste)
    // console.log(inputs)
    // // return inputs
    // //     .map(input => Boolean(input))
    // //     .reduce((a, b) => a && b)
}


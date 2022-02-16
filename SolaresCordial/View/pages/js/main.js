$(function () {
    AOS.init()
    toggleMenu()
    formModal()
    modalEditar()
    closeModal()
})

function toggleMenu() {
    $(".nav-toggle").click(function () {
        $(".sidebar").toggleClass("active")
        $(".nav-title").fadeToggle(1000)
        $(".nav-dropdown").fadeToggle(1000)
        $(".nav-toggle").toggleClass("active")
    })
}

function cardHover() {
    $(".card-hover").hover(function () {
        $(this).toggleClass("active")
    })
}

function btnClose() {

    $(".form-modal-container").fadeOut()
    $(".form-modal").animate({
        margin: "-100% 50% 0 auto"
    })

}

function modalUsuario() {
    modal = $("#modalNovoUsuario")
    modal.fadeIn()
    modal.css('display', 'flex')
    $('#modalNovoUsuario .form-modal').animate({
        margin: '0 50% 0 auto',
        opacity: 1
    })
}

function somarConsumo() {
    var mes1 = document.querySelector("#consumo_mes1").value;
    var mes2 = document.querySelector("#consumo_mes2").value;
    var mes3 = document.querySelector("#consumo_mes3").value;
    var mes4 = document.querySelector("#consumo_mes4").value;
    var mes5 = document.querySelector("#consumo_mes5").value;
    var mes6 = document.querySelector("#consumo_mes6").value;
    var mes7 = document.querySelector("#consumo_mes7").value;
    var mes8 = document.querySelector("#consumo_mes8").value;
    var mes9 = document.querySelector("#consumo_mes9").value;
    var mes10 = document.querySelector("#consumo_mes10").value;
    var mes11 = document.querySelector("#consumo_mes11").value;
    var mes12 = document.querySelector("#consumo_mes12").value;

    var soma = parseInt(mes1) + parseInt(mes2) + parseInt(mes3) + parseInt(mes4) + parseInt(mes5) + parseInt(mes6) + parseInt(mes7) + parseInt(mes8) + parseInt(mes9) + parseInt(mes10) + parseInt(mes11) + parseInt(mes12)
    var consumoMedio = soma / 12
    var consumoDiario = consumoMedio / 30

    var getConsumoMensal = consumoMedio.toFixed(2);
    var getConsumoDiario = consumoDiario.toFixed(2);

    document.getElementById("consumo_medio").setAttribute('value',getConsumoMensal)
    $('#mensal span').html(getConsumoMensal)

    document.getElementById("consumo_diario").setAttribute('value',getConsumoDiario)
    $('#diario span').html(getConsumoDiario)

    getPotencia()
}

function getPotencia() {
    var porcentagem = document.querySelector('#perda').value
    var consumoDiario = document.querySelector('#consumo_diario').value
    var irradiacao = document.querySelector('#irradiacao').value
    var calculo = parseFloat(consumoDiario) / parseFloat(irradiacao)
    var perda = parseFloat(calculo) / 100 * parseInt(porcentagem)
    var valorFinal = parseFloat(calculo) + parseFloat(perda)

    document.getElementById("potencia_sistema").setAttribute('value',valorFinal.toFixed(2))
    $('#potencia span').html(valorFinal.toFixed(2))
}











function graficoFaturamento() {
    const chart1 = document.getElementById("graficoFaturamento").getContext("2d")
    const gradient = chart1.createLinearGradient(0, 0, 0, 250)
    gradient.addColorStop(1, "rgba(0,198,50,0.3)")
    gradient.addColorStop(0, "rgba(0,198,50,0.7)")

    new Chart(chart1, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                data: [15000.54, 8000, 20000, 18000, 10000, 6000, 7000, 30000, 20000, 15000, 25000, 28000],
                label: "Total",
                borderColor: "rgb(0,198,50)",
                borderWidth: "3",
                backgroundColor: gradient,
                fill: 'start'
            },]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Faturamento 2022',
                    fontSize: "25",
                    fontColor: "blue"
                }
            },
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Faturamento 2022",
                fontSize: "25",
                fontColor: "blue"
            }
        }
    });
}

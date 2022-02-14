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
    modal.css('display','flex')
    $('#modalNovoUsuario .form-modal').animate({
        margin: '0 50% 0 auto',
        opacity: 1
    })
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

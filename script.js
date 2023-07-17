let botonResumen = document.getElementById("btnResumen")
let botonBorrar = document.getElementById("btnBorrar")

botonResumen.addEventListener("click", CalcularYMostrarTotal)
botonBorrar.addEventListener("click", borrarElTotal)

function CalcularYMostrarTotal() {
    let categoria = document.getElementById("inputCategoria").value

    switch(categoria) {
        case "estudiante":
            MostrarTotal(totalAPagarConDescuentoDe(80))
            break
        case "trainee":
            MostrarTotal(totalAPagarConDescuentoDe(50))
            break
        case "junior":
            MostrarTotal(totalAPagarConDescuentoDe(15))
            break
    }
}

function totalAPagarConDescuentoDe(descuento) {
    let cantidad = parseInt(document.getElementById("inputCantidad").value)
    return (200 - (descuento / 100) * 200) * cantidad
}

function MostrarTotal(total) {
    let mostrarTotal = document.getElementById("divTotal")
    mostrarTotal.textContent = "Total a pagar: $" + total
}


function borrarElTotal() {
    let mostrarTotal = document.getElementById("divTotal")
    mostrarTotal.textContent = "Total a pagar: $"
}
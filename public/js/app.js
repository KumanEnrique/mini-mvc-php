const botones = document.querySelectorAll('.bEliminar')

botones.forEach(boton =>{
    boton.addEventListener('click',function(){
        const matricula = this.dataset.matricula
        // console.log(matricula)
        const confirm = window.confirm(`deseas eliminar el usuario con matricula ${matricula} ?`)
        if(confirm){
            httpRequest('http://localhost:8080/fg/framework-mvc-php/consulta/eliminarAlumno/'+ matricula,function(){
                console.log(this.responseText)
                const tbody = document.querySelector('#tbody-alumnos')
                const fila = document.querySelector('#fila-' + matricula)
                tbody.removeChild(fila)
                const respuesta = document.getElementById('respuesta')
                respuesta.innerHTML = this.responseText
            })
        }
    })
})
function httpRequest(url,callback){
    const http = new XMLHttpRequest();
    http.open("GET",url)
    http.send()

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http)
        }
    }
}
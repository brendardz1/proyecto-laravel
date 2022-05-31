let candidatoData = "foto";
let vistaImg = "vista";
let imgData = ".imagen-candidato";

let perfil = "#perfil";
let vistapdf = "vista-pdf";
let imagenPerfil = "img-perfil";

vistaImagen(candidatoData, vistaImg)
vistaPDF(perfil, imagenPerfil, vistapdf);

function vistaPDF(p, i, v) {
    document.querySelector(p).addEventListener('change', (e) => {
     let pdfFile = document.querySelector(p).files[0];
     let pdfURL = URL.createObjectURL(pdfFile);
     let pdfSize = e.target.files[0].size.toString();
     let totalSize = parseInt(pdfSize);
     let iframe = document.getElementById(v);
     let vista = document.getElementById(i);
      
     
     if(totalSize <= 2209715) {
        iframe.src = pdfURL;
        iframe.style.width = "30%";
        iframe.style.height = "150px";
        vista.innerHTML = "";
        vista.append(iframe);
        console.log(iframe);
      } else {
        alert("El archivo debe ser de máximo 2mb");
      }
    })
  }

function vistaImagen(c, v) {  
    document.getElementById(c).onchange=function(e) {
      let reader = new FileReader();
      let imgSize = e.target.files[0].size.toString();
      let size = parseInt(imgSize);
      if(size <= 2097152) {
        reader.readAsDataURL(e.target.files[0]);
        reader.onload=function() {
          let vista = document.getElementById(v);
          let imagen = document.createElement('img');
          imagen.src = reader.result;
          vista.innerHTML="";
          vista.style.width = "300px";
          vista.style.height = "200px";
          imagen.style.width = "300px";
          imagen.style.height = "200px";
          vista.append(imagen);
        } 
      } else {
        alert("Imágen demasiado grande, tamaño máximo 2mb");
        document.getElementById(c).value = "";
      }
      console.log(imgSize);
    }
  }
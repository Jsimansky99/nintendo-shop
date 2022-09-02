/*********************************
BUSCADOR
**********************************/

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

/*********************************
PANEL DE USUARIO
**********************************/

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

/**** REGISTRO *****/

function formularioLogin()
{
/*var formulario= "";*/

var email=document.form1.email.value;
var clave1=document.form1.password.value;

/*
formulario="DATOS DEL REGISTRO: " + "\nE-mail: " + email + "\nClave: " + clave1; */

window.alert("CUENTA VERIFICADA - HA INICIADO SESION CORRECTAMENTE"); 


}


/*****************************  
SECCION DE CARRITO DE COMPRA 
**************************/
let products = [];
let total = 0;
let desc = 0;
let total1 = 0;


function add(product, price) {
    console.log(product, price);
    products.push(product);
    total = total + price;
    descuento(total);
    document.getElementById("cart-btn").innerHTML = `${total}`;
}



/******* PAGAR & RESET  ************/
function pay() {
    if (total == 0 || total1 == 0){
        window.alert("El carrito esta vacio, agregue algun producto para realizar su compra")
    } else {
        window.alert(products.join(", \n") + " / " +`Su monto total es: ${total1}` + "$");
    products = [];
    total1 = 0;
    total = 0;
    document.getElementById("cart-btn").innerHTML = `${total1}`;
    }
}



/******** DESCUENTO *************/ 
function descuento (total) {

    

    if (total > 50 && total <= 500){
        desc = total * 0.1;
        total1 = total - desc;
        }else if (total>500){
        desc = total * 0.25;
        total1 = total - desc;
        }else{
        total1 = total;
    } 

    return(total1);
}




/*********************************
BARRA DE NAVEGACION - SCROLL 
**********************************/

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


/*********************************
SLIDER PRODUCTS
**********************************/

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});


/*********************************
SLADER REVIEW
**********************************/

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

/****************************
  SUSCRIPCION  
***************************/
function suscripcion(){
  window.alert("Suscripción Realizada");
}






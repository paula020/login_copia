<?php
require_once("c://wamp64/www/login_copia/view/head/header.php");
if (empty($_SESSION['usuario'])) {
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<br> </br>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonial Slider</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
     
    }

    body {
        
      color: #cc1010;
      font-family: 'Nunito', sans-serif;
      background-color: #FFFFFF;
    }

    .testimonial {
       
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-bottom: 5rem;
    }

    h1 {
      margin: 20px 0;
    }

    .line {
      height: 2px;
      width: 6rem;
      background-color: #e26c4f;
      margin-bottom: calc(3rem + 2vmin);
    }

    .arrow-wrapper {
  position: relative;
  display: inline-block; /* Ajustar el ancho automáticamente al contenido */
  display: inline-flex; /* Ajustar el alto automáticamente al contenido */
  border-radius: 2rem;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  place-items: center;
}


.review-wrap {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding-top: calc(2rem + 1vmin);
  width: auto;
  max-width: 100%;
  height: auto; /* Ajustar automáticamente la altura al contenido */
}



    #imgBox {
     
      width: calc(6rem + 4vmin);
      height: calc(6rem + 4vmin);
      position: relative;
      box-shadow: 5px -3px #e26c4f;
      background-size: cover;
      margin-bottom: calc(0.7rem + 0.5vmin);
    }

    #name {
      margin-bottom: calc(0.7rem + 0.5vmin);
      font-size: calc(1rem + 0.5vmin);
      letter-spacing: calc(0.1rem + 0.1vmin);
      font-weight: bold;
    }

    #profession {
      font-size: calc(0.8rem + 0.3vmin);
      margin-bottom: calc(0.7rem + 0.5vmin);
      color: #e26c4f;
    }

    #description {
      font-size: calc(0.8rem + 0.3vmin);
      width: 70%;
      max-width: 40rem;
      /* text-align: center; */
      margin-bottom: calc(1.4rem + 1vmin);
      color: rgb(32, 29, 29);
      line-height: 2rem;
      height: auto; 
      list-style-type: disc; /* Tipo de marcador, puede ser disc, circle, square, etc. */
  margin-left: 1.5rem;   /* Espacio entre el marcador y el texto de la lista */
  padding-left: 1rem; 
    }
    

    .arrow {
      width: calc(1.4rem + 0.6vmin);
      height: calc(1.4rem + 0.6vmin);
      border: solid #e26c4f;
      border-width: 0 calc(0.5rem + 0.2vmin) calc(0.5rem + 0.2vmin) 0;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .arrow:hover {
      transition: 0.3s;
      transform: scale(1.15);
    }

    .left-arrow-wrap {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: rotate(135deg);
    }

    .right-arrow-wrap {
      position: absolute;
      top: 50%;
      right: 5%;
      transform: rotate(-45deg);
    }

    @media screen and (max-width: 900px) {
      .testimonial {
        width: 100%;
      }
    }







  </style>
</head>

<body>
  <div class="testimonial">
    <h1>Depresión</h1>
    <div class="line"></div>
    <!-- arrow wrapper contains the review and the arrows -->
    <div class="arrow-wrapper">
      <!-- review section -->
      <div id="reviewWrap" class="review-wrap">
        <div id="imgBox"></div>
        <div id="name"></div>
        <div id="profession"></div>
        <div id="description"></div>
      </div>
      <!-- left arrow -->
      <div class="left-arrow-wrap">
        <div class="arrow"></div>
      </div>
      <!-- right arrow -->
      <div class="right-arrow-wrap">
        <div class="arrow"></div>
      </div>
    </div>
  </div>

  <script>
    const reviewWrap = document.getElementById("reviewWrap");
    const leftArrow = document.querySelector(".left-arrow-wrap .arrow");
    const rightArrow = document.querySelector(".right-arrow-wrap .arrow");
    const imgBox = document.getElementById("imgBox");
    const name = document.getElementById("name");

    const description = document.getElementById("description");
    

    let people = [{

     
        
    photo: 'url("https://th.bing.com/th/id/R.fb16cff8405e00a54f1d718ae0e73485?rik=Gedzqa5eQKyLTQ&pid=ImgRaw&r=0")',
    name: "Datos y cifras",
    description:  `✔️La depresión es un trastorno mental común. Se estima que en todo el mundo el 5% de los adultos padecen depresión (1).
    ✔️La depresión afecta más a la mujer que al hombre.
    ✔️ La depresión puede llevar al suicidio.
    ✔️ Hay tratamientos eficaces para la depresión, ya sea leve, moderada o grave.
        `

    
},
      {
        photo: "url('https://th.bing.com/th/id/R.f599006cd3e9be06e175d1e9c6971447?rik=jvPbEtPcMuG3eQ&riu=http%3a%2f%2fgifimage.net%2fwp-content%2fuploads%2f2017%2f08%2fpregunta-gif-11.gif&ehk=KK8T%2fvChqpH%2b76Pk%2fv2EABqMQGyblSeEX8G%2fHy%2bV008%3d&risl=&pid=ImgRaw&r=0')",
        name: "¿Qué puede hacer?",
        
        description:  `✔️Trate de seguir haciendo cosas que solía disfrutar
    ✔️Mantenga el contacto con amigos y familia
    ✔️ Haga ejercicio a menudo, aunque solo sea dar un paseo
    ✔️iga, si es posible, unos hábitos alimenticios y de sueño regulares
    ✔️Evite o reduzca el consumo de alcohol y no tome drogas ilícitas, que pueden empeorar la depresión
    ✔️Cuente a alguien de confianza cómo se siente
        `
      },
      {
        photo: "url('https://lavozdelmuro.net/wp-content/uploads/2015/10/depresion_4.gif')",
        name: "Síntomas y tipologías",
       
        description:  `✔️dificultades para concentrarse y un sentimiento de culpa excesiva o de baja autoestima
    ✔️ falta de esperanza acerca del futuro
    ✔️ pensamientos de muerte o suicidio
    ✔️alteraciones del sueño
    ✔️cambios en el apetito o en el peso
    ✔️sensación de cansancio acusado o de falta de energía.
        `

      },
      {
        photo: "url('https://www.recreoviral.com/wp-content/uploads/2015/10/Cosas-que-pasan-cuando-tienes-Depresi%C3%B3n-y-Ansiedad-3.gif')",
        name: "Generalidades",
        
        description: 
        ` ✔️El trastorno depresivo implica un estado de ánimo deprimido o la pérdida del placer o el interés por actividades durante largos períodos de tiempo.La depresión es distinta de los cambios habituales del estado de ánimo y los sentimientos sobre el día a día. Puede afectar a todos los ámbitos de la vida, incluidas las relaciones familiares, de amistad y las comunitarias. Puede deberse a problemas en la escuela y laborales o causarlos.
`
}
    ];

    // set the first person
    imgBox.style.backgroundImage = people[0].photo;
    name.innerText = people[0].name;
   
    description.innerText = people[0].description;
    let currentPerson = 0;

    //Select the side where you want to slide
    function slide(side, personNumber) {
      let reviewWrapWidth = reviewWrap.offsetWidth + "px";
      let descriptionHeight = description.offsetHeight + "px";
      //(+ or -)
      let side1symbol = side === "left" ? "" : "-";
      let side2symbol = side === "left" ? "-" : "";

      setTimeout(() => {
        imgBox.style.backgroundImage = people[personNumber].photo;
      }, 0);
      setTimeout(() => {
        description.style.height = descriptionHeight;
      }, 100);
      setTimeout(() => {
        name.innerText = people[personNumber].name;
      }, 200);
      
      setTimeout(() => {
        description.innerText = people[personNumber].description;
      }, 400);
    }

    function setNextCardLeft() {
      if (currentPerson === 3) {
        currentPerson = 0;
        slide("left", currentPerson);
      } else {
        currentPerson++;
      }

      slide("left", currentPerson);
    }

    function setNextCardRight() {
      if (currentPerson === 0) {
        currentPerson = 3;
        slide("right", currentPerson);
      } else {
        currentPerson--;
      }

      slide("right", currentPerson);
    }

    leftArrow.addEventListener("click", setNextCardLeft);
    rightArrow.addEventListener("click", setNextCardRight);
  </script>
</body>

</html>


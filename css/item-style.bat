@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

@font-face {
  font-family: 'helvetica';
  src: url(../fonts/Helvetica-Condensed.ttf);
  font-style: normal;
  font-weight: 200;
}

@font-face {
  font-family: 'helvetica light';
  src: url(../fonts/Helvetica-Light.ttf);
  font-style: normal;
  font-weight: 200;
}

@font-face {
  font-family: 'tisa san';
  src: url(../fonts/TisaSansPro-Light.ttf);
  font-style: normal;
  font-weight: 300;
}


*{
    margin: 0;
    padding: 0;
}

.hero{
  width: 100%;
  position: relative;
}

body{
    font-family: 'helvetica';
    font-weight: 200;
    background-color: #121212;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    background-attachment: fixed;
}

/* Section Header */

section {
  height: 100vh;
}

.header{
    min-height: 100vh;
    width: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
}

.header img{
  width: 100%;
  height:60px;
  object-fit:cover;
  object-position:50% 50%;
}

nav{
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    display: flex;
    padding: 0 6%;
    justify-content: space-between;
    align-items: center;
    background-color: #212329;
    padding-left: 10%;
    padding-right: 10%;
}

.nav-links{
    flex: 1;
    text-align: right;
}

.nav-links a{
    display: inline-block;
    color: #d8d8d8;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
    text-transform: uppercase;
}

.nav-links a:hover,
.nav-links .current{
  color: #fff;
}

.nav-links a:after{
    content:'';
    width: 0%;
    height:2px;
    display:block;
    background-color: #fff;
    margin-top: 4px;
}

.nav-links a:hover::after{
    width:100%;
    transition:all .5s;
}

.nav-links .current::after{
    width: 100%;
}

.carousel-menu{
  display: flex;
  padding: 20px 0px;
  justify-content: space-between;
  align-items: center;
  margin: 10px 13.8% -40px 9.1%;
}

.menu{
  flex: 1;
  text-align: left;
}

.menu a{
  display: inline-block;
  color: #959595;
  text-align: center;
  padding: 0px 16px;
  text-decoration: none;
  font-size: 20px;
}
.menu a:hover{
  color: #fff;
}

.menu .current{
  color: #fff;
}
.carousel-menu input{
  background-color: #2a2a2a !important  ;
  all: unset;
  font: 16px system-ui;
  color: #fff;
  padding: 4px;
  margin-top: 0px;
}
.carousel-menu input::placeholder {
  color: #fff;
  opacity: 0.7; 
}

/* Carousel*/

.pro-carousel{
  position: relative;
  padding: 0;
  top: -900px;
  display: flex;
  margin-left: 8%;
  margin-bottom: -1000px;
}
.column{
  flex: 50%;
  padding: 2%;
}
.product-card{
  margin-top: 9px;
  display: flex;
  margin-right: 49%;
  flex-direction: column;
  color: white;
}
.product-img img{
 width: 250px;
  border-radius: 5px;
}
.product-price button{
  padding: 10px 94px;
  margin-bottom: 20px;
  text-align: center;
  color: white;
  border: 0;;
  background-color: #4f9133;
  text-transform: uppercase;
  border-radius: 5px;
}
.product-price button:hover{
  filter: brightness(115%);
}
.pro-info{
  display: flex;
  justify-content: space-between;
  padding: 0;
  font-size: 20px;
  font-weight: 300;
}
.pro-info .label{
  color: #959595;
}

.carousel-inner{
  height: 100%;
}
.carousel-inner img{
  height: 100%;
  border-radius: 10px;
}
.carousel-indicators {
  position: static;
}
.carousel-indicators li {
  width: 300px;
  height: 100%;
  opacity: 0.6;
}
.carousel-indicators a:visited{
  opacity: 1;
  filter: brightness(110%);
}
.carousel-indicators li:hover{
  opacity: 1;
  filter: brightness(110%);
}

/*Product Description*/

.product-descript{
  font-family:Arial, Helvetica, sans-serif;
  position: relative;
  color: white;
  padding: 0;
  margin: 0 10%;
  font-size: 16px;
}
.pro-desc{
  text-align: left;
}
/*Footer*/

.footer-container {
  position: relative;
  background-color: #212329 !important;
  margin-top: 50px !important;
  width: 100%;
  font-family: 'tisa san' !important;
}

.footer {
  background-color: #212329;
  color: #fff;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  margin: 0 10.8% 0 4.8%;
  padding: 0;
}
.footer h2 {
  font-size: 18px;
}

.footer a {
  font-size: 14px;
}

.footer-heading {
  display: flex;
  flex-direction: column;
  margin-right: 14rem;
}

.footer-heading h2 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.footer-heading a {
  color: #fff;
  text-decoration: none;
  margin-bottom: 0.5rem;
}

.footer-heading a:hover {
  color: #4280dd;
  transition: 0.3s ease-in-out;
}

.footer-email-form{
  margin-top: 1rem;
}

.footer-email-form h2 {
  margin-bottom: 1rem;
}

.footer-email-form p {
  color: white;
  font-size: 16px;
  margin-bottom: 0.5rem;
}

#footer-email {
  width: 250px;
  height: 40px;
  outline: none;
  border: none;
  border-radius: 4px;
  font-size: 0.9rem;
}

#footer-email:placeholder {
  color: #b1b1b1;
}

#footer-email-btn {
  width: 100px;
  height: 40px;
  border-radius: 4px;
  background-color: brown;
  outline: none;
  border: none;
  color: white;
  font-size: 1rem;
}

#footer-email-btn:hover {
  cursor: pointer;
  background-color: #003d99;
  transition: All 0.4s ease-out;
}

.small-footer {
  width: 100%;
  height: 60px;
  margin-top: -10px;
  margin-bottom: 0;
  background-color: #212329;
}

.small-footer-container{
  display: flex;
  justify-content: space-between;
  margin: 0 28.5% 0 10%;
  padding: 4px 0px;
}

.copyright p {
  padding-top: 4px;
  font-family: "Calibri";
  color: #E5E5E5;
}

.social{
  padding: 0;
}
.social a{
  padding-top: 6px;
}
.social a:hover {
  color: red;
}

.icon-3d {
  padding: 7px;
  color: #FFF;
}
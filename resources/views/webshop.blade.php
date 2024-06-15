<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Webshop-F</title>
  <link rel="stylesheet" href="Webshop.css" />
 </head>
 <body>

 <style>
    * {
    margin: 0;
    padding: 0;
}

.Logo{
    justify-content: end;
    display: flex;
    font-size: 70px;
}

li {
    list-style-type: none;
    float: left;
   padding: 5px;
   margin-right: 45px;
}

header{
    display: flex;
    justify-content: center;
    margin-bottom: 60px;
    background: rgb(5, 88, 5);
}

.navbar{
    background-color: white;
    display: flex;
    padding: 20px 30px;
    justify-content: space-between;
    height: 50px;
    border-radius: 0px 0px 20px 20px;
    width: 85%;
    align-items: center;
}

/* .judul{
    color: white;
    font-size: 30px;
    width:700px;
    display: flex;
    align-items: center;
}


.tulis{
    margin-left: 90px;
    margin-bottom: -2rem;
    text-align: justify;
}

.judul img {
    border-radius: 40px 0px 40px 0px;
    width: 450px;
    height: 400px;
    display: flex;
    align-items: center;
} */

.satu {
    background: rgb(5, 88, 5);
    margin-top: -4rem;
    padding-bottom: 4rem;
}

.border{
    border: 3px solid black;
    background-color: white;
    width: 150px;
    height: 30px;
    text-align: center;
    border-radius: 15px;
    font-size: 20px;
    box-shadow: 1px 2px 0px white;
}

.judul {
    display: flex ;
    justify-content: space-between;
    padding: 0 90px;
  
}

.nama  h1{
    font-size: 5rem;
    color: white;
    padding-top: 4rem;
}

.logo img {
    width:400px;
    border-radius: 100px 0px 100px 0px;
    margin-top: 10rem;
}

.logo2 img {
    width: 350px;
    border-radius: 100%;
    margin-top: 4rem;
}


.nama2 h2, h3 {
  display: flex;
    justify-content: center;
    background-color: white;
    padding-top: 20px;
    font-size: 30px;
}

.foto1 img {
    width: 150px;
    border-radius: 50%;
}

.box1 {
    display: flex;
    align-items: center;
    padding-bottom: 3rem;
}

.box {
    flex-wrap: wrap;
}

.tulisan {
    padding-left: 10px;
    
}

.box {
    display: flex;
    justify-content: center;
    gap: 3rem;
    padding-top: 30px;
}

.box2 {
    background: rgb(186, 185, 181);
}

.tulisan2 {
    display: flex;
    justify-content: center;
    padding-top: 50px;
    font-size: 30px;
}

.menu1 {
    background: rgb(5, 88, 5);
    width: 250px;
    border-radius: 20px;
    padding-bottom: 35px;
}

.menu1-img img {
    width: 100%;
    border-radius: 20px 20px 0 0 ;
}

.menu-tulisan {
    padding-left: 25px;
    font-size: 15px;
    color: white;
}
.menu {
    display: flex;
    justify-content: center;
    gap: 4rem;
    flex-wrap: wrap;
    padding-top: 4rem;
    padding: 4rem 4rem 0 ;
    padding-bottom: 70px;
}

.box3-img img {
    width: 500px;
    border-radius: 50%;
}
.box3 {
    display: flex;
    gap: 2rem;
    padding: 2rem 1rem;
}

.box3-tulisan {
    padding-top: 6rem;
    font-size: 25px; 
}

.border2 {
    border: 3px solid black;
    border-radius:15px;
    width: 40%;
    font-size: 15px;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 30px;
}

footer{
    color: white;
    background-color: black;
     display: flex;
     justify-content: space-between;
     padding:1rem 4rem;
}

.footer-h1, .footer-p {
    width: 420px;
    padding-top: 1rem;
}
span {
    color: blue;
}

.home , .help, .social {
    padding-top: 1rem;
}


 </style>
  <header>
   <div class="navbar">
    <nav>
     <ul>
      <li>Shop</li>
      <li>Offers</li>
      <li>Categories</li>
     </ul>
    </nav>
    <div class="Logo">
     <i>Farhan</i>
    </div>
   </div>
  </header>

  <main class="satu">
   <div class="judul">
    <div class="nama">
     <h1>Select Your Home's Potensial With Our Furniture</h1>
     <div class="border">Shop at</div>
     <div class="logo2">
      <img src="sepatu.jpg" alt="" />
     </div>
    </div>
    <div class="logo">
     <img src="../assets/img/bucciarati.jpg" alt="" />
    </div>
   </div>
  </main>
  <div class="nama2">
   <h2>Best Service For You</h2>
   <h3>Enjoy your service to your service satisfaction</h3>
  </div>
  <div>
   <div class="box">
    <div class="box1">
     <div class="foto1">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="tulisan">
      <h6>Free Consulting</h6>
      <h6>24/7 for your furniture needs</h6>
     </div>
    </div>
    <div class="box1">
     <div class="foto1">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="tulisan">
      <h6>Free Consulting</h6>
      <h6>24/7 for your furniture needs</h6>
     </div>
    </div>
    <div class="box1">
     <div class="foto1">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="tulisan">
      <h6>Free Consulting</h6>
      <h6>24/7 for your furniture needs</h6>
     </div>
    </div>
   </div>
  </div>

  <section class="box2">
   <div class="tulisan2">
    <h1>Our Featureds Products</h1>
   </div>
   <div class="menu">
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
    <div class="menu1">
     <div class="menu1-img">
      <img src ="../assets/img/sepatu.jpg" alt="" />
     </div>
     <div class="menu-tulisan">
      <h2>BC Shoes</h2>
      <h2>$90.00</h2>
     </div>
    </div>
   </div>
  </section>

  <section class="box3">
   <div class="box3-img">
    <img src="../assets/img/sepatu.jpg" alt="" />
   </div>
   <div class="tulisan-tengah">
    <div class="box3-tulisan">
     <h1>WE Provide The Best Interior collection</h1>
     <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lorem nibh,
      rutrum tempor blandit non, porta ac risus. Aliquam quis mi auctor, cursus
      elit ut, porta augue. Class aptent taciti sociosqu ad litora torquent per
      conubia nostra, per inceptos himenaeos. Ut ac pellentesque ex. Integer
      quis dui mattis
     </p>
     <div class="border2">
      <p>View more-></p>
     </div>
    </div>
   </div>
   <div class="box3-img">
    <img src="sepatu.jpg" alt="" />
   </div>
  </section>

  <footer>
   <div class="teks">
    <h1 class="footer-h1"><span>F</span>arhan</h1>
    <p class="footer-p">
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lorem nibh,
     rutrum tempor blandit non, porta ac risus. Aliquam quis mi auctor, cursus
     elit ut, porta augue. Class aptent taciti sociosqu ad litora torquent per
     conubia nostra, per inceptos himenaeos. Ut ac pellentesque ex. Integer quis
     dui mattis
    </p>
   </div>

   <div class="home">
    <h1>Home</h1>
    <p>About</p>
    <p>Features</p>
    <p>Price</p>
    <p>Contact</p>
   </div>

   <div class="help">
    <h1>Help</h1>
    <p>Privacy and Police</p>
    <p>Term of use</p>
   </div>

   <div class="social">
    <h1>Social</h1>
    <p>Facebook</p>
    <p>Twitter</p>
    <p>Instagram</p>
   </div>

   <div></div>
  </footer>
 </body>
</html>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Landing Page Dicoding Indonesia</title>
 
    <!-- CSS Utama -->
    <link rel="stylesheet" href="dicoding.css">
  </head>

  <body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');


*, html, body {
  margin: 0;
  padding: 0;
  font-family: 'Quicksand', sans-serif;
}

:root{
    scroll-behavior: smooth;
}

header {
    background-color: black;
    display: flex;
    height: 80px;
    box-shadow: 0 0 3px 3px blue;
  }

  nav {
    display: flex;
    justify-content: end;
    margin-left: 20px;
  }

  nav ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    
  }

  nav li {
    display: flex;
    justify-content: flex-end;
    margin: 0 10px;
    text-align: center;
    margin:30px;

  }

  nav a {
    color: #fff;
    text-decoration: none;
  }

.logo img {
    display: flex;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    text-align: center;
    margin-top: 13px;
    margin-right: 10px;
    margin-left: 10px;
}

.card {
    display: inline;
    border: solid 2px white;
    border-radius: 5px;
   background-color: wheat
}

aside {
    width: 30%;
    margin-top: 10px;
    margin-left: 40px;
    margin-right: 20px;
}
article{
    width: 20%;
    margin-left: 10px;
    margin-top: 10px;
    padding: 7px;
    margin-right: 7px;
}

.Arm {
    display: flex;
}

.arm-p {
    margin-left: 20px;
    width: 100px;
    border-radius: 4px;
    padding-left: 20px;
    margin-top: 25px;
}

aside img {
    width: 300px;
    height: 300px;
}

.Chest {
    display: flex;
    text-align: center;
    margin-left: 660px;
}

footer{
    background-color: black;
    color: white;
    padding: 20px;
    display: flex;
}

h2{
    display: flex;
   justify-content: center;
}

.foto img {
    align-items: center;
    border-radius: 50%;
    margin-left: 130px;
    margin-bottom: 40px;
}
    </style>

    <header>
      <div class="logo">
        <img src="../assets/img/Logo.jpg" alt="">
      </div>
      <nav>
        <ul>
          <li><a href="#Arm">Arm</a></li>
          <li><a href="#Chest">Chest</a></li>
          <li><a href="#Back">Back</a></li>
          <li><a href="#Leg">Leg</a></li>
          <li><a href="#Abs">Abs</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section>
        <div class="Arm">
        <aside>
          <img src="../assets/img/Aside.jpg" alt="">
        </aside>
            <article class="card">
              <h3> Arm :</h3>
              <p>In anatomical usage, the term arm may sometimes refer specifically to the segment between the shoulder and the elbow, while the segment between the elbow and wrist is the forearm.</p>
            </article>
            <article class="card">
              <h3>Chest :</h3>
              <p> The area of the body located between the neck and the abdomen. The chest contains the lungs, the heart, and part of the aorta. The walls of the chest are supported by the dorsal vertebrae, the ribs, and the sternum.</p>
            </article>
            <article class="card">
              <h3>Back :</h3>
              <p>The human back, also called the dorsum ( PL : dorsa), is the large posterior area of the human body, rising from the top of the buttocks to the back of the neck. It is the surface of the body opposite from the chest and the abdomen.</p>
            </article>

            <article class="card">
              <h3>Leg :</h3>
              <p> the part of the body from the top of the thigh down to the foot, and in medical terminology, the portion of the lower extremity that runs from the knee to the ankle</p>
            </article>
            <article class="card">
              <h3>Abs :</h3>
              <p>The rectus abdominis muscle, (Latin: straight abdominal) also known as the "abdominal muscle" or simply the "abs", is a pair of segmented skeletal muscle on the ventral aspect of a person's abdomen (or "midriff").</p>
            </article>
      </div>
        <div class="arm-p">
          <h1 id="Arm">Arm</h1>
          <pre>
    
            <strong>Upper Arm</strong>
  The upper arm includes the shoulder as well as the area between the shoulder and elbow joint. The bones of the upper arm include the
  <strong>Scapula : </strong>The scapula is also called the shoulder blade. It’s a triangle-shaped flat bone that’s connected to the body by mostly muscle
  <strong>Clavicle : </strong> The clavicle is also called the collarbone. Like the scapula, it attaches the arm to the torso. It also helps to distribute force
  <strong>Humerus : </strong>The humerus is a long bone in the upper arm. It’s located between the scapula and the elbow joint. Many muscles and ligaments.
  The upper arm also contains several joints, including the:

            <strong>Forearm</strong>
  The forearm is the area between the elbow joint and the wrist. Its two major bones are the radius and the ulna:
  <strong>Radius : </strong>The radius is located on the side of the forearm closest to the thumb. It twists around the ulna and can change its position depending
  <strong>Ulna : </strong>The ulna runs parallel to the radius. It’s on the side of the forearm that’s closest to the pinky finger. Unlike the radius, the ulna is stationary and does

            <strong>Hand</strong>
  <strong>FIngers : </strong>Digits that extend from the palm of the hand, the fingers make it possible for humans to grip the smallest of objects.
  <strong>Palm : </strong>This is the bottom of the body of the hand.
  <strong>Back :</strong> The back of the hand shows the dorsal venous network, a web of veins.
  <strong>Wrist : </strong>The connection point between the arm and the hand, the wrist enables hand movements. 

          </pre>

          <h1 Id="Chest">Chest</h1>
          <pre>
              <strong>Pectoralis Major</strong>
  The pectoralis major is the most superficial muscle in the pectoral region. It is large and fan shaped, and is composed of a sternal head and a clavicular head:
  <strong>Clavicular head-</strong> originates from the anterior surface of the medial clavicle.
  <strong>Sternocostal head-</strong> originates from the anterior surface of the sternum, the superior six costal cartilages and the aponeurosis of the external oblique muscle.
  The distal attachment of both heads is onto the intertubercular sulcus of the humerus.
  Function: Adducts and medially rotates the upper limb and draws the scapula anteroinferiorly. The clavicular head also acts individually to flex the upper limb.
  Innervation: Lateral and medial pectoral nerves.

  <div class="Chest">
    <img src="../assets/img/Chest1.png"alt="" width="300px" height="100px">
    <img src="../assets/img/Chest2.jpg" alt=""  width="300" height="100px">
    <img src="../assets/img/Chest3.jpg" alt="" width="300px" height="100px">
  </div>
              <strong>Pectoralis Minor</strong>
  The pectoralis minor lies underneath its larger counterpart muscle, pectoralis major. Both muscles form part of the anterior wall of the axilla region.
  Attachments: Originates from the 3rd-5th ribs and inserts into the coracoid process of the scapula.
  Function: Stabilises the scapula by drawing it anteroinferiorly against the thoracic wall.
  Innervation: Medial pectoral nerve.
          </pre>


          <h1>Back</h1>
          <pre>
            <strong>Latissimus dorsi (lats)</strong>, the largest muscle in the upper part of your body. It starts below your shoulder blades and extends to your spine in lower part
  <strong>Levator scapulae</strong>, a smaller muscle that starts at the side of your neck and extends to the scapula (shoulder blade).
  <strong>Rhomboids</strong>, two muscles that connect the scapula to the spine.
  <strong>Trapezius (traps)</strong>, which start at your neck, go across your shoulders and extend to a “V” in your lower back.
          </pre>

          <h1 id="Leg">Leg</h1>
          <pre>
            <strong>Anterior muscles :</strong> 
  You have four muscles in the anterior (front) part of the lower leg. They extend from your knee down to your foot. They are:
  Extensor digitorum longus.
  Extensor halluces longus.
  Fibularis tertius.
  Tibialis anterior.
          </pre>

          <h1 id=Abs>Abs</h1>
          <pre>
  Your abdominal muscles are a set of strong bands of muscles lining the walls of your abdomen (trunk of your body). They’re located toward the front of body
  There are five main muscles in the abdomen:
  <strong>
  External obliques.
  Internal obliques.
  Pyramidalis.
  Rectus abdominis.
  Transversus abdominis.
  </strong>
          </pre>
        </div>  

      </section>
    </main>
      <footer>
          <p>Farhan &#169, 2023, SMK WIKRAMA BOGOR</p>
    </footer>
  </body>
</html>

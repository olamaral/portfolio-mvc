<!DOCTYPE html>
<html lang="<?php echo $data['lang'] ?? 'en'; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <title><?php echo htmlspecialchars($data['name']); ?> - Portfolio</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#underNav"><?php echo htmlspecialchars($data['aboutNav']); ?></a></li>
        <li><a href="#skills"><?php echo htmlspecialchars($data['skillsNav']); ?></a></li>
        <li><a href="#demoReel"><?php echo htmlspecialchars($data['portfolioNav']); ?></a></li>
        <li><a href="#contactMe"><?php echo htmlspecialchars($data['contactNav']); ?></a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div id="underNav">
      <br>
    </div>


    <div id="containerteste">
      <div class="banner">
        <img class= "robotGif" src="/images/robotBanner.gif" alt="">
        <div class="language-switcher">
            <button onclick="switchLanguage('en')"><img class="flagIcon" src="/images/usa-flag.png" alt="">English</button>
            <button onclick="switchLanguage('pt')"><img class="flagIcon" src="/images/brazil-flag.png" alt="">Português</button>
            <button onclick="switchLanguage('ja')"><img class="flagIcon" src="/images/japan-flag.png" alt="">日本語</button>
        </div>
      </div>
      <div id="textoteste">
        <div id="aboutMeName">
          <h1><?php echo htmlspecialchars($data['name']); ?></h1>
          <h2><?php echo htmlspecialchars($data['title']); ?></h2>
        </div>
        <div id="aboutMeText">
          <p><?php echo htmlspecialchars($data['about']); ?><span><?php echo htmlspecialchars($data['location']); ?></span></p>
        </div>
        <button><a href="/images/resumePallomaQueiroz3DArtist.pdf" target="_blank"><?php echo htmlspecialchars($data['resume']); ?></a></button>
      </div>
    </div>


    <section id="skills">
      <div class="h2Container">
        <h2><?php echo htmlspecialchars($data['skills']); ?></h2>
      </div>
      <div class="buttonsContainer">
        <button class="softwareButtons"><?php echo htmlspecialchars($data['3dmodelling']); ?></button>
        <button class="softwareButtons"><?php echo htmlspecialchars($data['texturing']); ?></button>
        <button class="softwareButtons"><?php echo htmlspecialchars($data['lightening']); ?></button>
        <button class="softwareButtons"><?php echo htmlspecialchars($data['rendering']); ?></button>
        <button class="softwareButtons"><?php echo htmlspecialchars($data['postProduction']); ?></button>
        <button class="softwareButtons"><?php echo htmlspecialchars($data['animation']); ?></button>
      </div>
    </section>
    <section id="softwareProficiency">
      <h2><?php echo htmlspecialchars($data['softwareProfiency']); ?></h2>
    
      <div class="ulContainer">

        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/maya.png" alt="">
          </div>
          <div class="softwareName">
            <h5>Maya</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/vray2.png" alt="">
          </div>
          <div class="softwareName">
            <h5>V-Ray</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/substancepainter.jpeg" alt="">
          </div>
          <div class="softwareName">
            <h5>Substance</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/zbrushcircle.png" alt="">
          </div>
          <div class="softwareName">
            <h5>ZBrush</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/blender.png" alt="">
          </div>
          <div class="softwareName">
            <h5>Blender</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/aftereffects.png" alt="">
          </div>
          <div class="softwareName">
            <h5>After Effects</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/photoshop.png" alt="">
          </div>
          <div class="softwareName">
            <h5>Photoshop</h5>
          </div>
        </div>


        <div class="softwares">
          <div class="softwareIcon">
            <img src="/images/unreal2.png" alt="">
          </div>
          <div class="softwareName">
            <h5>Unreal Engine</h5>
          </div>
        </div>


      </div>


      </div>
    </section>
    <section id="demoReel">
      <h2><?php echo htmlspecialchars($data['demoReel']); ?></h2>
      <div class="demoReelContainer">
        <div class="iframeContainer">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/cwATdUNc6J4?si=JVDqd-CHkvy94rxO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="demoReelText">
          <span class="demoReelTextTimeframe">Demo Reel - 2022</span>
          <br>
          <p>This demo reel highlights my work in rendering and animation, including contributions to the animated film Celeste  and commercials for Brazilian and international brands like the startup Free Eletrons</p>
        </div>
      </div>

      <div class="demoReelContainer">
        <div class="iframeContainer">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oMiBI3AzTTo?si=19HR6wE-mMt_in2B&amp;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


        <div class="demoReelText">
          <p><span class="demoReelTextTimeframe">0:00 - 0:15 Dragon</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown p Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
        </div>

      </div>

    </section>


    <section id="contactMe">
      <h2><?php echo htmlspecialchars($data['contact']); ?></h2>
      <div id="form">
          <!--Para melhroas a segurança, o envio via web3forms foi substituido por formspree, com filtro de span e Capcha -->
        <form action="https://formspree.io/f/xjkvjeyq" method="POST" />
          <label for="name"><?php echo htmlspecialchars($data['nameLabel']); ?></label>
          <input type="text" id="name" name="name" required="">
          <label for="email"><?php echo htmlspecialchars($data['emailLabel']); ?></label>
          <input type="email" id="email" name="email">
          <label for="message"><?php echo htmlspecialchars($data['messageLabel']); ?></label>
          <input type="text" id="message" name="message">
          <input type="submit" id="submitButton" value="<?php echo htmlspecialchars($data['submitLabel']); ?>">
        </form>
      </div>
    </section>
  </main>
  <script src="/js/script.js"></script>

</body>


</html>
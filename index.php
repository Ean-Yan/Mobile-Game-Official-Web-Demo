<?php
  session_start();
  $hello="Log-in";
  $id = "Register";
  if((!empty($_SESSION['successful'])) && $_SESSION['successful']){
    $hello="Hello,";
    $id = $_SESSION['login_id'];
  }
?>

<html>

<head>
  <title>Arknights</title>
  <meta charset="utf-8" />
  <meta name="Arknights_Demo" content="width=device-width,initial-scale=1.0" />
  <link rel="shortcut icon" href="img/icons-tag.png" />
  <link rel="stylesheet" href="CSS/main.css" />
  <script src="JQuery/jquery-3.4.1.js" type="text/javascript"></script>
  <script src="JQuery/jquery-ui.js"></script>
  <script src="./jsFiles/homepage.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
  <div id="header">
    <!--fullScreen Video-->
    <div class="fullscreen_wrap">
      <video id="ark_video" src="video/ark-video.mp4" autoplay="true" loop="true" muted="muted"></video>
    </div>

    <!--Over lay-->
    <div class="Video_Overlay"></div>
    <!-- navbar & dropdown -->
    <div class="dropdown">
      <button id="nevBtn" class="dropBtn" onclick="dpdmenu()" onblur="dpdmenuLoseFocus()"></button>
      <div class="dropdown_content">
        <a href="#header">Home</a>
        <a href="#categories">About</a>
        <a href="#clanJump">Alliance</a>
      </div>
    </div>

    <!-- login list -->
    
    <div>
      <ul id="header_li">
        <li><a href="ark-login.php"><?php echo $hello;?></a></li>
        <li><a href="ark-register.php"><?php echo $id;?></a></li>
      </ul>
    </div>
    <!--Logo-->
    <div><img class="Logo" src="img/Logo.png" /></div>

    <!--Play btn-->
    <div class="playbtn" onclick="playVideo()" data-toggle="modal" data-target="#videoModal"></div>

    <!--Popup Video Modal-->
    <div class="modal fade" id="videoModal">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">

          <div class="modal-body" id="video-body">
            <video width="100%" class="popVideo" controls>
              <source src="video/ark-video.mp4" type="video/mp4">
            </video>
            <button type="button" onclick="pauseVideo()" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--Download links-->
    <div class="downloads">
      <div class="left">
        <div class="goleft">
          <hr class="hrs">
          <img class="scan_img" src="img/Scan_Code.png" />
          <p id="left_words">Scan to Download &nbsp;&nbsp;&nbsp; RHODE'S</p>
          <hr class="hrs">
        </div>
      </div>
      <div class="right">
        <div class="goright">
          <hr class="hrs">
          <ul class="app_links">
            <li><a href="https://itunes.apple.com/cn/app/id1454663939?mt=8" target="_blank"><img
                  src="img/link_apple.png" /></a></li>
            <li><a href="https://ak.hypergryph.com/downloads/android_lastest"><img src="img/link_android.png" /></a>
            </li>
            <li><a href="https://l.taptap.com/UsXMIuxq" target="_blank"><img src="img/link_tap.png" /></a></li>
            <li><a
                href="http://dldir1.qq.com/syzs/gamedownload_i18n$100505$641D210AE5A54C3A1C0AC7B70C0F03F6$_SpecialPackage_186.exe"
                target="_blank"><img src="img/link_pc.png" /></a></li>
          </ul>
          <p id="rigth_words">&nbsp;&nbsp;ISLAND</p>
          <hr class="hrs">
        </div>
      </div>
      <input type="button" id="toggleBtn" name="" onclick="dowload_slide_toggle()" />
    </div>
  </div>

  <div id="main">
    <div id="categories" class="category-wrap" onmousemove="mouseon(event)">
      <div class="category-container">
        <div class="category-img" id="stone-frame">
          <img class="stone-img" src="img/item_stone.png" onmouseover="toggleInfo('-Originiums-')"
            onmouseout="toggleInfo('-Originiums-')" data-toggle="modal" data-target="#itemModal-stone" />
        </div>
        <div class="category-img" id="city-frame">
          <img class="city-img" src="img/item_city.png" onmouseover="toggleInfo('-Nomanic City-')"
            onmouseout="toggleInfo('-Nomanic City-')" data-toggle="modal" data-target="#itemModal-city" />
        </div>
        <div class="category-img" id="crafts-frame">
          <img class="crafts-img" src="img/item_crafts.png" onmouseover="toggleInfo('-Originium Arts-')"
            onmouseout="toggleInfo('-Originium Arts-')" data-toggle="modal" data-target="#itemModal-arts" />
        </div>
        <div class="category-img" id="infected-frame">
          <img class="infected-img" src="img/item_infected.png" onmouseover="toggleInfo('-Infected-')"
            onmouseout="toggleInfo('-Infected-')" data-toggle="modal" data-target="#itemModal-infected" />
        </div>
        <div class="category-img" id="rhodes-frame">
          <img class="rhodes-img" src="img/item_rhodes.png" onmouseover="toggleInfo('-Rhodes Island-')"
            onmouseout="toggleInfo('-Rhodes Island-')" data-toggle="modal" data-target="#itemModal-rhodes" />
        </div>
        <div class="category-img" id="bottle-frame">
          <img class="bottle-img" src="img/item_bottle.png" onmouseover="toggleInfo('-Reunion-')"
            onmouseout="toggleInfo('-Reunion-')" data-toggle="modal" data-target="#itemModal-reunion" />
        </div>
        <!--hover to show-->
        <div id="pic-info-div"><input type="button" id="pic-info" value="" /></div>

        <!------------click & pop window--------------->

        <!--                stone-->

        <div class="modal fade" id="itemModal-stone" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header">
                <h3 class="modal-title" id="itemTitle">ORIGINIUMS</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>The earth was ravaged by unexplained natural disasters.
                  A large number of mysterious minerals, the “Originums”,
                  appeared on the land that swept by natural disasters.
                  Depending on the advancement of technology, the energy
                  contained in the originiums is put into the industry,
                  which makes the civilization entering the modern era quickly.
                  At the same time, the source stone itself has spawned the existence
                  of the "infected".</p>
              </div>
            </div>
          </div>
        </div>

        <!--                infected-->

        <div class="modal fade" id="itemModal-infected" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header" id="item-header">
                <h3 class="modal-title" id="itemTitle">INFECTED</h3>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>People who are infected by the source stone have a theoretical mortality rate of 100%. They are
                  spread contagious and potentially dangerous when they die. They are the targets of isolation and
                  expulsion of governments. For a long time, no one told them how to spend the rest of their lives. Now
                  with the emergence of a subversive person, more and more infected people have been included in a
                  revolution called “reunion”.</p>
              </div>
            </div>
          </div>
        </div>

        <!--                arts-->

        <div class="modal fade" id="itemModal-arts" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header" id="item-header">
                <h3 class="modal-title" id="itemTitle">ORIGINIUM ARTS</h3>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>After the Originium was found, people discovered that spells can be casted by the originums. The
                  energy used in originum technique is generally come from the source stone itself. Whether a person can
                  cast spells, as well as the form, intensity, and effect of the spells that can be cast, is usually
                  constrained by the innate quality and learning ability of the user.</p>
              </div>
            </div>
          </div>
        </div>

        <!--                reunion-->

        <div class="modal fade" id="itemModal-reunion" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header" id="item-header">
                <h3 class="modal-title" id="itemTitle">REUNION</h3>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>A non-racial stand, an extremely exclusive organization of infected people. They claim that "infected
                  people are proud of their identity and actively acquire and use their own strength." Try to use the
                  most primitive means to compete for the justice of the world. Beginning with a great city that was
                  destroyed, the sudden intervention of the medical institution “Rhode Island” made the whole situation
                  develop towards the unknown.</p>
              </div>
            </div>
          </div>
        </div>

        <!--                Rhodes-->

        <div class="modal fade" id="itemModal-rhodes" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header" id="item-header">
                <h3 class="modal-title" id="itemTitle">RHODE'S ISLAND</h3>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>Rhode Island Pharmaceuticals, as an expert on infectious diseases, employs infected people and goes
                  deep into dangerous areas. Through various means, it has successfully solved several incidents caused
                  by infected people. Today, they will face an unprecedented riot of infected people. Swim between the
                  various forces, discover the unknown insider, resist the crazy attack of the infected person, your
                  decision will determine the direction of Rhode Island.</p>
              </div>
            </div>
          </div>
        </div>

        <!--                City-->

        <div class="modal fade" id="itemModal-city" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="item-content">
              <div class="modal-header" id="item-header">
                <h3 class="modal-title" id="itemTitle">NOMADIC CITY</h3>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="item-popup-body">
                <p>A city built on mobile devices. Frequent and devastating natural disasters force almost all countries
                  to evade by regularly migrating their homes and settlements. The mobile city is slowly born under this
                  demand. In the process of migration, people try to install buildings and various devices on mobile
                  devices, and continue to expand the scale of vehicles. Under the evolution of civilization and
                  technology, people eventually created a very large mobile city.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="clanJump" class="main2">
      <div class="clan-container">
        <ul>
          <li><div class="clan-background" id="clan-rohds">
            <div class="clansCover">
              <img class="clanlogo" id="rhodes-icon" src="./img/rhodes_logo2.png" />
            </div></div></li>

          <li><div class="clan-background" id="clan-longmen">
            <div class="clansCover">
              <img class="clanlogo" id="longmen-icon" src="./img/clan-longmen.png"/>
            </div></div></li>

          <li><div class="clan-background" id="clan-penguin">
            <div class="clansCover">
              <img class="clanlogo" id="penguin-icon" src="./img/clan-penguin.png"/>
          </div></div></li>

          <li><div class="clan-background" id="clan-rhine">
            <div class="clansCover">
              <img class="clanlogo" id="rhine-icon" src="./img/clan-RhineLab.png"/>
            </div></div></li>

          <li><div class="clan-background" id="clan-bs">
            <div class="clansCover">
              <img class="clanlogo" id="bs-icon" src="./img/clan-BlackSteel.png"/>
          </div></div></li>
        </ul>

      </div>
    </div>
  </div>

  <div id="footer">
    <div class="footerWrap" >
      <hr id="footerHR1" color="white">

      <div id="project_resources_container">
        <h5>About this website</h5>
        <h6>This website is a brief introdunction about the mobile game "Arknights" which is developed by Hypergryph.Inc and released for Android and IOS market. (all rights of pictures, videos, and icons used in this website are reserved to Hypergryph.Inc)</h6>
        <h6>LIBRARIES & TOOLS USED</h6>
        <ul>
          <li>JQuery (node_modules)</li>
          <li>XAMPP (local host)</li>
          <li>Bootstrap</li>
          <li>PHP for server</li>
          <li>MYSQL</li>
        </ul>
      </div>
      <br>
      <h5><a href="#header" style="color: antiquewhite; text-decoration: none;">Jiazheng Yan</a></h5>
    </div>
  </div>
</body>

</html>
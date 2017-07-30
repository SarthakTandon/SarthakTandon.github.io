<?php
session_start();
$name=$_SESSION["name"];
$connection=mysqli_connect('localhost','root','','monitor');
    
if(isset($_POST['logout']))
    {
                session_destroy();
                echo "<script>document.location.href='index.php'</script>";
    }
?>
<html>
<title>Education 2.0</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  font-family: Helvetica;
  margin: 0%;
}
html,h1,h2,h3,h4,h5 {font-family: Helvetica;}
</style>
<body class="w3-light-grey">
<div class="w3-right-align"><form method="POST"><input type="submit" value="LOG OUT" name="logout"/></form></div>
<!-- Top container-->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left"><img src="3.png" style="height: 50px;width: 50px;"></span>      
  <h3>EDUCATION 2.0</h3>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;margin-top: 30px" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="2.png" class="w3-circle w3-margin-right" style="width:50px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $name?></strong></span><br>    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="page2.html" class="w3-bar-item w3-button w3-padding  w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="BIG5.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i>  BIG5</a>
    <a href="Concentration.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cogs fa-fw"></i>  Concentration</a>
    <a href="lead.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-anchor fa-fw"></i>  Leadership</a>
    <a href="lifeSat.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pie-chart fa-fw"></i>  Life Satisfaction</a>
    <a href="intelligence.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-mortar-board fa-fw"></i>  Intelligence</a>
    <a href="psyAge.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-child fa-fw"></i>  Psychological Age</a>
    </div>
</nav>


<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;padding-bottom: 20px">

  <!-- Header -->
  <header class="w3-container" style="padding-top:50px">
    <h5 style="font-size: 25px;"><b><i class="fa fa-dashboard" style="font-size:30px;"></i> My Personality Model</b></h5>
    <p style="font-size: 16px;font-style: justify;"><i class="fa fa-quote-left" style="font-size:18px;padding-right: 10px;"></i><strong>It has been recently shown that the digital footprint of users can be used to automatically infer their personality. Research in Psychology shows that automated personality judgments based on Facebook Likes are more accurate than those made by users’ friends or even their spouses</strong><i class="fa fa-quote-right" style="font-size:18px;padding-left: 10px;"></i></p>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b1"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Conscientiousness</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b2"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Openness</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b3"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Extroversion</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b4"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Agreeableness</h4>
      </div>
    </div>
  </div>
    <div class="w3-row-padding w3-margin-bottom">
<div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b5"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Emotional Stability</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b6"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Engineering</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b7"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Education</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b8"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Psychology</h4>
      </div>
    </div>
  </div>
      <div class="w3-row-padding w3-margin-bottom">
<div class="w3-quarter">
      <div class="w3-container w3-orange w3-padding-16 w3-text-white">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b9"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Leadership</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16 w3-text-white">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b10"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Life Satisfaction</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b11"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Intelligence</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-purple w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3 id="b12"></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Psychological Age</h4>
      </div>
    </div>
  </div>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Contact</h5>
        <p>contact@education2-0.com</p>
        <p>+1 234 567 8901</p>
        <p></p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Find us here</h5>
        <p>150 Old Airport Road, Diamond District, Tower B, Lower Ground Floor, Kodihalli, Bengaluru, Karnataka 560008</p>
        <p></p>
        <p></p>
      </div>
      <div class="w3-container w3-third" >
        <h5 class="w3-bottombar w3-border-orange">Connect with us</h5>
        <div class="w3-container w3-third" >
        <a href="#" class="fa fa-facebook" style="padding: 20px;font-size: 35px;width: 30px;text-align: center;text-decoration: none;border-radius: 50%;"></a>
      </div>
        <div class="w3-container w3-third" >
        <a href="#" class="fa fa-twitter" style="padding: 20px;font-size: 35px;width: 30px;text-align: center;text-decoration: none;border-radius: 50%;"></a>
      </div>
        <div class="w3-container w3-third" >
        <a href="#" class="fa fa-google-plus" style="padding: 20px;font-size: 35px;width: 30px;text-align: center;text-decoration: none;border-radius: 50%;"></a>     
      </div>

      </div>
    </div>
  </div>
</div>

<script>
var mySidebar = document.getElementById("mySidebar");

var overlayBg = document.getElementById("myOverlay");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

<script>
var mySidebar = document.getElementById("mySidebar");

var overlayBg = document.getElementById("myOverlay");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>


<script>
var obj = {
  "interpretations": [
    {
      "trait": "Jungian_Personality",
      "value": "INTJ"
    },
    {
      "trait": "Leadership",
      "value": 0.4959002919823371
    }
  ],
  "predictions": [
    {
      "trait": "Religion_Lutheran",
      "value": 0.02408079471343009
    },
    {
      "trait": "Relationship_Yes",
      "value": 0.29648346871412407
    },
    {
      "trait": "Concentration_Engineering",
      "value": 0.08784592738965402
    },
    {
      "trait": "Religion_Jewish",
      "value": 0.021597734361983444
    },
    {
      "trait": "Gay",
      "value": 0.04557123326882275
    },
    {
      "trait": "Politics_Liberal",
      "value": 0.7859755773482324
    },
    {
      "trait": "Concentration_Psychology",
      "value": 0.1401400654591904
    },
    {
      "trait": "Concentration_Law",
      "value": 0.06035999217145458
    },
    {
      "trait": "Concentration_IT",
      "value": 0.07070635492887552
    },
    {
      "trait": "Lesbian",
      "value": 0.027215757939453314
    },
    {
      "trait": "Religion_Catholic",
      "value": 0.21987230552352058
    },
    {
      "trait": "Concentration_Nursing",
      "value": 0.07383702553890233
    },
    {
      "trait": "Concentration_Journalism",
      "value": 0.11305878170948247
    },
    {
      "trait": "Satisfaction_Life",
      "value": 0.3851430421616237
    },
    {
      "trait": "Female",
      "value": 0.4724396664258423
    },
    {
      "trait": "Politics_Conservative",
      "value": 0.11008772896840217
    },
    {
      "trait": "Concentration_Biology",
      "value": 0.06598108599307646
    },
    {
      "trait": "Concentration_Art",
      "value": 0.10033745019627288
    },
    {
      "trait": "Politics_Libertanian",
      "value": 0.0502773360219935
    },
    {
      "trait": "BIG5_Extraversion",
      "value": 0.38513293240272695
    },
    {
      "trait": "BIG5_Agreeableness",
      "value": 0.3930542819673768
    },
    {
      "trait": "Relationship_None",
      "value": 0.4874824466661055
    },
    {
      "trait": "Concentration_Finance",
      "value": 0.05512547648196422
    },
    {
      "trait": "Religion_Mormon",
      "value": 0.0074787640142444396
    },
    {
      "trait": "Relationship_Married",
      "value": 0.2160340846197705
    },
    {
      "trait": "Religion_None",
      "value": 0.428346657121239
    },
    {
      "trait": "BIG5_Neuroticism",
      "value": 0.4566585969199314
    },
    {
      "trait": "BIG5_Conscientiousness",
      "value": 0.5254347284561844
    },
    {
      "trait": "Religion_Christian_Other",
      "value": 0.2986237442655825
    },
    {
      "trait": "Concentration_Education",
      "value": 0.04896173131709491
    },
    {
      "trait": "Intelligence",
      "value": 0.4681108122088925
    },
    {
      "trait": "BIG5_Openness",
      "value": 0.6220364669316379
    },
    {
      "trait": "Concentration_History",
      "value": 0.07741902070481088
    },
    {
      "trait": "Concentration_Business",
      "value": 0.10622708810922134
    },
    {
      "trait": "Politics_Uninvolved",
      "value": 0.053659357661372024
    },
    {
      "trait": "Age",
      "value": 27.67341724448265
    }
  ],
  "contributors": [
    {
      "trait": "Religion_Lutheran",
      "positive": [
        "35481394342",
        "7976226799",
        "5878552155"
      ],
      "negative": [
        "6815841748",
        "9328458887",
        "12463674069"
      ]
    },
    {
      "trait": "Relationship_Yes",
      "positive": [
        "12463674069",
        "10429446003",
        "9328458887"
      ],
      "negative": [
        "6815841748",
        "35481394342",
        "7976226799"
      ]
    },
    {
      "trait": "Concentration_Engineering",
      "positive": [
        "12463674069",
        "9328458887",
        "35481394342"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "5878552155"
      ]
    },
    {
      "trait": "Gay",
      "positive": [
        "12463674069",
        "18807449704",
        "7976226799"
      ],
      "negative": [
        "6815841748",
        "35481394342",
        "9328458887"
      ]
    },
    {
      "trait": "Religion_Jewish",
      "positive": [
        "6815841748",
        "12463674069",
        "9328458887"
      ],
      "negative": [
        "35481394342",
        "10429446003"
      ]
    },
    {
      "trait": "Concentration_Psychology",
      "positive": [
        "7976226799",
        "6815841748",
        "12463674069"
      ],
      "negative": [
        "35481394342",
        "9328458887",
        "5878552155"
      ]
    },
    {
      "trait": "Politics_Liberal",
      "positive": [
        "6815841748",
        "7976226799",
        "9328458887"
      ],
      "negative": [
        "10429446003",
        "115384328477363",
        "5878552155"
      ]
    },
    {
      "trait": "Concentration_IT",
      "positive": [
        "7976226799",
        "12463674069",
        "18807449704"
      ],
      "negative": [
        "6815841748",
        "35481394342",
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_Law",
      "positive": [
        "5878552155",
        "18807449704"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "35481394342"
      ]
    },
    {
      "trait": "Lesbian",
      "positive": [
        "7976226799",
        "12463674069",
        "10429446003"
      ],
      "negative": [
        "35481394342",
        "6815841748",
        "18807449704"
      ]
    },
    {
      "trait": "Concentration_Nursing",
      "positive": [
        "7976226799",
        "10429446003",
        "9328458887"
      ],
      "negative": [
        "6815841748",
        "35481394342",
        "12463674069"
      ]
    },
    {
      "trait": "Religion_Catholic",
      "positive": [
        "35481394342",
        "9328458887",
        "18807449704"
      ],
      "negative": [
        "7976226799",
        "6815841748",
        "10429446003"
      ]
    },
    {
      "trait": "Satisfaction_Life",
      "positive": [
        "7976226799",
        "12463674069",
        "10429446003"
      ],
      "negative": [
        "6815841748",
        "35481394342",
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_Journalism",
      "positive": [
        "35481394342",
        "6815841748",
        "7976226799"
      ],
      "negative": [
        "12463674069",
        "9328458887"
      ]
    },
    {
      "trait": "Female",
      "positive": [
        "6815841748",
        "7976226799"
      ],
      "negative": [
        "35481394342",
        "9328458887",
        "18807449704"
      ]
    },
    {
      "trait": "Concentration_Biology",
      "positive": [
        "7976226799",
        "6815841748",
        "9328458887"
      ],
      "negative": [
        "35481394342",
        "12463674069",
        "10429446003"
      ]
    },
    {
      "trait": "Politics_Conservative",
      "positive": [
        "35481394342",
        "12463674069"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_Art",
      "positive": [
        "10429446003",
        "35481394342",
        "5878552155"
      ],
      "negative": [
        "7976226799",
        "12463674069",
        "6815841748"
      ]
    },
    {
      "trait": "Politics_Libertanian",
      "positive": [
        "7976226799",
        "18807449704",
        "12463674069"
      ],
      "negative": [
        "6815841748",
        "9328458887",
        "10429446003"
      ]
    },
    {
      "trait": "BIG5_Extraversion",
      "positive": [
        "35481394342",
        "6815841748",
        "9328458887"
      ],
      "negative": [
        "7976226799",
        "12463674069",
        "10429446003"
      ]
    },
    {
      "trait": "BIG5_Agreeableness",
      "positive": [
        "7976226799",
        "5878552155"
      ],
      "negative": [
        "35481394342",
        "6815841748",
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_Finance",
      "positive": [
        "12463674069",
        "35481394342",
        "18807449704"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "9328458887"
      ]
    },
    {
      "trait": "Relationship_None",
      "positive": [
        "9328458887",
        "10429446003",
        "115384328477363"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "12463674069"
      ]
    },
    {
      "trait": "Religion_Mormon",
      "positive": [
        "115384328477363"
      ],
      "negative": [
        "7976226799",
        "6815841748",
        "35481394342"
      ]
    },
    {
      "trait": "Religion_None",
      "positive": [
        "7976226799",
        "6815841748",
        "12463674069"
      ],
      "negative": [
        "35481394342",
        "10429446003",
        "5878552155"
      ]
    },
    {
      "trait": "Relationship_Married",
      "positive": [
        "7976226799",
        "35481394342",
        "6815841748"
      ],
      "negative": [
        "9328458887",
        "10429446003",
        "12463674069"
      ]
    },
    {
      "trait": "BIG5_Conscientiousness",
      "positive": [
        "35481394342",
        "7976226799",
        "12463674069"
      ],
      "negative": [
        "6815841748",
        "10429446003",
        "115384328477363"
      ]
    },
    {
      "trait": "BIG5_Neuroticism",
      "positive": [
        "35481394342",
        "6815841748",
        "12463674069"
      ],
      "negative": [
        "7976226799",
        "9328458887",
        "10429446003"
      ]
    },
    {
      "trait": "Religion_Christian_Other",
      "positive": [
        "12463674069",
        "10429446003"
      ],
      "negative": [
        "7976226799",
        "35481394342",
        "6815841748"
      ]
    },
    {
      "trait": "Intelligence",
      "positive": [
        "7976226799",
        "9328458887",
        "10429446003"
      ],
      "negative": [
        "35481394342",
        "12463674069",
        "6815841748"
      ]
    },
    {
      "trait": "Concentration_Education",
      "positive": [
        "12463674069",
        "6815841748"
      ],
      "negative": [
        "7976226799",
        "35481394342",
        "9328458887"
      ]
    },
    {
      "trait": "BIG5_Openness",
      "positive": [
        "6815841748",
        "7976226799",
        "35481394342"
      ],
      "negative": [
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_History",
      "positive": [
        "35481394342",
        "7976226799",
        "6815841748"
      ],
      "negative": [
        "9328458887"
      ]
    },
    {
      "trait": "Concentration_Business",
      "positive": [
        "7976226799",
        "35481394342",
        "9328458887"
      ],
      "negative": [
        "12463674069",
        "10429446003",
        "6815841748"
      ]
    },
    {
      "trait": "Politics_Uninvolved",
      "positive": [
        "12463674069",
        "9328458887",
        "10429446003"
      ],
      "negative": [
        "6815841748",
        "7976226799",
        "35481394342"
      ]
    },
    {
      "trait": "Age",
      "positive": [
        "10429446003",
        "9328458887",
        "12463674069"
      ],
      "negative": [
        "7976226799",
        "35481394342",
        "6815841748"
      ]
    }
  ],
  "input_used": 9
};
var myJSON = JSON.stringify(obj);

var Leadership = myJSON.slice(77, 87);
var lead_val = parseFloat(myJSON.substr(97,7))*Math.pow(10,2);

var conc_engg = myJSON.substr(258,25);
var conc_engg_val =parseFloat(myJSON.substr(258+35,7))*Math.pow(10,3);

var conc_psy = myJSON.substr(481,24);
var conc_psy_val =Math.round(parseFloat( myJSON.substr(481+34,7))*Math.pow(10,2));

var sat_life = myJSON.substr(894,17);
var sat_life_val =parseFloat( myJSON.substr(894+27,7))*Math.pow(10,2);

var b5_ext = myJSON.substr(1239,17);
var b5_ext_val = Math.round(parseFloat(myJSON.substr(1239+27,7))*Math.pow(10,2));

var b5_agr = myJSON.substr(1297,18);
var b5_agr_val =parseFloat( myJSON.substr(1297+28,7))*Math.pow(10,2);

var b5_neur = myJSON.substr(1644,16);
var b5_neur_val =parseFloat( myJSON.substr(1644+26,7))*Math.pow(10,2);

var b5_consc = myJSON.substr(1700,22);
var b5_consc_val = parseFloat(myJSON.substr(1700+32,7))*Math.pow(10,2);

var conc_ed = myJSON.substr(1826,23);
var conc_ed_val =parseFloat( myJSON.substr(1826+33,7))*Math.pow(10,3);

var intel = myJSON.substr(1890,12);
var intel_val = parseFloat(myJSON.substr(1890+22,7))*Math.pow(10,2);

var b5_open = myJSON.substr(1942,13);
var b5_open_val =parseFloat( myJSON.substr(1942+23,7))*Math.pow(10,2);

var m_age = myJSON.substr(2181,3);
var m_age_val = parseFloat(myJSON.substr(2181+13,7));

document.getElementById("b1").innerHTML = b5_consc_val.toPrecision(4) + "%";
document.getElementById("b2").innerHTML = b5_open_val.toPrecision(4) + "%";
document.getElementById("b3").innerHTML = b5_ext_val.toPrecision(4) + "%";
document.getElementById("b4").innerHTML = b5_agr_val.toPrecision(4) + "%";
document.getElementById("b5").innerHTML = b5_consc_val.toPrecision(4) + "%";
document.getElementById("b6").innerHTML = conc_engg_val.toPrecision(4) + "%";
document.getElementById("b7").innerHTML = conc_ed_val.toPrecision(4) + "%";
document.getElementById("b8").innerHTML = conc_psy_val.toPrecision(4) + "%";
document.getElementById("b9").innerHTML = lead_val.toPrecision(4) + "%";
document.getElementById("b10").innerHTML = sat_life_val.toPrecision(4) + "%";
document.getElementById("b11").innerHTML = intel_val.toPrecision(4) + "%";
document.getElementById("b12").innerHTML = m_age_val.toPrecision(2);

</script>

</body>
</html>


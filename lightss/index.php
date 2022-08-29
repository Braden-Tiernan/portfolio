@import url('https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap');

:root {
  --maincolor:#0a192f;
  --lightmc2:#ccd6f6;
  --lightmc:#8892b0;
  --green:#64ffda;
  --img1:url('https://i.ibb.co/dtHrTbx/IMG-9398.jpg');
}

body {
  background-color:#021B34;
  margin:0;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  color:white;
  -webkit-font-smoothing: antialiased;
}

div {
  position:relative;
  background-color:rgba(255,255,255,0.0);
  height:fit-content;
}

h1 {
  margin:0px;
}

.link {
  color:var(--green);
  text-decoration:none;
  font-weight:bold;
  padding-bottom:1px;
  width:-webkit-fit-content;
  width:-moz-fit-content;
  width:fit-content;
  height:-webkit-fit-content;
  height:-moz-fit-content;
  height:fit-content;
  background-image:-webkit-gradient(linear,left top,left bottom,from(currentColor),to(currentColor));
  background-image:linear-gradient(currentColor,currentColor);
  background-position:50% 100%;
  background-repeat:no-repeat;
  background-size:0 1px;
  -webkit-transition:background-size .2s;
  transition:background-size .2s;
}
.link:hover {
  text-decoration:none;
  background-size:100% 2px;
  cursor:pointer;
}

.linksc1 {
  color:white;
  text-decoration:none;
  font-weight:bold;
  width:-webkit-fit-content;
  width:-moz-fit-content;
  width:fit-content;
  height:-webkit-fit-content;
  height:-moz-fit-content;
  height:fit-content;
  background-image:-webkit-gradient(linear,left top,left bottom,from(white),to(white));
  background-image:linear-gradient(white,white);
  background-position:50% 100%;
  background-repeat:no-repeat;
  background-size:0 100%;
  transition:all 0.2s;-moz-transition:all 0.2s;-webkit-transition:all 0.2s;-o-transition:all 0.2s;
  padding:1rem;
  margin:1rem;
  border:1px solid white;
  border-radius:10rem;
  white-space:nowrap;
  line-height: 5rem;
}
.linksc1:hover {
  background-size:100% 100%;
  color:black;
}
@media all and (max-width: 650px) {
  .linksc1 {
    font-size:12px;
  }
}

.linksc2 {
  text-align:right;
}

.linksc3 {
  text-align:center;
}

@keyframes kf1 {
  0% {opacity:1;transform:translateX(0rem);visibility: visible;}
  100% {opacity:0;transform:translateX(-5rem);visibility: visible;}
}

.wsc1 {
  visibility: hidden;
}

@keyframes wsc1kf1 {
  0% {opacity:0;transform:translateY(5rem);visibility: visible;}
  100% {opacity:1;transform:translateY(0rem);visibility: visible;}
}

.s6 {
  position:fixed;bottom:0px;left:0px;width:fit-content;padding:20px 16px;writing-mode: vertical-rl;
  transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
}

.s6s1 {
  width:1px;height:5000px;position:absolute;left:50%;bottom:100%;background-color:white;
  transition:all 0.1s;-moz-transition:all 0.1s;-webkit-transition:all 0.1s;-o-transition:all 0.1s;
}

.s6s2 {
  transform:rotateZ(180deg);margin:0px;font-size:16px;font-family: 'Bakbak One', cursive;color:white;cursor: default;
}

.s6s2s1 {
  width:16px;display:inline-block;transform:rotateZ(180deg);
  cursor:pointer;
  transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
}

.s6s2s1:hover {
  transform: scale(2, 2)rotateZ(180deg);
}

.s6s2s2 {
  color:inherit;
  text-decoration:none;
  font-weight:bold;
  padding-bottom:1px;
  width:-webkit-fit-content;
  width:-moz-fit-content;
  width:fit-content;
  height:-webkit-fit-content;
  height:-moz-fit-content;
  height:fit-content;
  background-image:-webkit-gradient(linear,left top,left bottom,from(currentColor),to(currentColor));
  background-image:linear-gradient(currentColor,currentColor);
  background-position:0% 50%;
  background-repeat:no-repeat;
  background-size:1px 0px;
  -webkit-transition:background-size .2s;
  transition:background-size .2s;
  cursor:pointer;
}
.s6s2s2:hover {
  background-size:2px 100%;
}

.s4 {
  position:fixed;
  width:100%;
  height:200%;
  left:0px;
  bottom:-100%;
  background: radial-gradient(circle, black 0%, rgba(10,132,255,0) 50%);
  pointer-events:none;
  transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
}

@media all and (max-width: 650px) {
  .s4 {
    display:none;
  }
}

.s5 {
  position:fixed;
  width:100%;
  height:200%;
  left:0px;
  bottom:-100%;
  background: radial-gradient(circle, black 0%, rgba(10,132,255,0) 50%);
  pointer-events:none;
  display:none;
}

@media all and (max-width: 650px) {
  .s5 {
    display:initial;
  }
}

.s3 {
  position:fixed;
  left:0px;
  top:0px;
  border-radius:20px;
  width:calc(100% - 0px);
  height:100px;
  -webkit-backdrop-filter:blur(1px);
  -moz-backdrop-filter:blur(1px);
  -o-backdrop-filter:blur(1px);
  text-align:center;
  white-space:nowrap;
  pointer-events:none;
}

.s3sc1 {
  position:absolute;
  left:0px;
  top:0px;
  height:95%;
  width:100%;
  -webkit-backdrop-filter:blur(1px);
  -moz-backdrop-filter:blur(1px);
  -o-backdrop-filter:blur(1px);
  background-color:rgba(2,27,52,0.05);
}

@supports (-webkit-hyphens:none) {
  .s3sc1 {
    background-color:transparent !important;
  }
}

.s3s1 {
  position:relative;
  text-align:center;
  letter-spacing:2px;
  font-family: 'Bakbak One', cursive;
  font-size:30px;
  line-height:30px;
  white-space:nowrap;
  margin:25px;
  opacity:0;
  transform:translateX(-40px);
  transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
}

@media all and (max-width: 650px) {
  .s3s1 {
    font-size:20px;
    line-height:20px;
    margin:30px;
  }
}

.s2 {
  position:fixed;
  width:100%;
  height:200%;
  left:0px;
  top:0px;
  pointer-events:none;
}

.s2s1 {
  position:fixed;
  bottom:-10vmax;
  right:-10vmax;
  width:60vmax;
  height:60vmax;
  border-radius:100vmax;
  transition:all 0.1s;-moz-transition:all 0.1s;-webkit-transition:all 0.1s;-o-transition:all 0.1s;
  backdrop-filter:invert(70%);
  -webkit-backdrop-filter:invert(70%);
  -moz-backdrop-filter:invert(70%);
  -o-backdrop-filter:invert(70%);
}

@media all and (max-width: 650px) {
  .s2s1 {
    top:30vmax;
    right:-20vmax;
    width:140vmax;
    height:140vmax;
  }
}

.s2s2 {
  position:fixed;
  bottom:20px;
  left:55px;
  width:calc(100% - 110px);
  height:1px;
  background-color:black;
  overflow:hidden;
  opacity:0;
  transform:translateY(20px);
  transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
}

.s2s2s1 {
  position:absolute;
  top:0px;
  left:0px;
  width:50%;
  height:100%;
  transition:all 0.4s;-moz-transition:all 0.1s;-webkit-transition:all 0.1s;-o-transition:all 0.1s;
  background-color:white;
}

.s1 {
  margin:20px;
  height:calc(100% - 40px);
}

.s1s1 {
  width:1800px;
  max-width:calc(100% - 40px);
  margin:0px auto;
}

.s1s1s1 {
  text-align:left;
  letter-spacing:2px;
  /*text-shadow:0px 0px 1rem rgba(255,255,255,0.1);*/
  margin-bottom:20px;
  font-family: 'Bakbak One', cursive;
  font-size:20vmin;
}
@media all and (max-width: 650px) {
  .s1s1s1 {
    text-align:left;
    margin-bottom:20px;
    border-bottom:1px solid white;
    padding:20px;
    font-size:32px;
  }
}

.s1s1s1sc1 {
  text-align:center;
  letter-spacing:2px;
  /*text-shadow:0px 0px 1rem rgba(255,255,255,0.1);*/
  margin-bottom:20px;
  font-family: 'Bakbak One', cursive;
  font-size:60px;
}
@media all and (max-width: 650px) {
  .s1s1s1sc1 {
    text-align:left;
    margin-bottom:20px;
    border-bottom:1px solid white;
    padding:20px;
    font-size:32px;
  }
}

.s1s1s1s1 {
  white-space:nowrap;
}

.s1s1s2 {
  max-width:800px;
  text-shadow:0px 0px 6px rgba(255,255,255,0.2);
  margin:0px auto;
  margin-bottom:20px;
}

.s1s1s2sc1 {
  margin-top:20px;
}

.s1s1s2sc2 {
  text-align:center;
}

.s1s1s2sc3 {
  height:400px;
}
@media all and (max-width: 1400px) {
  .s1s1s2sc3 {
    height:200px;
  }
}
@media all and (max-width: 650px) {
  .s1s1s2sc3 {
    height:80px;
  }
}

.s1s1s3 {
  height:200px;
}
@media all and (max-width: 650px) {
  .s1s1s3 {
    height:100px;
  }
}

.s1s1s4 {
  height:500px;
}

.s1s1s5 {
  width:fit-content;
  margin:0px auto;
  width:calc(100% - 40px);
  max-width:400px;
}

.s1s1s6 {
  opacity:0.6;
  max-width:100%;
  border-radius:10px;
  border:0.5px solid white;
}

.s1s1s7 {
  width:calc(100% - 2px);max-width:800px;height:124px;border:1px solid white;border-radius:10px;margin:0px auto;margin-bottom:20px;overflow:hidden;color:white;
}

.s1s1s7s1 {
  width:calc(100% - 140px);
  height:fit-content;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size:30px;
  font-family: "Bakbak One", cursive;
  line-height:30px;
  font-weight:normal;
  position:absolute;
  left:70px;
  top:20px;
}

.s1s1s7s1s1 {
  font-size:30px;
  font-family: "Bakbak One", cursive;
  line-height:30px;
  display: inline;
  font-weight:normal;
}
@media all and (max-width: 650px) {
  .s1s1s7s1s1 {
    font-size:25px;
    line-height:30px;
  }
  .s1s1s7s1 {
    font-size:25px;
    line-height:30px;
  }
}

.s1s1s7s2 {
  position:absolute;
  left:20px;
  top:20px;
  width:30px;
}

.s1s1s7s2sc1 {
  position:absolute;
  right:20px;
  top:20px;
  width:30px;
}

.s1s1s7s3 {
  width:calc(100% - 40px);
  height:fit-content;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size:14px;
  font-weight:normal;
  position:absolute;
  left:20px;
  top:70px;
}

.s1s1s7s3s1 {
  font-size:14px;
  display: inline;
}
@media all and (max-width: 650px) {
  .s1s1s7s3s1 {
    font-size:14px;
    line-height:30px;
  }
  .s1s1s7s3 {
    font-size:14px;
    line-height:30px;
  }
}

.s1s1s1s2 {
  position:relative;
}

.s1s1s1s2s1 {
  font-size:14px;font-family:monospace;color:#ccd6f6;position:absolute;bottom:100%;left:0px;
}




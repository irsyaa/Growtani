const educationAnimationCanvas = document.getElementById('education-animation');
const educationCtx = educationAnimationCanvas.getContext('2d');

educationAnimationCanvas.height =
  educationAnimationCanvas.parentElement.clientHeight;
educationAnimationCanvas.width =
  educationAnimationCanvas.parentElement.clientWidth;

let animationStarted = false;

document.addEventListener('scroll', () => {
  if (this.scrollY >= 1133) {
    if (!animationStarted) startFirstEducationLine();
    animationStarted = true;
  }
});

const speed = 0.5;

// startFirstEducationLine();

function startFirstEducationLine() {
  showFirstEducation();

  let currX = 250;
  let currY = 50;

  let itv1 = setInterval(() => {
    if (currX < 350) {
      educationCtx.fillRect((currX += 10), 50, 5, 5);
    } else if (currY < 150) {
      educationCtx.fillRect(currX, (currY += 10), 5, 5);
    } else {
      showSecondEducation();
      clearInterval(itv1);
    }
  }, 100 * speed);
}

function showFirstEducation() {
  //   educationCtx.strokeStyle = 'white';
  //   educationCtx.lineWidth = 5;
  //   educationCtx.rect(0, 0, 250, 100);
  //   educationCtx.stroke();

  educationCtx.fillStyle = 'white';
  educationCtx.font = '23px Poppins';
  educationCtx.fillText('SDN 4 Yosomulyo', 30, 40);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('(2008 - 2014)', 75, 75);
}

// educationCtx.stroke();
function showSecondEducation() {
  //   educationCtx.strokeStyle = 'white';
  //   educationCtx.lineWidth = 5;
  //   educationCtx.rect(230, 170, 250, 100);
  //   educationCtx.stroke();

  educationCtx.fillStyle = 'white';
  educationCtx.font = '23px Poppins';
  educationCtx.fillText('SMPN 1 Gambiran', 260, 210);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('(2014 - 2017)', 310, 240);

  setTimeout(() => {
    startThirdEducationLine();
  }, 500);
}

function startThirdEducationLine() {
  let currY2 = 275;
  let currX2 = 350;

  let intv2 = setInterval(() => {
    if (currY2 < 395) {
      educationCtx.fillRect(currX2, (currY2 += 10), 5, 5);
    } else if (currX2 > 310) {
      educationCtx.fillRect((currX2 -= 10), currY2, 5, 5);
    } else {
      showThirdEducation();
      clearInterval(intv2);
    }
  }, 100 * speed);
}

function showThirdEducation() {
  //   educationCtx.strokeStyle = 'white';
  //   educationCtx.lineWidth = 5;
  //   educationCtx.rect(0, 335, 250, 130);
  //   educationCtx.stroke();

  educationCtx.fillStyle = 'white';
  educationCtx.font = '23px Poppins';
  educationCtx.fillText('SMK Muhammadiyah 1', 0, 370);
  educationCtx.fillText('Genteng', 84, 395);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('[Computer and Network Engineering]', 0, 425);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('(2017 - 2020)', 85, 460);

  setTimeout(() => {
    startForthEducationLine();
  }, 500);
}

function startForthEducationLine() {
  let currY2 = 475;
  let currX2 = 120;

  let intv3 = setInterval(() => {
    if (currY2 < 600) {
      educationCtx.fillRect(currX2, (currY2 += 10), 5, 5);
    } else if (currX2 < 220) {
      educationCtx.fillRect((currX2 += 10), currY2, 5, 5);
    } else {
      showForthEducation();
      clearInterval(intv3);
    }
  }, 100 * speed);
}

function showForthEducation() {
  //   educationCtx.strokeStyle = 'white';
  //   educationCtx.lineWidth = 5;
  //   educationCtx.rect(240, 540, 250, 130);
  //   educationCtx.stroke();

  educationCtx.fillStyle = 'white';
  educationCtx.font = '23px Poppins';
  educationCtx.fillText('Politeknik Negeri', 260, 570);
  educationCtx.fillText('Banyuwangi', 284, 600);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('[Informatics Engineering]', 260, 630);
  educationCtx.font = '15px Poppins';
  educationCtx.fillText('(2020 - Now)', 308, 660);

  setTimeout(() => {
    educationCtx.clearRect(
      0,
      0,
      educationAnimationCanvas.width,
      educationAnimationCanvas.height
    );
    startFirstEducationLine();
  }, 2000);
}

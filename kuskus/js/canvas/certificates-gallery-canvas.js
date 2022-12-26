const certificatesGalleryCanvas = document.getElementById(
  'certificates-gallery-canvas'
);
const certificateCtx = certificatesGalleryCanvas.getContext('2d');

window.addEventListener('resize', () => {
  certificatesGalleryCanvas.width =
    certificatesGalleryCanvas.parentElement.clientWidth;
});

certificatesGalleryCanvas.width =
  certificatesGalleryCanvas.parentElement.clientWidth;
certificatesGalleryCanvas.height =
  certificatesGalleryCanvas.parentElement.clientHeight;

certificateCtx.beginPath();
certificateCtx.stroke();

// setTimeout(loadIccmCertificate, 300);
// loadCsCertificate();
// loadAitecCertificate();

let csAnimation = false;

document.addEventListener('scroll', () => {
  if (this.scrollY >= 3041) {
    if (!csAnimation) loadCsCertificate();
    csAnimation = true;
  }
});

function loadIccmCertificate() {
  let img1 = new Image();

  img1.onload = function () {
    // certificateCtx.drawImage(img1, 400, 40, 320, 430);
    startAnimatingIccmImage(img1);
  };

  img1.src = 'images/certificates/iccm.png';
}

function startAnimatingIccmImage(image) {
  let currScale = 0.1;
  let iccmInt = setInterval(() => {
    certificateCtx.drawImage(
      image,
      440,
      55,
      320 * (currScale += 0.01),
      430 * (currScale += 0.01)
    );
    certificateCtx.restore();
    if (currScale >= 1) {
      clearInterval(iccmInt);
    }
  }, 20);
}

function startAnimatingCsImage(image) {
  let currX = 0;
  let csInt = setInterval(() => {
    certificateCtx.fillStyle = 'white';
    certificateCtx.fillRect(currX, 85, 500, 360);
    certificateCtx.drawImage(image, (currX += 1), 85, 500, 360);
    if (currX >= 100) {
      clearInterval(csInt);
      loadAitecCertificate();
    }
  }, 10);
}

function startAnimatingAitecImage(image) {
  let currX = 800;
  let aitectInt = setInterval(() => {
    certificateCtx.moveTo(currX, 85);
    certificateCtx.fillStyle = 'white';
    certificateCtx.fillRect(currX, 85, 500, 360);
    certificateCtx.drawImage(image, (currX -= 1), 85, 500, 360);
    if (currX <= 600) {
      clearInterval(aitectInt);
      loadIccmCertificate();
    }
  }, 10);
}

function loadCsCertificate() {
  let img1 = new Image();

  img1.onload = function () {
    // certificateCtx.drawImage(img1, 0, 85, 800, 360);
    startAnimatingCsImage(img1);
  };

  img1.src = 'images/certificates/cs.jpg';
}

function loadAitecCertificate() {
  let img1 = new Image();

  img1.onload = function () {
    // certificateCtx.drawImage(img1, 600, 85, 500, 360);
    startAnimatingAitecImage(img1);
  };

  img1.src = 'images/certificates/aitec.png';
}

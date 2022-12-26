let renderer2 = new THREE.WebGLRenderer({
  canvas: document.getElementById('logo-canvas'),
  antialias: true,
});

let scene2 = new THREE.Scene();
let camera2 = new THREE.PerspectiveCamera(45, 1100 / 400, 1, 1000);
let planeGeo2 = new THREE.PlaneGeometry(100, 100);
let planeMesh2 = new THREE.Mesh(planeGeo2);

camera2.position.z += 5;

scene2.background = new THREE.Color('bluesky');
renderer2.setSize(500, 270);

let Geo2 = new THREE.BoxGeometry(2.3, 2.3, 2.3);
const texture = new THREE.TextureLoader().load(
  'images/logo_robotik_poliwangi.png'
);
const material2 = new THREE.MeshBasicMaterial({
  map: texture,
  color: '#C6C7C9',
});

let Mesh2 = new THREE.Mesh(Geo2, material2);
scene2.add(Mesh2);

let pageX = 0.5;
let pageY = 0.5;

document.body.addEventListener('mousemove', event => {
  pageX = event.pageX / 1100;
  pageY = event.pageY / 500;
});

function update2() {
  Mesh2.rotation.x = (pageY - 0.5) * 2;
  Mesh2.rotation.y = (pageX - 0.5) * 2;
  requestAnimationFrame(update2);
  renderer2.render(scene2, camera2);
}
update2();

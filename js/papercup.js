var scene = new THREE.Scene();
// scene.background = new THREE.Color(0F2126);
var camera = new THREE.PerspectiveCamera(45,500 / 600,1,1000);

var renderer = new THREE.WebGLRenderer({canvas: document.getElementById('myCanvas'),antialias: true,alpha: true});
renderer.setClearColor(0xFFFFFF,0);
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(500,600);
document.getElementById("custom").appendChild(renderer.domElement);

//update viewport
window.addEventListener('resize',function()
{
    var width = 500;
    var height = 600;
    renderer.setSize(width,height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
});

// if ( /(iPad|iPhone|iPod)/g.test( navigator.userAgent ) ) {
//
// 	// var scene = document.getElementById( 'scene' );
//
// 	var boxWidth = scene.style.width = getComputedStyle( scene ).width;
// 	var boxHeight = scene.style.height = getComputedStyle( scene ).height;
// 	scene.setAttribute( 'scrolling', 'no' );
//
// }

//import an object file(json)
// var loader = new THREE.ObjectLoader();

// loader.load(
//   'file.json',
//
//   function(object)
//   {
//     scene.add(object);
//   }
// );

//lighting
var ambientLight = new THREE.AmbientLight(0xFFFFFF,0.5);
scene.add(ambientLight);

var ambientLight2 = new THREE.AmbientLight(0xFFFFFF,0.5);
scene.add(ambientLight2);

//control orbit
var controls = new THREE.OrbitControls(camera,renderer.domElement);

//get ID from file php
var e = document.getElementById("paperSize");
var radiusTop = 6;
var radiusBottom = 5;
var height = 5;

function processColor() {
  var color = document.getElementById("color").value;
  console.log(color);
}

//create the shape
//create the material, color, or image textures
var paperMaterials =
[
  new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Side
  new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Top Side
  new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Bottom Side
];
var geometry = new THREE.CylinderGeometry(radiusTop,radiusBottom,height,50);
var material = new THREE.MeshFaceMaterial( paperMaterials );
var papercup = new THREE.Mesh(geometry,material);
scene.add(papercup);

e.addEventListener('click', changeSize);

//change paperSizeValue
function changeSize() {
  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }
  var paperSizeValue = e.options[e.selectedIndex].value;
  switch(paperSizeValue){
    case '1':
      radiusTop = 6;
      radiusBottom = 5;
      height = 5;
      break;
    case '2':
      radiusTop = 8.5;
      radiusBottom = 5.8;
      height = 10.5;
      break;
    case '3':
      radiusTop = 8.5;
      radiusBottom = 5.8;
      height = 12.5;
      break;
  }

  var geometry = new THREE.CylinderGeometry(radiusTop,radiusBottom,height,50);
  var paperMaterials =
  [
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Side
    new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Top Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Bottom Side
  ];
  var material = new THREE.MeshFaceMaterial( paperMaterials );
  var papercup = new THREE.Mesh(geometry,material);
  scene.add(papercup);
}

camera.position.z=50;

//game logic
var update = function()
{
  //cube.rotation.x = 1;
  //cube.rotation.y = 1;
};

//draw Scene
var render = function()
{
  renderer.render(scene,camera);
};

//run game loop (update,render,repeat)
var GameLoop = function()
{
  requestAnimationFrame(GameLoop);
  update();
  render();
};

GameLoop();

// export object 3D to JSON
// var json = scene.toJSON();
// console.log(json);

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

//lighting
var ambientLight = new THREE.AmbientLight(0xFFFFFF,0.5);
scene.add(ambientLight);

var ambientLight2 = new THREE.AmbientLight(0xFFFFFF,0.5);
scene.add(ambientLight2);

//control orbit
var controls = new THREE.OrbitControls(camera,renderer.domElement);

//get ID from file php
//get ID from file php
var e = document.getElementById("pouchSize");
var boxWidth = 13;
var boxHeight = 20;

var geometry = new THREE.BoxGeometry(boxWidth,boxHeight,1);

//create the shape
//create the material, color, or image textures
var cubeMaterials =
[
  new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Right Side
  new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Left Side
  new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Top Side
  new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide}),//Bottom Side
  new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Front Side
  new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}) //Back Side
];

var material = new THREE.MeshFaceMaterial(cubeMaterials);
var cube = new THREE.Mesh(geometry,material);
scene.add(cube);

e.addEventListener('click', changeSize);

//change paperSizeValue
function changeSize() {
  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }
  var pouchSizeValue = e.options[e.selectedIndex].value;
  switch(pouchSizeValue){
    case '1':
      boxWidth = 13;
      boxHeight = 20;
      break;
    case '2':
      boxWidth = 14;
      boxHeight = 23;
      break;
    case '3':
      boxWidth = 16;
      boxHeight = 29;
      break;
    case '4':
      boxWidth = 22;
      boxHeight = 29;
      break;
    case '5':
      boxWidth = 9;
      boxHeight = 15;
      break;
    case '6':
      boxWidth = 13;
      boxHeight = 20;
      break;
    case '7':
      boxWidth = 14;
      boxHeight = 23;
      break;
    case '8':
      boxWidth = 16;
      boxHeight = 25;
      break;
    case '9':
      boxWidth = 18;
      boxHeight = 29;
      break;
    case '10':
      boxWidth = 22.5;
      boxHeight = 33;
      break;
  }

  var geometry = new THREE.BoxGeometry(boxWidth,boxHeight,1);
  var cube = new THREE.Mesh(geometry,material);
  scene.add(cube);
}

var custom=0;

function processColor() {
  custom=1;
  var color = document.getElementById("color").value;
  console.log(color);
}

var realFileBtn = document.getElementById("imageButton");
var customBtn = document.getElementById("imageButtonCopy");
var customTxt = document.getElementById("customText");
var applyButton2 = document.getElementById("applyButton2");
var reader;
var img = new Image();

applyButton2.style.visibility = "hidden";

customBtn.addEventListener("click", function(){
  realFileBtn.click();
})

realFileBtn.addEventListener("change", function(){
  if(realFileBtn.value) {
    // console.log(realFileBtn.files);
    applyButton2.style.visibility = "visible";
    reader = new FileReader();
    reader.onload = function(){
      img.src = reader.result;
      img.style.width = "100px";
      img.style.height = "100px";
      document.getElementById("imageSpan").appendChild(img);
    }
    reader.readAsDataURL(realFileBtn.files[0]);

    customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }
  else {
    customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }
})

function processImage() {
  custom=1;
  console.log(img);
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

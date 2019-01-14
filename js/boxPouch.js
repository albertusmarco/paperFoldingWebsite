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
var rightSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var leftSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var topSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var bottomSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var frontSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var backSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});

var cubeMaterials =
[
  rightSide,//Right Side
  leftSide,//Left Side
  topSide,//Top Side
  bottomSide,//Bottom Side
  frontSide,//Front Side
  backSide//Back Side
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

var custom = 0;
var clicked = 0;

function processColor() {
  var side = document.getElementById("side");
  var sideValue = side.options[side.selectedIndex].value;
  var color = document.getElementById("color").value;
  // console.log(color);
  if (clicked == 0) {
    if(color == '#ffffff') {
      custom = 0;
    }
    else {
      custom = 1;
      clicked = 1;
    }
  }
  else {
    custom = 1;
  }

  switch(sideValue) {
    case 'front':
      frontSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
    case 'back':
      backSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
    case 'left':
      leftSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
    case 'right':
      rightSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
    case 'top':
      topSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
    case 'down':
      bottomSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
  }

  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }

  cubeMaterials =
  [
    rightSide,//Right Side
    leftSide,//Left Side
    topSide,//Top Side
    bottomSide,//Bottom Side
    frontSide,//Front Side
    backSide//Back Side
  ];
  material = new THREE.MeshFaceMaterial(cubeMaterials);
  cube = new THREE.Mesh(geometry,material);
  scene.add(cube);
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
  custom = 1;
  var side = document.getElementById("side");
  var sideValue = side.options[side.selectedIndex].value;
  console.log(img);

  // var imgConvert = img.toDataURL();
  // document.getElementById("applybutton2").href = imgConvert;
  // document.getElementById("applybutton2").download = 'image.png';

  // var textureLoader = new THREE.TextureLoader();
  // var texture = textureLoader.load( 'asset/bobby.jpg' );
  // var texture1 = textureLoader.load( 'asset/bobby2.jpg' );

  var texture = new THREE.ImageUtils.loadTexture(img.src);

  switch(sideValue) {
    case 'front':
      frontSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
    case 'back':
      backSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
    case 'left':
      leftSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
    case 'right':
      rightSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
    case 'top':
      topSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
    case 'down':
      bottomSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
  }

  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }

  cubeMaterials =
  [
    rightSide,//Right Side
    leftSide,//Left Side
    topSide,//Top Side
    bottomSide,//Bottom Side
    frontSide,//Front Side
    backSide//Back Side
  ];
  material = new THREE.MeshFaceMaterial(cubeMaterials);
  cube = new THREE.Mesh(geometry,material);
  scene.add(cube);
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

function process3D(){
  var packagingType = document.getElementById("jenis").innerHTML;
  switch (packagingType) {
    case 'PLASTIC POUCH':
      console.log('Plastic Pouch');
      if(custom == 0){
        console.log('Plain Price');
      }
      else {
        console.log('Customization Price');
      }
      break;
    case 'PAPER POUCH':
      console.log('Paper Pouch');
      if(custom == 0){
        console.log('Plain Price');
      }
      else {
        console.log('Customization Price');
      }
      break;
  }

  // export object 3D to JSON
  var json = scene.toJSON();
  // console.log(json);
}

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
var e = document.getElementById("paperSize");
var radiusTop = 6;
var radiusBottom = 5;
var height = 5;

//create the shape
//create the material, color, or image textures
var frontSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var topSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});
var bottomSide = new THREE.MeshBasicMaterial({color : 0xFFFFFF, side : THREE.DoubleSide});

var paperMaterials =
[
  frontSide,//Front Side
  topSide,//Top Side
  bottomSide//Bottom Side
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
  var papercup = new THREE.Mesh(geometry,material);
  scene.add(papercup);
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
    case 'down':
      bottomSide = new THREE.MeshBasicMaterial({color : color, side : THREE.DoubleSide});
      break;
  }

  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }

  var paperMaterials =
  [
    frontSide,//Front Side
    topSide,//Top Side
    bottomSide//Bottom Side
  ];
  material = new THREE.MeshFaceMaterial(paperMaterials);
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
  custom=1;
  var side = document.getElementById("side");
  var sideValue = side.options[side.selectedIndex].value;
  // console.log(img);

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
    case 'down':
      bottomSide = new THREE.MeshBasicMaterial({map : texture, side : THREE.DoubleSide});
      break;
  }

  while(scene.children.length > 0){
    scene.remove(scene.children[0]);
  }

  var paperMaterials =
  [
    frontSide,//Front Side
    topSide,//Top Side
    bottomSide//Bottom Side
  ];
  material = new THREE.MeshFaceMaterial(paperMaterials);
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
  console.log('Paper Cup');
  if(custom == 0){
    console.log('Plain Price');
  }
  else {
    console.log('Customization Price');
  }

  // export object 3D to JSON
  var json = scene.toJSON();
  // console.log(json);
}

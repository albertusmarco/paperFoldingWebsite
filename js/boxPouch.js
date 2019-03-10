var scene = new THREE.Scene();
// scene.background = new THREE.Color(0F2126);
var camera = new THREE.PerspectiveCamera(45,500 / 600,1,1000);

var canvas = document.getElementById('canvasText'),
    ctx = canvas.getContext('2d');

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

  geometry = new THREE.BoxGeometry(boxWidth,boxHeight,1);
  cube = new THREE.Mesh(geometry,material);
  scene.add(cube);
}

var custom = 0;
var clicked = 0;

function processText() {
  var side = document.getElementById("side");
  var sideValue = side.options[side.selectedIndex].value;
  var text = document.getElementById("text").value;
  // console.log(text);

  if(clicked == 0) {
    if (text == '') {
      custom = 0;
      clicked = 1;
    }
    else {
      custom = 1;
    }
  }
  else {
    custom = 1;
  }

  ctx.font = '20pt Arial';
  ctx.fillStyle = 'white';
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = 'white';
  ctx.fillRect(10, 10, canvas.width - 20, canvas.height - 20);
  ctx.fillStyle = 'black';
  ctx.textAlign = "center";
  ctx.textBaseline = "middle";
  ctx.fillText(text, canvas.width / 2, canvas.height / 2);

  var tulisan = new THREE.Texture(canvas);
  tulisan.needsUpdate = true;

  switch(sideValue) {
    case 'front':
      frontSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
      break;
    case 'back':
      backSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
      break;
    case 'left':
      leftSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
      break;
    case 'right':
      rightSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
      break;
    case 'top':
      topSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
      break;
    case 'down':
      bottomSide = new THREE.MeshBasicMaterial({map : tulisan, side : THREE.DoubleSide});
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
  var material = document.getElementById("material");
  var combination = document.getElementById("combination");
  var lamination = document.getElementById("lamination");
  var quantity = document.getElementById("quantity");
  var judul;
  var tipeHarga;
  var harga = 0;
  // export object 3D to JSON
  var json = scene.toJSON();
  // console.log(json);

  if(quantity.value == null) {
    quantity.value = 50;
  }
  else if (quantity.value < 50) {
    quantity.value = 50;
  }

  switch (packagingType) {
    case 'PLASTIC POUCH':
      judul = 'Plastic Pouch';
      if(custom == 0){
        tipeHarga = 'Plain Price';
        if(boxWidth == 13) {
          if(quantity.value > 100) {
            harga = 750;
          }
          else {
            harga = 800;
          }
        }
        else if(boxWidth == 14) {
          if(quantity.value > 100) {
            harga = 850;
          }
          else {
            harga = 900;
          }
        }
        else if(boxWidth == 16) {
          if(quantity.value > 100) {
            harga = 1000;
          }
          else {
            harga = 1100;
          }
        }
        else if(boxWidth == 22) {
          if(quantity.value > 100) {
            harga = 1500;
          }
          else {
            harga = 1750;
          }
        }
        else {
          harga = 0;
        }
      }
      else {
        tipeHarga = 'Customization Price';
        if(combination.value == "sablon") {
          if(boxWidth == 13) {
            if(quantity.value > 50) {
              harga = 950;
            }
            else {
              harga = 1200;
            }
          }
          else if(boxWidth == 14) {
            if(quantity.value > 50) {
              harga = 1100;
            }
            else {
              harga = 1500;
            }
          }
          else if(boxWidth == 16) {
            if(quantity.value > 50) {
              harga = 1200;
            }
            else {
              harga = 1500;
            }
          }
          else if(boxWidth == 22) {
            if(quantity.value > 50) {
              harga = 1750;
            }
            else {
              harga = 2600;
            }
          }
          else {
            harga = 0;
          }
        }
        else {
          if(boxWidth == 13) {
            if(quantity.value > 500) {
              if(quantity.value <= 1000) {
                harga = 2100;
              }
              else {
                harga = 1200;
              }
            }
            else {
              harga = 3000;
            }
          }
          else if(boxWidth == 14) {
            if(quantity.value > 500) {
              if(quantity.value <= 1000) {
                harga = 3000;
              }
              else {
                harga = 1450;
              }
            }
            else {
              harga = 4100;
            }
          }
          else if(boxWidth == 16) {
            if(quantity.value > 500) {
              if(quantity.value <= 1000) {
                harga = 3200;
              }
              else {
                harga = 1800;
              }
            }
            else {
              harga = 5000;
            }
          }
          else if(boxWidth == 22) {
            if(quantity.value > 500) {
              if(quantity.value <= 1000) {
                harga = 4750;
              }
              else {
                harga = 2600;
              }
            }
            else {
              harga = 7500;
            }
          }
          else {
            harga = 0;
          }
        }
      }
      break;
    case 'PAPER POUCH':
      judul = 'Paper Pouch';
      if(custom == 0){
        tipeHarga = 'Plain Price';
        if(boxWidth == 9){
          if (quantity.value>100) {
            harga = 750;
          }else{
            harga = 900;
          }
        }else if(boxWidth == 13){
          if (quantity.value>100) {
            harga = 1350;
          }else{
            harga = 1550;
          }
        }else if(boxWidth == 14){
          if (quantity.value>100) {
            harga = 1450;
          }else{
            harga = 1600;
          }
        }else if(boxWidth == 16){
          if (quantity.value>100) {
            harga = 2750;
          }else{
            harga = 3100;
          }
        }else if(boxWidth == 18){
          if (quantity.value>100) {
            harga = 3150;
          }else{
            harga = 3500;
          }
        }else if(boxWidth == 22.5){
          if (quantity.value>100) {
            harga = 4250;
          }else{
            harga = 4750;
          }
        }
      }
      else {
        tipeHarga = 'Customization Price';
        if (combination.value == 'sablon') {
          if (boxWidth == 9){
            if (quantity.value>50) {
              harga = 950;
            }else{
              harga = 1000;
            }
          }else if(boxWidth == 13){
            if (quantity.value>50) {
              harga = 1550;
            }else{
              harga = 1750;
            }
          }else if(boxWidth == 14){
            if (quantity.value>50) {
              harga = 1650;
            }else{
              harga = 2000;
            }
          }else if(boxWidth == 16){
            if (quantity.value>50) {
              harga = 2950;
            }else{
              harga = 3100;
            }
          }else if(boxWidth == 18){
            if (quantity.value>50) {
              harga = 3350;
            }else{
              harga = 3500;
            }
          }else if(boxWidth == 22.5){
            if (quantity.value>50) {
              harga = 4550;
            }else{
              harga = 4750;
            }
          }
        }else{
          if (boxWidth == 9){
            if (quantity.value>500) {
              harga = 2100;
            }else if (quantity.value>1000) {
              harga = 1200;
            }else{
              harga = 3000;
            }
          }else if(boxWidth == 13){
            if (quantity.value>500) {
              harga = 3200;
            }else if (quantity.value>1000) {
              harga = 2100;
            }else{
              harga = 5000;
            }
          }else if(boxWidth == 14){
            if (quantity.value>500) {
              harga = 3200;
            }else if (quantity.value>1000) {
              harga = 2200;
            }else{
              harga = 5000;
            }
          }else if(boxWidth == 16){
            if (quantity.value>500) {
              harga = 4500;
            }else if (quantity.value>1000) {
              harga = 3500;
            }else{
              harga = 6500;
            }
          }else if(boxWidth == 18){
            if (quantity.value>500) {
              harga = 5750;
            }else if (quantity.value>1000) {
              harga = 4200;
            }else{
              harga = 7000;
            }
          }else if(boxWidth == 22.5){
            if (quantity.value>500) {
              harga = 6000;
            }else if (quantity.value>1000) {
              harga = 5400;
            }else{
              harga = 7500;
            }
          }
        }
      }
      break;
  }

  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  function convertToRupiah(angka)
  {
     var rupiah = '';
     var angkarev = angka.toString().split('').reverse().join('');
     for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
     return ''+rupiah.split('',rupiah.length-1).reverse().join('');
  };

  var hargaBaru = harga*quantity.value;
  var hargaFormat = convertToRupiah(hargaBaru);

  // Display the modal
  document.getElementById("judul").innerHTML = judul;
  document.getElementById("tipeHarga").innerHTML = tipeHarga;
  document.getElementById("harga").innerHTML = hargaFormat;
  modal.style.display = "block";

  var obj = {};
  obj.type = judul;
  obj.price = hargaBaru;
  obj.json = json;

  switch (material.value) {
    case 'artpaper150':
      obj.material = 'Art Paper 150 gr';
      break;
    case 'artpaper210':
      obj.material = 'Art Paper 210 gr';
      break;
    case 'artpaper230':
      obj.material = 'Art Paper 230 gr';
      break;
    case 'artpaper260':
      obj.material = 'Art Paper 260 gr';
      break;
    case 'artpaper310':
      obj.material = 'Art Paper 310 gr';
      break;
    case 'ivory210':
      obj.material = 'Ivory 210 gr';
      break;
    case 'ivory230':
      obj.material = 'Ivory 230 gr';
      break;
    case 'ivory250':
      obj.material = 'Ivory 250 gr';
      break;
    case 'ivory310':
      obj.material = 'Ivory 310 gr';
      break;
    case 'duplex230':
      obj.material = 'Duplex 230 gr';
      break;
    case 'duplex250':
      obj.material = 'Duplex 250 gr';
      break;
    case 'duplex270':
      obj.material = 'Duplex 270 gr';
      break;
    case 'duplex300':
      obj.material = 'Duplex 300 gr';
      break;
    case 'bcmanila150':
      obj.material = 'BC Manila 150 gr';
      break;
    case 'samson70':
      obj.material = 'Samson 70 gr';
      break;
    case 'samson80':
      obj.material = 'Samson 80 gr';
      break;
    case 'samson150':
      obj.material = 'Samson 150 gr';
      break;
    case 'corrugated':
      obj.material = 'Corrugated';
      break;
    case 'polylethylene':
      obj.material = 'Polylethylene Water Proof';
      break;
    case 'kraftandfoil':
      obj.material = 'Kraft and Foil';
      break;
    case 'plasticandfoil':
      obj.material = 'Plastic and Foil';
      break;
    case 'foodgradepaper':
      obj.material = 'Food Grade Paper';
      break;
    default:
      obj.material = 'none';
  }

  switch (combination.value) {
    case 'stickervinyl':
      obj.combination = 'Sticker Vinyl';
      break;
    case 'stickerbontax':
      obj.combination = 'Sticker Bontax';
      break;
    case 'silversticker':
      obj.combination = 'Silver Sticker';
      break;
    case 'goldsticker':
      obj.combination = 'Gold Sticker';
      break;
    case 'hotprint':
      obj.combination = 'Hot Print';
      break;
    case 'uvprint':
      obj.combination = 'UV Print';
      break;
    case 'sablon':
      obj.combination = 'Sablon';
      break;
    default:
      obj.combination = 'none';
  }

  if(judul == 'Plastic Pouch' || judul == 'Paper Pouch') {
    obj.available = 'Zipper';
  }
  else {
    obj.available = 'none';
  }

  obj.lamination = 'none';
  obj.quantity = quantity.value;
  obj.size1 = boxWidth;
  obj.size2 = boxHeight;
  obj.size3 = 1;

  // console.log(obj);

  document.getElementById("okBtn").onclick = function() {
    $.ajax({
      url:"insert.php",
      method:"post",
      data:{ obj : JSON.stringify(obj) },
      success: function(res) {
        console.log(res);
      }
    })
    location.href="uploadimage.php";
  }

  document.getElementById("cancelBtn").onclick = function() {
    modal.style.display = "none";
  }
}

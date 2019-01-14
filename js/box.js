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
  var boxWidth = document.getElementById("boxWidth");
  var boxHeight = document.getElementById("boxHeight");
  var boxDepth = document.getElementById("boxDepth");

  var geometry = new THREE.BoxGeometry(boxWidth.value,boxHeight.value,boxDepth.value);

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

  boxWidth.addEventListener('input', sliderChange);
  boxHeight.addEventListener('input', sliderChange);
  boxDepth.addEventListener('input', sliderChange);

  function sliderChange() {
    while(scene.children.length > 0){
      scene.remove(scene.children[0]);
    }
    geometry = new THREE.BoxGeometry(boxWidth.value,boxHeight.value,boxDepth.value);
    cube = new THREE.Mesh(geometry,material);
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

  camera.position.z=200;

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
    var judul;
    var tipeHarga;
    var harga = 0;

    switch (packagingType) {
      case 'SOFT BOX':
        judul = 'Soft Box';
        if(custom == 0){
          tipeHarga = 'Plain Price';
        }
        else {
          tipeHarga = 'Customization Price';
        }
        break;
      case 'PAPER BAG':
        judul = 'Paper Bag';
        if(custom == 0){
          tipeHarga = 'Plain Price';
        }
        else {
          tipeHarga = 'Customization Price';
        }
        break;
      case 'PACK LABEL':
        judul = 'Pack Label';
        if(custom == 0){
          tipeHarga = 'Plain Price';
        }
        else {
          tipeHarga = 'Customization Price';
        }
        break;
      case 'FOOD WRAP':
        judul = 'Food Wrap';
        if(custom == 0){
          tipeHarga = 'Plain Price';
        }
        else {
          tipeHarga = 'Customization Price';
        }
        break;
      case 'CARD BOARD':
        judul = 'Card Board';
        if(custom == 0){
          tipeHarga = 'Plain Price';
        }
        else {
          tipeHarga = 'Customization Price';
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

    // Display the modal
    document.getElementById("judul").innerHTML = judul;
    document.getElementById("tipeHarga").innerHTML = tipeHarga;
    document.getElementById("harga").innerHTML = harga;
    modal.style.display = "block";

    document.getElementById("okBtn").onclick = function() {
      // export object 3D to JSON
      var json = scene.toJSON();
      // console.log(json);
    }

    document.getElementById("cancelBtn").onclick = function() {
      modal.style.display = "none";
    }
  }

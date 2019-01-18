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
      case 'SOFT BOX':
        judul = 'Soft Box';
        if(custom == 0){
          tipeHarga = 'Plain Price';
          if(quantity.value > 50) {
            harga = 12500;
          }
          else {
            harga = 17200;
          }
        }
        else {
          tipeHarga = 'Customization Price';
          if(quantity.value > 50) {
            if(quantity.value <= 100) {
              harga = 24500;
            }
            else {
              if(quantity.value <= 500) {
                harga = 17200;
              }
              else {
                harga = 9.500;
              }
            }
          }
          else {
            harga = 30000;
          }
        }
        break;
      case 'PAPER BAG':
        judul = 'Paper Bag';
        if(custom == 0){
          tipeHarga = 'Plain Price';
          if(material.value == "samson70" || material.value == "samson80" || material.value == "samson150") {
            if(quantity.value > 100) {
              harga = 600;
            }
            else {
              harga = 800;
            }
          }
          else {
            if(quantity.value > 50) {
              if(quantity.value <= 100) {
                harga = 5000;
              }
              else {
                if(quantity.value <= 200) {
                  harga = 3200;
                }
                else {
                  harga = 1750;
                }
              }
            }
            else {
              harga = 7000;
            }
          }
        }
        else {
          tipeHarga = 'Customization Price';
          if(material.value == "samson70" || material.value == "samson80" || material.value == "samson150") {
            if(quantity.value > 50) {
              if(quantity.value <= 100) {
                harga = 3000;
              }
              else {
                if(quantity.value <= 500) {
                  harga = 1000;
                }
                else {
                  harga = 800;
                }
              }
            }
            else {
              harga = 5000;
            }
          }
          else {
            if(quantity.value > 50) {
              if(quantity.value <= 100) {
                harga = 7000;
              }
              else {
                if(quantity.value <= 500) {
                  harga = 3800;
                }
                else {
                  harga = 1500;
                }
              }
            }
            else {
              harga = 12000;
            }
          }
        }
        break;
      case 'PACK LABEL':
        judul = 'Pack Label';
        if(custom == 0){
          tipeHarga = 'Plain Price';
          if(quantity.value > 50) {
            if(quantity.value <= 100) {
              harga = 7500;
            }
            else {
              if(quantity.value <= 500) {
                harga = 5000;
              }
              else {
                harga = 2500;
              }
            }
          }
          else {
            harga = 10000;
          }
        }
        else {
          tipeHarga = 'Customization Price';
          if(quantity.value > 50) {
            if(quantity.value <= 100) {
              harga = 7500;
            }
            else {
              if(quantity.value <= 500) {
                harga = 5000;
              }
              else {
                harga = 2500;
              }
            }
          }
          else {
            harga = 10000;
          }
        }
        break;
      case 'FOOD WRAP':
        judul = 'Food Wrap';
        if(custom == 0){
          tipeHarga = 'Plain Price';
          if(quantity.value > 50) {
            harga = 500;
          }
          else {
            harga = 800;
          }
        }
        else {
          tipeHarga = 'Customization Price';
          if(quantity.value > 50) {
            if(quantity.value <= 100) {
              harga = 2650;
            }
            else {
              if(quantity.value <= 500) {
                harga = 1550;
              }
              else {
                harga = 950;
              }
            }
          }
          else {
            harga = 3200;
          }
        }
        break;
      case 'CARD BOARD':
        judul = 'Card Board';
        if(custom == 0){
          tipeHarga = 'Plain Price';
          if(quantity.value > 50) {
            harga = 26000;
          }
          else {
            harga = 34000;
          }
        }
        else {
          tipeHarga = 'Customization Price';
          if(combination.value == "print") {
            if(quantity.value > 50) {
              if(quantity.value <= 100) {
                harga = 34000;
              }
              else {
                if(quantity.value <= 500) {
                  harga = 27000;
                }
                else {
                  harga = 20000;
                }
              }
            }
            else {
              harga = 40000;
            }
          }
          else {
            if(quantity.value > 50) {
              harga = 35000;
            }
            else {
              harga = 50000;
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

    var hargaFormat = convertToRupiah(harga);

    // Display the modal
    document.getElementById("judul").innerHTML = judul;
    document.getElementById("tipeHarga").innerHTML = tipeHarga;
    document.getElementById("harga").innerHTML = hargaFormat;
    modal.style.display = "block";

    var obj = {};
    obj.type = judul;
    obj.price = harga;
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

    if(judul == 'Soft Box' || judul == 'Pack Label') {
      switch (lamination.value) {
        case 'doff':
          obj.lamination = 'Doff';
          break;
        case 'glossy':
          obj.lamination = 'Glossy';
          break;
        default:
          obj.lamination = 'none';
      }
    }

    else {
      obj.lamination = 'none';
    }

    obj.quantity = quantity.value;
    obj.size1 = boxWidth.value;
    obj.size2 = boxHeight.value;
    obj.size3 = boxDepth.value;

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
      location.href="index.php";
    }

    document.getElementById("cancelBtn").onclick = function() {
      modal.style.display = "none";
    }
  }

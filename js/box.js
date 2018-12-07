  var scene = new THREE.Scene();
  var camera = new THREE.PerspectiveCamera(45,500 / 500,1,1000);

  var renderer = new THREE.WebGLRenderer({canvas: document.getElementById('myCanvas'),antialias: true});
  renderer.setClearColor(074666);
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(500,500);
  document.getElementById("custom").appendChild(renderer.domElement);

  //update viewport
  window.addEventListener('resize',function()
  {
      var width = 500;
      var height = 500;
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

  var geometry = new THREE.BoxGeometry(15,15,15);
  //create the shape
  //create the material, color, or image textures
  var cubeMaterials =
  [
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Right Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Left Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Top Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Bottom Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Front Side
    new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}) //Back Side
  ];

  var material = new THREE.MeshFaceMaterial(cubeMaterials);
  var cube = new THREE.Mesh(geometry,material);
  scene.add(cube);

  var boxWidth = document.getElementById("boxWidth");
  var boxHeight = document.getElementById("boxHeight");
  var boxDepth = document.getElementById("boxDepth");

  boxWidth.addEventListener('input', sliderChange);
  boxHeight.addEventListener('input', sliderChange);
  boxDepth.addEventListener('input', sliderChange);

  function sliderChange() {
    while(scene.children.length > 0){
      scene.remove(scene.children[0]);
    }
    var geometry = new THREE.BoxGeometry(boxWidth.value,boxHeight.value,boxDepth.value);
    //create the shape
    //create the material, color, or image textures
    var cubeMaterials =
    [
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Right Side
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Left Side
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby.jpg'), side : THREE.DoubleSide}),//Top Side
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Bottom Side
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}),//Front Side
      new THREE.MeshBasicMaterial({map : new THREE.TextureLoader().load('asset/bobby2.jpg'), side : THREE.DoubleSide}) //Back Side
    ];

    var material = new THREE.MeshFaceMaterial(cubeMaterials);
    var cube = new THREE.Mesh(geometry,material);
    scene.add(cube);
  }
  camera.position.z=50;

  //game logic
  var update = function()
  {
    // cube.rotation.x += 0.01;
    // cube.rotation.y += 0.005;
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

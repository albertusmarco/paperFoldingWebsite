var img;
function setup() {
  // put setup code here
  createCanvas(500, 500, WEBGL);
  // text = text('word');//text(str, x, y, [x2], [y2])
  img = loadImage("../asset/bobby.jpg");
}

function draw() {
  // put drawing code here
  // if(mouseIsPressed) {
  //   fill(0);
  // }
  // else {
  //   fill(255);
  // }
  // ellipse(mouseX, mouseY, 80, 80);
  // rotateX(frameCount * 0.01);
  // rotateY(frameCount * 0.01);
  background(0);//warna createCanvas
  //warna box
  // noStroke();
  // fill(0,0,255);
  orbitControl(5,5);//control orbit()
  push();
  texture(img);
  box(100,150,100);//box([width], [Height], [depth], [detailX], [detailY])
  pop();
}

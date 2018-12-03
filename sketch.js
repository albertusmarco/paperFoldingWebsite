function setup() {
  // put setup code here
  createCanvas(500, 500, WEBGL);
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
  background(0);//warna
  orbitControl(5,5);//control orbit()
  box(500,500,100);//box([width], [Height], [depth], [detailX], [detailY])
}

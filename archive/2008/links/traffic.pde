Ball[] myBalls;

void setup(){
  size(222, 600);
  frameRate(25);
  myBalls = new Ball[50];
  smooth();

  for (int i = 0; i < 50; i++){
    myBalls[i] = new Ball();
    myBalls[i].x = random(width);  
    myBalls[i].xa = random(width);
    myBalls[i].xb = random(width);
    myBalls[i].xc = random(width);
    myBalls[i].xd = random(width);
    myBalls[i].xe = random(width);
    
    myBalls[i].y = random(height);  
    myBalls[i].vx = random(-5,5);  
    myBalls[i].vxa = random(-5,5);  
    myBalls[i].vxb = random(-5,5);
    myBalls[i].vxc = random(-5,5);
    myBalls[i].vxd = random(-5,5);
    myBalls[i].vxe = random(-5,5);
    myBalls[i].vy = random(-5,5); 
    myBalls[i].rc = random(80,255);  
    myBalls[i].gc = random(30,40);   
    myBalls[i].bc = random(0,70);
    myBalls[i].dia = random(2);    
  }
}




void draw(){
background(#230a0a);

  for (int i = 0; i < 50; i++) // iterating 33 times
  {
    myBalls[i].bounce();
    myBalls[i].vx = random(-1,1);  
    myBalls[i].vy = random(-1,1); 
    }
}




class Ball
{
  float x;
  float y;
  float vx;
  float vy;
  float rc;
  float gc;
  float bc;
  float dia;
  
  float xa;
  float xb;
  float xc;
  float xd;
  float xe;
  
  float vxa;
  float vxb;
  float vxc;
  float vxd;
  float vxe;
  
void bounce(){
    drawShape();
    y = y + 2*vy;
    if (y < 0 || y > height){vy = -vy;}
    
    x = x + vx;
    xa = x + 10;
    xb = x + 20;
    xc = x + 30;
    xd = mouseX + 40;
    xe = mouseY + 50;
    
    if (x < 0 || x > width){vx = -vx;}
    if (xa < 0 || xa > width){vxa = -vxa;}
    if (xb < 0 || xb > width){vxb = -vxb;}
    if (xc < 0 || xc > width){vxc = -vxc;}
    if (xd < 0 || xd > width){vxd = -vxd;}
    if (xe < 0 || xe > width){vxe = -vxe;}
}


void drawShape(){
    ellipseMode(CENTER_RADIUS);
    noStroke();
    //fill(#dea8e1);
    fill(rc, gc, bc);
    
    ellipse(x, y, dia, dia);
    ellipse(xa, y, dia, dia);
    ellipse(xb, y, dia, dia);
    ellipse(xc, y, dia, dia);
    ellipse(xd, y, dia, dia);
    ellipse(xe, y, dia, dia);
}
}

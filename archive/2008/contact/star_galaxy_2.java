import processing.core.*; import java.applet.*; import java.awt.*; import java.awt.image.*; import java.awt.event.*; import java.io.*; import java.net.*; import java.text.*; import java.util.*; import java.util.zip.*; public class star_galaxy_2 extends PApplet {Ball[] myBalls;

public void setup(){
  size(504, 255);
  frameRate(25);
  myBalls = new Ball[15];
  smooth();

  for (int i = 0; i < 15; i++){
    myBalls[i] = new Ball();
    myBalls[i].x = random(width-50);  
    myBalls[i].xa = random(width-50);
    myBalls[i].xb = random(width-50);
    myBalls[i].xc = random(width-50);
    myBalls[i].xd = random(width-50);
    myBalls[i].xe = random(width-50);
    
    myBalls[i].y = random(20,height-20);  
    myBalls[i].vx = random(-1,1);  
    myBalls[i].vxa = random(-1,1);  
    myBalls[i].vxb = random(-1,1);
    myBalls[i].vxc = random(-1,1);
    myBalls[i].vxd = random(-1,1);
    myBalls[i].vxe = random(-1,1);
    myBalls[i].vy = random(-1,1); 
    myBalls[i].rc = random(210,220);  
    myBalls[i].gc = random(220,230);   
    myBalls[i].bc = random(220,230);
    myBalls[i].dia = random(1);    
  }
}




public void draw(){
background(0xff190f1a);

  for (int i = 0; i < 15; i++) // iterating 33 times
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
  
public void bounce(){
    drawShape();
    y = y + 2*vy;
    if (y < 0 || y > height){vy = -vy;}
    
    x = x + vx;
    xa = xa + vxa;
    xb = xb + vxb;
    xc = xc + vxc;
    xd = xd + vxd;
    xe = xe + vxe;
    
    if (x < 0 || x > width){vx = -vx;}
    if (xa < 0 || xa > width){vxa = -vxa;}
    if (xb < 0 || xb > width){vxb = -vxb;}
    if (xc < 0 || xc > width){vxc = -vxc;}
    if (xd < 0 || xd > width){vxd = -vxd;}
    if (xe < 0 || xe > width){vxe = -vxe;}
}


public void drawShape(){
    ellipseMode(CORNER);
    //noStroke();
    noFill();
    //fill(#dea8e1);
    stroke(rc, gc, bc);
    strokeWeight(6);
    
    arc(x, y, dia, dia, xe, vxe);
    //arc(xa, y, dia, dia, y, xd);
    //arc(xb, y, dia, dia, y, xc);
    //arc(xc, y, dia, dia, y, xb);
    //arc(xd, y, dia, dia, y, xa);
    //arc(xe, y, dia, dia, y, x);
}
}

  static public void main(String args[]) {     PApplet.main(new String[] { "star_galaxy_2" });  }}
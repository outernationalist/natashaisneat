int a = int(random(50,150));
int b = int(random(50,300));
int c = int(random(40));
int d = int(random(40));
int e = int(random(40));
    
/////////////////////////////////////////

void setup(){
  size(800,800);
}

/////////////////////////////////////////

void draw(){
  background(#FFFFFF);
  stroke(#000000);
/////////////////////////////////////////    1st Set



  drawShape(a, b);              /////Row 1
  drawShape(a+20, e);
  drawShape(c, 0);
  drawShape(a+20, b+c);     
  drawShape(c+5, b+a);

  drawShape(a, -450);          /////Row 2
  drawShape(c, 0);
  drawShape(c+25, 1);
  drawShape(d, 0);     
  drawShape(e, 2);
  
  drawShape(-210, 40);          /////Row 3
  drawShape(e, a);
  drawShape(5, 0);
  drawShape(d+6, 10);     
  drawShape(c, 0);
  
  drawShape(-210, 40);          /////Row 4
  drawShape(c+e, 10);
  drawShape(e, e);
  drawShape(5, a+50);     
  drawShape(10, e);
  
  drawShape(-210, 40);          /////Row 5
  drawShape(6, 0);
  drawShape(c, 0);
  drawShape(d+10, 0);     
  drawShape(e, 0);
  
  drawShape(-210, 40);          /////Row 6
  drawShape(c, 0);
  drawShape(c, 0);
  drawShape(c, 0);     
  drawShape(c, 0);

}

/////////////////////////////////////////

void drawShape(int x, int y){            //1st Set
  translate(x, y);
  line(0, 0, 0, 4-mouseX);
  translate(1, -2);
  line(0, 0, 0, 8);
  translate(1, -1);
  line(0, 0, 0, 10-mouseX);  
  translate(1, -3);
  line(0, 0, 0, 16);
  translate(1, -1);
  line(0, 0, 0, 18-mouseX); 
  translate(1, -1);
  line(0, 0, 0, 20);
  translate(1, +1);
  line(0, 0, 0, 18-mouseX); 
  translate(1, +3);
  line(0, 0, 0, 16);
  translate(1, +1);
  line(0, 0, 0, 10-mouseX);
  translate(1, +2);
  line(0, 0, 0, 8);
  translate(1, +1);
  line(0, 0, 0, 4-mouseX); 
}



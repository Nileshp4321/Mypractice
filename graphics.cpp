#include<graphics.h>
#include<conio.h>
#include<stdio.h>
int main()
{
    int gd=0,gm;
    initgraph(&gd,&gm,"");
    circle(200,100,80);
    getch();
    closegraph();

}
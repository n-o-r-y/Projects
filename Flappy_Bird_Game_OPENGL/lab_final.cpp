#include <GL/gl.h>
#include<stdio.h>
#include<math.h>
#include <GL/glut.h>

void circle(GLfloat rx, GLfloat ry, GLfloat cx, GLfloat cy)
{
    glBegin(GL_POLYGON);
    glVertex2f(cx, cy);
    for (int i = 0; i <= 360; i++)
    {
        float angle = i * 3.1416 / 180;
        float x = rx * cos(angle);
        float y = ry * sin(angle);
        glVertex2f((x + cx), (y + cy));
    }
    glEnd();
}
void rectangle(double x, double y, double h, double w)
{
    glBegin(GL_POLYGON);
    glVertex2f(x, y);
    glVertex2f(x, y + h);
    glVertex2f(x + w, y + h);
    glVertex2f(x + w, y);
    glEnd();
}
float shift = 0;
void init(void)
{
    glClearColor(0.0, 0.9, 0.9, 0.0);
    glMatrixMode(GL_PROJECTION);
    gluOrtho2D(-250, 250, -250, 250);
}

void fun()
{
    glPushMatrix();
    glColor3ub(255, 255, 255);
    rectangle(-250, -250, 500, 500);

    //shadow
    glColor3ub(180, 180, 180);
    circle(70, 50, 0, -50);

    //body
    glColor3ub(183, 104, 1);
    circle(40, 70, 0, 0);
    glColor3ub(253, 178, 85);
    circle(30, 60, 0, 20);

    //left leg
    glColor3ub(183, 104, 1);
    circle(15, 30, -28, -45);
    glColor3ub(253, 178, 85);
    circle(10, 21, -30, -50);

    //right leg
    glColor3ub(183, 104, 1);
    circle(15, 30, 28, -45);
    glColor3ub(253, 178, 85);
    circle(10, 21, 30, -50);

    //left hand
    glColor3ub(183, 104, 1);
    circle(12, 20, -47, 18);

    //right hand
    glColor3ub(183, 104, 1);
    circle(12, 20, 47, 18);

    //head
    glColor3ub(183, 104, 1);
    circle(50, 80, 0, 100);

    //left eye
    glColor3ub(255, 255, 255);
    circle(10, 17, -20, 100);
    glColor3ub(0, 0, 0);
    circle(7, 12, -20, 100);

    //right eye;
    glColor3ub(255, 255, 255);
    circle(10, 17, 20, 100);
    glColor3ub(0, 0, 0);
    circle(7, 12, 20, 100);

    //mouth
    glColor3ub(253, 178, 85);
    circle(20, 30, 0, 62);

    //lip
    glColor3ub(183, 104, 1);
    circle(5, 10, 5, 70);
    glColor3ub(183, 104, 1);
    circle(5, 10, -5, 70);
    glColor3ub(253, 178, 85);
    circle(5, 10, 5, 73);
    glColor3ub(253, 178, 85);
    circle(5, 10, -5, 73);

    //nose
    glColor3ub(0, 0, 0);
    circle(10, 5, 0, 75);

    //left ear
    glColor3ub(183, 104, 1);
    circle(15, 25, -47, 167);
    glColor3ub(253, 178, 85);
    circle(8, 14, -47, 167);

    //right ear
    glColor3ub(183, 104, 1);
    circle(15, 25, 47, 167);
    glColor3ub(253, 178, 85);
    circle(8, 14, 47, 167);

    //balloon
    glColor3ub(0, 0, 0);
    circle(20, 35, -100, 100);
    glColor3ub(255, 255, 255);
    circle(17, 30, -100, 100);
    glColor3ub(0, 0, 0);
    circle(17, 34, -98, 98);
    glBegin(GL_TRIANGLES);
    glVertex2d(-100, 40);
    glVertex2d(-120, 93);
    glVertex2d(-80, 93);
    glEnd();
    // glColor3ub(0, 0, 0);
    // circle(18, 40, -100, 80);
    glBegin(GL_TRIANGLES);
    glVertex2d(-100, 48);
    glVertex2d(-105, 38);
    glVertex2d(-95, 38);
    glEnd();
    glBegin(GL_LINES);
    glVertex2d(-100, 38);
    glVertex2d(-102, 25);
    glEnd();
    glBegin(GL_LINES);
    glVertex2d(-102, 25);
    glVertex2d(-100, 10);
    glEnd();
    glBegin(GL_LINES);
    glVertex2d(-100, 10);
    glVertex2d(-97, 0);
    glEnd();
}

void display(void)
{
    glClear(GL_COLOR_BUFFER_BIT);
    glColor3ub(255, 255, 255);
    fun();
    glFlush();
    glutSwapBuffers();
}


int main(int argc, char** argv)
{
    glutInit(&argc, argv);
    glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB);
    glutInitWindowSize(1000, 600);
    glutInitWindowPosition(100, 100);
    glutCreateWindow("Lab Final");
    init();
    glutDisplayFunc(display);
    glutMainLoop();
    return 0;
}

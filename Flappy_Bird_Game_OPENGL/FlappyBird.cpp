#include<bits/stdc++.h>
#include<GL/glut.h>
#include<GL/gl.h>
#include<windows.h>
using namespace std;

int BORDER_DIRECTION_X[4] = { 0, 0, -5, 5 };//x koto barbe kombe
int BORDER_DIRECTION_Y[4] = { 5, -5, 0, 0 };//y koto barbe kombe

//all possible border combination
//0 bit = up_border 
//1 bit = down_border 
//2 bit = left_border 
//3 bit = right_border 
string BORDER_NONE = "0000";
string BORDER_RIGHT = "0001";
string BORDER_LEFT = "0010";
string BORDER_HORIZONTAL = "0011";
string BORDER_DOWN = "0100";
string BORDER_DOWN_RIGHT = "0101";
string BORDER_DOWN_LEFT = "0110";
string BORDER_DOWN_HORIZONTAL = "0111";
string BORDER_UP = "1000";
string BORDER_UP_RIGHT = "1001";
string BORDER_UP_LEFT = "1010";
string BORDER_UP_HORIZONTAL = "1011";
string BORDER_VERTICAL = "1100";
string BORDER_VERTICAL_RIGHT = "1101";
string BORDER_VERTICAL_LEFT = "1110";
string BORDER_ALL = "1111";

int global_timer = 0;
int wing_position = 0;
int building_timer = 0;
int score = 0;

bool game_running = 0;
bool game_over = 0;

void init(void)
{
    glClearColor(0.0, 0.0, 0.0, 0.0);
    glOrtho(-960.0, 960.0, -400.0, 680.0, -1.0, 1.0);
}

void circle(double ctr_x, double ctr_y, double r, double red, double green, double blue)
{
    glColor3f(red, green, blue);
    glBegin(GL_POLYGON);
    int cur_x = 0;
    int cur_y = r;
    int P = 1 - r;
    while (cur_x <= cur_y)
    {
        glVertex2i(ctr_x + cur_x, ctr_y + cur_y);
        glVertex2i(ctr_x + cur_y, ctr_y + cur_x);
        glVertex2i(ctr_x + cur_x, ctr_y - cur_y);
        glVertex2i(ctr_x + cur_y, ctr_y - cur_x);
        glVertex2i(ctr_x - cur_x, ctr_y + cur_y);
        glVertex2i(ctr_x - cur_y, ctr_y + cur_x);
        glVertex2i(ctr_x - cur_x, ctr_y - cur_y);
        glVertex2i(ctr_x - cur_y, ctr_y - cur_x);
        if (P < 0)
        {
            P = P + 2 * (cur_x + 1) + 1;
        }
        else
        {
            cur_y--;
            P = P + 2 * (cur_x + 1) + 1 - 2 * (cur_y - 1);
        }
        cur_x++;
    }
    glEnd();
}

void rect(int x, int y, int h, int w, double r, double g, double b, string borderMask) {

    for (int i = 0; i < 4; i++) {
        if (borderMask[i] == '1') {
            rect(x + BORDER_DIRECTION_X[i], y + BORDER_DIRECTION_Y[i], h, w, 0, 0, 0, BORDER_NONE);
        }
    }
    glColor3d(r / 255.0, g / 255.0, b / 255.0);
    glBegin(GL_POLYGON);
    glVertex2d(x, y);
    glVertex2d(x, y + h);
    glVertex2d(x + w, y + h);
    glVertex2d(x + w, y);
    glEnd();
}

void rectangle(double x, double y, double h, double w, double r, double g, double b)
{
    glColor3f(r, g, b);
    glBegin(GL_POLYGON);
    glVertex2f(x, y);
    glVertex2f(x, y + h);
    glVertex2f(x + w, y + h);
    glVertex2f(x + w, y);
    glEnd();
}
void sky() {
    rectangle(-960, -400, 1080, 1920, 0.2, 0.6, 0.8);
}
void cloud(int x)
{
    circle(x - 750, 0, 40, 1.0, 1.0, 1.0);
    circle(x - 936, 8, 35, 1.0, 1.0, 1.0);
    circle(x - 890, 12, 50, 1.0, 1.0, 1.0);
    circle(x - 832, 5, 50, 1.0, 1.0, 1.0);
}
void building1(int x)
{
    double r = 0.7, g = 0.9, b = 0.8, r1 = 0.6, g1 = 0.8, b1 = 0.8;
    rectangle(x - 916, -180 - 20, 90, -28, r1, g1, b1);
    rectangle(x - 920, -180 - 20, 86, -20, r, g, b);
    rectangle(x - 960, -180 - 20, 64, 53, r1, g1, b1);
    rectangle(x - 957, -180 - 20, 60, 45, r, g, b);
    rectangle(x - 890, -180 - 20, 104, 40, r1, g1, b1);
    rectangle(x - 885, -180 - 20, 100, 35, r, g, b);
    rectangle(x - 875, -180 - 20, 120, 35, r1, g1, b1);
    rectangle(x - 870, -180 - 20, 115, 25, r, g, b);
    rectangle(x - 855, -180 - 20, 102, 40, r1, g1, b1);
    rectangle(x - 852, -180 - 20, 98, 33, r, g, b);
    rectangle(x - 828, -180 - 20, 88, 18, r1, g1, b1);
    rectangle(x - 824, -180 - 20, 84, 10, r, g, b);
    rectangle(x - 925, -160 - 20, 35, 57, r1, g1, b1);
    rectangle(x - 922, -160 - 20, 32, 50, r, g, b);

}
void tree(int x)
{
    double r = 0.3, g = 0.8, b = 0.4, r1 = 0.4, g1 = 0.7, b1 = 0.5;
    circle(x - 760, -195 - 20, 42, r1, g1, b1);
    circle(x - 760, -195 - 20, 38, r, g, b);
    circle(x - 935, -185 - 20, 40, r1, g1, b1);
    circle(x - 935, -185 - 20, 36, r, g, b);
    circle(x - 908, -195 - 20, 42, r1, g1, b1);
    circle(x - 908, -195 - 20, 38, r, g, b);
    circle(x - 930, -200 - 20, 38, r1, g1, b1);
    circle(x - 930, -200 - 20, 34, r, g, b);
    circle(x - 860, -190 - 20, 42, r1, g1, b1);
    circle(x - 860, -190 - 20, 38, r, g, b);
    circle(x - 880, -210 - 20, 42, r1, g1, b1);
    circle(x - 880, -210 - 20, 38, r, g, b);
    circle(x - 836, -195 - 20, 42, r1, g1, b1);
    circle(x - 836, -195 - 20, 38, r, g, b);
    circle(x - 850, -210 - 20, 42, r1, g1, b1);
    circle(x - 850, -210 - 20, 38, r, g, b);
    circle(x - 800, -210 - 20, 42, r1, g1, b1);
    circle(x - 800, -210 - 20, 38, r, g, b);
}

void light_line(int x, int h) {
    rectangle(x, -240 + h + 10, 5, 5, 0.44, 0.60, 0.19);
    rectangle(x + 5, -240 + h + 10, 5, 5, 0.44, 0.75, 0.19);
    rectangle(x + 10, -240 + h + 10, 5, 45, 0.90, 1.0, 0.53);
    rectangle(x + 55, -240 + h + 10, 5, 5, 0.44, 0.75, 0.19);
    rectangle(x + 60, -240 + h + 10, 5, 35, 0.61, 0.9, 0.35);
    rectangle(x + 90, -240 + h + 10, 5, 5, 0.44, 0.60, 0.19);
}

void pipe_cover(int x, int h, bool top) {
    rectangle(x - 5, -270 + h, 50, 110, 0.30, 0.2, 0.24);
    rectangle(x, -265 + h, 40, 100, 0.32, 0.50, 0.12);
    rectangle(x, -270 + h + 10, 30, 5, 0.61, 0.9, 0.35);
    rectangle(x + 5, -270 + h + 10, 30, 5, 0.90, 1.0, 0.53);
    rectangle(x + 10, -270 + h + 10, 30, 15, 0.61, 0.9, 0.35);
    rectangle(x + 25, -270 + h + 10, 30, 5, 0.44, 0.75, 0.19);
    rectangle(x + 30, -270 + h + 10, 30, 5, 0.61, 0.9, 0.35);
    rectangle(x + 35, -270 + h + 10, 30, 65, 0.44, 0.75, 0.19);
    rectangle(x + 90, -270 + h + 10, 30, 10, 0.32, 0.50, 0.12);
    rectangle(x + 80, -270 + h + 10, 30, 5, 0.32, 0.50, 0.12);

    light_line(x, h - top * 35);
}

void pipe_texture(int x, int y, int h) {//
    rectangle(x, y, h, 100, 0.30, 0.2, 0.24);
    rectangle(x + 5, y, h, 5, 0.61, 0.9, 0.35);
    rectangle(x + 10, y, h, 5, 0.90, 1.0, 0.53);
    rectangle(x + 15, y, h, 15, 0.61, 0.9, 0.35);
    rectangle(x + 30, y, h, 5, 0.44, 0.75, 0.19);
    rectangle(x + 35, y, h, 5, 0.61, 0.9, 0.35);
    rectangle(x + 40, y, h, 55, 0.44, 0.75, 0.19);
    rectangle(x + 85, y, h, 10, 0.32, 0.50, 0.12);
    rectangle(x + 75, y, h, 5, 0.32, 0.50, 0.12);
}

void pipe(int x, int h) {
    pipe_texture(x, -270, h);
    pipe_cover(x, h, 0);
    pipe_texture(x, -270 + h + 350, 1080);
    pipe_cover(x, h + 300, 1);
}

void moving_ground(int x) {//ground er animation
    for (int i = -x - 960;i < 960;i += 60) {
        rectangle(i, -320, 10, 30, 0.61, 0.9, 0.35);
        rectangle(i + 15, -310, 10, 30, 0.61, 0.9, 0.35);
        rectangle(i + 30, -300, 10, 30, 0.61, 0.9, 0.35);
    }
}

void ground() {
    rectangle(-960, -400, 60, 1920, 0.87, 0.85, 0.58);
    rectangle(-960, -340, 10, 1920, 0.83, 0.65, 0.28);
    rectangle(-960, -330, 10, 1920, 0.34, 0.51, 0.11);
    rectangle(-960, -320, 30, 1920, 0.44, 0.75, 0.19);
    rectangle(-960, -290, 10, 1920, 0.90, 1.0, 0.53);
    rectangle(-960, -280, 10, 1920, 0.30, 0.2, 0.24);
}

void eye(int x, int y) {
    rect(x + 45, y + 10, 25, 10, 250, 250, 250, BORDER_LEFT);
    rect(x + 45, y + 10, 15, 20, 250, 250, 250, BORDER_LEFT);
    rect(x + 40, y + 15, 15, 20, 250, 250, 250, BORDER_LEFT);
    rect(x + 40, y + 15, 10, 5, 200, 200, 200, BORDER_NONE);
    rect(x + 45, y + 10, 5, 5, 200, 200, 200, BORDER_NONE);
    rect(x + 60, y + 15, 10, 5, 250, 250, 250, BORDER_LEFT);
}

void beak(int x, int y) {
    rect(x + 45, y, 5, 30, 238, 86, 70, BORDER_ALL);
    rect(x + 40, y - 5, 5, 5, 238, 86, 70, BORDER_ALL);
    rect(x + 45, y - 10, 5, 25, 238, 86, 70, BORDER_ALL);
}

void wing_0(int x, int y) {
    rect(x + 5, y, 20, 15, 255, 255, 255, BORDER_ALL);
    rect(x, y + 5, 10, 25, 255, 255, 255, BORDER_HORIZONTAL);
    rect(x, y + 5, 15, 15, 255, 255, 255, BORDER_UP_LEFT);
    rect(x + 5, y, 5, 15, 254, 196, 0, BORDER_NONE);
    rect(x, y + 5, 5, 5, 254, 196, 0, BORDER_NONE);
    rect(x + 20, y + 5, 5, 5, 254, 196, 0, BORDER_NONE);
    rect(x + 20, y + 10, 5, 5, 240, 240, 240, BORDER_NONE);
}

void wing_1(int x, int y) {
    rect(x, y, 10, 25, 255, 255, 255, BORDER_ALL);
    rect(x, y, 5, 5, 254, 196, 0, BORDER_NONE);
    rect(x + 20, y, 5, 5, 254, 196, 0, BORDER_NONE);
}

void wing_2(int x, int y) {
    rect(x, y - 10, 15, 15, 255, 255, 255, BORDER_ALL);
    rect(x, y, 5, 25, 255, 255, 255, BORDER_ALL);
    rect(x, y - 5, 10, 20, 255, 255, 255, BORDER_NONE);
    rect(x, y, 5, 5, 254, 196, 0, BORDER_NONE);
    rect(x + 20, y, 5, 5, 254, 196, 0, BORDER_NONE);
    rect(x + 10, y - 10, 5, 5, 254, 196, 0, BORDER_NONE);
}
void bodyUpper(int x, int y) {
    rect(x + 15, y, 30, 45, 254, 196, 0, BORDER_UP_HORIZONTAL);
    rect(x + 25, y, 35, 30, 254, 196, 0, BORDER_UP);
    rect(x + 10, y, 25, 55, 254, 196, 0, BORDER_HORIZONTAL);
    rect(x + 5, y, 20, 60, 254, 196, 0, BORDER_LEFT);
    rect(x, y, 10, 65, 254, 196, 0, BORDER_LEFT);
}

void bodyLower(int x, int y) {
    rect(x + 10, y - 10, 10, 35, 255, 107, 8, BORDER_DOWN_LEFT);
    rect(x + 5, y - 5, 5, 40, 255, 107, 8, BORDER_LEFT);
    rect(x + 20, y - 15, 15, 25, 255, 107, 8, BORDER_DOWN_RIGHT);
}

void body(int x, int y) {
    bodyUpper(x, y);
    bodyLower(x, y);
}

void drawFlappyBird(int x, int y) {//
    body(x, y);
    beak(x, y);
    eye(x, y);
    if (wing_position == 0)wing_0(x, y);
    else if (wing_position == 1)wing_1(x, y);
    else if (wing_position == 2)wing_2(x, y);
}

void moving_background()
{
    rectangle(-960, -188, 200, 1920, 1.0, 1.0, 1.0);
    for (int i = 0;i < 18;i++)
    {
        int cur_x = -building_timer + i * 240;
        cloud(cur_x);
        building1(cur_x);
        tree(cur_x);
    }
    rectangle(-960, -400, 190, 1920, 0.3, 0.8, 0.4);
}

deque<pair<int, int>> pipe_info;
void show_pipes() {
    if (!game_running) return;
    if (pipe_info.empty() || pipe_info.back().first < 320) {
        int position = 960;
        int height = 100 + int(rand()) % 400;
        pipe_info.push_back({ position, height });
    }
    if (!pipe_info.empty() && pipe_info.front().first < -1080) {
        pipe_info.pop_front();
    }
    for (int i = 0;i < pipe_info.size();i++) {
        if (!game_over)pipe_info[i].first -= 5;
        pipe(pipe_info[i].first, pipe_info[i].second);
    }
}

int flappy_bird_y = 0;
int gravity_speed = 0;

bool is_pipe_middle(int x) {
    int lx = x;
    int rx = x + 110;
    if (rx < -5) return 0;//interval technique
    if (lx > 80) return 0;
    return 1;
}

bool does_pipe_hit_bird(int h) {
    if (flappy_bird_y - 20 < h)return 1;
    if (flappy_bird_y + 40 > h + 250)return 1;
    return 0;
}

bool cur_pass = 0;
bool prev_pass = 0;
void collision_func() {
    if (!game_running)return;
    if (game_over)return;
    bool passing_pipe = 0;
    for (auto& [x, h] : pipe_info) {
        if (is_pipe_middle(x - 5)) {
            passing_pipe = 1;
            if (does_pipe_hit_bird(h - 220)) {
                game_over = 1;
                cout << score << "\n";
            }
        }
    }
    cur_pass = passing_pipe;
    if (!cur_pass && prev_pass)score++;
    prev_pass = cur_pass;
}

void textLine(string s) {
    glRasterPos2i(-960, 600);
    void* font = GLUT_BITMAP_HELVETICA_18;
    for (auto x : s) {
        glutBitmapCharacter(font, x);
    }
}

void textInstructions() {
    if (!game_running) {
        glColor3d(1.0, 1.0, 1.0);
        textLine("\t\tPress Space to start");
    }
    else if (game_over) {
        glColor3d(1.0, 0.2, 0.2);
        textLine("\t\tPress R to restart. Your score " + to_string(score));
    }
    else {
        glColor3d(1.0, 1.0, 1.0);
        textLine("\t\t" + to_string(score));
    }
}

void Draw()
{
    Sleep(14);
    glClear(GL_COLOR_BUFFER_BIT);
    glPushMatrix();
    global_timer++;
    if (global_timer == 10)
    {
        global_timer = 0;
        if (game_running && !game_over) {//wing er kahini
            wing_position++;
            wing_position %= 3;
        }
    }
    sky();
    moving_background();
    show_pipes();
    if (!game_over)building_timer++;
    building_timer %= 960;
    ground();
    moving_ground(building_timer);
    gravity_speed++;
    int bird_pos = flappy_bird_y - gravity_speed / 5;
    if (!game_running)bird_pos = 0;
    flappy_bird_y = max(bird_pos, -270);
    if (flappy_bird_y == -270)game_over = 1;
    drawFlappyBird(0, flappy_bird_y + wing_position * 10);
    collision_func();
    textInstructions();
    glutPostRedisplay();
    glPopMatrix();
    glFlush();
    glutSwapBuffers();
}

void restart() {
    game_running = 1;
    game_over = 0;
    flappy_bird_y = 0;
    gravity_speed = 0;
    score = 0;
    pipe_info.clear();
}

void func_key(unsigned char key, int x, int y) {
    if (key == ' ' && !game_over) {
        game_running = 1;
        gravity_speed = -40;
    }
    if (key == 'r' && game_over) {
        restart();
    }
    glutPostRedisplay();
}

int main(int argc, char** argv) {
    glutInit(&argc, argv);
    glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE);
    glutInitWindowPosition(100, 100);
    glutInitWindowSize(960, 540);
    glutCreateWindow("Flappy Bird");
    init();
    glutDisplayFunc(Draw);
    glutKeyboardUpFunc(func_key);
    glutMainLoop();
    return 0;
}

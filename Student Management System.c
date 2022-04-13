#include<stdlib.h>
#include<string.h>
#include<stdio.h>
#include<windows.h>
struct Student
{
    char id[20];
    char name[50];
    char gender[10];
    char phone[15];
    int mark1,mark2,mark3,mark4,mark5,mark6,totalmarks,sum;
    float avg,div,grade,cgpa;
    struct Student *next;

}* head;


char C[100];//for password
void password()
{
    int i=0;
    while(1)
    {
        C[i]=getch();
        if(C[i]==13)break;
        else
            printf("*");
        i++;
    }
    C[i]='\0';
}

void insert()
{
    printf("\033[1;36m");
    char name[50];
    char id[20];
    char gender[10];
    char phone[15];
    struct Student * student = (struct Student *) malloc(sizeof(struct Student));
    printf("\n\n\t\t\t\tEnter Name: ");
    fflush(stdin);
    gets(name);
    printf("\t\t\t\tEnter ID: ");
    scanf("%s", id);
    printf("\t\t\t\tEnter Gender: ");
    scanf("%s", gender);
    printf("\t\t\t\tEnter Phone Number: ");
    scanf("%s", phone);
    strcpy(student->name, name);
    strcpy(student->id, id);
    strcpy(student->gender, gender);
    strcpy(student->phone, phone);
    student->next = NULL;
    if(head==NULL)
    {
        // if head is NULL
        // set student as the new head
        head = student;
    }
    else
    {
        // if list is not empty
        // insert student in beginning of head
        student->next = head;
        head = student;
    }
    printf("\n\n");
    system("cls");
}

void loading()
{
    for(int i=0; i<120; i++)
    {
        {
            printf("%c",175);
            Sleep(10);
        }
    }
}

int count()
{
    int count=0;
    struct Student *temp;
    temp=head;

    while(temp!=NULL)
    {
        count++;
        temp=temp->next;
    }

    return count;
}

void display()
{
    struct Student * temp = head;
    while(temp!=NULL)
    {

        printf("\n\n\n\t\t\t\033[1;36mName: %s\n", temp->name);
        printf("\t\t\t\033[1;36mRoll Number: %s\n", temp->id);
        printf("\t\t\t\033[1;36mGender: %s\n", temp->gender);
        printf("\t\t\t\033[1;36mPhone: %s\n", temp->phone);
        temp = temp->next;
    }
    printf("\n\t\t\033[1;33mTotal Students: %d\n",count());
    printf("\n\n");
    printf("\033[1;36");
    system("pause");
    system("cls");
}

float add_marks()
{
    system("cls");
    printf("\n\n\t\t\t\t---------------------------------------------\n");
    printf("\t\t\t\t|            Add Exam Marks                 |\n");
    printf("\t\t\t\t---------------------------------------------\n");
    printf("\n\n");
    char id[50];
    struct Student *cg = (struct Student *) malloc(sizeof(struct Student));
    float avg,div,p,g1,g2,g3,g4,g5,g6;
    int totalmarks=600,sum=0;
    printf("\n\n\t\t\tEnter ID number of the student: ");
    scanf("%s", id);
    struct Student * temp = head;
    while(temp!=NULL)
    {

        if(strcmp(temp->id,id)==0)
        {
            printf("\n\t\t\t\tEnter marks of Data Structure: ");
            scanf("%d",&cg->mark1);
            if(cg->mark1>=80 && cg->mark1<=100)
            {
                g1=4.00;
            }
            else if(cg->mark1>=75 && cg->mark1<=79)
            {
                g1=3.75;
            }
            else if(cg->mark1>=70 && cg->mark1<=74)
            {
                g1=3.50;
            }
            else if(cg->mark1>=65 && cg->mark1<=69)
            {
                g1=3.25;
            }
            else if(cg->mark1>=60 && cg->mark1<=64)
            {
                g1=3.00;
            }
            else if(cg->mark1>=55 && cg->mark1<=59)
            {
                g1=2.75;
            }
            else if(cg->mark1>=50 && cg->mark1<=54)
            {
                g1=2.50;
            }
            else if(cg->mark1>=45 && cg->mark1<=49)
            {
                g1=2.25;
            }
            else if(cg->mark1>=40 && cg->mark1<=44)
            {
                g1=2.00;
            }
            else if(cg->mark1>=0 && cg->mark1<=39)
            {
                g1=0.00;
            }
            printf("\t\t\t\tEnter marks of Electrical Circuit: ");
            scanf("%d",&cg->mark2);
            if(cg->mark2>=80 && cg->mark2<=100)
            {
                g2=4.00;
            }
            else if(cg->mark2>=75 && cg->mark2<=79)
            {
                g2=3.75;
            }
            else if(cg->mark2>=70 && cg->mark2<=74)
            {
                g2=3.50;
            }
            else if(cg->mark2>=65 && cg->mark2<=69)
            {
                g2=3.25;
            }
            else if(cg->mark2=60 && cg->mark2<=64)
            {
                g2=3.00;
            }
            else if(cg->mark2>=55 && cg->mark2<=59)
            {
                g2=2.75;
            }
            else if(cg->mark2>=50 && cg->mark2<=54)
            {
                g2=2.50;
            }
            else if(cg->mark2>=45 && cg->mark2<=49)
            {
                g2=2.25;
            }
            else if(cg->mark2>=40 && cg->mark2<=44)
            {
                g2=2.00;
            }
            else if(cg->mark2>=0 && cg->mark2<=39)
            {
                g2=0.00;
            }
            printf("\t\t\t\tEnter marks of Discrete Maths: ");
            scanf("%d",&cg->mark3);

            if(cg->mark3>=80 && cg->mark3<=100)
            {
                g3=4.00;
            }
            else if(cg->mark3>=75 && cg->mark3<=79)
            {
                g3=3.75;
            }
            else if(cg->mark3>=70 && cg->mark3<=74)
            {
                g3=3.50;
            }
            else if(cg->mark3>=65 && cg->mark3<=69)
            {
                g3=3.25;
            }
            else if(cg->mark3>=60 && cg->mark3<=64)
            {
                g3=3.00;
            }
            else if(cg->mark3>=55 && cg->mark3<=59)
            {
                g3=2.75;
            }
            else if(cg->mark3>=50 && cg->mark3<=54)
            {
                g3=2.50;
            }
            else if(cg->mark3>=45 && cg->mark3<=49)
            {
                g3=2.25;
            }
            else if(cg->mark3>=40 && cg->mark3<=44)
            {
                g3=2.00;
            }
            else if(cg->mark3>=0 && cg->mark3<=39)
            {
                g3=0.00;
            }

            printf("\t\t\t\tEnter marks of Art of living: ");
            scanf("%d",&cg->mark4);
            if(cg->mark4>=80 && cg->mark4<=100)
            {
                g4=4.00;
            }
            else if(cg->mark4>=75 && cg->mark4<=79)
            {
                g4=3.75;
            }
            else if(cg->mark4>=70 && cg->mark4<=74)
            {
                g4=3.50;
            }
            else if(cg->mark4>=65 && cg->mark4<=69)
            {
                g4=3.25;
            }
            else if(cg->mark4>=60 && cg->mark4<=64)
            {
                g4=3.00;
            }
            else if(cg->mark4>=55 && cg->mark4<=59)
            {
                g4=2.75;
            }
            else if(cg->mark4>=50 && cg->mark4<=54)
            {
                g4=2.50;
            }
            else if(cg->mark4>=45 && cg->mark4<=49)
            {
                g4=2.25;
            }
            else if(cg->mark4>=40 && cg->mark4<=44)
            {
                g4=2.00;
            }
            else if(cg->mark4>=0 && cg->mark4<=39)
            {
                g4=0.00;
            }
            printf("\t\t\t\tEnter marks of Software Project: ");
            scanf("%d",&cg->mark5);
            if(cg->mark5>=80 && cg->mark5<=100)
            {
                g5=4.00;
            }
            else if(cg->mark5>=75 && cg->mark5<=79)
            {
                g5=3.75;
            }
            else if(cg->mark5>=70 && cg->mark5<=74)
            {
                g5=3.50;
            }
            else if(cg->mark5>=65 && cg->mark5<=69)
            {
                g5=3.25;
            }
            else if(cg->mark5>=60 && cg->mark5<=64)
            {
                g5=3.00;
            }
            else if(cg->mark5>=55 && cg->mark5<=59)
            {
                g5=2.75;
            }
            else if(cg->mark5>=50 && cg->mark5<=54)
            {
                g5=2.50;
            }
            else if(cg->mark5>=45 && cg->mark5<=49)
            {
                g5=2.25;
            }
            else if(cg->mark5>=40 && cg->mark5<=44)
            {
                g5=2.00;
            }
            else if(cg->mark5>=0 && cg->mark5<=39)
            {
                g5=0.00;
            }
            printf("\t\t\t\tEnter marks of Social Studies: ");
            scanf("%d",&cg->mark6);
            if(cg->mark6>=80 && cg->mark6<=100)
            {
                g6=4.00;
            }
            else if(cg->mark6>=75 && cg->mark6<=79)
            {
                g6=3.75;
            }
            else if(cg->mark6>=70 && cg->mark6<=74)
            {
                g6=3.50;
            }
            else if(cg->mark6>=65 && cg->mark6<=69)
            {
                g6=3.25;
            }
            else if(cg->mark6>=60 && cg->mark6<=64)
            {
                g6=3.00;
            }
            else if(cg->mark6>=55 && cg->mark6<=59)
            {
                g6=2.75;
            }
            else if(cg->mark6>=50 && cg->mark6<=54)
            {
                g6=2.50;
            }
            else if(cg->mark6>=45 && cg->mark6<=49)
            {
                g6=2.25;
            }
            else if(cg->mark6>=40 && cg->mark6<=44)
            {
                g6=2.00;
            }
            else if(cg->mark6>=0 && cg->mark6<=39)
            {
                g6=0.00;
            }
            sum=cg->mark1+cg->mark2+cg->mark3+cg->mark4+cg->mark5+cg->mark6;
            cg->avg=sum/6.0;
            printf("\n\t\t\tPercentage: %0.2f%",cg->avg);
            cg->grade=(g1+g2+g3+g4+g5+g6)/6.0;
            printf("\n\t\t\tCGPA: %.2f%",cg->grade);
            printf("\n\n\t\t\tEXAM MARKS ADDED SUCCESSFULLY.\n\n");
            break;
        }
    }
    system("pause");
    system("cls");
}

void search()
{
    printf("\033[1;33m");
    char id[50];
    struct Student * temp = head;
    printf("\n\n\t\t\t\tEnter ID number to search: ");
    scanf("%s", id);
    while(temp!=NULL)
    {
        if(strcmp(temp->id,id)==0)
        {
            printf("\t\t\tName: %s\n", temp->name);
            printf("\t\t\tId: %s\n", temp->id);
            printf("\t\t\tGender: %s\n", temp->gender);
            printf("\t\t\tPhone: %s\n", temp->phone);
            return;
        }
        temp = temp->next;
    }
    printf("\t\t\tStudent with ID number %s is not found !!!\n", id);
    printf("\n\n");
    system("cls");
}
void update()
{
    char id[50];
    printf("\n\n\t\t\tEnter ID number to update: ");
    scanf("%s", id);
    struct Student * temp = head;
    while(temp!=NULL)
    {

        if(strcmp(temp->id,id)==0)
        {
            char ch;
            do
            {
                printf("\n\n\t\t\t\t1.Want to Update Name??\n");
                printf("\t\t\t\t2.Want to Update Phone Number??\n");
                printf("\t\t\t\t3.Exit");
                int choice;
                printf("\t\t\t\t\nCHOICE: ");
                scanf("%d",&choice);
                switch(choice)
                {
                case 1:
                    printf("\n\n\t\t\t\tUpdate Name: ");
                    scanf("%s", temp->name);
                    break;
                case 2:
                    printf("\t\t\t\tUpdate Phone Number: ");
                    scanf("%s", temp->phone);
                    break;
                case 3:
                    exit(0);
                    break;

                    printf("\t\t\tSuccessfully Updated!!!\n");
                    return;
                }
                temp = temp->next;
                printf("\t\t\tDo you want to continue(y/n)?");
                ch=getche();
            }
            while(ch=='y'|| ch!='n');
        }
    }
    printf("\t\t\tStudent with Id %s is not found !!!\n", id);
    printf("\n\n");
    system("cls");
}
void Delete()
{
    char id[100];
    printf("\n\n\t\t\tEnter ID Number to delete: ");
    scanf("%s",id);
    struct Student *temp1 = head;
    struct Student *temp2 = head;
    while(temp1!=NULL)
    {

        if(strcmp(temp1->id,id)==0)
        {

            if(temp1==temp2)
            {
                // this condition will run if
                // the record that we need to delete is the first node
                // of the linked list
                head = head->next;
                free(temp1);
            }
            else
            {
                // temp1 is the node we need to delete
                // temp2 is the node previous to temp1
                temp2->next = temp1->next;
                free(temp1);
            }

            printf("Recorded File Successfully Deleted !!!\n");
            return;

        }
        temp2 = temp1;
        temp1 = temp1->next;

    }
    printf("\t\t\t\033[0;31mStudent with ID %s is not found !!!\n", id);
}

int main()
{
    head = NULL;
    int choice,node_count;
    //node_count=count();
    char name[100];
    char phone[100];
    char id[100];
    system("COLOR 0A");
    system("cls");
    printf("\n\n\t\t\t\t*********************************************\n");
    printf("\t\t\t\t*                                           *\n");
    printf("\t\t\t\t*                 Student                   *\n");
    printf("\t\t\t\t*                                           *\n");
    printf("\t\t\t\t*                Management                 *\n");
    printf("\t\t\t\t*                                           *\n");
    printf("\t\t\t\t*                  System                   *\n");
    printf("\t\t\t\t*                                           *\n");
    printf("\t\t\t\t*********************************************\n");
    printf("\n\n");
    loading();
    printf("\t\t\t\t\t\t\tEnter Password: ");
    system("COLOR 06");
    password();
    system("cls");
    char N[15]="admin";
    if(strcmp(C,N)==0)
    {
        for(;;)
        {
            printf("\n\t\t\t\t-------------------------------------------------\n");
            printf("\n\t\t\t\t        The Task that you want to perform         \n");
            printf("\n\t\t\t\t-------------------------------------------------\n");
            printf("\n\n\t\t1. Add the Student Information\n");
            printf("\n\t\t2. Add Exam Marks\n");
            printf("\n\t\t3. Search Student Info\n");
            printf("\n\t\t4. Delete the Students Info\n");
            printf("\n\t\t5. Update Student Info\n");
            printf("\n\t\t6. All Students Info\n");
            printf("\n\t\t7. To Exit\n");
            printf("\n\t\tEnter Choice: ");
            scanf("%d", &choice);
            system("cls");
            switch (choice)
            {
            case 1:
                insert();
                break;
            case 2:
                add_marks();
                break;
            case 3:
                search();
                break;
            case 4:
                Delete();
                break;
            case 5:
                update();
                break;
            case 6:
                display();
                break;
            case 7:
                exit(0);
                break;
            }

        }
    }
    else
    {
        printf("\n\n\t\t\t\t\033[0;31m*********************************************\n");
        printf("\t\t\t\t\033[0;31m*                                           *\n");
        printf("\t\t\t\t\033[0;31m*                 WRONG                     *\n");
        printf("\t\t\t\t\033[0;31m*                                           *\n");
        printf("\t\t\t\t\033[0;31m*                PASSOWRD                   *\n");
        printf("\t\t\t\t\033[0;31m*                                           *\n");
        printf("\t\t\t\t\033[0;31m*********************************************\n");
        printf("\n\n\n");
    }
    return 0;
}

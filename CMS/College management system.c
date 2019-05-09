#include<stdio.h>
#include<stdlib.h>
#include<string.h>
int Admin();
int Adminpassword();
int Teacher();
int Teachersprofile1();
int Teachersprofile2();
int Teachersprofile3();
int Student();
int Studentsprofile1();
int Studentsprofile2();
int exit1();
struct stu
{
    char id;
    char username[100];
    char password[100];
    char name[100];
    char marks;
    char attendence;
}Stud;
struct tec
{
    char username[100];
    char password[100];
    char name[100];
    char dept[100];
    char designation[100];
}Tec;
struct adm
{
    char username[100];
    char password[100];
}Adm;
FILE *fstudent;
FILE *fteacher;
FILE *fadmin;
FILE *fstudentpassword;
FILE *fteacherpassword;
char username[100];
char password[100];
int main()
{
    int adm,tec,stu,choose;
    printf("Enter 1 for Admin\nEnter 2 for Teacher\nEnter 3 for Student\nEnter 0 for exit\n");
    scanf("%d",&choose);
    if(choose==1)
    {
        adm=Admin();
    }

     else if(choose==2)
    {
        tec=Teachersprofile1();
    }
     else if(choose==3)
    {
        stu=Studentsprofile1();
    }
    else if(choose==0)
    {
        return exit1();
    }
    else
    {
        printf("Please try again\n");
        return main();
    }
}
int Student()
{
    int i,n;
    printf("Enter the number of students u want to add\n");
    scanf("%d",&n);
   fstudent=(fopen("Student info.txt","a"));
   for(i=1;i<=n;i++)
   {
       printf("Enter id,name,marks & attendence\n");
       scanf("%d%s%s%s",&Stud.id,&Stud.name,&Stud.marks,&Stud.attendence);
       fprintf(fstudent,"%s\n%s\n%s\n%s\n",Stud.id,Stud.name,Stud.marks,Stud.attendence);
   }
   fclose(fstudent);
   return main();

}
int Studentsprofile1()
{
        char id[100];
        int i=0;
        fstudentpassword=fopen("Student password.txt","r");

        printf("Enter username & password\n");
        scanf("%s%s",username,password);
        while(!feof(fstudentpassword))
        {
            if(i==0)
        {
            fscanf(fstudentpassword,"%s",Stud.username);
        }
        else
        {
            fscanf(fstudentpassword,"%s",Stud.password);
        }
        i++;
        }
         if(strcmp(username,Stud.username)==0 && strcmp(password,Stud.password)==0)
    {
        printf("Login successful!!!!!!!!!\n\n");
        return Studentsprofile2();
    }
    else
    {
        printf("Error! Please try again\n");
        return Studentsprofile1();
    }
    fclose(fstudentpassword);
    return main();
}
int Studentsprofile2()
{
    char id[100];
    int j,i=0;
    fstudent=fopen("Student info.txt","r");
    printf("Enter id\n");
     scanf("%s",id);
        while(!feof(fstudent))
        {
            fscanf(fstudent,"%s",username);
           if(strcmp(id,username)==0)
            {
                i=((i/4)*4)+1;
                for(j=i;j<=i+3;j++)
                {
                    fgets(username,100,fstudent);
                    printf("%s",username);
                }
                exit(1);
            }
            i++;
        }
        fclose(fstudent);
    }
int Teacher()
{
    int i,n;
    printf("Enter the number of teacher u want to add\n");
    scanf("%d",&n);
   fteacher=(fopen("Teacher info.txt","a"));
   for(i=1;i<=n;i++)
   {
       printf("Enter Name,Dept,Designation\n");
       scanf("%s%s%s",Tec.name,Tec.dept,Tec.designation);
       fprintf(fteacher,"%s\n%s\n%s\n",Tec.name,Tec.dept,Tec.designation);
   }
   fclose(fteacher);
}
int Teachersprofile1()
{
        char id[100];
        int i=0;
        fteacherpassword=fopen("Teacher password.txt","r");

        printf("Enter username & password\n");
        scanf("%s%s",username,password);
        while(!feof(fteacherpassword))
        {
            if(i==0)
        {
            fscanf(fteacherpassword,"%s",Tec.username);
        }
        else
        {
            fscanf(fteacherpassword,"%s",Tec.password);
        }
        i++;
        }
         if(strcmp(username,Tec.username)==0 && strcmp(password,Tec.password)==0)
    {
        printf("Login successful!!!!!!!!!\n\n");
        return Teachersprofile2();
    }
    else
    {
        printf("Error! Please try again\n");
        return Teachersprofile1();
    }
    fclose(fteacherpassword);
}
int Admin()
{
        int j,i=0;
        fadmin=fopen("admin info.txt","r");
        printf("Enter username & password\n");
        scanf("%s%s",username,password);
        while(!feof(fadmin))
        {
            if(i==0)
        {
            fscanf(fadmin,"%s",Adm.username);
        }
        else
        {
            fscanf(fadmin,"%s",Adm.password);
        }
        i++;
        }
         if(strcmp(username,Adm.username)==0 && strcmp(password,Adm.password)==0)
    {
        printf("Login successful\n");
        printf("Enter 1 to change passwords\nEnter 2 to add teachers\nEnter 3 to view teachers profile\nEnter 4 to view students profile\nEnter 0 to exit\n");
        scanf("%d",&j);
        if(j==1)
        {
            return Adminpassword();
        }
        else if(j==2)
        {
            return Teacher();
        }
        else if(j==3)
        {
            return Teachersprofile3();
        }
        else if(j==4)
        {
            return Studentsprofile2();
        }
        else if(j==0)
        {
            return exit1();
        }
    else
    {
        printf("Error! Please try again\n");
        return Admin();
    }
    }
    fclose(fadmin);
}
int Adminpassword()
{
    int i;
    printf("Enter 1 to change Admin Password\nEnter 2 to change Teacher password\nEnter 3 to change Student password\n");
    scanf("%d",&i);
    if(i==1)
    {
         printf("Enter username & password\n");
         fadmin=fopen("admin info.txt","w");
         scanf("%s%s",Adm.username,Adm.password);
         fprintf(fadmin,"%s\n%s\n",Adm.username,Adm.password);
         fclose(fadmin);
    }
    else if(i==2)
    {
         printf("Enter username & password\n");
         fteacherpassword=fopen("Teacher password.txt","w");
         scanf("%s%s",Tec.username,Tec.password);
         fprintf(fteacherpassword,"%s\n%s\n",Tec.username,Tec.password);
         fclose(fteacherpassword);
    }
     else if(i==3)
    {
         printf("Enter username & password\n");
         fstudentpassword=fopen("Student password.txt","w");
         scanf("%s%s",Stud.username,Stud.password);
         fprintf(fstudentpassword,"%s\n%s\n",Stud.username,Stud.password);
         fclose(fstudentpassword);
    }
    else
    {
        return Admin();
    }

}
int Teachersprofile3()
{
    char name[100];
    int j,i=0;
    fteacher=fopen("Teacher info.txt","r");
    printf("Enter name\n");
     scanf("%s",name);
        while(!feof(fteacher))
        {
            fscanf(fteacher,"%s",username);
           if(strcmp(name,username)==0)
            {
                i=((i/4)*4)+1;
                for(j=i;j<=i+2;j++)
                {
                    fgets(username,100,fteacher);
                    printf("%s",username);
                }
                exit(1);
            }
            i++;
        }
        fclose(fteacher);
    }
int Teachersprofile2()
{
    int i;
    printf("Enter 1 to view profile\nEnter 2 to add student\nEnter 3 to view student profile\nEnter 0 to exit\n");
    scanf("%d",&i);
    if(i==1)
    {
        return Teachersprofile3();
    }
    else if(i==2)
    {
        return Student();
    }
    else if(i==3)
    {
        return Studentsprofile2();
    }
    else if(i==0)
    {
        return exit1();
    }
    else
    {
        return Teachersprofile2();
    }
}
int exit1()
{
    return 0;
}

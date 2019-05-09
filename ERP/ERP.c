#include<stdio.h>
#include<string.h>
#include<stdlib.h>
int admin();
int admin2();
int adminpassword();
int cus();
int cus1();
int cus2();
int sony();
FILE *fadmin;
FILE *fsony;
FILE *fsonyprice;
char username[100];
char password[100];
char price[100];
char name[100];
int price2;
int main()
{
    int adm,customer,n;
    printf("Enter 1 for Admin\nEnter 2 for customer\n");
    scanf("%d",&n);
    if(n==1)
    {
        adm=admin();
    }
    else if(n==2)
    {
        customer=cus1();
    }
    else
    {
        printf("Please try again\n");
        return main();
    }
}
int admin()
{
        char user[100];
        char pass[100];
        int i=0;
        fadmin=fopen("Adminpassword.txt","r");
        printf("Enter username & password\n");
        scanf("%s%s",user,pass);
        while(!feof(fadmin))
        {
            if(i==0)
        {
            fscanf(fadmin,"%s",username);
        }
        else
        {
            fscanf(fadmin,"%s",password);
        }
        i++;
        }
        if(strcmp(user,username)==0 && strcmp(pass,password)==0)
        {
            printf("Login successful!!!!!!!");
            return admin2();
        }
        else
        {
            printf("Try again!!!!!!\n");
            return admin();
        }
        fclose(fadmin);
}
int adminpassword()
{
    fadmin=fopen("Adminpassword.txt","w");
    printf("Enter Username & Password\n");
    scanf("%s%s",username,password);
    fprintf(fadmin,"%s\n%s\n",username,password);
    fclose(fadmin);
    return admin2();
}
int sony()
{
    int i,n;
    printf("Enter the number of model u want to add\n");
    scanf("%d",&n);
    fsony=fopen("sony.txt","a");
    fsonyprice=fopen("sonyprice.txt","a");
    for(i=1;i<=n;i++)
    {
        printf("Enter model name & price\n");
        scanf("%s%d",name,&price2);
        fprintf(fsony,"\n%s",name);
        fprintf(fsonyprice,"\n%d",price2);
    }
    fclose(fsony);
    fclose(fsonyprice);
    return admin2();
}
int cus()
{
    int i=0;
    fsony=fopen("sony.txt","r");
    fsonyprice=fopen("sonyprice.txt","r");
    printf("Serial no\tModel name\t\tPrice\n");
    while(!feof(fsony) && !feof(fsonyprice))
    {
        i++;
        fscanf(fsony,"%s",name);
        fscanf(fsonyprice,"%d",&price2);
        printf("%d\t\tSony Xperia %s\t\t%dtk\n",i,name,price2);
    }
    fclose(fsony);
    fclose(fsonyprice);
    return admin2();
}
int cus1()
{
    int i=0;
    fsony=fopen("sony.txt","r");
    fsonyprice=fopen("sonyprice.txt","r");
    printf("Serial no\tModel name\t\tPrice\n");
    while(!feof(fsony) && !feof(fsonyprice))
    {
        i++;
        fscanf(fsony,"%s",name);
        fscanf(fsonyprice,"%d",&price2);
        printf("%d\t\tSony Xperia %s\t\t%dtk\n",i,name,price2);
    }
    fclose(fsony);
    fclose(fsonyprice);
    return cus2();
}
int cus2()
{
     int j,n,f,i=0,total=0;

    printf("Enter the number of product u want to buy\n");
    scanf("%d",&n);
    for(j=1;j<=n;j++)
    {
        i=0;
         fsony=fopen("sony.txt","r");
        fsonyprice=fopen("sonyprice.txt","r");
        printf("\nEnter serial no of the product\n");
        scanf("%d",&f);
        while(!feof(fsony) && !feof(fsonyprice))
        {
            i++;
            fscanf(fsony,"%s",name);
            fscanf(fsonyprice,"%d",&price2);
            if(i==f)
            {
                 printf("Model name is Sony Xperia %s & price is %dtk\n",name,price2);
                 break;
            }

        }
        total=total+price2;
    }
    printf("\n\nTotal cost is %dtk\n",total);
    fclose(fsony);
    fclose(fsonyprice);
}
int admin2()
{
            int f;
            printf("\n\nEnter 1 for view product list\nEnter 2 for add product\nEnter 3 for change password\nEnter 0 for exit\n");
            scanf("%d",&f);
            if(f==1)
            {
                return cus();
            }
            else if(f==2)
            {
                return sony();
            }
            else if(f==3)
            {
                return adminpassword();
            }
            else if(f==0)
            {
                exit;
            }
            else
            {
                printf("Invalid input!!!!!!\n");
                return admin2();
            }
}

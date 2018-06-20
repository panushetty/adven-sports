#include<stdio.h>


void main()

{

int ch;

char c;

FILE *fp;

printf("1.Read\n2.Write\n3.Append\n4.Exit");

printf("Enter your choice");

scanf("%d",&ch);



switch(ch)

{

case 1:

fp=fopen("abc.txt","r");

printf("Text is");

do

{

c=getc(fp);

putchar(c);

}
while(c!=EOF);

fclose(fp);


break;


case 2:


fp=fopen("abc.txt","w");

printf("Enter text to write");

do
{
putc(c,fp);

scanf("%c",&c);

}
while(c!='$');

fclose(fp);

break;


case 3:


fp=fopen("abc.txt","a");

printf("Enter text to append");

do
{
putc(c,fp);
scanf("%c",&c);

}while(c!='$');

fclose(fp);

break;
case 4:
break;

}


}


Output



/*



1.Read

2.Write

3.Append

4.Exit
Enter your choice1

Text is
 pranay
�
[user@localhost Desktop]$ ./a.out 

1.Read

2.Write

3.Append

4.Exit
Enter your choice2

Enter text to write
hello my name is pranay
$

[user@localhost Desktop]$ ./a.out 

1.Read

2.Write

3.Append

4.Exit
Enter your choice1

Text is
hello my name is pranay

[user@localhost Desktop]$ gcc file.c

[user@localhost Desktop]$ ./a.out 

1.Read

2.Write

3.Append

4.Exit
Enter your choice3

Enter text to appendhello boys
$
[user@localhost Desktop]$ ./a.out 

1.Read

2.Write

3.Append

4.Exit
Enter your choice3

Enter text to appendU
$

[user@localhost Desktop]$ ./a.out 

1.Read

2.Write

3.Append

4.Exit
Enter your choice1

Text is
hello my name is pranay

hello boys
U



 */

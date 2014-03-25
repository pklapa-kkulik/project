#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int a=0, b=0, c=0;
float d=0, x1r=0, x2r=0, x1u=0, x2u=0;

int main(int argc, char *argv[])
{
    printf("Podaj a: ");
    scanf("%d",&a);
	printf("Podaj b: ");
    scanf("%d",&b);
	printf("Podaj c: ");
    scanf("%d",&c);

    if (a!=0)
    {
		if ((a == 1) && (b == 1) && (c == 1))
		{
			printf("Postac rownania: x*x+x+1=0\n");
		}
		else if ((a == -1) && (b == -1) && (c == -1))
		{
			printf("Postac rownania: -x*x-x-1=0\n");
		}
		else if ((a == 1) && (b == -1) && (c == 1))
		{
			printf("Postac rownania: x*x-x+1=0\n");
		}
		else if ((a == -1) && (b == 1) && (c == -1))
		{
			printf("Postac rownania: -x*x+x-1=0\n");
		}
		else if ((a == 1) && (b == 0) && (c == 0))
		{
			printf("Postac rownania: x*x=0\n");
		}
		else if ((a == -1) && (b == 0) && (c == 0))
		{
			printf("Postac rownania: -x*x=0\n");
		}
		else if ((a == 1) && (b == 0) && (c == 1))
		{
			printf("Postac rownania: x*x+1=0\n");
		}
		else if ((a == -1) && (b == 0) && (c == -1))
		{
			printf("Postac rownania: -x*x-1=0\n");
		}
		else if ((a == -1) && (b == 0) && (c == 1))
		{
			printf("Postac rownania: -x*x+1=0\n");
		}
		else if ((a == 1) && (b == 0) && (c == -1))
		{
			printf("Postac rownania: x*x-1=0\n");
		}
		else if ((a == 1) && (b == 0) && (c > 1))
		{
			printf("Postac rownania: x*x+%d=0\n",c);
		}
		else if ((a == 1) && (b == 0) && (c < 0))
		{
			printf("Postac rownania: x*x%d=0\n",c);
		}
		else if ((a == -1) && (b == 0) && (c > 1))
		{
			printf("Postac rownania: -x*x+%d=0\n",c);
		}
		else if ((a == -1) && (b == 0) && (c < 0))
		{
			printf("Postac rownania: -x*x%d=0\n",c);
		}
		else if ((a > 1) && (b == 0) && (c == 0))
		{
			printf("Postac rownania: %dx*x=0\n",a);
		}
		else if ((a < 0) && (b == 0) && (c == 0))
		{
			printf("Postac rownania: %dx*x=0\n",a);
		}
		else if ((a > 1) && (b == 0) && (c > 1))
		{
			printf("Postac rownania: %dx*x+%d=0\n",a, c);
		}
		else if ((a < 1) && (b == 0) && (c < 0))
		{
			printf("Postac rownania: %dx*x%d=0\n",a, c);
		}
		else if ((a > 1) && (b == 0) && (c < 0))
		{
			printf("Postac rownania: %dx*x%d=0\n",a, c);
		}
		else if ((a < 0) && (b == 0) && (c > 1))
		{
			printf("Postac rownania: %dx*x+%d=0\n",a, c);
		}
		else if ((a == 1) && (b == 1) && (c > 1))
		{
			printf("Postac rownania: x*x+x+%d=0\n",c);
		}
		else if ((a == 1) && (b == 1) && (c < 0))
		{
			printf("Postac rownania: x*x+x%d=0\n",c);
		}
		else if ((a == -1) && (b == -1) && (c > 1))
		{
			printf("Postac rownania: -x*x-x+%d=0\n",c);
		}
		else if ((a == -1) && (b == -1) && (c < 0))
		{
			printf("Postac rownania: -x*x-x%d=0\n",c);
		}
		else if ((a == 1) && (b == -1) && (c > 1))
		{
			printf("Postac rownania: x*x-x+%d=0\n",c);
		}
		else if ((a == 1) && (b == -1) && (c < 0))
		{
			printf("Postac rownania: x*x-x%d=0\n",c);
		}
		else if ((a == -1) && (b == 1) && (c > 1))
		{
			printf("Postac rownania: -x*x+x+%d=0\n",c);
		}
		else if ((a == -1) && (b == 1) && (c < 0))
		{
			printf("Postac rownania: -x*x+x%d=0\n",c);
		}
		else if ((a == 1) && (b > 1) && (c > 1))
		{
			printf("Postac rownania: x*x+%dx+%d=0\n",b, c);
		}
		else if ((a == 1) && (b < 0) && (c < 0))
		{
			printf("Postac rownania: x*x%dx%d=0\n",b, c);
		}
		else if ((a == 1) && (b > 1) && (c < 0))
		{
			printf("Postac rownania: x*x+%dx%d=0\n",b, c);
		}
		else if ((a == 1) && (b < 0) && (c > 1))
		{
			printf("Postac rownania: x*x%dx+%d=0\n",b, c);
		}
		else if ((a > 1) && (b > 1) && (c > 1))
		{
			printf("Postac rownania: %dx*x+%dx+%d=0\n",a, b, c);
		}
		else if ((a < 0) && (b < 0) && (c < 0))
		{
			printf("Postac rownania: %dx*x%dx%d=0\n",a, b, c);
		}
		else if ((a > 1) && (b > 1) && (c < 0))
		{
			printf("Postac rownania: %dx*x+%dx%d=0\n",a, b, c);
		}
		else if ((a < 0) && (b < 0) && (c > 1))
		{
			printf("Postac rownania: %dx*x%dx+%d=0\n",a, b, c);
		}
		else if ((a > 1) && (b > 1) && (c < 0))
		{
			printf("Postac rownania: %dx*x+%dx%d=0\n",a, b, c);
		}
		else if ((a > 1) && (b < 0) && (c < 0))
		{
			printf("Postac rownania: %dx*x%dx%d=0\n",a, b, c);
		}
		else if ((a < 0) && (b > 1) && (c > 1))
		{
			printf("Postac rownania: %dx*x+%dx+%d=0\n",a, b, c);
		}
		else if ((a > 1) && (b < 0) && (c > 1))
		{
			printf("Postac rownania: %dx*x%dx+%d=0\n",a, b, c);
		}
		else if ((a < 0) && (b > 1) && (c < 0))
		{
			printf("Postac rownania: %dx*x+%dx%d=0\n",a, b, c);
		}
		else if ((a > 1) && (b > 1) && (c == 0))
		{
			printf("Postac rownania: %dx*x+%dx=0\n",a, b);
		}
		else if ((a < 0) && (b < 0) && (c == 0))
		{
			printf("Postac rownania: %dx*x%dx=0\n",a, b);
		}
		else if ((a > 1) && (b < 0) && (c == 0))
		{
			printf("Postac rownania: %dx*x%dx=0\n",a, b);
		}
		else if ((a < 0) && (b > 1) && (c == 0))
		{
			printf("Postac rownania: %dx*x+%dx=0\n",a, b);
		}

	d=(b*b)-(4*a*c);
	printf("Delta=%.3f\n",d);
             
             if (d>0)
             {
                     x1r=(float)(-b-sqrt(d))/(2*a);
                     x2r=(float)(-b+sqrt(d))/(2*a);
                     printf("Pierwiastki rownania to x1r=%.3f i x2r=%.3f\n", x1r, x2r);
             }
             else if (d==0)
             {
                      x1r=(float)-b/(2*a);
                      printf("Pierwiastek rownania to x1r=%.3f\n",x1r);
             }
             else if (d<0)
             {
                  x1r=(float)-b/(2*a);
                  x2r=x1r;
                  x1u=(float)-sqrt(fabs(d))/(2*a);
                  x2u=-x1u;
                  printf("Pierwiastki rownania to %.3f%+.3f*i oraz %.3f%+.3f*i\n", x1r, x1u, x2r, x2u);
             }
    }
    else if (a==0)
    {
         if (b!=0)
         {
              x1r=(float)-c/b;
			  if (b==1) printf("Postac rownania to x%+d=0\nPierwiastek rownania to x1r=%.3f\n",c, x1r);
			  else if (b==-1) printf("Postac rownania to -x%d=0\nPierwiastek rownania to x1r=%.3f\n",c, x1r);
			  else if (b>1) printf("Postac rownania to %dx%d=0\nPierwiastek rownania to x1r=%.3f\n",b ,c, x1r);
			  else if (b<0) printf("Postac rownania to %dx%d=0\nPierwiastek rownania to x1r=%.3f\n",b ,c, x1r);
              
         }
         else if (b==0 && c!=0)
         {
			  printf("Postac rownania to %d=0\nRownanie sprzeczne\n",c);
         }
         else if (b==0 && c==0)
         {
              printf("Postac rownania to 0=0\nRownanie nieoznaczone\n");
         }
    }
    
  printf("\n");
  return 0;
}
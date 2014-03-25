 #include <sys/types.h>
 #include <sys/stat.h>
 #include <fcntl.h>
 #include <unistd.h>
 #include <pwd.h>
 #include <utmp.h>
 #include <stdio.h>
 #include <stdlib.h>
int main ()
{
int deskryptor;
deskryptor=open("/var/run/utmp", O_RDONLY);

struct utmp u;
int id;
if (deskryptor >= 0)
{
   while (read(deskryptor,&u,sizeof(u)))
   {
	if (u.ut_type == USER_PROCESS)
	{
	    id=getpwnam(u.ut_user)->pw_uid;
	    printf("%s, %d\n",u.ut_user,id);
	}
   }
  close (deskryptor);
}
else
printf ("błąd odczytu pliku. \n");

return 0;
}

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/types.h>
#include <fcntl.h>
#include <utmp.h>
#include <grp.h>
#include <pwd.h>

	struct passwd *username;
	struct group *groupname;
	struct utmp u;

int main(int argc, int **argv[])
{
	int uid=0, gid=0, uchwyt=0;

	uid=getuid();
	gid=getgid();
	username=getpwuid(uid);
	groupname=getgrgid(gid);

	uchwyt=open("/var/run/utmp", O_RDONLY);

	if (uchwyt==-1)
	{
		printf("Nie udalo sie otworzyc pliku\n");
	}
	else
	{
		while (read(uchwyt,&u,sizeof(struct utmp)))
		{
			if (u.ut_type!=USER_PROCESS) continue;
			username=getpwnam(u.ut_user);
			printf("\n");
			printf("%d %s %d %s",uid, username->pw_name, gid, groupname->gr_name);
			printf("\n");
		}
	}
	
return 0;
}

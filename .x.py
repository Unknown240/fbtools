import os, sys


print ("\033[1;31m         █── ▄▀▄ ▄▀▀─ ▀ █▄─█ ")
print ("\033[1;31m         █─▄ █─█ █─▀▌ █ █─▀█ ")
print ("\033[1;31;1m         ▀▀▀ ─▀─ ▀▀▀─ ▀ ▀──▀")
print ("\033[1;36m           FACEBOOK - TOOLS ")
print ("\033[1;36m        Authors : Clvnfrlnsyh ")
print ("\033[1;30m   ")
username = '000'
password = '000'

def restart():
	ngulang = sys.executable
	os.execl(ngulang, ngulang, *sys.argv)

def main():
	uname = raw_input("username : ")
	if uname == username:
		pwd = raw_input("password : ")

		if pwd == password:
			print "\n\033[1;36m[ √ ] Login Success ...", 
			sys.exit()

		else:
			print "\n\033[1;31m[ X ] The password you entered is incorrect.\033[00m"
			print "Back To Login\n"
			restart()

	else:
		print "\n\033[1;31m[ X ] The username you entered is incorrect.\033[00m"
		print "Back To Login\n"
		restart()

try:
	main()
except KeyboardInterrupt:
	os.system('clear')
	restart()


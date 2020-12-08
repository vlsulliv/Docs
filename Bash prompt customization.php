### Bash prompt customization

After user logins into the system, user environment variables are initialized from various files:

/etc/profile or /etc/bashrc (system wide)
~/.bash_profile , ~/.bash_login , ~/.profile , ~/.bashrc or ~/.bash_logout (user)



# Stop after sending count ECHO_REQUEST packets #
alias ping='ping -c 5'
# Do not wait interval 1 second, go fast #
alias fastping='ping -c 100 -s.2'


PS1="\033[01;31mBASH IN RED\033[00m: "

PROMPT MESSAGE
SULVINCE@\t:\w\\\n$

=======================
\033[01;31m \t\ 033[00m
@
\e[94m SULVINCE \e[0m[]
:\w\
\\n$
=======================

INITIALIZE PROMPT
PS1='INSERT PROMPT MESSAGE '

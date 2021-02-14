echo "Hi"
sleep 1

echo "This is a os_command Injection CTF by H1DD3N_R47"
sleep 5

apt install php
clear
echo "CTF server Starting..."
sleep 2
echo "CTF server Started On (http://localhost:8888/os_commandi.php)"
echo '''CTF OS COMMAND Injection'''
php -S localhost:8888

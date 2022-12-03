cd /var/www/

rm -rf html

mkdir html

cd html

git clone https://github.com/TsugawaNaoki0/quake.git

mv quake/* ./



chmod 666 data/quake_data_test.txt

chmod 666 data/quake_data.txt



while true; do python3 quake.py; sleep 3s; done

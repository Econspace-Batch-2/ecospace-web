cd ~/laravel/

git pull origin main
# Cleaning up the old build
rm -fr public

npm run build

cd ~/public_html/
rm -fr build
cp -r ~/laravel/public/build .

cd ~/www/
rm -fr build
cp -r ~/laravel/public/build .
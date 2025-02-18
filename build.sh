clear
cd ~/laravel/

git restore .
git pull origin main
git pull origin staging
# Cleaning up the old build
rm -fr public

npm run build

cd ~/public_html/
rm -fr build
cp -r ~/laravel/public/build .

cd ~/www/
rm -fr build
cp -r ~/laravel/public/build .

cd ~/laravel/
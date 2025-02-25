npm run build

ssh -i "~/.ssh/ecospace.pem" ubuntu@ec2-3-27-1-51.ap-southeast-2.compute.amazonaws.com 
sudo rm -fr /build/

scp -i "~/.ssh/ecospace.pem" -r ./public/build/ ubuntu@ec2-3-27-1-51.ap-southeast-2.compute.amazonaws.com:~

ssh -i "~/.ssh/ecospace.pem" ubuntu@ec2-3-27-1-51.ap-southeast-2.compute.amazonaws.com 

sudo rm -fr ~/ecospace-web/public/build/ 

sudo mv ~/build/ ~/ecospace-web/public/
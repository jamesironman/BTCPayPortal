# BTCPayPortal
A short and sweet Bitcoin, Litcoin, and Dogecoin deposit page.

#What This Is
It's a way to process bitcoin payments with PHP, GMP, CURL, and MCRYPT. I would first like to say that the block-io.php file is from Block Io's github page at https://github.com/BlockIo/block_io-php/blob/master/lib/block_io.php. It seemed really complicated to use someone else's payment processing system, so I built the most simple one I could think up. It takes about 2 minutes to set up and can built into practially anything. Like, there's a whole section in the code where you can inject your code for if what happens if the transaction goes through and what happens if it doesn't.

#Prerequisites for BTCPayPortal
You need to have PHP, GMP, CURL, and MCRYPT installed on a webserver. You also need to make an account on https://block.io/. ~~To test the code I used https://www.000webhost.com/ and they proved to have everything I needed.~~ You could also run it inside an apache server on your own computer. ~~It's really up to you, but if you don't know where to go, go https://www.000webhost.com/.~~ DO NOT USE 000webhost! Run it yourself!

#How to Get Started
First, download the zip and open up the "Code" folder. Next, open up the authentication.php file with your favorite text editor. I suggest http://brackets.io/ because it is web-design based and good for editing web type things. Next, change the API key, secret pin, and currency fields to fit your needs. Then, feel free to change anything in the index file. To end it, drop all three files in your root HTML folder on your server. Thats it.

#Like it?
If you do feel free to donate to: 12cQ1uifwPDBWQGQy6trBWzMskMrULEWtS Thank you!


# Realtime connectivity with Ratchet PHP

You will first need to install the ØMQ (2.1.x or higher recommended)
http://www.zeromq.org/intro:get-the-software

Building from Github
git clone git://github.com/mkoppanen/php-zmq.git
and cd to the directory:

$ cd php-zmq
Next, run phpize to generate configure script and run the configure command:

phpize && ./configure

Tip: If you are using php installed from your distribution's package manager the 'phpize' command is usually in php-dev or php-devel package
Finally install the package by running:

$ make && make install
You may have to run this last commands with sudo.
Finally add the following line to your php.ini:
extension=zmq.so
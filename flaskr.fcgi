#!/usr/bin/python
from flup.server.fcgi import WSGIServer
from flaskr import app as application

if __name__ == '__main__':
    WSGIServer(app).run()
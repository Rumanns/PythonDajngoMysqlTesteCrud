#!/usr/bin/scl enable python27 -- /home/CONTA/.virtualenv/bin/python
 
import os, sys
 
from flup.server.fcgi import WSGIServer
from django.core.wsgi import get_wsgi_application
 
sys.path.insert(0, "/home2/rumanns39/project")
os.environ['DJANGO_SETTINGS_MODULE'] = "project.settings"
 
WSGIServer(get_wsgi_application()).run()
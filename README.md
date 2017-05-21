# PStatus
Ping of internal servers and port check of related services with a Web front end.

# Requirements
Web server running PHP (7 is tested.. 5 should work fine)

MYSQL Database (See pstatus.sql for structure)

# WIP

21.05.17 - Admin page : So far you can add a server, smart device and a service.. the rest needs to be done in SQL at the moment.
Need to add a row to the uptime table when a server is added.

# Planned
* Run in backgroud to build stats of uptime
* Delete Devices etc..
* Edit Devices etc..


# Done
* Add auto refresh rate
* Add services for each parent server
* Add Smart device controls

# Screenshot
![Alt text](/../screenshots/pstatus.png?raw=true "Main Screen")
![Alt text](/../screenshots/pstatus2.png?raw=true "Service Screen")

# Credit 
Original idea sparked by https://gist.github.com/k0nsl/733955a3c3093832de49

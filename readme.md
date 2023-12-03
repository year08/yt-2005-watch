# yt-2005-watch  
A YouTube frontend written with the YouTubeI api, otherwise more commonly known as the InnerTube API. 

This is a continued version.

## Requirements
- Webserver (preferably, Apache)
- PHP ≥ 7.2.5 (Minimum Twig requirement)
- cURL extension for PHP (included in most sharing hosting providers)

## Setup  
1. Go to your webserver's documentroot, then do `git clone https://codeberg.org/lime360/yt-2005-watch` on the directory.  
2. You're done! If you wanna configure stuff, edit `includes/config.inc.php`, where the values are clearly marked in the comments.  

## Directory structure
- `/includes/`: Contains include files for the PHP code
    - `/includes/html/`: Contains HTML files used for includes (no results, header etc)
- `/templates/`: HTML templates for Twig
- `/yts/`: Contains static files (YouTube Static)


## License  
Apache 2.0

---

### Publicly maintained instances
No instances yet.
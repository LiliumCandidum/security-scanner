## Prerequisites
- Python3, "requests", "webdriver_manager" and "selenium" modules
- Docker
- Browser Chrome
## Execution
Run the following commands inside the "xss-injection" folder containing the Dockerfile:
1. docker build -t security-scanner . 
2. docker run -p 80:80 -d security-scanner
3. python xss-injection-vulnerability.py
   - The script will ask the host, the URLs file name and the payloads file name. Press enter each time to use the default names.
### Urls file structure
METHOD:url_without_domain:param1,param2...
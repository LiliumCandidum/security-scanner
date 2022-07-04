## Prerequisites
- Python3 and "requests" module
- Docker
## Execution
Run the following commands inside the folder containing the Dockerfile:
1. docker build -t security-scanner . 
2. docker run -p 80:80 -d security-scanner
3. python command-injection-vulnerability.py
   - The script will ask the host, the URLs file name and the payloads file name. Press enter each time to use the default names.
### Urls file structure
METHOD:url_without_domain:param1,param2...
from urllib.request import urlopen
from bs4 import BeautifulSoup


html = urlopen("https://www.aljazeera.com")
print(html)
data = html.read()
print(data)
from urllib.request import urlopen
from bs4 import BeautifulSoup

# Global Varibale

url_aj 	  = "https://www.aljazeera.com"
file_path = "html/aj.html"


class News_Scraper:
	__url  = ''
	__data = ''
	__wlog = None
	__soup = None

	def __init__(self, url, wlog):
		self.__url = url
		self.__wlog = wlog

	def retrieve_web_page(self):
		try:
			html = urlopen(self.__url)
		except Exception as e:
			print(e)
			self.__wlog.report(e)
		else:
			self.__data = html.read()
			if len(self.__data) > 0:
				print("Retrieved Successfully")

	def write_webpage_as_html(self, file_path=file_path, data=''):
		try:
			with open(file_path, 'wb') as f_obj:
				if data:
					f_obj.write(data)
				else:
					f_obj.write(self.__data)
		except Exception as e:
			print(e)
			self.__wlog.report(str(e))


	def read_webpage_from_html(self, file_path=file_path):
		try:
			with open(file_path) as f_obj:
				self.__data = f_obj.read()
		except Exception as e:
			print(e)
			self.__wlog.report(str(e))

	def change_url(self, url):
		self.__url = url

	def print_data(self):
		print(self.__data)

	def convert_data_to_bs4(self):
		self.__soup = BeautifulSoup(self.__data, "html.parser")

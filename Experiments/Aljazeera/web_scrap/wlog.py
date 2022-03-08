import logging 

def set_custom_log_info(file):
	logging.basicConfig(filename=file , level=logging.INFO)

def report(e:Exception):
	logging.exception(str(e))
import requests
userdata = {"value": 1}
resp = requests.post('http://localhost/pythontophp/get_data_from_python.php', params=userdata)

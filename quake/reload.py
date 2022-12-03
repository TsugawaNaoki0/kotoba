from selenium import webdriver
from selenium.webdriver.common.keys import Keys as keys

"""
※注意※
下記コードにて、MacとWindows両方のpathを設定しているので、
お使いのPCに合わせて不要なコードをコメントしてください。(コメントアウト)
"""

# Macの場合 (Chromedriveがこのプログラムを実行している同じ場所にある前提)
driver = webdriver.Chrome(executable_path="./chromedriver") # Windowsの方はこの行をコメントアウト


# windowsの場合 (Cドライブ直下にchromedriver.exeがある前提)
# driver = webdriver.Chrome(executable_path="C:\chromedriver.exe") # Macの方はこの行をコメントアウト


### 1.Webサイトにアクセスする
driver.get("https://aiacademy.jp/")

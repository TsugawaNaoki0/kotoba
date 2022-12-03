import urllib.request, urllib.error
from bs4 import BeautifulSoup
import csv
import MeCab

t = MeCab.Tagger('-O wakati')
# sentence = 'すもももももももものうち'




path = './kotoba.txt'
# path = '/home/natsukiogawa/sample/quake_data.txt'
f = open(path, 'r', encoding='UTF-8')
sentence = f.read()

url = "https://news.yahoo.co.jp/topics/top-picks"

html = urllib.request.urlopen(url)

soup = BeautifulSoup(html, "html.parser")

aaa = soup.select(".newsFeed")
news_tag = soup.select(".newsFeed_item_title") ###


for i in range(len(news_tag)):
    news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_title\">", "").replace("</div>", "")
    # news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_date\">", "").replace("</div>", "")
    print(news_tag[i])

    sentence = news_tag[i]

    ichiran = t.parse(sentence)
    ichiran = list(ichiran)

    aaa = [""]

    num = 0
    for k in range(len(ichiran)):
        for i in range(num, len(ichiran)):
            if (ichiran[i] != " "):
                aaa[k] = str(aaa[k]) + str(ichiran[i])
            else:
                num = i+1
                break
        aaa.append("")

    try:
        for i in range(len(aaa)):
            aaa.remove('\n')
    except ValueError as e:
        num = 0
    try:
        for i in range(len(aaa)):
            aaa.remove('')
            # print(aaa)
    except ValueError as e:
        num = 0

    print(aaa)

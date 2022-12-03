import numpy as np
import matplotlib.pyplot as plt
import sys
# import key_word_box
# import changer
import time
import csv
from email.mime.text import MIMEText
import smtplib



class quake_mail_class():
    def quake_mail(self, quake_news, field):

        # SMTP認証情報
        account = "subaodezhen641@gmail.com"
        # password = "19960701jishin"
        password = "ubqrmyfjgxsojiwg"

        # 送受信先
        to_email = "jinchuanzhishu76@gmail.com"
        from_email = "subaodezhen641@gmail.com"

        # MIMEの作成
        subject = field.upper()
        # message = "地震速報"
        message = quake_news
        msg = MIMEText(message, "html")
        msg["Subject"] = subject
        msg["To"] = to_email
        msg["From"] = from_email

        # メール送信処理
        server = smtplib.SMTP("smtp.gmail.com", 587)
        server.starttls()
        server.login(account, password)
        server.send_message(msg)
        server.quit()


class y_news_class():
    def y_news(self, url):
        import urllib.request, urllib.error
        from bs4 import BeautifulSoup
        import csv

        self.url = url
        # url = "https://kabuoji3.com/stock/6501/2019/"
        # URLを指定する
        html = urllib.request.urlopen(url)
        # URLを開く
        soup = BeautifulSoup(html, "html.parser")
        # BeautifulSoup で開く
        # HTMLからニュース一覧に使用しているaタグを絞りこんでいく
        aaa = soup.select(".newsFeed")
        news_tag = soup.select(".newsFeed_item_title") ###
        # news_tag = soup.select(".newsFeed_item_date") ###
        # news_tag_2 = soup.select(".newsFeed_item")
        # print (news_tag)

        for i in range(len(news_tag)):
            news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_title\">", "").replace("</div>", "")
            # news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_date\">", "").replace("</div>", "")
            # print(news_tag[i])
        return news_tag



if __name__ == '__main__':
    import urllib.request, urllib.error

    # print("ENTER [x] or [X]")
    # z = input()
    start = time.time()

    # if (z == "x" or z == "X"):
    news_num = 3        ### yahoo の記事のタブの数(ここが変わっている場合がある)
    # news_num = 3        ### yahoo の記事のタブの数(ここが変わっている場合がある)
    field = sys.argv[1]
    ppp = key_word_box.key_words_box_class()
    key_words = ppp.key_words_box(field)
    # print(key_words)

    aaa = changer.changer_class()
    bbb = aaa.changer(key_words)
    key_words = []


    key_words = eval(bbb)



    hits = []
    news_books = [[] for j in range(news_num)]
    # theme = ["top-picks", "domestic", "world", "business", "entertainment", "sports", "it", "science", "local"]
    theme = ["top-picks"]
    print("<br><br>")
    print("<br><br>")
    print("<br><br>")
    print("<div align='center'>")
    print("[" + field.upper() + "]" + "<br><br>")

    # """
    for l in range(len(theme)):
        # print("[" + theme[l] + "]" + "<br><br>")
        print()
        for k in range(1, news_num+1):
            # print(theme[l])
            url_url = "https://news.yahoo.co.jp/topics/" + theme[l] + "?page=" + str(k)   ### 最後尾はページ番号


            try:
                html = urllib.request.urlopen(url_url)
                # print(url_url)

                yyy = y_news_class()
                y_news_data = yyy.y_news(url_url)

                news_books[k-1] = y_news_data

            except:
                break


        for n in range(len(key_words)):
            for h in range(len(news_books)):
                for g in range(len(news_books[h])):
                    ccc = news_books[h][g]
                        # print(news_books[h][g])
                    ddd = ccc.find(key_words[n])
                    if (ddd > -1) :
                        # print(ccc[ddd])
                        hits.append(ccc)


    # print(type(hits[0]))
    # f = open('out.csv', 'w')
    # # data = ['あいうえお','12345']
    # writer = csv.writer(f)
    # writer.writerow(hits)
    # f.close()
    message = str(hits)
    # print(message)

    ### # aaa= quake_mail_class()
    ### # bbb = aaa.quake_mail(message, field)


    # print(sys.argv[1])
    for t in range(len(hits)):
            print(hits[t] + "<br><br>")
    print("</div>")
    # """
    finish = time.time()
    # print("TIME: " + str(finish - start)

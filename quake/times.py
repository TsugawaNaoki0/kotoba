# message = "〇〇〇〇年〇〇月〇〇日〇〇時〇〇分〇〇秒　〇〇地域　M〇〇　深さ〇〇km　最大震度〇〇"

import requests
import re
import datetime
import urllib.request, urllib.error
import csv
import requests
import feedparser
import os
from email.mime.text import MIMEText
import smtplib
import datetime




t_delta = datetime.timedelta(hours=9)
JST = datetime.timezone(t_delta, 'JST')
now = datetime.datetime.now(JST)

now = str(now)
now = str(now[:4]) + "年" + str(now[5:7]) + "月" + str(now[8:10]) + "日" + str(now[11:13]) + "時" + str(now[14:16]) + "分" + str(now[17:19]) + "秒"

print(now)

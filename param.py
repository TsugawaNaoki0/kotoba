#!/usr/local/bin/python3.4

# 日本語を扱うために必要な設定 --- (*1)
import os, sys, io, cgi
sys.stdin, sys.stdout, sys.etderr =  [
  open(sys.stdin.fileno(),  'r', encoding='UTF-8'),
  open(sys.stdout.fileno(), 'w', encoding='UTF-8'),
  open(sys.stderr.fileno(), 'w', encoding='UTF-8')]

# ヘッダなどを出力 --- (*2)
print("Content-type: text/html; charset=utf-8\r\n\r\n")
print("<html><body><h1>")

# パラメータの値を取得 --- (*3)
form = cgi.FieldStorage()
if ("a" in form) and ("b" in form):
    a = form["a"].value
    b = form["b"].value
    print("a=" + str(a))
    print("<br>")
    print("b=" + str(b))
else:
    print("パラメータがありません。")
print("</h1></body></html>")

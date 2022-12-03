import sys


class address_sort_class():
    def address_sort(self):
        print('<link rel="stylesheet" href="./home.css">')

        # print("<p>あああああああああああああ</p>")
        args = sys.argv
        # print("<p>" + str(args) + "</p>")

        args = list(args)
        del_mail = str(args[1])
        address_list = []

        for i in range(2, len(args)):
            # print(args[i])
            # print("<br>")
            address_list.append(args[i])

        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print("<br>")
        print('<div class="reg_del">')
        num = 0
        for k in range(len(address_list)):
            if(address_list[k] == del_mail):
                num += 1
        if (num == 1):
            print('<p>メールアドレスを削除しました</p>')
        elif(num == 0):
            print('<p>メールアドレスは登録されていません</p>')

        print("</dev>")
        return num

if __name__ == '__main__':
    aaa = address_sort_class()
    bbb = aaa.address_sort()

- insert: them moi ban ghi vao table
    - insert into tenbang(cot 1, cot2,...) values (gtri 1, gtri2)
    0 insert into tenbang set cot1=gtri1,cot2=gtri2,...
- update: chinh sua ban ghi
    - update tenbang set tencot=gtri where
- delete: xoa ban ghi
     - delete from tenbang where

- Su dung PhP ketnoi csdl Mysql de vap ra du lieu
    - cac cach ket noi
        - su dung mysqli OOP  (chi dung dc cho csdl mysql)
        - su dung Mysqli proceduew (chi dung dc cho csdl mysql)
        - su dung PDO (co the ket noi dc 15 loai csdl khac nhau)
    - su dung PDO de ket noi, vao ra dl
        - et noi csdl, tra ve bien ket noi
         $conn = new PDO("mysql: host=localhost; database=tendatabase;", "username","password");
        - mac dinh kieu trinh duyet cac bna ghi
            $conn-> setAttribute(PDO:ATT_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        - Lay du lieu theo kieu unicode
            $conn->exec("set names utf8");
        - truy van full sql, tra ve ket qua bien object
            $result = $conn->query("ful sql");
        - truy van csdl, truyen cac tham so vao chuoi sql
            $query = $conn->prepare("select tenbang from tencot where cot1=:key1 and cot2=:key2");
            $result = query->execute(array("key1"=>gtri, "key2"=>gtri));
        - kay tat ca cac ket qua tra ve
            $kq = $result->fetchAll();
        - lay 1 ban ghi
            $kq = $result->fetch();
        - demm so ban ghi
            $total = $result-> rowCount(); 

- Mo hinh MVC
    - Gom 3 thanh phan: Model, View, Controller
        - Model: chua cac ham de thao tac csdl (nam gan voi csdl nha)
        - Controller: nam giua model vaf view, lay data tuwf model truyen ra view
        - View: hien thi du lieu
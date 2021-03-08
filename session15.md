- Mysql là hệ quản trị csdl sử dụng để lưu trữ dữ liệu
- thao tác csdl bằng phpmyadmin. Url: http://localhost/phpmyadmin
- database dùng để lưu trữ dữ liệu theo gói. Trong database bao gồm các bảng
    - Bảng: 
        - bao gồm các cột, cột sẽ bao gồm nhiều kiểu dữ liệu
            - AI: autoincrement, chức năng: set cột cho khóa chính
            - Khóa chính: thành phần tồn tại duy nhất ở mỗi bản ghi(không được phép có giá trị giống nhau)
            - khóa ngoại: là một cột ở bảng A có kiểu dữ liệu cùng kiểu với khóa chính ở bảng B, dùng để khớp nối các bản ghi giống nhau
            - kiểu dữ liệu:
                - int
                - float
                - text(độ rộng 400)
                - varchar(độ rộng tính bằng byte)
                - date(yyyy-mm-dd)
                - chú ý: kiểu varchar, text, date giá trị phải có dấu nháy bao quanh
                - VD: "hello world"
        - bao gồm các hàng tương ứng với các cột
- truy vấn csdl
    - liệt kê tất cả các cột của bảng
        Select * from tenbang
    - liệt kê từng cột của bảng
        select cot1, cot2 ... from tenbang
    - đặt tên cột hiển thị
        select cot1 as "ten cot 1", cot2 as "ten cot 2" ... from tenbang
    - từ khóa where: lọc các truy vấn theo các điều kiện
        - where tencot sosanh giatri
            - so sanh:
                - lớn hơn: >
                - nhỏ hơn: <
                - lớn hơn hoặc bằng: >=
                - nhỏ hơn hoặc bằng: <=
                - bằng nhau: =
                - khác nhau:<>
            - giatri
                - giatri có thể là số, là chuỗi tương ứng với kiểu dữ liệu của tencot
                - giatri có thể là một mệnh đề truy vấn con
                    - where tencot sosanh (truy vấn con để trả về giatri)
                        VD: # hiển thị hoten, tenphongban, ngaysinh, luong cua nhanvien
                            SELECT hoten,(SELECT tenphongban FROM phongban WHERE phongban.maphongban = nhanvien.maphongban) as "Tên phòng ban", ngaysinh, luong from nhanvien
        - where tencot in (tap gia tri)
        - where tencot not in (tap gia tri)
        - từ khóa like: tìm kiếm chuỗi
            - where tencot like "kytu%" -> bắt đầu bằng ký tự
            - where tencot like "%kytu" -> kết thúc bằng ký tự
            - where tencot like "%kytu%" -> chứa ký tự
        - một số hàm trong Mysql
            - year(thoigian) -> năm
            - month(thoigian) -> tháng
            - day(thoigian) -> ngay
            - now() -> trả về thời gian hiện tại
            - sum(tencot) -> trả về 1 bản ghi là tổng của các hàng
            - avg(tencot) -> trả về 1 bản ghi là giá trị TB của các hàng
            - count(tencot) -> trả về 1 bản ghi là số lượng các hàng
            - min(tencot) -> trả về 1 bản ghi là GTNN
            - max(tencot) -> trả về 1 bản ghi là GTLN
        - group by: nhóm các giá trị chung thành 1 group khi sử dụng các hàm của mysql
            VD: SELECT (SELECT tenphongban FROM phongban 
                WHERE phongban.maphongban = nhanvien.maphongban), avg(luong) FROM nhanvien GROUP BY maphongban
        - order by: sắp xếp các bản ghi
            order by tencot asc -> tăng dần
            order by tencot desc -> giảm dần
        - limit tubanghi, laybaonhieubanghi -> lấy bản ghi
            - bản ghi đầu tien là bản ghi thứ 0
                VD: SELECT * FROM phongban LIMIT 0,3
        - join các bảng:
            - inner join -> khớp nối để hiển thị các thông tin giống nhau giữa cột khóa chính và khóa ngoại
                select tencot from bang1 inner join bang2 on bang1.tencot = bang2.tencot
                ...
                    VD: SELECT * from nhanvien inner join phongban on nhanvien.maphongban = phongban.maphongban
            - left join -> khớp nối 2 bảng, ưu tiên bảng bên trái trước rồi mới kết nối
                select tencot from bang1 left join bang2 on bang1.tencot = bang2.tencot
                ...
            - right join -> khớp nối 2 bảng, ưu tiên bảng bên phải trước rồi mới kết nối
                select tencot from bang1 right join bang2 on bang1.tencot = bang2.tencot
                ...
    - insert
    - update
    - delete
    - vào ra dữ liệu sử dụng php kết nối Mysql